/**
 * Notify
 *
 * @author Arthur Monney <monneylobe@gmail.com>
 * @since 2019
 * @version 1.0.0
 * @link  https://github.com/mckenziearts/laravel-notify
 */

const notification = document.querySelector('.notify-alert, .smiley-alert, .connectify-alert');
const drakiky = document.querySelector('.drake-alert');

if (notification) {
  const button = document.querySelector('.notify-alert button, .smiley-alert button, .connectify-alert button');

  button.addEventListener('click', function (e) {
    e.stopPropagation();
    e.preventDefault();
    notification.classList.remove(notify.animatedIn);
    setTimeout(() => { notification.classList.add(notify.animatedOut) }, 200);
  });

  setTimeout(() => { notification.classList.remove(notify.animatedIn); }, 200);
  setTimeout(() => {
    if (! notification.classList.contains(notify.animatedOut)) {
      notification.classList.add(notify.animatedOut);
    }
  }, notify.timeout);

}

if (drakiky) {
  setTimeout(() => {
    if (! drakiky.classList.contains(notify.animatedOut)) {
      drakiky.classList.add(notify.animatedOut)
    }
  }, notify.timeout);
}
