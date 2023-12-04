<?php
//webpage for displaying the users profile
?>
<main>
    <section>
        <figure>
            <img src="images/profile_pic.png">         
        </figure>
    </section>
    <section>
        <form method="post" action="#">
            <div class="form">
                <label>Name</label>
                <input type="text" class="form" name="fname" placeholder="Enter your Full Name" value="<?php echo $row['full_name']; ?>" required />
            </div>
    </section>
    <section>
        //allergies
        <a href="allergies.php"><button>Allergies</button></a>
    </section>
    <section>
        //stats
        <a href="foodWasted.php"><button>Food Wasted</button></a>
    </section>
    <section>
        //change password
        <a href="changePassword.php"><button>Change Password</button></a>
    </section>
    <section>
        //help
        <a href="help.php"><button>Help</button></a>
    </section>
    <section>
        //friends
        <a href="friends.php"><button>Friends</button></a>
    </section>
</main>
<?php
include 'nav.php';
?>
