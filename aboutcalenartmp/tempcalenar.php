<?php
$link = mysql_connect('localhost', 'root', '');
$con = mysql_select_db('plantestdb', $link);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Planner - test</title>
	</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
	<style>
		.left {
			width: 60%;
			background-color: yellow;
			float: left;
		}
		.right {
			width: 38%;
			background-color: silver;
			float: right;
		}

	</style>
	<body>
		<h1>Plan</h1>
		<div class="left" >
			<ul>
				<?php
				$result = mysql_query('SELECT plan.id, plan.data, godziny.od, godziny.do  FROM plan '
					. 'LEFT JOIN godziny ON godziny.id = plan.godz_id '
					. 'WHERE plan.data = \'2015-09-03\''
					, $link);
				while ($row = mysql_fetch_assoc($result)):
					echo $row['id'] . ' --- ' .$row['data'] . ' ' . $row['od'] . ' ' . $row['do'] .'<br />';
				endwhile;
				?>
			</ul>
		</div>
		<div class="right" >
			<ul>
				<?php
				// $resultuser = mysql_query('SELECT * FROM user ', $link);
				$resultuser = mysql_query('SELECT user.Imie, plan_user.id_plan FROM plan_user '
					. 'LEFT JOIN user ON user.id_user = plan_user.id_user '
					. 'WHERE plan_user.id_plan = 15', $link);
					echo '<span class="test" >';
				while ($row = mysql_fetch_assoc($resultuser)):
					echo $row['Imie']. ' ' . $row['id_plan'] . '<br />';
				endwhile;
					echo '</span>';
				?>
			</ul>
		</div>
		<script>
			$(document).ready(function() {
			    $('.left').click(function() {  
			      $('.test').toggle(0);
			    });
			});
		</script>
	</body>
</html>
