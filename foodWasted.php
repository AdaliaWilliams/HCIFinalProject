<?php
//webpage for displaying the stats of food wasted
include 'top.php';
?>
<main>
    <section>
        <p class="back"><a href="profile.php">BACK</a></p>
    <h1>Food Wasted</h1>
    </section>
    <section>
        <table>
            <tr>
                <th>Food Item</th>
                <th>Expiration Date</th>
            </tr> 
            <tr>      
                <td>Grapes</td>
                <td>09/22/23</td>              
            </tr>
            <tr>
                <td>Rasberries</td>
                <td>10/23/23</td>
            </tr>
            <tr>
                <td>Potato</td>
                <td>11/11/23</td>
            </tr>
        </table>
    </section>
    <section>
        <form>
            <nav>
                <a href="displayShelves.php"><img src="images/shelves_button.png"></a>
                <a href="profile.php"><img src="images/profile_pic.png"></a>
            </nav>
        </form>
    </section>
</main>
</html>