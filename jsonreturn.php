<?php 

$item = new stdClass();
$item->itemId = 12341822 ;
$item->itemName = "FGX Flanel shirt" ;
$item->price =  195000 ;
$item->freeShiping = false;

$item->availableColorAndSize = array (
array ("color"=>"red","size"=>"S","M","L"),
array ("color"=>"solid","size"=>"M","L")
);
		
$data = json_encode($item);
echo $data; 
//
?>
