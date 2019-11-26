
<?php require_once 'includes/header.php';
if (!$this->session->userdata('id')) {
    redirect('Welcome');
}
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
                            <a href="<?=base_url()?>Welcome/blog" class="active" > project</a> 
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


<div class="container">
  <h2>Users Comments</h2>
  <p>You can email the answares.</p>            
  <table class="table">
    <thead>
      <tr  class="info">
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Comment Date</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    foreach ($comments as $comment) {?>
        <tr class="danger">
        <td><?=$comment['name']; ?></td>
        <td><?=$comment['email']; ?></td>
        <td><?=$comment['subject']; ?></td>
        <td><?=$comment['message']; ?></td>
        <td><?=$comment['commentDate']; ?></td>
      </tr>

    <?php }
      
     ?>
    </tbody>
  </table>
</div>




<?php require_once 'includes/footer.php'; ?>