<?php
//webpage for changing the password
include 'top.php';
?>
<main>
    <section>
        <form>
            <fieldset>
                <p>
                    <label>Current Password<label>
                    <input type="text">
                </p>
            </fieldset>
            <fieldset>
                <p>
                    <label>New Password</label>    
                    <input type="text">
                </p>
            </fieldset>
            <fieldset>
                <p>
                    <label>Confirm Password</label>
                    <input type="text">
                </p>
            </fieldset>
            <fieldset>
                <p>
                    <input type="submit">
                </p>
            </fieldset>
        </form>
    </section>
    <section>
        <form>
            <nav>
                <a href="displayShelves.php"><img src="images/shelves_button.png"></a>
                <a href="profile.php"><img src="images/profile_pic.png"></a>
            </nav>
        </form>
    </section>
</main>
</html>