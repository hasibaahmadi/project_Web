<?php require_once 'includes/header.php'; 
// $this->session->userdata('item');
// if (!$this->session->userdata('id')) {
    // redirect('posts/showPosts');
//     echo "your are loged in!"
//     ?>
<!-- //     <a href="http://localhost/new_ahsas/users/logout">Logout</a> -->
     <?php
// } else {?>
<!-- //     <a href="http://localhost/new_ahsas/users/login">login</a>-->
<?php
// }
?>
<div class="inner-information-text">
            <div class="container">
            <?php if (!$this->session->userdata('id')) {?>
                    <h3>Gallery</h3>
                    <ul class="breadcrumb">
                        <li>
                             <a href="<?=base_url()?>Welcome"><i ></i>Home</a>
                        </li>
                        <li class="active">
                            <a href="<?=base_url()?>Welcome/blog" class="active" > gallery</a> 
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


  <p class="heading">Gallery</p>
  <div class="gallery-image">
    <?php if (!isset($images)) {
        echo "no image";
    } else {?>
        <?php  foreach ($images as $image ) {?>
        <div class="img-box">
        <img src="<?=base_url()?>Gallery/<?=$image['image']; ?>" alt="gallery image" />
        <div class="transparent-box">
        <div class="caption">
        <?php if ($this->session->userdata('userType')==='admin') {?>
            <p> <a class="btn" href="<?=base_url()?>gallery/deleteImage/<?=$image['id']?>">Delete</a></p>
            <p><a class="btn" href="<?=base_url()?>gallery/editImage/<?=$image['id']?>">Update</a></p>

        <?php } else {?>
            <p><?=$image['caption']; ?></p>
            <p class="opacity-low"><?=$image['body']; ?></p>
        <?php } ?>
            
        </div>
    </div> 
        
    </div>
    <?php }  }?>
  </div>
  <?php require_once 'includes/footer.php'; ?>