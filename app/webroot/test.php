<?php
  $userdata=array(
'id'=>1,
'user_name'=>'subaru',
'title'=>'title1',
'content'=>'content1'
  	);
  foreach($userdata as $key=>$value){
  	var_dump($key);
  	var_dump($value);
  }
?>