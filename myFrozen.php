<?php
//webpage for displaying the users frozen shelf
include 'top.php'
?>
<section>
    <p class="back"><a href="myShelf.php">BACK</a></p>
</section>
<main class="my-frozen">
    <h2 class="my-header">Frozen</h2>
    <h3 class="item">Item</h3>
    <h3 class="date">Expiration Date</h3>

    <table>
        <tr>
            <td>veggie gyoza</td>
            <td>12/30/23</td>
            <td class="del">delete</td>
        </tr>
        <tr>
            <td>Pad Thai</td>
            <td>1/14/24</td>
            <td class="del">delete</td>
        </tr>
        <tr>
            <td>Mango</td>
            <td>2/29/24</td>
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

