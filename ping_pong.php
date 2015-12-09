<!DOCTYPE html>
<html>
	<?php
		$input= $_GET["input"];
		for ($x=1; $x <= $input; $x++) {
			if ($x%3==0 && $x%5==0) {
				echo "Ping_Pong ";
			} elseif ($x%3==0) {
				echo "Ping ";
			} elseif ($x%5==0) {
				echo "Pong ";
			} else {
				echo $x. " ";
			}
		}
	?>
</html>