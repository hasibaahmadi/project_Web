<?php


?>
<!DOCTYPE html>
<html>
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 40px;
        }
    </style>
<body>

<h3>Add project data.</h3>

<div>
<form method="POST" enctype="multipart/form-data" action="<?=base_url();?>gallery/updateImage/<?=$info['id']?>" >
<?php //echo form_open_multipart("gallery/updateImage/$info['id']"); ?>
  <!-- <form enctype="" action="<?php//base_url()?>projects/newProject" method="post"> -->
    <label for="image">Image</label>
    <!-- <input type="file" id="image" name="image" > -->
   <?php 
   //$data_form=array('name'=>'image' );echo form_upload($data_form);?>
   <div class="form-group">
                                <label for="image"></label>
                                <input type="file" name="image" id="image" />
                            </div>
    <br>
    <br>
    <label for="caption">Caption</label>
    <input type="text" id="caption" name="caption" value="<?=$info['caption']; ?>" >
    <label for="body">Information</label>
    <input type="text" id="body" name="body" value="<?=$info['body']; ?>">
  <!-- <textarea name="cause" placeholder="Enter the project cause." rows="10" cols="40"></textarea> -->
  <?php //echo form_submit('','Update'); ?>
    <input type="submit" value="update">
    <?php //echo form_close();?> 
    </form>
</div>
</body>
</html>
