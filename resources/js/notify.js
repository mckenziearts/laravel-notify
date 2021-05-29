import 'alpinejs';

const notification = document.querySelector('div.notify');

if (notification) {
  setTimeout(() => {
    notification.remove();
  }, notify.timeout ); // 5 secs
}
