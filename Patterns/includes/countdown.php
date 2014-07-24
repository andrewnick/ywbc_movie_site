	<?php 

		date_default_timezone_set('Pacific/Auckland');

		$rDay = 1;
		$rMonth = 8;
		$rYear = 2014;

		$rHour = 16;
		$rMinute = 0;
		$rSecond = 0;

		$releaseDate = new DateTime();
		$rTimeStamp = mktime($rHour,$rMinute,$rSecond,$rMonth,$rDay,$rYear);
		echo "Current Date: ";
		echo $rTimeStamp."<br/>";

		$releaseDate->setTimeStamp(mktime($rHour,$rMinute,$rSecond,$rMonth,$rDay,$rYear));

		$currentTime = new DateTime();
		$currentTime->setTimeStamp(time());

		$timeDifference = $releaseDate->diff($currentTime);
		$timeUntilRelease = $timeDifference->format('%d/%m %H:%i:%s') . "<br/>";
		
		echo "Current Date: ";
		echo $currentTime->format('U = d-m-Y H:i:s') . "<br/>";
		echo "Release Date: ";
		echo $releaseDate->format('U = d-m-Y H:i:s') . "<br/>";
	?>

	<article>
		<h2 class='countdown countdown__title'> Countdown </h2>
		<!-- <h3 class="countdown countdown_counter"> 15/02  12:35:24 </h3> -->
		<h3 class="countdown countdown_counter"> <?php echo $timeUntilRelease;  ?></h3>
	</article>