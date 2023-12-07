<?php
//webpage for displaying the user's friends
include 'top.php';
?>
<main>
    //display friends 
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
                <a href="displayShelves.php"><button><img src="images/shelves_button.png"></button></a>
                <a href="addFriends.php"><button><img src="images/profile_pic.png"></button></a>
                <a href="profile.php"><button><img src="images/profile_pic.png"></button></a>
            </nav>
        </form>
    </section>
</main>
</html>