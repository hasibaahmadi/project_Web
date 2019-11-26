
<!DOCTYPE html>
<html lang="en">
  <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Site Metas -->
        <title>AHSAS – Organization</title>
        <meta name="keywords" content="AHSAS">
        <meta name="description" content="Afghan Humanitarian Social and Ambition Services – Organization">
        <meta name="author" content="Hasiba Ahmadi">
        <!-- Site Icons -->
        <link rel="shortcut icon" href="<?=base_url()?>images/header_image.PNG" type="image/x-icon" />
        <link rel="apple-touch-icon" href="<?=base_url()?>images/header_image.PNG">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="<?=base_url()?>css/generalStyle.css">
        <!-- Colors CSS -->
        <link rel="stylesheet" href="<?=base_url()?>css/colors.css">
        <!-- ALL VERSION CSS -->	
        <link rel="stylesheet" href="<?=base_url()?>css/versions.css">
        
        <!-- Gallery style -->
        <link rel="stylesheet" href="<?=base_url()?>css/gallery.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?=base_url()?>css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?=base_url()?>css/custom.css">
        <!-- font family -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- end font family -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=base_url()?>css/3dslider.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <script src="<?=base_url()?>js/3dslider.js"></script>
   </head>
   <body class="game_info" data-spy="scroll" data-target=".header"
   <?php if ($this->session->userdata('language')=='dari') {?>
     style="direction: rtl;"
   <?php } else {?>
    style="direction: ltr;"
   <?php } ?> >
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="<?=base_url();?>images/loading-img.gif" alt="Loding image">
      </div>
      <!-- END LOADER -->
      <section id="top">
         <header>
            <div class="container">
               <div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="logo">
                           <a href="<?=base_url()?>"><img src="<?=base_url()?>images/sport-mate.png" width="227px" height="75px" alt="logo image" /></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right_top_section">
                           <!-- social icon -->
                           <ul class="social-icons pull-left">
                              <li><a class="facebook" href="https://www.facebook.com/AHSAS-126722145393615/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="twitter" href="https://twitter.com/AhsasOrg"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="linkedin" href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a></li>
                           </ul>
                           <!-- end social icon -->
                           <!-- button section -->
                           <ul class="login">
                           <?php if ($this->session->userdata('id')) {?>
                              <li class="login-modal">
                                 <a href="<?=base_url()?>users/logout" class="login"><i class="fa fa-user"></i><?php echo $this->lang->line('logout'); ?></a>
                              </li>
                              <?php if ($this->session->userdata('userType')=='admin') {?>
                              <li>
                                 <div class="cart-option">
                                    <a href="<?=base_url()?>users/registerView"><i ></i><?php echo $this->lang->line('register'); ?></a>
                                 </div>
                              </li>
                              <?php } ?>
                              <li>
                                 <div class="cart-option">
                                    <a href="<?=base_url()?>users/getUsersComments"><i ></i><?php echo $this->lang->line('comments'); ?></a>
                                 </div>
                              </li>
                            <?php } else{?>
                              <li class="login-modal">
                                 <a href="<?=base_url()?>users/login" class="login"><i class="fa fa-user"></i><?php echo $this->lang->line('login'); ?></a>
                              </li>
                            <?php } ?>
                           </ul>
                           <!-- end button section -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="header-bottom">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="main-menu-section">
                              <div class="menu">
                                 <nav class="navbar navbar-inverse">
                                    <div class="navbar-header">
                                       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                       <span class="sr-only">Toggle navigation</span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       </button>
                                       <a class="navbar-brand" href="#">Menu</a>
                                    </div>
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li><a href="<?=base_url();?>Welcome"><?php echo $this->lang->line('home'); ?></a></li> 
                                          <li><a href="<?=base_url();?>Welcome/info"><?php echo $this->lang->line('about'); ?></a></li>                                      
                                          <li><a href="<?=base_url();?>posts/showPosts"><?php echo $this->lang->line('news'); ?></a></li>
                                          <li><a href="<?=base_url();?>projects/showProjectName"><?php echo $this->lang->line('project'); ?></a></li>
                                          <li><a href="<?=base_url();?>gallery/getImages"><?php echo $this->lang->line('gallery'); ?></a></li>
                                          
                                          <li><a href="<?=base_url();?>Welcome/contact"><?php echo $this->lang->line('contact'); ?></a></li>
                                        
                                       </ul>
                                    </div>
                                    <!-- /.nav-collapse -->
                                 </nav>
                                 <div class="search-bar">
                                    <div id="imaginary_container">
                                        <div class="list-group">
                                          <a href="<?=base_url();?>posts/language/dari" class="list-group-item" ><?php echo $this->lang->line('dari'); ?></a>
                                          <a href="<?=base_url();?>posts/language/english" class="list-group-item"><?php echo $this->lang->line('english'); ?></a>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>

          <div class="inner-page-banner">
            <div class="container">
            </div>
          </div>
      
     