<?php
//webpage for displaying the users shelf safe food items
include 'top.php'
?>
<section>
    <p class="back"><a href="myShelf.php">BACK</a></p>
</section>
<main class="my-shelf-safe">
    <h2 class="my-header">Produce</h2>
    <h3 class="item">Item</h3>
    <h3 class="date">Expiration Date</h3>

    <table>
        <tr>
            <td>pasta</td>
            <td>2/12/24</td>
            <td class="del">delete</td>
        </tr>
        <tr>
            <td>chickpeas</td>
            <td>2/22/24</td>
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

