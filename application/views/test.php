<?php  echo $error;
echo form_open_multipart('posts/upload_');
$data_form=array(
    'name'=>'userfile'
);
echo form_upload($data_form);
echo form_submit('','submit');
echo form_close();?>