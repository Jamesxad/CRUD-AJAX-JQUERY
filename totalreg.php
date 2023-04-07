<?php
include 'db.php';
$c = "SELECT id FROM data ORDER BY id";
$cq = mysqli_query($con, $c);

if ($crow = mysqli_num_rows($cq)){
    ?>
    <span><?php echo $crow?></span>
    <?php
}

?>