<?php
//webpage for displaying the users protein shelf
include 'top.php'
?>
<section>
    <p class="back"><a href="sharedShelf.php">BACK</a></p>
</section>
<main class="my-protein">
    <h2 class="my-header">Protein</h2>
    <h3 class="item">Item</h3>
    <h3 class="date">Expiration Date</h3>

    <table>
        <tr>
            <td>hot dogs</td>
            <td>1/3/24</td>
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

