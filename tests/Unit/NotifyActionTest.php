<?php

declare(strict_types=1);

use Illuminate\Session\Store;
use Mckenziearts\Notify\Action\NotifyAction;
use Mckenziearts\Notify\Enums\NotificationModel;
use Mckenziearts\Notify\Exceptions\InvalidNotificationException;
use Mckenziearts\Notify\Notify;

/**
 * @var Tests\TestCase $this
 */
beforeEach(function (): void {
    $this->session = Mockery::mock(Store::class);
    $this->notify = new Notify($this->session);
});

afterEach(function (): void {
    Mockery::close();
});

it('can create action using make method', function (): void {
    $action = NotifyAction::make();

    expect($action)->toBeInstanceOf(NotifyAction::class);
});

it('can set label', function (): void {
    $action = NotifyAction::make()->label('Click me');

    expect($action->getLabel())->toBe('Click me');
});

it('supports method chaining', function (): void {
    $result = NotifyAction::make()
        ->label('Test')
        ->url('https://example.com');

    expect($result)->toBeInstanceOf(NotifyAction::class);
});

it('can set url for navigation', function (): void {
    $action = NotifyAction::make()
        ->label('View')
        ->url('https://example.com');

    expect($action->getUrl())->toBe('https://example.com')
        ->and($action->hasUrl())->toBeTrue();
});

it('can open url in new tab', function (): void {
    $action = NotifyAction::make()
        ->url('https://example.com')
        ->openUrlInNewTab();

    expect($action->shouldOpenUrlInNewTab())->toBeTrue();
});

it('can disable open in new tab', function (): void {
    $action = NotifyAction::make()
        ->url('https://example.com')
        ->openUrlInNewTab(false);

    expect($action->shouldOpenUrlInNewTab())->toBeFalse();
});

it('defaults to not opening in new tab', function (): void {
    $action = NotifyAction::make()
        ->url('https://example.com');

    expect($action->shouldOpenUrlInNewTab())->toBeFalse();
});

it('can set action for execution', function (): void {
    $action = NotifyAction::make()
        ->label('Restore')
        ->action('https://example.com/restore');

    expect($action->getAction())->toBe('https://example.com/restore')
        ->and($action->hasAction())->toBeTrue();
});

it('can set http method', function (): void {
    $action = NotifyAction::make()
        ->action('https://example.com/delete')
        ->method('DELETE');

    expect($action->getMethod())->toBe('DELETE');
});

it('throws exception when using both action and url', function (): void {
    expect(fn (): NotifyAction => NotifyAction::make()
        ->action('https://example.com/action')
        ->url('https://example.com/url')
    )->toThrow(InvalidNotificationException::class, 'Cannot use both url() and action()');
});

it('throws exception when using both url and action', function (): void {
    expect(fn (): NotifyAction => NotifyAction::make()
        ->url('https://example.com/url')
        ->action('https://example.com/action')
    )->toThrow(InvalidNotificationException::class, 'Cannot use both action() and url()');
});

it('throws exception when using method with url', function (): void {
    expect(fn (): NotifyAction => NotifyAction::make()
        ->url('https://example.com')
        ->method('POST')
    )->toThrow(InvalidNotificationException::class, 'method() function can only be used with action()');
});

it('allows method with action', function (): void {
    $action = NotifyAction::make()
        ->action('https://example.com/delete')
        ->method('DELETE');

    expect($action->getMethod())->toBe('DELETE');
});

it('throws exception when using openUrlInNewTab with action', function (): void {
    expect(fn (): NotifyAction => NotifyAction::make()
        ->action('https://example.com/restore')
        ->openUrlInNewTab()
    )->toThrow(InvalidNotificationException::class, 'openUrlInNewTab() function can only be used with url()');
});

it('serializes url action to array', function (): void {
    $action = NotifyAction::make()
        ->label('View Details')
        ->url('https://example.com')
        ->openUrlInNewTab()
        ->classes('text-blue-600');

    $array = $action->toArray();

    expect($array)->toMatchArray([
        'label' => 'View Details',
        'url' => 'https://example.com',
        'action' => null,
        'classes' => 'text-blue-600',
        'method' => null,
        'openUrlInNewTab' => true,
    ]);
});

