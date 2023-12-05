<?php
//webpage to display all shelves
include "top.php";
?>
<main class="displayShelves">
    <section class="shelf1">
        <h2>My Self</h2>
        <p><a href="myShelf.php" </p>
    </section>

    <section class="shelf2">
        <h2>Roommate Self</h2>
        <p><a href="roomMateShelf.php" </p>
    </section>

    <section class="shelf3">
        <h2>Shared Self</h2>
        <p><a href="sharedShelf.php" </p>
    </section>
</main>

<nav>
    <a class="<?php
    if (PATH_PARTS['filename'] == "displayShelves") {
        print 'activePage';
    }
    ?>" href="displayShelves.php">Shelves</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "addShelf") {
        print 'activePage';
    }
    ?>" href="addShelf.php">Add</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "profile") {
        print 'activePage';
    }
    ?>" href="profile.php">Profile</a>
</nav>
<!-- closing of html is in nav.php or must be included at the bottom of code-->
</html>