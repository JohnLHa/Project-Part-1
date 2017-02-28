<?php
header("Content-type:text/javascript");
//The directory of your images
$dir = "Images/nails";
echo "var images = [";
$arr = preg_grep("/[A-Za-z0-9].(jpg|png|bmp|jpeg)/",scandir($dir));
$index = 0;
foreach($arr as $value) {
    $index++;
    if($index < count($arr)) {
        echo "\"" . $dir . "/" . $value . "\", ";
    }
    else {
        echo "\"" . $dir . "/" . $value . "\"";
    }
}
echo "];";

?>