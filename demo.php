<?php
$array = array("Invoice=>PP9685","Creation Time"=>"","Death Time"=>"");
foreach ($array as $key => $value) {
    $value = trim($value);
    if (empty($value))
        echo "$key empty <br/>";
    else
        echo "$key not empty <br/>";
}
?>