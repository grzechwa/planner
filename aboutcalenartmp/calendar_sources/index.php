<?php
require_once("lib/calendar.php");
?>

<!DOCTYPE html>

<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>EduwebLIVE - Kalendarz zdarzeń</title>
        <link href="css/html5reset.css" rel="stylesheet" type="text/css">
        <link href="css/fonts.css" rel="stylesheet" type="text/css">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/jquery.blockUI.js"></script>
        <script src="js/calendar.js"></script>
    </head>
    <body>
        
        <?php
        
        try
		{
			$cal = new calendar();
			
			if(isset($_GET['date']) && !empty($_GET['date']))
			{
				$date_parts = explode(",", $_GET['date']);
				if(isset($date_parts[0]) && !empty($date_parts[0])) $cal->setDay($date_parts[0]);
				if(isset($date_parts[1]) && !empty($date_parts[2])) $cal->setMonth($date_parts[1]);
				if(isset($date_parts[2]) && !empty($date_parts[2])) $cal->setYear($date_parts[2]);
			}
			
			echo $cal->render();
		}
		catch(Excetion $ex)
		{
			die($ex->Message);
		}
        
        ?>

    </body>
</html>
