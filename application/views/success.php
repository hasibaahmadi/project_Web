<?php

foreach ($upload_data as $key => $value) {
    # code...
    echo $key .'_    '.$value .'<br>';
}

?>


<img src="<?=base_url()?>uplodeImage/<?=$upload_data['file_name'];?>">