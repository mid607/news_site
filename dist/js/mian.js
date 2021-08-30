const header=document.querySelector('.main-head');

window.addEventListener('scroll',()=>{

    const scrollpos=window.scrollY;
    if(scrollpos>10){
       header.classList.add('scrolled'); 
    }else{
        header.classList.remove('scrolled');
    }
})