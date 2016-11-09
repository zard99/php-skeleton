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
			<div id="section-left">
			<img src="assets/images/recycle.png" id="recycle-img-mobile">
				<div id="text-head" class="margin-text-head-left"> 
					Recycle in <br> Barletta
				</div>
				<div id="searchcontainer">
					<input type="text" name="searchbar" id="inputbar" placeholder="Es. : Bustina di patatine">
					<br>
					<a href="result.php"><button id="searchbutton" class="button"> Cerca </button></a>
				</div>
				<p id="text-bottom">
					Riciclare é importante, ma non sempre facile. <br>
					Recycle in Barletta ti aiuta: non sai dove mettere  qualcosa? <br>
					Inserisci l’oggetto in questa pagina, noi ti diremo dove! <br>
				</p>
			</div>
			<div id="section-right" class="line-left">
				<img src="assets/images/recycle.png" id="recycle-img" class="img-right">
			</div>
		</div>

<?php require('./partials/tail.php'); ?>
