<?php
include 'top.php';
?>
<main>
<h2>Add a Food Item</h2>
<form action="myShelf.php">
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

</main>
<!-- closing of html is in nav.php or must be included at the bottom of code-->
<?php
include 'nav.php';
?>