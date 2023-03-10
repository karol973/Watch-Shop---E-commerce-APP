<?php include 'menu.php' ?>

<div class="content1_shop">
  
  <h2>
  <a class="links3 l-makewatch" name="makewatch">Kolekcja 72</a></h2>
</div>

<div class="categories">
	<b>Polecamy</b>
	<li><a href="index.php">Tylko u nas</a></li>
	<li><a href="index.php">Nowości</a></li>
	<li><a href="index.php">Promocje</a></li>

	<br>
	<b>Kategorie</b>
	<form action="shop.php" method="post">
		<input type="hidden" name="action" value="submit" />
		<button id="kat" type="submit" name="wynik" value="kwarcowe">Kwarcowe</button><br>
		<button id="kat" type="submit" name="wynik" value="automatyczne">Automatyczne</button><br>
		<button id="kat" type="submit" name="wynik" value="mechaniczne">Mechaniczne</button><br>
		<button id="kat" type="submit" name="wynik" value="bateria">Bateria słoneczna</button><br>
		<button id="kat" type="submit" name="wynik" value="wodoodporne">Wodoodporne</button><br>
		<button id="kat" type="submit" name="wynik" value="smartwatche">Smartwatche</button><br>
	</form>
</div>




<div class="watches">

	tutaj zegarki z bazy

	<img src="photos_watches/1.jpg">
</div>

<?php include 'foot.php' ?>



</html>