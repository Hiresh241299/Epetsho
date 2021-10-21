<div class="wrap">
    <h5 class="text-center mb-4">Login Now</h5>
    <div class="login-bghny p-md-5 p-4 mx-auto mw-100">
        <!--/login-form-->
        <form action="#" method="post">
            <div class="form-group">
                <p class="login-texthny mb-2">Email address</p>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"
                    placeholder="" required="">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email
                    with anyone else.</small>
            </div>
            <div class="form-group">
                <p class="login-texthny mb-2">Password</p>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="" required="">
            </div>
            <div class="form-check mb-2">
                <div class="userhny-check">
                    <label class="check-remember container">
                        <input type="checkbox" class="form-check"> <span class="checkmark"></span>
                        <p class="privacy-policy">Remember me</p>
                    </label>
                    <div class="clearfix"></div>
                </div>
            </div>
            <input type="submit" class="btn btn-success submit-login btn mb-4" name="login" value="Login">

        </form>
        <!--//login-form-->
        <?php
        
        if (isset($_POST['login'])){
            //Fetch data from Login form
            $userEmail = $_POST['email'];
            $userPassword = $_POST['password'];

            //verify user credentials
            if ((verifyUserCredentials($userEmail, $userPassword)) == true){
                $_SESSION['roleid'] = getUserRole($userEmail);
                header('Location: index.php');
            }
            //credentials does not match ********** DISPLAY ERROR MESSAGE HERE
            else{
                $_SESSION['roleid'] = 0;
            }
        }
        ?>
    </div>
</div>