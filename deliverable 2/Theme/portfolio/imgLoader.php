<?php
$img0="empty";
$img1="empty";
$img2="empty";

$posttags = get_the_tags();

   if ($posttags) {      
    for($i = 0; $i <= sizeof($posttags); $i++) {
        if($posttags[$i]->name !=""){          
            ${"img$i"} = $posttags[$i]->name;         
        }    
}    
  
   }
?>
