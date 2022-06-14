<?php
// 

$val = "ad";

function isNumber ($val){
    return is_numeric($val);
}

if (isNumber($val)) {
  echo "valは数字です";
} 
else {
  echo "valは数字ではありません";
}
?>