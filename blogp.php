<?php include 'header.php'; ?>

<?php

$header = array (

    "resident evil 4: remake",

    "skyrim",

    "witcher: remake",

    "henry cavill",

    "final fantasy 13"


);





$posts = array (

    "Capcom is reportedly adding in-game purchases to the RE4 remake. Yeah, I don't see this going over well.",

    "Skyrim is such a shallow, dumbed down experience. So why do I continue to play it? Don't know.",

    "CD Project Red is remaking the first Witcher game. Looking forward to that.",

    "Henry Cavill is returning to the DC movies. Maybe he will get to play Superman this time.",

    "Final Fantasy XIII is heavily criticised by fans but I really like the game despite it's flaws."

);


?>

<div class="main container-fluid d-flex flex-column min-vh-100">

<div class="container-fluid flex-grow-1">

<h2>blog posts</h2>

<?php
foreach ($header as $index => $value) { ?>

<div class="post d-flex mb-5">

    <div class="blog-banner bg-success p-3">
        <img src="images/DW copy.png" alt="DW-blog" class="DW-blog" width="250">
    </div>

    <div class="blog-content container ml-4">

        <h3 class="post-header"><?php echo $header[$index]; ?></h3>

        <p class="post-text mb-5"><?php echo $posts[$index]; ?></p>

        <div class="profile-flex">
            <div class="profile-wrapper mb-2">
                <img src="images/blank-profile-photo.jpg" alt="David Kirby" style="height: 50px; width: 50px;">
            </div>

            <div class="profile container">
                <a href="#" class="me text-success">david kirby</a>

                <time datetime="2022-11-18" class="float-end">Nov. 28, 2022</time>
            </div>
        </div>
    </div>

</div>

<?php

}

?>

</div>

</div>

<?php include 'footer.php'; ?>