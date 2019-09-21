//function closeWarning() {
//    let target = document.querySelector('.warning_close');
//    target.addEventListener('click', ()=>
//    {
//        target.parentNode.style = 'opacity: 0;';
//        setTimeout(()=>{
//            target.parentNode.remove();
//        }, 125)
//    })
//}


//closeWarning();

function closeWarning() {
    var x = document.getElementById("warning");
    x.style.display = 'none';
}

function openMenu() {
    var x = document.getElementById("close");
    var o = document.getElementById("menu");
    var m = document.getElementById("mob");

    x.style.display = 'initial';
    o.style.display = 'none';
    m.style.display = 'initial';

}

function closeMenu() {
    var x = document.getElementById("close");
    var o = document.getElementById("menu");
    var m = document.getElementById("mob");

    x.style.display = 'none';
    o.style.display = 'initial';
    m.style.display = 'none';

}



