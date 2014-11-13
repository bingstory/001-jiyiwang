<?php
header('Content-Type:text/html; charset=utf-8');
$test=0;

if($test==''){
 echo '1<br />在php中，0即为空<br />'; //被输出
}

if($test===''){
 echo '2<br />在php中，0即为空<br />'; //不被输出
}

if($test==NULL){
 echo '3<br />在php中，0即为空<br />'; //被输出
}

if($test===NULL){
 echo '4<br />在php中，0即为空<br />'; //不被输出
}

if($test==false){
 echo '5<br />在php中，0即为空<br />'; //被输出
}

if($test===false){
 echo '6<br />在php中，0即为空<br />'; //不被输出
}
if(empty($test)){
 echo '7<br />在php中，0即为空<br />'; //不被输出
}

if($test===false){
 echo '6<br />在php中，0即为空<br />'; //不被输出
}

?>