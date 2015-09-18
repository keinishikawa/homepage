<?php
 $userdata[]=array(
'id'=>1,
'user_name'=>'subaru',
'title'=>'title1',
'content'=>'content1',
  	);
  $userdata[]=array(
'id'=>2,
'user_name'=>'kurumi',
'title'=>'title2',
'content'=>'content2',
  	);
   $userdata[]=array(
'id'=>3,
'user_name'=>'sakura',
'title'=>'title3',
'content'=>'content3',
  	);
    $userdata[]=array(
'id'=>4,
'user_name'=>'michel',
'title'=>'title4',
'content'=>'content4',
  	);
  	foreach($userdata as $key=>$value){
  echo $value['title'];
  }

?>