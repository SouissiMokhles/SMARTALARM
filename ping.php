<?php
$str = exec("ping -n 1 -w 1 10.2.1.3", $res, $rev);
if $rev==0 {
	echo ("pinged");
}
else
{
	echo ("not pinged");
}
?>

