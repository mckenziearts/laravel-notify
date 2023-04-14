import Alpine from 'alpinejs'

const notification = document.querySelector('div.notify')

if (notification) {
  setTimeout(() => {
    notification.remove()
  }, notify.timeout )
}

if (typeof window.Alpine === 'undefined') {
  window.Alpine = Alpine
  Alpine.start()
}
