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
			<div id="section-line-container" class="line-slash-right line-properties">
				<img src="assets/images/bin-plastic.png" id="bin-container">
				<img src="assets/images/recycle.png" id="recycle-img" class="img-left">
			</div>
			<div id="section-content-container">
				<div id="text-head" class="text-head-to-right"> 
					Recycle in <br> Barletta
				</div>
				<div id="result-container">
					Ricicla <strong> <?php echo($_GET['object']); ?> </strong> <br>
					come : <strong> Plastica </strong>
				</div>
				<form action="index.php" style="z-index: 2;">
				<button id="back-button" class="button button-dark button-to-right button-resize-paint-green"> Indietro </button>
				</form>
			</div>
		</div>

<?php require('./partials/tail.php'); ?>
