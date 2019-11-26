<?php
// echo $error;
// if($error==1) {
//     echo "username/password did not match";
// }
?>
    <!--
        <form action="users/login" method="post">
            <input type="text" name="username" id="" ><br>
            <input type="text" name="password" id="">
            <input type="submit" value="Submit">
            
        </form>
        
        -->
   
<!DOCTYPE html>
<html lang="en">
<head>
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
     <div>
        <!-- Sing in  Form -->
        <section>
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?=base_url()?>images/signin-image.jpg" alt="sing up image"></figure>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">New Post</h2>
                        <?php echo form_open_multipart('posts/newPost'); ?>
                        <!-- <form method="POST" enctype="multipart/form-data" action="<?=base_url();?>posts/newPost" class="register-form" id="login-form" > -->
                            <div class="form-group">
                                <label for="title"></label>
                                <input type="text" name="title" id="title" placeholder="Post title"/>
                            </div>
                            <div class="form-group">
                                <label for="body"></label>
                                <textarea name="body" id="" cols="35" placeholder="Post body" rows="10"></textarea>
                                <!-- <input type="text" name="password" id="password" /> -->
                            </div>
                            <div class="form-group">
                                <label for="image"></label>
                                <!-- <input type="file" name="image" id="image" /> -->
                                <?php
                                $data_form=array(
                                    'name'=>'image'
                                );
                                echo form_upload($data_form);?>
                            </div>
                            <div class="form-group">
                            <span class="social-label"> Post state</span>

                                <!-- <label for="active"></label> -->
                                <select name="active">
                                    <option value="1">Show Post</option>
                                    <option value="0">Dont Show Post</option>
                                </select>
                               
                            </div>
                            <div class="form-group">
                            <span class="social-label">Category Name</span>
                            <!-- <label for="categoryID">categoryID</label> -->
                                <select name="categoryID">
                                    <?php foreach ($category as $cat ) {?>
                                       <option value="<?php echo $cat['catID']; ?>"><?php echo $cat['name']; ?> </option>
                                    <?php  }?>
                                </select>
                            
                            </div>
                            <div class="form-group form-button">
                                <?php echo form_submit('','submit'); ?>
                                <!-- <input type="submit" name="create" id="signin" class="form-submit" value="Create Post"/> -->
                            </div>
                            <?php echo form_close();?>
                        <!-- </form> -->
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