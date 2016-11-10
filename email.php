<?php $title = 'Email'; require('./partials/head.php'); ?>

<!--<p>
  Ti invieremo al più presto un'email a: <b><?php echo($_POST['email']); ?></b>
</p>-->

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
					Non sappiamo come riciclare <strong> Polistirolo </strong>
				</div>
				<p class="text">
					Ci stiamo informando! Inserisci la tua email, così ti possiamo dire come
				</p>
				<div id="contbtn">
					<form action="email_success.php" method="get">
						<input type="text" name="emailbar" id="emailbar" placeholder="Inserisci qui la tua email">
						<br>
						<button id="backbtn" formaction="index.php"> Indietro </button>
						<input type="submit" id="subm" value="Invia">
					</form>
				</div>
				
			</div>
		</div>

<?php require('./partials/tail.php'); ?>
