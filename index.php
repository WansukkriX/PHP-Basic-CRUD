<?php

    $a = 10;
    $b = 20;
    $c = $b . "Hello";
    $style = "background-color: red;"

?>

<div style="<?php echo $style; ?> color:yellow;">
 <?php echo $c; ?> </div>

<div><?php echo $a + $b; ?> </div>