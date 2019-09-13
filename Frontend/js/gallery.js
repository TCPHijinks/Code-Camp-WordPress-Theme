function selectGallery() {
    var c = document.getElementById("recentContainer");
    var g = document.getElementById("localGalleries");
    c.style.display = "none";
    g.style.display = "block";
}

function revertGallery() {
    var c = document.getElementById("recentContainer");
    var g = document.getElementById("localGalleries");
    g.style.display = "none";
    c.style.display = "grid";
}


function gallerySelect(gallery) {
    var g = document.getElementById(gallery);

    g.style.display = "block";

    
}

function galleryDeselect(gallery) {
    var g = document.getElementById(gallery);

    g.style.display = "none";
}


