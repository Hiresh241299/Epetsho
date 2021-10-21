<!--registration-form-->
<!--class = "wrap"-->
<div class="wrap">
    <h5 class="text-center text-white mb-4">Register Now</h5>

    <!-- radio group / required 
    <div class="card bg-light">
        <div class="card-body text-center">
            <label class="control-label"></label>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn active login-texthny mb-2" role="button">
                    <input type="radio" name="options" value="1" required>Customer
                </label>
                <label class="btn login-texthny mb-2" role="button">
                    <input type="radio" name="options" value="0">Petshop Owner
                </label>
            </div>
        </div>
    </div>-->

    <div class="login-bghny p-md-5 p-4 mx-auto mw-100">

        <form action="" method="post">

            <div class="form-group text-center">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn active login-texthny mb-2" role="button">
                        <input type="radio" name="options" value="3" required>Customer
                    </label>
                    <label class="btn login-texthny mb-2" role="button">
                        <input type="radio" name="options" value="2">Petshop Owner
                    </label>
                </div>
            </div>

            <div class="form-group">
                <p class="login-texthny mb-2">First Name</p>
                <input type="test" class="form-control" id="fname" placeholder="" name="fname" required>
            </div>

            <div class="form-group">
                <p class="login-texthny mb-2">Last Name</p>
                <input type="test" class="form-control" id="lname" placeholder="" name="lname" required>
            </div>

            <!--
            <div class="form-group">
                <p class="login-texthny mb-2">Gender</p>
                <input type="radio" id="male" name="gender" value="Male">
                <label class="login-texthny mb-2" for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female">
                <label class="login-texthny mb-2" for="female">Female</label>
            </div>
            <div class="form-group">
                <p class="login-texthny mb-2">Date of birth</p>
                <input type="date" class="form-control" id="dob" placeholder="" name="dob" required>
            </div> -->
            <div class="form-group">
                <p class="login-texthny mb-2">Email address</p>
                <input type="email" class="form-control" id="email" placeholder="" name="email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email
                    with anyone else.</small>
            </div>
            <!--
            <div class="form-group">
                <p class="login-texthny mb-2">Phone</p>
                <input type="text" class="form-control" id="phone" placeholder="" name="phone" required>
            </div> -->

            <!--<div class="form-group">
                <p class="login-texthny mb-2">Gender</p>
                <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>-->
            <div class="form-group">
                <p class="login-texthny mb-2">Password</p>
                <input type="password" class="form-control" id="password" placeholder="" name="password" required>
            </div>
            <input type="submit" class="btn btn-success submit-login btn mb-4" name="register" value="Register">
        </form>
    </div>
</div>

<?php
        if (isset($_POST['register'])){
             //Fetch data from the fields
              
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            //$gender = $_POST['gender'];
            //$dob = $_POST['dob'];
            $street = "test";
            $town = "test";
            $district = "test";
            $email = $_POST['email'];
            //$mobile = $_POST['phone'];
            $reg = date("Y/m/d h:i:s");
            $psd = password_hash($_POST['password'], PASSWORD_DEFAULT); //hash password using md5
            $status = 1;
            $role = $_POST['options'];

            // ********** If user not already exits (check email, phone)
            //addUser($fname, $lname, $gender, $dob, $street, $town, $district, $email, $mobile, $reg, $psd, $status, $role);
            addUser($fname, $lname, "Male", "12-12-2020", $street, $town, $district, $email, "12345678", $reg, $psd, $status, $role);
            echo "<script>window.location.href='index.php';</script>"; 
            /*
            // Redirect to this page.
              header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
                exit();
            */
            exit;
        } 
?>