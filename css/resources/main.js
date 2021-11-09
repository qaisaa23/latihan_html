const menu = document.getElementById('main-menu')
const mask = document.getElementsByClassName('menu-mask')

const showMenu = () => {   
    if(menu.style.display === 'block') {
        hideMenu()
    } else {
        // tampilkan menu dengan animasi
        menu.classList.add('animate__animated', 'animate__fadeInRight')
        menu.style.setProperty('--animate-duration', '0.3s')
        menu.style.display = 'block'
    
        // tampilkan layer mask dengan animasi
        mask[0].classList.add('animate__animated', 'animate__fadeIn')
        mask[0].style.setProperty('--animate-duration', '0.3s')
        mask[0].style.display = 'block'
    }
}

const hideMenu = () => {
    menu.classList.remove('animate__fadeInRight')
    menu.classList.add('animate__fadeOutRight')
    
    mask[0].classList.remove('animate__fadeIn')
    mask[0].classList.add('animate__fadeOut')

    // hapus kembali class animate.css nya...
    // tunggu sampai animasinya selesai yaitu 0,3 detik
    // kita kasih timeout 400 milidetik / 0,4 detik
    setTimeout(() => {
        menu.classList.remove(
            'animate__animated', 
            'animate__fadeInRight',
            'animate__fadeOutRight'
        )
    
        mask[0].classList.remove(
            'animate__animated', 
            'animate__fadeIn',
            'animate__fadeOut'
        )

        // sekarang sembunyikan lagi menunya..
        menu.style.display = 'none'
        mask[0].style.display = 'none'
    }, 400)   
}