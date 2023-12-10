<?php
//webpage for displaying the users frozen shelf
include 'top.php'
?>
<section>
    <p class="back"><a href="roomMateShelf.php">BACK</a></p>
</section>
<main class="my-frozen">
    <h2 class="my-header">Frozen</h2>
    <h3 class="item">Item</h3>
    <h3 class="date">Expiration Date</h3>

    <table>
        <tr>
            <td>frozen waffles</td>
            <td>1/10/23</td>
        </tr>
        <tr>
            <td>vegetable mix</td>
            <td>1/16/24</td>
        </tr>
    </table>

    <nav>
        <a href="displayShelves.php"><img src="images/shelves_button.png"></a>

        <a href="profile.php"><img src="images/profile_pic.png"></a>
    </nav>
</main>
<!-- closing of html is in nav.php or must be included at the bottom of code-->
</html>

