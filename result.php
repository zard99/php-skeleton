<?php $title = 'Result'; require('./partials/head.php'); ?>
<!--<p>
  Devi riciclare: <b><?php echo($_GET['object']); ?></b>
</p>

<form action="/email.php" method="POST">
  Inserisci la tua email
  <input type="text" name="email">
  <input type="submit" value="Submit">
</form>-->

<div id="content">
			<img src="assets/images/recycle.png" id="recycle-img-mobile">
			<div id="section-right" class="line-right">
				<img src="assets/images/bin-plastic.png" id="bin1">
				<img src="assets/images/recycle.png" id="recycle-img" class="img-left">
			</div>
			<div id="section-left">
				<div id="text-head" class="pos-right"> 
					Recycle in <br> Barletta
				</div>
				<div id="result-container">
					Ricicla <strong> Tetrapack </strong> <br>
					come : <strong> Plastica </strong>
				</div>
				<a href="index.html"><button id="backbutton" class="button"> Indietro </button> </a>
			</div>
		</div>

<?php require('./partials/tail.php'); ?>
