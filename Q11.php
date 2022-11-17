<?php
	$bc = array('limegreen','aqua','red','yellow','blue','orange','black','purple','peach','cyan');
    $rb = $bc[array_rand($bc)];
?>
<html>
    <body style="background: <?php echo $rb;?>;">
    </body>
</html>