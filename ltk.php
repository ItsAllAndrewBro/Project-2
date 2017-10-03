<html>
<head>
  <link rel = "stylesheet"
     type = "text/css"
     href = "ltk.css">
     <meta charset="utf-8">
</head>
<body>

  <div id = "menubar">
    <h1>三国杀</h1>
    <table>
      <tr>
        <td id = "menubarelements">HOME</td>
        <td id = "menubarelements">CHROMECAST BOARD</td>
        <td id = "menubarelements">MOBILE BOARD</td>
      </tr>
    </table>
  </div>

  <?php
    $card1="qibaodao.jpg";
    $card2="armorbagua.jpg";
    $card3="horsedilu.jpg";
    $card4="baishuiniu.jpg";
    $card5="roleneijian.jpg";
    $card6="liubiao.png";
    $card7="sha.jpg";
    $card8="tao.jpg";
    $card9="jnnanman.jpg";
    $card10="jnhuogong.jpg";

function getCard(){
    $rng=rand(1,100);
    
    if($rng<=10){
      echo "$card1";
    }
    else if ($rng<= 20 && $rng>10) {
      echo "$card2";
    }
    else if ($rng<=30 && $rng>20){
      echo "$card3";
    }
    else if($rng<=40 && $rng>30){
      echo "$card4";
    }
    else if ($rng<=50 && $rng>40){
      echo "$card5";
    }
    else if($rng<=60 && $rng>50){
      echo "$card6";
    }
    else if($rng<=70 && $rng>60) {
      echo "$card7";
    }
    else if($rng<=80 && $rng>70){
      echo "$card8";
    }
    else if($rng<=90 && $rng>80){
      echo "$card9";
    }
    else{
      echo "$card10";
    }
  }
   ?>

   <div id = "mobileboard">
 		<table id = "board_mat">
 			<tr><th colspan="4">PLAYMAT</td></tr>
 			<tr>
 				<td id = "board_td"><img src="<?php  echo getCard(); ?>"></td>
 				<td id = "board_td"><img src="<?php  echo getCard(); ?>"></td>
 				<td id = "board_td"><img src="<?php  echo getCard(); ?>"></td>
 				<td id = "board_td"><img src="<?php  echo getCard(); ?>"></td>
 			</tr>
 			<tr>
 				<td id = "board_td"><img src="<?php  echo getCard(); ?>"></td>
 				<td id = "board_td"><img src="<?php  echo getCard(); ?>"></td>
 				<td id = "board_td" colspan="2"><img id = "health" src="card/sanguosha-life.png"></td>
 			</tr>
 		</table>
 		<table id = "cardsinhand">
 		<th colspan="4">CARDS IN HAND</th>
 			<tr>
 				<td id = "board_td"><img src="<?php  echo getCard(); ?>"></td>
 				<td id = "board_td"><img src="<?php  echo getCard(); ?>"></td>
 				<td id = "board_td"><img src="<?php  echo getCard(); ?>"></td>
 				<td id = "board_td"><img id = "drawncard" src="<?php  echo getCard(); ?>"></td>
 			</tr>
 		</table>

 	</div>

 	<div id = "gameinfobar">
 		<table id = "gameinfobar">
 			<tr>
 				<th colspan="4">GAME INFO</th>
 			</tr>
 			<tr>
 				<th>SESSIONID</th>
 				<th>GAME DURATION</th>
 				<th>TURN NUMBER</th>
 				<th>PLAYER NAME</th>
 			</tr>
 			<tr>
 				<td>00200AA4</td>
 				<td>02:34:33</td>
 				<td>2</td>
 				<td>Vinh</td>
 			</tr>
 		</table>
 	</div>

  <form action="ltk.php" method="post">
    Let's shuffle
    <button type="submit"> Shuffle </button>
  </form>

</body>
</html>
