<?php
    include_once "Connect.php";
?>
<body>

    <div class="container">

    <form action="process.php" method="post" autocomplete="off">
        
        <div class="content">
        <h2> Registration Form </h2>
        <div class="inputd">
            <label for="username"> Username </label>
            <input type="text" name="username" placeholder="Enter your username" required/> <br /><br /><br />
            <?php
            require_once "Connect.php";

            $sql = "SELECT * FROM volunteers";
            $result = $conn->query ($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    ?>
                    <?php print $row["username"]; ?>
                    <?php print $row["name"]; ?>
                </option>
                <?php
                }
            }
            else{
                print 'No no';
            }

                ?>
            </select>

        </div>
        

        <div class="inputd">
            <label for="name">Name</label>
             <input type="text" name="name" placeholder="Other Names" required/> <br /><br /><br />
         </div>
         <div class="inputd">
            <label for="address">Address</label>
            <input type="text" name="address"  placeholder="Enter your address" required/><br /><br /><br />
        </div>
         <div class="inputd">
            <label for="password">Password</label>
             <input type="password" name="pass" placeholder="Enter password" required/> <br /><br /><br />
         </div>
         <div class="inputd">
            <label for="password">Confirm Password</label>
             <input type="password" name="cpassword" placeholder="Re-enter password" required/> <br /><br /><br />
         </div>

         <div class="inputd">
            <label for="Email">Email address</label>
            <input type="email" name="email"  placeholder="Enter your email address" required/><br /><br /><br />
        </div>
    
        <div class="inputd">
            <label for="dob">Date of birth</label>
            <input type="date" name="DOB" /><br /><br />
        </div><br /><br />
          
        <div class="inputd">
        <label for="residence">Current residence</label>
         <!--    <select name="residence">
            <option> --Select Country --</option>
            <option> Kenya </option>
            <option> Uganda </option>
            <option> Ethiopia </option>
            <option> Tanzania </option>
            <option> Burundi </option>
        </select>
        -->
        <select name="residence" required>
        <option>--Select Country--</option>
        <?php
        require_once "Connect/php";

        $sql = "SELECT * FROM volunteers";
        $result = $conn->query ($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                ?>
                <option value="<?php print $row["residence"];?>">
                    <?php print $row["username"];?>
                </option>
                <?php
            }
        }
        else {
            print '<option> No results</option';
        }
        ?>
        </select>

    </div>
    <br /><br />
    <br /><br />
    
        <div class="buttons">
            <input type="submit" name="submit" value="Submit" />
            <input type="reset" name="clear" value="Clear" />
        </div>

        </div>
        <div class="alert">
            <p> By clicking Sign Up, you agree to our <a href="#">Terms, </a><a href="#">Privacy Policy</a> and cookies policy
            You may receive notifications from us and can opt out any time</p>
        </div>
    </form>
  </div>

</body>
<?php include_once "footer.php"; ?>