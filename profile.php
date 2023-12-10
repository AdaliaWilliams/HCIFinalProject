<?php
//webpage for displaying the users profile
include 'top.php';
?>
<main>
    <section>
        <figure>
            <img src="images/profile_pic.png"> 
            <figcaption>@username</figcaption>        
        </figure>
    </section>
    <section class="allergies">
        <h2><a href="allergies.php">Allergies</a></h2>
    </section>
    <section class="foodwasted">
        <h2><a href="foodWasted.php">Food Wasted</a></h2>
    </section>
    <section class="changepassword">
        <h2><a href="changePassword.php">Change Password</a></h2>
    </section>
    <section class="help">
        <h2><a href="help.php">Help</a></h2>
    </section>
    <section class="friends">
        <h2><a href="friends.php">Friends</a></h2>
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

