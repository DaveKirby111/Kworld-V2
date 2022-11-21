<?php include 'header.php'; ?>

<div class="main container-fluid d-flex flex-column min-vh-100">

<div class="row text-center text-capitalize">
    <div class="col news">
        <h4 class="text-decoration-underline">news</h4>
    </div>
    <div class="col thoughts">
        <h4 class="text-decoration-underline">thoughts</h4>
    </div>
</div>

<div class="container-fluid flex-grow-1">

<h2>introduction</h2>

<div class="datetime">
    <button id="datebtn" onclick="currentdate();">click for date</button>
    <p id="date"></p>
    <p id="day"></p>
    <p id="time"></p>
</div>

<table class="table table-bordered likes">

    <thead>
        <tr>
            <th scope="col">games</th>
            <th scope="col">movies</th>
            <th scope="col">tv</th>
            <th scope="col">comics</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>mass effect</td>
            <td>thor</td>
            <td>smallville</td>
            <td>nightwing</td>
        </tr>
        <tr>
            <td>final fantasy</td>
            <td>star wars</td>
            <td>daredevil</td>
            <td>wonder woman</td>
        </tr>
        <tr>
            <td>resident evil</td>
            <td>rambo</td>
            <td>young justice</td>
            <td>superman</td>
        </tr>
        <tr>
            <td>witcher</td>
            <td>captain america</td>
            <td>xena</td>
            <td>thor</td>
        </tr>
    </tbody>

</table>

</div>

</div>

<?php include 'footer.php'; ?>