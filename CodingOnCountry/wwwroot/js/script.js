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

window.addEventListener('load', (res)=>
{
    previousWarning();
    const fbNode = document.querySelector('#EmbededFacebookAlbumLink'); 

    let changeFile = () =>
    {
        if(!fbNode.value.length <= 0)
        {
            files.forEach(file=>
                {
                    file.style.display = 'none';
                })
        }
        else
        {
            files.forEach(file=>
                {
                    file.style.display = 'block';
                })
        }
    }

    // Grabbing the file tag
    const files = document.querySelectorAll("input[type=file]") == null ? 0 : document.querySelectorAll("input[type=file]");
    if(files != null && files.length > 0)
    {
        files.forEach(file => // Loop through each file input
        {
            file.addEventListener('change', (r)=> // Listening for a change
            {
                let facebookNode = document.querySelector('[for=EmbededFacebookAlbumLink]').parentNode; // Facebook form div
                if(r.target.files[0]) // Seeing if the first file exists
                {
                    facebookNode.style.display = 'none';
                }
                else
                {
                    facebookNode.style.display = 'block';
                }
    
            })
        });
        try
        {
            fbNode.addEventListener('keypress', changeFile);
            fbNode.addEventListener('change', changeFile);
            fbNode.addEventListener('focus', changeFile);
        }
        catch(e)
        {
            console.log(e);
        }
    }
})

function previousWarning()
{
    const x = document.getElementById("warning");
    const text = x.innerText.replace(/\s+/g, '');
    const prev = localStorage.getItem('warning');
    const removeclass = () => {x.classList.remove('warning_prev');};

    if(text == prev)
    {
        removeclass();
        x.style.display = 'none';
    }
    else
    {
        removeclass();
    }
}



function closeWarning() {
    var x = document.getElementById("warning");
    localStorage.setItem('warning', x.innerText.replace(/\s+/g, ''));
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
