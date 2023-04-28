<!DOCTYPE html>
<html>
<body>

<?php
  function sumElement($nums, $sum) {
    for($i = 0; $i < count($nums); $i++){
      for($j = $i+1; $j < count($nums); $j++){
        if($nums[$i] + $nums[$j] == $sum){
          return "$i, $j";
        }
      }
    }
  }

  $nums = [2,7,11,15]; //input here
  $sum = 9; //input here

  $numDisplay = implode(",", $nums);
  //display
  echo "Input: nums = [$numDisplay], sum = $sum<br>";
  echo "Output: ".(sumElement($nums, $sum));

?>

</body>
</html>