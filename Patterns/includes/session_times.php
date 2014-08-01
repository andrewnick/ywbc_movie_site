<?php 
	$currentDate = new DateTime();
	$currentDate->setTimeStamp(time());
	$currentDate->setTimezone(new DateTimeZone('Pacific/Auckland'));

	echo $currentDate->format('U = Y-m-d H:i:s') . "\n";

	$movie_sessions = array(
			'Monday' =>	array('6:30pm', '8:40am'),
			'Tuesday' =>	array('4:00pm', '5:40am'),
			'Wednesday' =>	array('6:45pm', '7:40am'),
			'Thursday' =>	array('8:30pm', '9:40am'),
			'Friday' =>	array('10:30pm', '11:40am'),
			'Saturday' =>	array('12:30pm', '1:40am'),
			'Sunday' =>	array('2:30pm', '3:40am'),
		);

	$daysOfTheWeek = array('Monday', 'Tuesday',"Wednesday","Thursday","Friday","Saturday","Sunday");

	//var_dump($movie_sessions);

	$nextFiveDays = array();
	$currentDayName = $currentDate->format('l');

	// $currentDay = intval($currentDate->format('N'));
	// echo "<br />".$currentDay;

	// Set both pointers to the start of the array;
	reset($nextFiveDays);
	reset($movie_sessions);

	// Movie moive times point to current day
	while ( key($movie_sessions)!= $currentDayName){
		next($movie_sessions);
	}

	for ($i=0; $i < 5; $i++) { 

		if(($movieItem['key']) == "Sunday") {
			reset($movie_sessions);
		}

		$movieItem = each($movie_sessions);
		$nextFiveDays[$movieItem['key']] = $movieItem['value'];
	}

	//$movieIndex = $currentDay - 1;

	// for ($i=0; $i < 5; $i++) {

	// 	if ($movieIndex >= 7) {
	// 		$movieIndex = 0;
	// 	}

	// 	$nextFiveDays[$i] = $movie_sessions[$movieIndex];
	// 	$movieIndex++;
	// }

	var_dump($nextFiveDays);
?>
<!-- 	<section class="session_times col-md-3">

	<h5 class="tickets__result__session__title">Session Times</h5>

<?php	foreach ($movie_sessions as $session_day => $session_times) : ?>
			
				<article class="row">

					<div class="col-md-4">
						<p class="body_text tickets__result__session__day"><?php echo $session_day; ?></p>
					</div>

 					<?php foreach ($session_times as $session): ?>
						<div class="col-md-3">
							<p class="body_text tickets__result__session__day tickets__result__session__text__time"><?php echo $session; ?></p>
						</div>
					<?php endforeach ?>
	
				</article>
<?php 	endforeach ?> -->

	<!-- <section class="session_times col-md-3">

		<h5 class="tickets__result__session__title">Session Times</h5>

		<article class="row">
			<div class="col-md-3">
				<p class="body_text tickets__result__session__day">Monday</p>
			</div>
			<div class="col-md-3">
				<p class="body_text tickets__result__session__day tickets__result__session__text__time">6:30pm</p>
			</div>
			<div class="col-md-3">
				<p class="body_text tickets__result__session__day tickets__result__session__text__time">8:30pm</p>
			</div>
		</article>

		<article class="row">
			<div class="col-md-3">
				<p class="body_text tickets__result__session__day">Tuesday</p>
			</div>
			<div class="col-md-3">
				<p class="body_text tickets__result__session__day tickets__result__session__text__time">6:30pm</p>
			</div>
			<div class="col-md-3">
				<p class="body_text tickets__result__session__day tickets__result__session__text__time">8:30pm</p>
			</div>
		</article>

	</section> -->