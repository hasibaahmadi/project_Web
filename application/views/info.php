
<?php require_once 'includes/header.php'; ?>
         
         <div class="inner-information-text">
            <div class="container">
               <h3><?php echo $this->lang->line('about'); ?></h3>
               <ul class="breadcrumb">
                  <li><a href="index.html"><?php echo $this->lang->line('home'); ?></a></li>
                  <li class="active"><?php echo $this->lang->line('about'); ?></li>
               </ul>
            </div>
         </div>
      </section>

      <section id="contant" class="contant main-heading team">
         <div class="row">
            <div class="container">
               <div class="col-md-9">
                  <div class="feature-post">
                     <div class="feature-img">
                        <img src="<?=base_url()?>images/img-01_002.jpg" class="img-responsive" alt="info image" />
                     </div>
                     <div class="feature-cont">
                        <div class="post-people">
                           <div class="left-profile">
                              <span class="share"></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="feature-post small-blog">
                     <div class="col-md-5">
                        <div class="feature-img">
                           <img src="<?=base_url()?>images/info.jpg" class="img-responsive" alt="ahsas image" />
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="feature-cont">
                          
                           <div class="post-heading">
                              <h3><?php echo $this->lang->line('info_title'); ?></h3>
                              <p><?php echo $this->lang->line('info_body'); ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
    
<?php require_once 'includes/footer.php'; ?>