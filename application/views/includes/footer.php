
      <footer id="footer" class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="full">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <a href="#">                          
                                <a href="index.html"><img src="<?=base_url()?>images/sport-mate.png" width="227px" height="75px" alt="logo image" /></a>
                            </a>
                        </div>
                        <br>
                        <ul class="social-icons style-4 pull-left">
                            <li><a class="facebook" href="https://www.facebook.com/AHSAS-126722145393615/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="https://twitter.com/AhsasOrg"><i class="fa fa-twitter"></i></a></li>  
                            <li><a class="linkedin" href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a></li>                      
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="full">
                     <div class="footer-widget">
                        <h3><?php echo $this->lang->line('menu'); ?></h3>
                        <ul class="footer-menu">
                        <li class="active"><a href="<?=base_url();?>Welcome"><?php echo $this->lang->line('home'); ?></a></li>
                        <li><a href="<?=base_url();?>Welcome/info"><?php echo $this->lang->line('about'); ?></a></li>                                      
                        <li><a href="<?=base_url();?>posts/showPosts"><?php echo $this->lang->line('news'); ?></a></li>
                        <li><a href="<?=base_url();?>Welcome/contact"></a></li>
                        </ul><?php echo $this->lang->line('contact'); ?>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="footer-widget">
                        <h3><?php echo $this->lang->line('contact'); ?></h3>
                        <ul class="address-list">
                           <li><a><i class="fa fa-map-marker"></i> 1 Street, Herat Road, Mostofit Road</li></a>
                           <li><a><i class="fa fa-phone"></i> +93 799958615</li></a>
                           <li><a><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> info@example.org</li></a>
                        </ul>
                     </div>
                  </div>
               </div>
             
            </div>
         </div>
         <div class="footer-bottom">
            
         </div>
      </footer>
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="<?=base_url()?>js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="<?=base_url()?>js/custom.js"></script>
   
   </body>
</html>