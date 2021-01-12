document.addEventListener('scroll', () =>{
    let navbar = document.querySelector('#navbar')

    if(window.pageYOffset > 80){
        navbar.classList.add('shadow')
    }
    else{
        navbar.classList.remove('shadow')
    }
})