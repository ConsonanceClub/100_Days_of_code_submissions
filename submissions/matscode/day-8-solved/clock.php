<?php

/**
 *
 * Description
 *
 * @package        100 Days of Code
 * @category       Source
 * @author         Michael Akanji <matscode@gmail.com> {@link http://michaelakanji.com}
 * @date           2017-10-12
 *
 */
class Clock
{
	private
		$currentTime,
		$notifyEndTime = 0,
		$alarmTime;

	public function __construct( $alarmTime = 0 )
	{
		// set current time
		$this->currentTime = time();
		// set alarm time
		$this->setAlarm( $alarmTime );
		// displays clock...
		$this->render( $this->currentTime );
		// sound alarm
		$this->soundAlarm();
	}

	public function render( $currentTime )
	{
		// return time string
		echo date( 'D M l, Y - <b>H:i:s</b>', $currentTime );
	}

	public function setAlarm( $timeInFuture, $alertSecond = 10 )
	{
		$this->alarmTime = strtotime( $timeInFuture );

		// notification disappear after?
		$this->notifyEndTime = $this->alarmTime + $alertSecond;

		// Debugging Purpose...
		echo
		'<small class="help-block">',
		'currentTime: ', $this->currentTime, '<br>',
		'alarmTime: ', $this->alarmTime, '<br>',
		'notifyEndTime: ', $this->notifyEndTime, '<br>',
		'</small>';

		// return void
	}

	public function soundAlarm()
	{
		// is it time?
		if ( $this->currentTime > $this->alarmTime && $this->currentTime < $this->notifyEndTime ) {
			echo '<div class="alert alert-success margin-10">Alarm Sounding, It is time...</div>';
		}

	}
}

// get user input
$userAlarmTime = ( @$_GET['alarmTime'] );
$enableAlarm   = (int) ( @$_GET['enableAlarm'] );
?>

<html>
	<head>
		<title>Clock with Alarm</title>

		<?= ( $enableAlarm != 1 ) ? '<meta http-equiv="refresh" content="0.9">' : '' ?>

		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/spacings.css">
	</head>
	<body class="container padding-vertical-10">
		<div class="row">
			<div class="col-sm-4">
				<h1 class="text-muted">Clock</h1>

				<!--// Passage Test result-->
				<h4>
					<?php ( new Clock( $userAlarmTime ) ) ?>

				</h4>
				<?= ( $enableAlarm == 1 )
					? '<small class="label label-warning">Time Paused</small> <div class="help-block small">Remeber to click Set Alarm Button</div>'
					: '' ?>

				<hr>

				<!--// request user input-->
				<?php if ( $enableAlarm ): ?>
					<form>
						<div class="form-group">
							<input name="alarmTime"
							       placeholder="2017-10-12 23:00"
							       value="<?= $userAlarmTime ?>"
							       class="form-control">
						</div>
						<div class="form-group">
							<input type="submit"
							       value="Set Alarm"
							       class="btn btn-primary">
						</div>
					</form>
				<?php else: ?>
					<a href="?enableAlarm=1" class="btn btn-default">Enable Alarm</a>
				<?php endif; ?>
			</div>
		</div>
	</body>
</html>
