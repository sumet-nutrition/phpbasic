<?php

$height=['john'=>179,'suse'=>175,'robert'=>185];
print_r($height);
echo '<hr>';
foreach ($height as $key=>$value) {
    //echo $height['robert'];
   echo 'key :'.$key.' / value: '.$value;
   echo '<hr>';
    
}
        
        ?>