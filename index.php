<?php $title = 'Home'; require('./partials/head.php'); ?>

<!-- Prova Form <p>CSS is <b id="not">not</b> working</p>
<p>JS is <b id="js-not">not</b> working</p>

<hr>

<form action="/result.php" method="GET">
  Oggetto da riciclare
  <input type="text" name="object">
  <input type="submit" value="Submit">
</form> -->

		<div id="content">
			<div id="section-content-container">
			<img src="assets/images/recycle.png" id="recycle-img-mobile">
				<div id="text-head" class="text-head-to-left"> 
					Recycle in <br> Barletta
				</div>
				<div id="searchcontainer">
					<form action="result.php" method="GET">
						<input type="text" name="object" id="input-bar" class="bar-property" placeholder="Es. : Bustina di patatine" required>
						<br>
						<button id="search-button" class="button button-dark"> Cerca </button>
					</form>
				</div>
				<p id="text-bottom">
					Riciclare é importante, ma non sempre facile. <br>
					Recycle in Barletta ti aiuta: non sai dove mettere  qualcosa? <br>
					Inserisci l’oggetto in questa pagina, noi ti diremo dove! <br>
				</p>
			</div>
			<div id="section-line-container" class="line-slash-left line-properties">
				<img src="assets/images/recycle.png" id="recycle-img" class="img-right">
			</div>
		</div>

<?php require('./partials/tail.php'); ?>
