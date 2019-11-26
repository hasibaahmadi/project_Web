<?php require_once 'includes/homeHeader.php'; ?>
         <!-- <div class="full-slider"> -->

                <div class="fling-minislide">
                        <img src="<?=base_url();?>images/slideshow/Slide 5.jpg"alt="Slide 5" />
                        <img src="<?=base_url();?>images/slideshow/Slide 4.jpg"alt="Slide 4" />
                        <img src="<?=base_url();?>images/slideshow/Slide 3.jpg" alt="Slide 3" />
                        <img src="<?=base_url();?>images/slideshow/Slide 2.jpg" alt="Slide 2" />
                        <img src="<?=base_url();?>images/slideshow/Slide 1.jpg" alt="Slide 1" />
                      </div>

            <!-- /.carousel -->
            <div class="news">
               <div class="container">
                  <div class="heading-slider">
                     <p class="headline"><i class="fa fa-star" aria-hidden="true"></i> AHSAS :</p>
                     <h1>
                     <a href="" class="typewrite" data-period="2000" data-type='[ "Afghan Humanitarian Social and Ambition Services – Organization.", "Afghan Humanitarian Social and Ambition Services – Organization.", "Afghan Humanitarian Social and Ambition Services – Organization."]'>
                     <span class="wrap"></span>
                     </a>
                    </h1	>   
                     <span class="wrap"></span>
                     </a>
                  </div>
               </div>
            </div>
      </section>
      <section id="contant" class="contant">
      
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-4 col-xs-12">
                  <aside id="sidebar" class="left-bar">
                     <div class="banner-sidebar">
                        <img class="img-responsive" src="<?=base_url();?>images/img-03_002.jpg" alt="#" />
                        <h3></h3>
                     </div>
                  </aside>
                  <div class="content-widget top-story" style="background: url(<?=base_url();?>images/top-story-bg.jpg);">
                        <div class="top-stroy-header">
                           <h2 class="">  What are we doing in Afghanistan? </h2><br>
                           <span class="fa fa-fa fa-angle-right date">Our activities include the following sections.  </span>
                        </div>
                        <ul class="other-stroies">
                           <li><a href="#demo" data-toggle="collapse">Social service</a></li>
                           <li><a href="#demo1" data-toggle="collapse">Education and training</a></li>
                           <li><a href="#demo2" data-toggle="collapse"> Mental health and counseling</a></li>
                           <li><a href="#demo3" data-toggle="collapse">Agriculture activities</a></li>
                        </ul>
                     </div>
               </div>
               <div class="col-lg-8 col-sm-8 col-xs-12">
                  <div class="news-post-holder">
                     <div class="news-post-widget">
                        <img class="img-responsive" src="<?=base_url();?>images/img-07.jpg" alt="">
                        <div class="news-post-detail">
                           <span class="date"></span>
                           <h2><a >Activities</a></h2>
                           <?php echo $this->lang->line('key'); ?>

                           <p>Developing several seminars to raise awareness of different age groups in order to enhance the mental health of individuals in the community, such as:</p>
                           <ul class="icon-list">
                              <li><i class="fa fa-angle-right"></i> The right way to study learning.</li>
                              <li><i class="fa fa-angle-right"></i> Anxiety and depression.</li>
                              <li><i class="fa fa-angle-right"></i> How to set our goals.</li>
                              <li><i class="fa fa-angle-right"></i> Ways to Succeed.</li>
                              <li><i class="fa fa-angle-right"></i> Pre-exam stress.</li>
                              <li><i class="fa fa-angle-right"></i>Self-confidence enhancing methods.</li>
                              <li><i class="fa fa-angle-right"></i>Speech fan.</li>
                              <li><i class="fa fa-angle-right"></i> Stress.</li>
                              
                              
                           </ul>
                        </div>
                     </div>
                </div>
               
             </div>
           
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                  <div class="team-holder theme-padding">
                    <div class="container">
                        <div class="main-heading-holder">
                            <div class="main-heading sytle-2">
                                <h2>About us</h2>
                               
                                <p>Considering the current situation and the hope for a better tomorrow,
                                the team of the Afghan Humanitarian Social and Innovative Service Institute, 
                                realizing its urgent needs and human responsibilities, has recognized its duty as a social institution in 1398 with the aim of transforming personal and social life.<br>
                                Create every Afghan in the sectors of social services and livelihoods, education, health and agriculture...
                            </p>
                            <a href="<?=base_url();?>Welcome/about">Read More</a>
                            </div>
                        </div>
                    </div>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <section class="video_section_main theme-padding middle-bg vedio">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="match_vedio">
                        <div class="embed-responsive embed-responsive-16by9"> 
                            <video class="homeVideo" controls loop>
                                <source  src="video/homeVideo.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="team-holder theme-padding">
         <div class="container">
            <div class="main-heading-holder">
               <!-- <div class="main-heading sytle-2">
                  <h2>Activities</h2>
                  <p>Developing several seminars to raise awareness of different age groups <br>in order to enhance the mental health of individuals in the community.<br></p>
               </div> -->
            </div>
            
         </div>
      </div>
      
	  <?php require_once 'includes/footer.php'; ?>