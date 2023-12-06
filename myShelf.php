<?php
//webpage for displaying the users shelf
include "top.php";
?>

<section>
    <p><a href="displayShelves.php">BACK</a></p>
</section>
<main class="categories">
    <section class="produce">
        <h2><a href="myProduce.php">Produce</a></h2>

    </section>
    <section class="dairy">
        <h2><a href="myDairy.php">Dairy</a></h2>

    </section>
    <section class="frozen">
        <h2><a href="myFrozen.php">Frozen</a></h2>

    </section>
    <section class="protein">
        <h2><a href="myProtein.php">Protein</a></h2>

    </section>
    <section class="shelf-safe">
        <h2><a href="myShelfSafe.php">Shelf Safe</a></h2>

    </section>

<nav>
    <a href="displayShelves.php"><img src="images/shelves_button.png"></a>

    <a href="addShelf.php"><img src="images/add_button.jpg"></a>

    <a href="profile.php"><img src="images/profile_pic.png"></a>
</nav>
</main>
<!-- closing of html is in nav.php or must be included at the bottom of code-->
</html>