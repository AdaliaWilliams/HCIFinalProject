<?php
//webpage for displaying the users produce shelf
include 'top.php'
?>
<section>
    <p class="back"><a href="myShelf.php">BACK</a></p>
</section>
<main class="my-produce">
    <h2 class="my-header">Produce</h2>
    <h3 class="item">Item</h3>
    <h3 class="date">Expiration Date</h3>

    <table>
        <tr class="soon">
            <td>bananas x2</td>
            <td>12/8/23</td>
            <td class="del">delete</td>
        </tr>
        <tr>
            <td>carrots</td>
            <td>12/15/23</td>
            <td class="del">delete</td>
        </tr>
        <tr>
            <td>avocado</td>
            <td>12/19/23</td>
            <td class="del">delete</td>
        </tr>
        <tr>
            <td>lettuce</td>
            <td>12/19/23</td>
            <td class="del">delete</td>
        </tr>
        <tr>
            <td>blueberries</td>
            <td>12/21/23</td>
            <td class="del">delete</td>
        </tr>
    </table>

    <nav>
        <a href="displayShelves.php"><img src="images/shelves_button.png"></a>

        <a href="addFoodItem.php"><img src="images/add_button.jpg"></a>

        <a href="profile.php"><img src="images/profile_pic.png"></a>
    </nav>
</main>
<!-- closing of html is in nav.php or must be included at the bottom of code-->
</html>

