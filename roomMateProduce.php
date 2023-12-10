<?php
//webpage for displaying the users produce shelf
include 'top.php'
?>
<section>
    <p class="back"><a href="roomMateShelf.php">BACK</a></p>
</section>
<main class="my-produce">
    <h2 class="my-header">Produce</h2>
    <h3 class="item">Item</h3>
    <h3 class="date">Expiration Date</h3>

    <table>
        <tr>
            <td>spinach</td>
            <td>12/10/23</td>
        </tr>
        <tr>
            <td>bell pepper x3</td>
            <td>12/12/23</td>
        </tr>
        <tr>
            <td>raspberries</td>
            <td>12/17/23</td>
        </tr>
        <tr>
            <td>pears</td>
            <td>12/21/23</td>
        </tr>
        <tr>
            <td>endives x3</td>
            <td>12/21/23</td>
        </tr>
        <tr>
            <td>fennel x2</td>
            <td>12/24/23</td>
        </tr>
    </table>

    <nav>
        <a href="displayShelves.php"><img src="images/shelves_button.png"></a>

        <a href="profile.php"><img src="images/profile_pic.png"></a>
    </nav>
</main>
<!-- closing of html is in nav.php or must be included at the bottom of code-->
</html>
