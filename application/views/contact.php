<?php require_once 'includes/header.php'; ?>

         <div class="inner-information-text">
            <div class="container">
               <h3><?php echo $this->lang->line('contact'); ?></h3>
               <ul class="breadcrumb">
                  <li><a href="index.html"><?php echo $this->lang->line('home'); ?></a></li>
                  <li class="active"><?php echo $this->lang->line('contact'); ?></li>
               </ul>
            </div>
         </div>
      </section>
      <section id="contant" class="contant main-heading team">
         <div class="row">
            <div class="container">
               <div class="contact">
                  <!-- <div class="col-md-12">
                     <div class="map"> 
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.580671926123!2d77.31096031514461!3d28.582351982437654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfcad59dc9d0b%3A0xe4060212422c0b9a!2sLeopedia+Web+Solutions!5e0!3m2!1sen!2sin!4v1511962485065" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                     </div>
                  </div> -->
                  <div class="col-md-6">
                     <div class="contact-info">
                        <div class="kode-section-title">
                           <h3><?php echo $this->lang->line('Contact_Info'); ?></h3>
                        </div>
                        <div class="kode-forminfo">
                           <p>_____________________________________________</p>
                           <ul class="kode-form-list">
                              <li>
                                 <i class="fa fa-home"></i> 
                                 <p><strong><?php echo $this->lang->line('address'); ?>:</strong>13 Goharshad Road, Gohshad Street, Herat Road, Mostofit Road </p>
                              </li>
                              <li>
                                 <i class="fa fa-phone"></i> 
                                 <p><strong><?php echo $this->lang->line('Phone'); ?>:</strong>  +93 795658615</p>
                              </li>
                              <li>
                                 <i class="fa fa-envelope-o"></i> 
                                 <p><strong><?php echo $this->lang->line('email'); ?>:</strong>  info@ahsas.org.af</p>
                              </li>
                           </ul>
                        </div>
                     </div>
              </div>
            <div class="col-md-6">
                     <!-- <div class="contact-us"> -->
                    <?php
                if($_POST){
                    if ($error) {
                        echo $error;
                    }else{
                        echo "your massage is send";
                    }
                }
                    ?>
                            
                        
                <div class="contact-us">
                    <form  action="<?=base_url();?>users/userMessage"  method="post"  >
                           <ul>
                              <li><input type="text" id="name" name="name" class="required" placeholder="<?php echo $this->lang->line('name'); ?> *"></li>
                              <li><input type="text" id="email" name="email" class="required email" placeholder="<?php echo $this->lang->line('email'); ?> *"></li>
                              <li><input type="text" name="subject" id="subject" placeholder="<?php echo $this->lang->line('subject'); ?>"></li>
                              <li><textarea name="message" id="message" placeholder=" <?php echo $this->lang->line('message'); ?> *"></textarea></li>
                              <li><input class="thbg-color" type="submit" value="<?php echo $this->lang->line('send'); ?>"></li>
                           </ul>
                           <div class="hidden-me" id="contact_form_responce">
                              <p></p>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php require_once 'includes/footer.php'; ?>

name
