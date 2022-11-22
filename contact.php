<?php include 'header.php'; ?>

<div class="main container-fluid d-flex flex-column min-vh-100">

<div class="container-fluid flex-grow-1">

<h2>contact me:</h2>

<form action="email.php" method="post" class="contact">

<div class="mt-3 mb-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" id="name" class="form-control" name="name" placeholder="Name...">
</div>

<div class="mt-3 mb-3">
    <label for="name" class="form-label">Email:</label>
    <input type="text" id="email" class="form-control" name="email" placeholder="E-mail...">
</div>

<div class="mt-3 mb-3">
    <label for="subject" class="form-label">Subject:</label>
    <input type="text" id="subject" class="form-control" name="subject" placeholder="Subject...">
</div>

<div class="mt-3 mb-3">
    <label for="message" class="form-label">Message:</label>
    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Type Message Here..."></textarea>
</div>

<button type="submit" name="sendbtn" class="btn btn-primary">Send</button>
<button type="reset" class="btn btn-primary">Clear</button>
</form>

</div>

</div>

<?php include 'footer.php'; ?>