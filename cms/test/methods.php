<?php
class abc{}
//$checkmethods=get_class_methods('PDO');
//
//foreach($checkmethods as $methods){
//echo $methods ."<br>";
//}

$getclasses=get_declared_classes();
foreach($getclasses as $class){
echo $class ."<br>";
}
?>