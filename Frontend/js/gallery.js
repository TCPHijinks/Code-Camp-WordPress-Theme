function selectGallery() {
    var c = document.getElementById("camps");
    var g = document.getElementById("campGallery");
    c.style.display = "none";
    g.style.display = "block";
}

function revertGallery() {
    var c = document.getElementById("camps");
    var g = document.getElementById("campGallery");
    g.style.display = "none";
    c.style.display = "block";
}

