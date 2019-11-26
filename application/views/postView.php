<?php require_once 'includes/header.php'; 
// $this->session->userdata('item');
//                // redirect('posts/showPosts');

?>

<div class="inner-information-text">
            <div class="container">
            <?php if (!$this->session->userdata('id')) {?>
                    <h3>News</h3>
                    <ul class="breadcrumb">
                        <li>
                             <a href="<?=base_url()?>Welcome"><i ></i><?php echo $this->lang->line('home'); ?></a>
                        </li>
                        <li class="active">
                            <a href="<?=base_url()?>Welcome/blog" class="active" > news</a> 
                        </li> 
                    </ul>
                <?php }else{?>
                    <h3>Create Post</h3>
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
               <?php if (!isset($post)) {?>
                   <p>Accesed incorectly</p>
               <?php } else {?>
                   <div class="feature-post">
                   <div class="feature-img">
                      <img src="<?=base_url()?>uplodeImage/<?=$post['image'];?>" class="img-responsive" alt="post image" />
                   </div>
                   <div class="feature-cont">
                      <div class="post-people">
                         <div class="left-profile">
                            
                            <span class="share"></span>
                         </div>
                      </div>
                      <div class="post-heading">
                         <h3><?php echo $post['title']  ?></h3>
                         <p><?php echo $post['body']  ?></p>
                         <div class="post-info">
                           <!-- <img src="" alt="poster person" /> -->
                           <span>
                                 <h4>Post Date</h4>
                                 <h5><?=$post['postDate'];?></h5>
                              </span>
                           </div>
                         <?php if ($this->session->userdata('id')) {?>
                         <div class="full">
                            <a class="btn" href="<?=base_url()?>posts/deletePost/<?=$post['id']?>">Delete Post</a>
                         <!-- </div> -->
                         <!-- <div class="full"> -->
                            <a class="btn" href="<?=base_url()?>posts/edit/<?=$post['id']?>">Update Post</a>
                         </div>
                         <?php } ?>
                      </div>
                   </div>
                </div>  
              <?php }
                ?>
                  
            </div>
            </div>
         </div>
      </section>

<?php require_once 'includes/footer.php'; ?>