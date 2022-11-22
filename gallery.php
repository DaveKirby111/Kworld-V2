<?php include 'header.php'; ?>

<div class="main container-fluid d-flex flex-column min-vh-100">

<div class="container-fluid flex-grow-1">

<h2>gallery</h2>

<img src="images/header.jpg" 
    alt="Kirby's World" 
    class="kworld d-block mx-auto" 
    id="KWorld">

    <div id="modal1" class="modal">
        <span class="close">&times;</span>
        <img class="modal-img" id="kw" style="width: 1500px; height: 500px;">
        <div id="caption"></div>
    </div>

<table class="gallery">
    <tbody>

    <tr>

    <td>

    <a href="images/IX.jpg" target="_blank">
    <img src="images/IX-thumb.jpg" alt="ix" class="img-thumbnail">
    </a>

    </td>

    <td>

    <a href="images/shield.jpg" target="_blank">
    <img src="images/shield-thumb.jpg" alt="shield" class="img-thumbnail">
    </a>

    </td>

    </tr>

    </tbody>

</table>

</div>

</div>

<script>
    modalimg();
</script>

<?php include 'footer.php'; ?>