it('can add actions to notification', function (): void {
    $this->session->shouldReceive('flash')
        ->once()
        ->with('notify', Mockery::on(fn (array $data): bool => count($data['actions']) === 2
            && $data['actions'][0]['label'] === 'Restore'
            && $data['actions'][1]['label'] === 'View All'));

    $this->notify
        ->success()
        ->title('User deleted')
        ->actions([
            NotifyAction::make()
                ->label('Restore')
                ->action('https://example.com/restore'),
            NotifyAction::make()
                ->label('View All')
                ->url('https://example.com/users'),
        ])
        ->send();
});

it('serializes actions correctly in session', function (): void {
    $this->session->shouldReceive('flash')
        ->once()
        ->with('notify', Mockery::on(function (array $data): bool {
            $action = $data['actions'][0];

            return $action['label'] === 'Undo'
                && $action['action'] === 'https://example.com/undo'
                && $action['method'] === 'POST'
                && $action['url'] === null;
        }));

    $this->notify
        ->success()
        ->actions([
            NotifyAction::make()
                ->label('Undo')
                ->action('https://example.com/undo'),
        ])
        ->send();
});

it('stores multiple actions with different types', function (): void {
    $this->session->shouldReceive('flash')
        ->once()
        ->with('notify', Mockery::on(fn (array $data): bool => count($data['actions']) === 3
            && $data['actions'][0]['action'] !== null
            && $data['actions'][1]['url'] !== null
            && $data['actions'][2]['method'] === 'DELETE'));

    $this->notify
        ->success()
        ->actions([
            NotifyAction::make()
                ->label('Restore')
                ->action('https://example.com/restore'),
            NotifyAction::make()
                ->label('View')
                ->url('https://example.com/view')
                ->openUrlInNewTab(),
            NotifyAction::make()
                ->label('Delete')
                ->action('https://example.com/delete')
                ->method('DELETE'),
        ])
        ->send();
});

it('works with all supported models (toast, connect, smiley, emotify)', function (): void {
    $models = [
        NotificationModel::Toast,
        NotificationModel::Connect,
        NotificationModel::Smiley,
        NotificationModel::Emotify,
    ];

    foreach ($models as $model) {
        $session = Mockery::mock(Store::class);
        $notify = new Notify($session);

        $session->shouldReceive('flash')
            ->once()
            ->with('notify', Mockery::on(function (array $data) use ($model): bool {
                expect($data['model'])->toBe($model)
                    ->and($data['actions'])->toHaveCount(1)
                    ->and($data['actions'][0]['label'])->toBe('Action');

                return true;
            }));

        $notify
            ->model($model)
            ->success()
            ->actions([
                NotifyAction::make()
                    ->label('Action')
                    ->url('https://example.com'),
            ])
            ->send();

        Mockery::close();
    }
});

it('throws exception when drake model has actions', function (): void {
    expect(fn () => $this->notify
        ->model(NotificationModel::Drake)
        ->success()
        ->actions([
            NotifyAction::make()
                ->label('Action')
                ->url('https://example.com'),
        ])
        ->send()
    )->toThrow(InvalidNotificationException::class, 'The Drake notification cannot have actions');
});

it('resets actions after sending', function (): void {
    $this->session->shouldReceive('flash')->twice();

    $this->notify
        ->success()
        ->actions([
            NotifyAction::make()
                ->label('First')
                ->url('https://example.com'),
        ])
        ->send();

    $this->notify
        ->success()
        ->send();
});

it('throws exception when action has no label', function (): void {
    expect(fn () => $this->notify
        ->success()
        ->actions([
            NotifyAction::make()
                ->action('https://example.com/restore'),
        ])
        ->send()
    )->toThrow(InvalidNotificationException::class, 'All notification actions must have a label');
});

it('throws exception when url action has no label', function (): void {
    expect(fn () => $this->notify
        ->success()
        ->actions([
            NotifyAction::make()
                ->url('https://example.com'),
        ])
        ->send()
    )->toThrow(InvalidNotificationException::class, 'All notification actions must have a label');
});

it('handles empty actions array', function (): void {
    $this->session->shouldReceive('flash')
        ->once()
        ->with('notify', Mockery::on(fn (array $data): bool => $data['actions'] === []));

    $this->notify
        ->success()
        ->actions([])
        ->send();
});
