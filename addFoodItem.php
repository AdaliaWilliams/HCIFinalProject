<?php
include 'top.php';
?>
<main>
<h2>Add a Food Item</h2>
<form>
    <fieldset>
        <p>
            <label>Item Name</label>
            <input type="text">
        </p>
    </fieldset>
    <fieldset>
        <p>
            <label>Number Of</label>
            <input type="text">
        </p>
    </fieldset>
    <fieldset>
        <p>
            <label>Expiration Date</label>
            <input type="text">
        </p>
    </fieldset>
    <fieldset>
        <p>
            <label>Category</label>
            <input type="text">
        </p>
    </fieldset>
    <fieldset>
        <p>

            <input type="submit">
        </p>
    </fieldset>

</form>
    <nav>
        <a href="displayShelves.php"><img src="images/shelves_button.png"></a>

        <a href="addShelf.php"><img src="images/add_button.jpg"></a>

        <a href="profile.php"><img src="images/profile_pic.png"></a>
    </nav>
</main>
<!-- closing of html is in nav.php or must be included at the bottom of code-->
</html>