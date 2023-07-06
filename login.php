<?php
require_once "header.php";
require_once "login.css";

?>


<body>
    <section class="fields">
        <div class="content">
            <form class="form" action="home.php" method="post">
                <div class="container">
                <h2> Login  </h2>

                <div class="inside">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Enter username" required/><br /><br />
                </div>

                <div class="inside">
                <label for="password">Password</label>
                <input type="password" name="Password" placeholder="Enter password" required /><br /><br />
                </div>

                <div class="button">
                <input type="Submit" name="submit" value="Login"/>
                </div>
                </div>
            </form>
        </div>


        </section>
</body>
