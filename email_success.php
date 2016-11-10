<?php $title = 'Email'; require('./partials/head.php'); ?>

		<div id="content">
			<img src="assets/images/recycle.png" id="recycle-img-mobile">
			<div id="section-line-container" class="line-slash-right line-properties">
				<div id="sad-face"> :( </div>
				<img src="assets/images/recycle.png" id="recycle-img" class="img-left">
			</div>
			<div id="section-content-container">
				<div id="text-head" class="text-head-to-right"> 
					Recycle in <br> Barletta
				</div>
				<div id="result-container">
					<strong> Grazie! </strong>
				</div>
				<p class="text">
					Ti invieremo una email a <?php echo($_POST['email']); ?> non appena sapremo come riciclare Polistirolo
				</p>
				<form action="index.php" style="z-index: 2;">
					<button id="backbutton" class="button button-dark button-to-right button-resize-paint-green"> Indietro </button>
				</form>				
			</div>
		</div>

<?php require('./partials/tail.php'); ?>