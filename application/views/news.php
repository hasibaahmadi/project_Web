<?php require_once 'includes/header.php'; ?>

  <div class="inner-information-text">
            <div class="container">
            <?php if (!$this->session->userdata('id')) {?>
                    <h3><?php echo $this->lang->line('news'); ?></h3>
                    <ul class="breadcrumb">
                        <li>
                             <a href="<?=base_url()?>Welcome"><i ></i><?php echo $this->lang->line('home'); ?></a>
                        </li>
                        <li class="active">
                            <a href="<?=base_url()?>Welcome/blog" class="active" > <?php echo $this->lang->line('news'); ?></a> 
                        </li> 
                    </ul>
                <?php }else{?>
                    <h3><?php echo $this->lang->line('create_post'); ?></h3>
                    <ul class="breadcrumb">
                        <li>
                            <a href="<?=base_url()?>posts/newPostView"><i ></i><?php echo $this->lang->line('new_post'); ?></a>
                        </li>
                        <li class="active"> 
                            <a href="<?=base_url()?>posts/showPosts" > <?php echo $this->lang->line('back'); ?></a> 
                        </li>
                        <li class="active"> 
                    
                            <a href="<?=base_url()?>posts/getAllPosts" ><?php echo $this->lang->line('show_hide_posts'); ?></a> 
                        </li>
                        <?php if ($this->session->userdata('userType')=='admin') {?>
                            <li class="active"> 
                                <a href="<?=base_url()?>gallery/addImageView" ><?php echo $this->lang->line('add_to_gallery'); ?></a> 
                            </li>
                            <li class="active"> 
                                <a href="<?=base_url()?>projects/goToAddProject" ><?php echo $this->lang->line('add_project'); ?></a> 
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
                 
                  <?php if(!isset($posts)){?>
                      <p>There are no posts on the page.</p>
                  <?php }else{?>
                  <?php foreach ($posts as $post) {?>
                      <div class="feature-post small-blog">
                     <div class="col-md-5">
                        <div class="feature-img">
                           <img src="<?=base_url()?>uplodeImage/<?=$post['image'] ?>" class="img-responsive" alt="post image" />
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="feature-cont">
                           
                           <div class="post-heading">
                              <h3><?php echo $post['title']?></h3>
                              <p><?php echo substr(strip_tags($post['body']),0,200)."..."?></p>
                          <div class="post-info">
                           <!-- <img src="" alt="poster person" /> -->
                           <span>
                                 <h4><?php echo $this->lang->line('post_date'); ?></h4>
                                 <h5><?=$post['postDate'];?></h5>
                              </span>
                           </div>
                              <div class="full">
                                 <a class="btn" href="<?=base_url()?>posts/showPost/<?=$post['id']?>"><?php echo $this->lang->line('Read_More'); ?></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php }} ?>
                  <ul class="pagination pagination-lg">
                    <li><a href=""><?php echo $pages;?></a></li>
                  </ul>
            </div>
         </div>
      </section>
      
   
<?php require_once 'includes/footer.php'; ?>









         