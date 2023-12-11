<?php
//webpage for signing in to the application
include 'top.php'
?>
<main>
    <form action="displayShelves.php">
        <fieldset>
            <p>
                <label>Username</label>
                <input type="text">
            </p>
        </fieldset>

        <fieldset>
            <p>
                <label>Password</label>
                <input type="text">
            </p>
        </fieldset>
        <fieldset>
            <p>
                <input type="submit" value="sign in">
            </p>
        </fieldset>
    </form>
</main>

</html>
