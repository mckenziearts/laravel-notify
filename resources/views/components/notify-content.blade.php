@props(['content'])

<p @class([
    'mt-1 text-sm leading-5',
    'text-slate-500' => config('notify.theme') === 'light',
    'text-white' => config('notify.theme') !== 'light',
])>
    {{ $content }}
</p>
