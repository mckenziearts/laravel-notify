import Alpine from 'alpinejs'

const notification = document.querySelector('div.notify')

if (notification) {
  setTimeout(() => {
    notification.remove()
  }, notify.timeout )
}

window.Alpine = Alpine
Alpine.start()
