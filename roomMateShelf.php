<?php
//webpage for displaying the users shelf
include "top.php";
?>

<section>
    <p class="back"><a href="displayShelves.php">BACK</a></p>
</section>
<main class="categories">
    <section class="produce">
        <h2><a href="roomMateProduce.php">Produce</a></h2>

    </section>
    <section class="dairy">
        <h2><a href="roomMateDairy.php">Dairy</a></h2>

    </section>
    <section class="frozen">
        <h2><a href="roomMateFrozen.php">Frozen</a></h2>

    </section>
    <section class="protein">
        <h2><a href="roomMateProtein.php">Protein</a></h2>

    </section>
    <section class="shelf-safe">
        <h2><a href="roomMateShelfSafe.php">Shelf Safe</a></h2>

    </section>

<nav>
    <a href="displayShelves.php"><img src="images/shelves_button.png"></a>

    <a href="profile.php"><img src="images/profile_pic.png"></a>
</nav>
</main>
<!-- closing of html is in nav.php or must be included at the bottom of code-->
</html>