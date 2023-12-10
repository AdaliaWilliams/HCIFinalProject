<?php
include 'top.php';
?>
<main>
<h2>Add a Shelf</h2>
<form>
    <fieldset>
        <p>
            <h4>Shared Shelf?</h4>
            <input type="radio" id="yes" name="shared-shelf" value="Yes">
            <label for="yes">Yes</label><br>
            <input type="radio" id="no" name="shared-shelf" value="No">
            <label for="no">No</label><br>
        </p>
    </fieldset>
    <fieldset>
        <p>
            <label>Username</label>
            <input type="text">
        </p>
    </fieldset>
    <fieldset>
        <p>
            <label>Shelf Name</label>
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
?>