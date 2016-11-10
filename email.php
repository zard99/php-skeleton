<?php $title = 'Email'; require('./partials/head.php'); ?>

<!--<p>
  Ti invieremo al più presto un'email a: <b><?php echo($_POST['email']); ?></b>
</p>-->

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
					Non sappiamo come riciclare <strong> Polistirolo </strong>
				</div>
				<p class="text">
					Ci stiamo informando! Inserisci la tua email, così ti possiamo dire come
				</p>
				<div id="button-container">
					<form action="email_success.php" method="POST">
						<input type="text" name="email" id="email-bar" class="bar-property" placeholder="Inserisci qui la tua email" pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" required>
						<br>
						
						<input type="submit" id="submit-button" class="button button-dark float-side-left margin-side-left button-fixed-width" value="Invia">
						<button id="back-button" class="button button-light float-side-right margin-side-right button-fixed-width" formnovalidate="formnovalidate" formaction="index.php"> Indietro </button>
					</form>
				</div>
			</div>
		</div>

<?php require('./partials/tail.php'); ?>
