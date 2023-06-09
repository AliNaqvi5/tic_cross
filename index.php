<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css?ali=<?php echo date("M,d,Y h:i:s A") ?>" >
<script type="text/javascript" src="js/data.js?ali=<?php echo date("M,d,Y h:i:s A") ?>" ></script> 
</head>
<body>

<div class="game_box">

	

		<div class="game_area" id="game_area">
		<div id="head">
			<h2>TICK TAC TOE</h2>
			<div>
			<div id="cross">    <span id="player">X -</span> <label id="player_score">0</label></div>
			<div id="oval">     <span id="computer">O -</span> <label id="computer_score">0</label></div>
			</div>
			<div id="game_status">
				<label id="game_status_txt">Start Game</label> 
			</div>
		</div>
		<div id="line"></div><!--  -->
		<div id="straightLine"></div><!--  -->
		
			<table>
				<tr id="row_1">
					<td id="0_0"></td>
					<td id="0_1"></td>
					<td id="0_2"></td>
				</tr>

				<tr id="row_2">
					<td id="1_0"></td>
					<td id="1_1"></td>
					<td id="1_2"></td>
				</tr>

				<tr id="row_3">
					<td id="2_0"></td>
					<td id="2_1"></td>
					<td id="2_2"></td>
				</tr>
			</table>
			<div id="winner_ann">
    <div><p id="winner_ann_txt"> X wins</p></div>
</div>
		
			<div id="restart" >
			<button onclick="restart()">Restart The Game</button>
			</div>
		
		</div>
		
</div>
<div class="groupName">
<ul>
	<h3>Group Members</h3>
    <li>Syed Ali Hussain Naqvi</li>
    <li>Muhammad Talha Ali</li>
    <li>Ahsan Shazad</li>
    <i>Subject HCI</i><br>
    <i>Submitted To <b>Miss Sidra</b> </i>
</ul>
    
</div>
<script type="text/javascript" src="js/myscript.js?ali=<?php echo date("M,d,Y h:i:s A")?>"></script> 
</body>
</html>
