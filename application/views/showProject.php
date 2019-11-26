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
                    <h3><?php echo $this->lang->line('project'); ?></h3>
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
                                <a href="<?=base_url()?>projects/goToRegisterProject" ><?php echo $this->lang->line('add_to_gallery'); ?></a> 
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
<div class="container">

  <h2>List of orgnization projects</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>            
  


<?php if(!isset($projects)){?>
  <p>There are no project yet.</p>
  <?php echo "<pre>";print_r($data['projects']);echo "</pre>";?>
<?php }else{?>
    <!-- table table-hover table-fixed -->
  <table class="table table-bordered table-hover table-fixed">
    <thead>
      <tr class="success">
        <th>Project Name</th>
        <th>Location</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Duration</th>
        <th>Donor</th>
        <th>State</th>
        <th>Event</th>
        <!-- <th>Cause</th> -->
      </tr>
    </thead>
    <tbody>
    <?php foreach ($projects as $project ) {?>
      <tr >
        <td><?php echo $project['name']; ?></td>
        <td><?php echo $project['location']; ?></td>
        <td><?php echo $project['startDate']; ?></td>
        <td><?php echo $project['endDate']; ?></td>
        <td><?php echo $project['duration']; ?></td>
        <td><?php echo $project['donor']; ?></td>
        <td><?php echo $project['state']; ?></td>
        <td><a href="<?php echo base_url();?>projects/projectView/<?=$project['id'];?>">Read More</a></td>
      </tr>
    <?php } ?> 
    </tbody>
    </table>
  <?php } ?>
</div>
<!-- end continer div --->
</div>
</div>
</div>
</section>
<?php require_once 'includes/footer.php'; ?>