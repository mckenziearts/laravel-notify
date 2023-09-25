import Alpine from 'alpinejs'

const notification = document.querySelector('div.notify')

if (notification){
  let timeout =  Number(notification.dataset.timeout)

  if(timeout){
    setTimeout(() => {
      notification.remove()
    }, timeout )
  }
}

window.Alpine = Alpine
Alpine.start()
