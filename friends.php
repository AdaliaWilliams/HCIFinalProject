<?php
//webpage for displaying the user's friends
include 'top.php';
?>
<main> 
    <section>
        <p class="back"><a href="profile.php">BACK</a></p>
    </section>
    <section>
        <table>
            <tr>
                <td>@friend1</td>
                <td class="del">delete</td>
            </tr>
        </table>
    </section>
    <section>
        <form>
            <nav>
                <a href="displayShelves.php"><img src="images/shelves_button.png"></a>
                <a href="addFriends.php"><img src="images/add_button.jpg"></a>
                <a href="profile.php"><img src="images/profile_pic.png"></a>
            </nav>
        </form>
    </section>
</main>
</html>