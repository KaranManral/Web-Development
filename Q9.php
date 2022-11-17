	<?php
	$n=4;
	for($i=0;$i<$n;$i++){
	for($j=0;$j<2*$n-1;$j++){
	if(($i+$j)<$n || ($i+$j)>=$n+2*$i-1)echo"*";
	else echo"&nbsp;&nbsp;";
	}
	echo "<br>";
	}
	for($i=1;$i<$n;$i++){
	for($j=0;$j<2*$n-1;$j++){
	if($j<=$i || ($i+$j)>=$n+($n/2))echo"*";
	else echo "&nbsp;&nbsp;";
	}
	echo"<br>";
	}
	?>