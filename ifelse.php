<?php

//demonstration of if...elseif...else statement
$per=33;

	if($per>=65)
	{
		$grade='A+';
		echo "<strong>Congratulations! You secured ".$grade." grade.</strong>";
	}
	elseif($per<65 && $per>=60)
	{
			$grade='A';
		echo "<strong>Congratulations! You secured ".$grade." grade.</strong>";
	}
	elseif($per<60 && $per>=55)
	{
			$grade='B+';
		echo "<strong>Congratulations! You secured ".$grade." grade.<strong>";
	}
	elseif($per<55 && $per>=50)
	{
			$grade='B';
		echo "<strong>Congratulations! You secured ".$grade." grade.</strong>";
	}
	elseif($per<50 && $per>=45)
	{
			$grade='C';
		echo "<strong>Congratulations! You secured ".$grade." grade.</strong>";
	}
	else
	{
		echo "<strong>Sorry, you failed!</strong><br>";
		echo "<strong>Study hard</strong>";
	}
?>
</body>
</html>