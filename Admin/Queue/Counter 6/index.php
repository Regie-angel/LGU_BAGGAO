<?php  include('../../../admin/database/index.php'); session_start(); if(!isset($_SESSION['c_six'])){ header("location:../../"); } ?>
<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/queue.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">     
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>TREASURY OFFICE | Counter 6 </title>
		<style>
			*{
            	box-sizing: border-box;
            }
            body{
				align-items: center;
				justify-content: center;
				min-height: 100vh;
            }
			.header h1{
				font-size: 22px;
			}
			.header h1 a{
				border-radius: 2px;
				color: white;
				padding: 7px;
				color: white;
				top: 10px;
				right: 10px;
				position: absolute;
				font-size: 16px;
				text-decoration: none;
				background-image: linear-gradient(rgb(160, 69, 69),rgb(255, 0, 0));
			}
			.header h1 a:hover{
				background-image: linear-gradient(rgb(112, 52, 52),rgb(207, 0, 0));
			}
            .content h1{
				color: white;
            }
            .content header{
				font-size: 28px;
				font-weight: 800;
				text-align: center;
				color: white;
				margin-top: 80px;
				margin-bottom: 20px;
            }
			.content form{
				display: inline-block;
				margin: 10px;
            }
            .content input{
				font-weight: 900;
				color:white;
				background: blue;
				padding: 10px;
				width: 100px;
            }
			.content input:hover{
				background: rgb(55, 55, 255);            
			}
		</style>
    </head>
    <body style = "background-image:  linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0)), url('../../../img/<?php $query=$database->query("select * from `lgubaggao` where `contentID` = '1'"); while($data=$query->fetch_array()){ echo $data['background'];} ?>');">
        <div class = "header">
            <h1>
				LOCAL GOVERNMENT UNIT OF BAGGAO
				<a href="../../Logout/"> Logout <i class = 'fa fa-sign-out'></i></a>
			</h1>
        </div>
        <div class="content">
            <h1>COUNTER 6</h1>
            <center>
				<header>
					<?php
						$fetchqueue = "SELECT * FROM queue WHERE Office = 'Treasury Office' AND type = 'NP' ORDER BY queueNo ASC LIMIT 1";
						$queue = mysqli_query($database, $fetchqueue);
						if(mysqli_num_rows($queue) > 0) {
							foreach($queue as $data) {
								$queueNum = $data['queueNo'];
								echo "Next Queue : $queueNum";
							}
						}
						else {
							echo "Next Queue : Waiting!";
						}
					?>
				</header>
				<?php
					if(isset($_POST['submit'])) {
						$txt=$_POST['nxt'];
						$fetchqueue = "SELECT * FROM queue WHERE Office = 'Treasury Office' AND type = 'NP' ORDER BY queueNo ASC LIMIT 1";
						$queue = mysqli_query($database, $fetchqueue);
						if(mysqli_num_rows($queue) > 0) {
							foreach($queue as $data) {
								$next = $data['queueNo'];
								$queuing = $next - 1;
									$database->query("insert into queuing(queueID, office, type) values ('$next', 'Treasury Office', 'NP')");
									$database->query("delete from queuing where queueID = '$queuing' and office = 'Treasury Office' and type = 'NP'");
								header('location:../Counter 6/');
							}
						}
					}

					if(isset($_POST['finish'])) {
						$queuing=$_POST['done'];
							$database->query("delete from queue where queueNo = '$queuing' and Office = 'Treasury Office' and type = 'NP'");
						header('location:../Counter 6/');
					}

					if(isset($_POST['refresh'])) {
						$type=$_POST['reset'];
						$database->query("delete from queuing where office = 'Treasury Office' and type = '$type'");
						header('location:../Counter 6/');
					}
				?>

				<form method="post" action = "../Counter 6/">
					<input style = "display: none;" type="text" id="done" name="done" value = "<?php $fetch_queue = "select * from queue where Office = 'Treasury Office' and type = 'NP' order by queueNo asc limit 1"; $queue = mysqli_query($database, $fetch_queue); while($data = mysqli_fetch_array($queue)){ $queueNum = $data['queueNo']; echo "$queueNum"; } ?> "/>
					<input type="submit" name="finish" value="Done"/>
				</form>
				
				<form method="post" action = "../Counter 6/">
					<select id='voiceList' style = "display: none;"></select>
					<input style = "display: none;" type="text"  id='txtInput' name="nxt" 
					value = "
						<?php
							$fetchqueue = "SELECT * FROM queue WHERE Office='Treasury Office'  AND type='NP' ORDER BY queueNo ASC LIMIT 1";
							$queue = mysqli_query($database, $fetchqueue);
							if(mysqli_num_rows($queue) > 0) {
								foreach($queue as $data) {
									$onqueue = $data['queueNo'];
									echo "Number $onqueue, Proceed to counter number 6";
								}
							}
							else {
								echo "";
							}
						?> 
					"/>
					<input type="submit" name="submit" value="Next" id='btnSpeak'/>
				</form>
				<script><?php include('../js/voice.js'); ?></script>
				
				<form method="post" action = "../Counter 6/">
					<input style = "display: none;" type="text" id="reset" name="reset" value = "NP"/>
					<input type="submit" name="refresh" value="Reset"/>
				</form>
				<a href = "../Counter 6/" id = "refresh" style = "display:none;"><button>Refresh</button></a>
				<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
				<script>
					window.onload = function(){
						var button = document.getElementById('refresh');
						setInterval(function(){
							button.click();
						}, 30000);
					};
				</script>
            </center>
        </div>
	</body>
</html>