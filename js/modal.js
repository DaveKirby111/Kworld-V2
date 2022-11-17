function modalimg() {
    var modal = document.getElementById("modal1");

    var img = document.getElementById("KWorld");
    var modalI = document.getElementById("kw");
    var cap = document.getElementById("caption");

    img.onclick = function() {
        modal.style.display = "block";
        modalI.src = this.src;
        cap.innerHTML = this.alt;
    }

    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        modal.style.display = "none";
    }
}