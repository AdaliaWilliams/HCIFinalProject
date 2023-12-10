<?php
//webpage for displaying the users protein shelf
include 'top.php'
?>
<section>
    <p class="back"><a href="roomMateShelf.php">BACK</a></p>
</section>
<main class="my-protein">
    <h2 class="my-header">Protein</h2>
    <h3 class="item">Item</h3>
    <h3 class="date">Expiration Date</h3>

    <table>
        <tr>
            <td>hamburger</td>
            <td>12/14/23</td>
        </tr>
        <tr>
            <td>turkey</td>
            <td>12/20/23</td>
        </tr>
        <tr>
            <td>rotisserie chicken</td>
            <td>12/23/23</td>
        </tr>
        <tr>
            <td>sausages</td>
            <td>12/30/23</td>
        </tr>

    </table>

    <nav>
        <a href="displayShelves.php"><img src="images/shelves_button.png"></a>

        <a href="profile.php"><img src="images/profile_pic.png"></a>
    </nav>
</main>
<!-- closing of html is in nav.php or must be included at the bottom of code-->
</html>

