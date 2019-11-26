<?php require_once 'includes/header.php'; ?>

 <div class="inner-information-text">
            <div class="container">
            <?php if (!$this->session->userdata('id')) {?>
                    <h3><?php echo $this->lang->line('project'); ?></h3>
                    <ul class="breadcrumb">
                        <li>
                             <a href="<?=base_url()?>Welcome"><i ></i><?php echo $this->lang->line('home'); ?></a>
                        </li>
                        <li class="active">
                            <a href="<?=base_url()?>Welcome/blog" class="active" > <?php echo $this->lang->line('project'); ?></a> 
                        </li> 
                    </ul>
                <?php }else{?>
                    <h3><?php echo $this->lang->line('add_project'); ?></h3>
                    <ul class="breadcrumb">
                        <li>
                            <a href="<?=base_url()?>posts/newPostView"><i ></i>New Post</a>
                        </li>
                        <li class="active"> 
                            <a href="<?=base_url()?>posts/showPosts" > Back</a> 
                        </li>
                        <li class="active"> 
                    
                            <a href="<?=base_url()?>posts/getAllPosts" > Show hide Posts</a> 
                        </li>
                        <?php if ($this->session->userdata('userType')=='admin') {?>
                            <li class="active"> 
                                <a href="<?=base_url()?>projects/goToRegisterProject" >Add to gallary</a> 
                            </li>
                            <li class="active"> 
                                <a href="<?=base_url()?>projects/goToAddProject" >Add project</a> 
                            </li>
                        <?php  } ?>
                    </ul>
                <?php }?>
            </div>
        </div> 
     </section> 
 <section id="contant" class="contant main-heading team">
         <div class="row">
            <div class="container">
               <div class="col-md-9">
               <?php if (!isset($project)) {?>
                   <p>Accesed incorectly</p>
               <?php } else {?>
                   <div class="feature-post">
                 
                   <div class="feature-cont">
                      <div class="post-people">
                         <div class="left-profile">
                            
                            <span class="share"></span>
                         </div>
                      </div>
                      <div class="post-heading">
                         <h3>Project Name: <?php echo $project['name'] ?></h3>
                         <p><b>Project Location:</b> <?php echo $project['location']  ?></p>
                         <p><b>Project Duration: </b><?php echo $project['duration']  ?></p>
                         <p><b>Project Donor: </b><?php echo $project['donor']  ?></p>
                         <p><b>Project Cause:</b> <?php echo $project['cause']  ?></p>
                         <p><b>Project Event: </b><?php echo $project['event']  ?></p>
                         <div class="post-info">
                           <!-- <img src="" alt="poster person" /> -->
                           <span>
                                 <h4>Start Date</h4>
                                 <h5><?=$project['startDate'];?></h5>
                              </span>
                              <span>
                                 <h4>End Date</h4>
                                 <h5><?=$project['endDate'];?></h5>
                              </span>
                           </div>
                         <?php if ($this->session->userdata('userType')=='admin') {?>
                         <div class="full">
                            <a class="btn" href="<?=base_url()?>projects/deleteProject/<?=$project['id']?>">Delete Project</a>
                         <!-- </div> -->
                         <!-- <div class="full"> -->
                            <a class="btn" href="<?=base_url()?>projects/edit/<?=$project['id']?>">Update Project</a>
                         </div>
                         <?php } ?>
                      </div>
                   </div>
                </div>  
              <?php } ?>
            </div>
            </div>
         </div>
      </section>
<?php require_once 'includes/footer.php'; ?>