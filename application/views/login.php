<?php
// $user_language=$this->session->userdata('language');
//first parameter is the file name and the second is folder name
// $this->lang->load($user_language,$user_language);


if($error==1) {
    echo "username/password did not match";
}
?>
    <!--
        <form action="users/login" method="post">
            <input type="text" name="username" id="" ><br>
            <input type="text" name="password" id="">
            <input type="submit" value="Submit">
            
        </form>
        
        -->
   
<!DOCTYPE html>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>>
<head>
    <style>
    /* .md-outline.select-wrapper+label {
    top: .5em !important;
    z-index: 2 !important;
    } */

    </style>
    <script>
    // $(document).ready(function() {
    // $('.mdb-select').materialSelect();
    // $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
    // $(this).closest('.select-outline').find('label').toggleClass('active');
    // $(this).closest('.select-outline').find('.caret').toggleClass('active');
    // });
    // });

    </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up Form</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="<?=base_url()?>fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="<?=base_url()?>css/style.css">
</head>
<body>
<!-- <div id="contact_form"> -->
<!-- <form action="<?php //echo base_url()?>users" method="post"> -->
<!-- <select name="language"> -->
<?php //if ($user_language==='english') {?>
    <!-- <option value="english">English</option>
    <option value="dari">Dari</option> -->
<?php //} else {?>
    <!-- <option value="dari">Dari</option> -->
    <!-- <option value="english">English</option> -->
 <?php// }
 ?>
<!-- </select> -->
<!-- <input type="submit" value="submit"> -->
<!-- </form> -->
</div>

     <div>
        <!-- Sing in  Form -->
        <section>
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?=base_url()?>images/signup-image.jpg" alt="sing up image"></figure>
                    </div>
                    <div class="signin-form">

                        <h2 class="form-title">Sign up <?php echo $this->lang->line('key');?></h2>
                        <?php
                if($_POST){
                    if ($error) {
                        echo $error;
                    }else{
                        echo "The user is registered";
                    }
                }
                    ?>
                        <form method="POST" action="<?=base_url();?>users/login" class="register-form" id="login-form" >
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your User Name"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="row">
 

                            <div class="form-group">
                            <div class="col-md-6 select-outline">

<select name="userType" >
  <option value="" disabled selected>Choose your user type</option>
  <option value="admin">Admin</option>
  <option value="author">Author</option>
</select>
</div>
</div>
                                <!-- <label for="password"><i class="zmdi zmdi-lock"></i></label> -->
                                <!-- <select name="userType" class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                <option>User Type</option>
                                <option>admin</option>
                                <option>author</option>
                                </select> -->
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Go to Home Page</span>
                            <div class="form-group form-button">
                                <a href="<?=base_url();?>">Home</a>
                            </div>
                          
                        </div>
                    </div>
                </div>
        </section>

    </div>

</body>
</html>

<!--
     <div class="panel panel-info">
      <div class="panel-heading">Panel with panel-info class</div>
      <div class="panel-body">Panel Content</div>
    </div>

</div><div class="container">
<div class=" col-md-6 "   >
  <h2>Member Login Form</h2>
  <form class="form-horizontal" role="form" action="users/login" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-body"></div>
</div>
<div class="panel panel-default"></div>


-->