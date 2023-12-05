<!-- nav for when you cannot add something -->
<nav>
    <a class="<?php
    if (PATH_PARTS['filename'] == "displayShelves") {
        print 'activePage';
    }
    ?>" href="displayShelves.php">Shelves</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "profile") {
        print 'activePage';
    }
    ?>" href="profile.php">Profile</a>
</nav>
</html>