<?php $title = 'Email'; require('./partials/head.php'); ?>

<div id="content">
			<img src="assets/images/recycle.png" id="recycle-img-mobile">
			<div id="section-right" class="line-right">
				<div id="sad-face"> :( </div>
				<img src="assets/images/recycle.png" id="recycle-img" class="img-left">
			</div>
			<div id="section-left">
				<div id="text-head" class="pos-right"> 
					Recycle in <br> Barletta
				</div>
				<div id="result-container">
					<strong> Grazie! </strong>
				</div>
				<p class="text">
					Ti avviseremo non appena sapremo come riciclare Polistirolo
				</p>
				<form action="index.php" style="z-index: 2;">
					<button id="backbutton" class="button"> Indietro </button>
				</form>				
			</div>
		</div>

<?php require('./partials/tail.php'); ?>