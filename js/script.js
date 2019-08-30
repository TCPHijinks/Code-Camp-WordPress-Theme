function closeWarning()
{
    let target = document.querySelector('.warning_close');
    target.addEventListener('click', ()=>
    {
        target.parentNode.style = 'opacity: 0;';
        setTimeout(()=>{
            target.parentNode.remove();
        }, 125)
    })
}


closeWarning();