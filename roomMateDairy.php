<?php
//webpage for displaying the users dairy shelf
include 'top.php'
?>
<section>
    <p class="back"><a href="roomMateShelf.php">BACK</a></p>
</section>
<main class="my-dairy">
<h2 class="my-header">Dairy</h2>
    <h3 class="item">Item</h3>
    <h3 class="date">Expiration Date</h3>

    <table>
        <tr>
            <td>milk</td>
            <td>12/15/23</td>
        </tr>
        <tr>
            <td>Gouda</td>
            <td>12/20/23</td>
        </tr>
    </table>

    <nav>
        <a href="displayShelves.php"><img src="images/shelves_button.png"></a>

        <a href="profile.php"><img src="images/profile_pic.png"></a>
    </nav>
</main>
<!-- closing of html is in nav.php or must be included at the bottom of code-->
</html>