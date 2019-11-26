<!-- 
    <form action="<?#=base_url();?>users/register" method="post">
            <input type="hidden" name="id" >
            <input type="text" name="name" id="" placeholder="name"><br><br>
            <input type="text" name="lastname" id="" placeholder="lastname"><br><br>
            <input type="text" name="username" id="" placeholder="username"><br><br>
            <input type="password" name="password" id="" placeholder="password"><br><br>
            <input type="email" name="email" id="" placeholder="email"><br><br>
            <input type="submit" value="Submit" id="">
    </form> 
    -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?=base_url();?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url();?>css/style.css">
</head>
<body>
    <div >
        <section>
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?=base_url()?>images/signup-image.jpg" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                    <?php
                if($_POST){
                    if ($error) {
                        echo $error;
                    }else{
                        echo "The user is registered";
                    }
                }
                    ?>
                    <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="<?=base_url();?>users/register"  class="register-form" id="register-form">
                        <input type="hidden" name="id" >    
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="lastname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="lastname" id="lastname" placeholder="Your Last Name"/>
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your User Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <!-- <div class="form-group"> -->
                                <!-- <label for="image"></label> -->
                                <!-- <input type="file" name="image" id="image" /> -->
                                <?php
/*                                $data_form=array(
                                    'name'=>'image'
                                    );
                                echo form_upload($data_form);*/?>
                            <!-- </div> -->
                            <div class="form-group">
                                <!-- <label for="password"><i class="zmdi zmdi-lock"></i></label> -->
                                <select name="userType">
                                <option>User Type</option>
                                <option>admin</option>
                                <option>author</option>
                                </select>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Go to Home Page</span>
                            <div class="form-group form-button">
                                <a href="<?=base_url();?>">Home</a>
                                <!-- <input type="button"  class="form-submit" value="Home"/> -->
                            </div>
                            <!-- <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
        </section>
    
    </div>
</body>
</html>

<!---

    //-------------------- Sign up form 
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="users/register" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                    </div>
                    
                </div>
            </div>
        </section> -->