<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>PHP exercices</title>
</head>
<body>
	<h1>PHP</h1>
	<h2> Les Variables</h2>
<div class="container">
	<h3> Exercice 1</h3>
		<p class="consigne">Créer une variable : «nom» et l'initialiser avec la valeur de votre choix. Afficher son contenu. </p>
		<p class = reponse>
			<?php
				$nom = "Clarisse";
				echo "<b>Réponse 1</b> :<br/><br/> $nom <br/><br/>";
				echo "<b>Réponse 2 : </b><br/><br/>";
				var_dump($nom);
			?>
		</p>

	<h3> Exercice 2</h3>
	<p class="consigne">Créer trois variables : «nom» , «prenom» et «age» et les initialiser avec les valeurs de votre choix.
	Attention age est de type entier. Afficher leur contenu. </p>
	<p class="reponse">
		<?php
			$nom = "Fleury";
			$prenom = "Henriette";
			$age = 20;
			echo "<b>Réponse 2 : </b><br/><br/> $nom <br/> $prenom <br/> $age <br/><br/>";
			echo "<b>Réponse 2 : </b><br/><br/>";
			var_dump($nom);
			echo "<br/>";
			var_dump($prenom);
			echo "<br/>";
			var_dump($age);
		?>
	</p>

	<h3> Exercice 3</h3>
	<p class="consigne">Créer une variable «km» . L'initialiser à 1. Afficher son contenu. Changer sa valeur par 3.
	Afficher son contenu. Changer sa valeur par 125. Afficher son contenu.</p>
	<p class="reponse">
		<?php
			$km = 1;
			echo "$km km<br/>";
			$km = 3;
			echo "$km km<br/>";
			$km = 125;
			echo "$km km<br/>";
		?>
	</p>

	<h3> Exercice 4</h3>
	<p class="consigne">Créer une variable de type string, une variable de type int, une variable de type float,
	une variable de type booléan et les initialiser avec une valeur de votre choix.
	Les afficher.</p>
	<p class="reponse">
		<?php
			$MyString = "Catherine";
			$MyInteger = 22;
			$MyFloat = 52.36;
			$SheWomen = true;

			echo "<b>Réponse 1 : </b><br/><br/> $MyString <br/> $MyInteger ans<br/> $MyFloat kg<br/> $SheWomen<br/><br/>";
			echo "<b>Réponse 2</b> : <br/><br/>";
			var_dump($MyString);
			echo "<br/>";
			var_dump($MyInteger);
			echo "<br/>";
			var_dump($MyFloat);
			echo "<br/>";
			var_dump($SheWomen);
		?>
	</p>

	<h3> Exercice 5</h3>
	<p class="consigne">Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
	Donner une valeur à cette variable et l'afficher.</p>
	<p class="reponse">
		<?php
			$MySecondInteger = NULL;
			echo "Initialiser avec rien : <br/><br/>$MySecondInteger <br/><br/>";
			$MySecondInteger = 16;
			echo "Avec la valeur 16 :<br/><br/>$MySecondInteger";
		?>
	</p>

	<h3> Exercice 6</h3>
	<p class ="consigne">Créer une variable «nom» et l'initialiser avec la valeur de votre choix.
	Afficher : "Bonjour" + nom + ", comment vas tu ?".</p>
	<p class="reponse">
		<?php
			$nom = "Evalunna";
			echo "Bonjour $nom, comment vas-tu ?"
		?>
	</p>

	<h3> Exercice 7</h3>
	<p class="consigne">Créer trois variables «nom» , «prenom» et «age» et les initialiser avec les valeurs de votre choix.
	Attention age est de type entier. Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans".</p>
	<p class="reponse">
		<?php
			$nom = "Licorne";
			$prenom = "Lola";
			$age = 12;
			echo "Bonjour $prenom $nom, tu as $age ans";
		?>
	</p>

	<h3> Exercice 8</h3>
	  <p class="consigne">Créer 3 variables.
	Dans la première mettre l'addition qui donne le résultat 7.
	Dans la deuxième mettre la multiplication qui donne le résultat 100.
	Dans la troisième mettre la division qui donne le résultat 5.
	Afficher le contenu des variables.</p>
	<p class="reponse">
		<?php
			$addition = 3+4;
			$multiplication = number_format(4*25);
			$division = number_format(10/2);
			echo "$addition, $multiplication, $division";
		?>
	</p>
</div>
<h2>Les Boucles</h2>
<div class="container">
	<h3>Exercice 1</h3>
	<p class="consigne">Créer une variable et l'initialiser à 0. Tant que cette variable n'atteint pas 10 : => l'afficher => incrémenter de 1</p>
	<p class="reponse">
		<?php
			for ($i=0; $i <= 10; $i++){
				echo $i. ', ';
			}
		?>
	</p>
	<h3>Exercice 2</h3>
	<p class="consigne">Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas supérieur à 20 :
=> multiplier la première variable avec la deuxième
=> afficher le résultat
=> incrémenter la première variable</p>
	<p class="reponse">
		<?php
			$a = 0;
			$b = 4;

			for ($a=0; $a <=20; $a++)
			{
			    $a*$b;
			    echo $a*$b. ',  ';
			}
		?>
	</p>
	<h3>Exercice 3</h3>
	<p class="consigne">Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieur ou égale à 10 :
=> soustraire la première variable avec la deuxième
=> afficher le résultat
=> décrémenter la première variable</p>
	<p class="reponse">
		<?php
			$a = 100;
			$b = 36;
			for ($a = 100; $a > 10; $a--){
				$a-$b;
				echo $a-$b. '  ;  ';
			}
		?>
	</p>
	<h3>Exercice 4</h3>
	<p class="consigne">Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10 :
=> l'afficher
=> l'incrementer de la moitié de sa valeur</p>
	<p class="reponse">
		<?php
			$a = 1;

			while($a < 10){
				echo "$a, ";
				$half = $a/2;
				$a += $half;
			}
		?>
	</p>
	<h3>Exercice 5</h3>
	<p class="consigne">En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque...</p>
	<p class="reponse">
		<?php
			$a;

			for ($a = 1; $a <= 15; $a++){
				echo "On y arrive presque ; ";
			}
		?>
	</p>
	<h3>Exercice 6</h3>
	<p class="consigne">En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon...</p>
	<p class="reponse">
		<?php
		$a;

			for ($a = 20; $a >= 0; $a--){
				echo "On y arrive presque ; ";
			}
		?>
	</p>
	<h3>Exercice 7</h3>
	<p class="consigne">En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout...</p>
	<p class="reponse">
		<?php
			$i = 1;

			while($i <= 100){
				echo "On tient le bon bout". '   ';
				$i += 15;
			}
		?>
	</p>
	<h3>Exercice 8</h3>
	<p class="consigne">En allant de 200 à 0 avec un pas de 12, afficher le message Enfin ! ! !</p>
	<p class="reponse">
		<?php
			$i = 200;

			while($i > 0){
				echo "Enfin !!!". '   ';
				$i -= 12;
			}
		?>
	</p>
</div>
<h2>Les Fonctions</h2>
<div class="container">
	<h3>Exercice 1</h3>
	<p class="consigne"></p>
	<p class="reponse">
		<?php
			$age = 24;

			if ($age >= 18)
			{
				$majeur = true;
				var_dump($majeur);
			}
			else
			{
				$majeur = false;
				var_dump($majeur);
			}
		?>
	</p>
	<h3>Exercice 2</h3>
	<p class="consigne">Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
	<p class="reponse">
		<?php
			function JaimeraisBienManger($fruit){
			    echo 'J\'aimerais bien manger ' . $fruit . ' !';
			}

			JaimeraisBienManger("une petite fraise");
		?>

	<h3>Exercice 3</h3>
	<p class="consigne">Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit
la concaténation de ces deux chaines.</p>
	<p class="reponse">
		<?php
			
		?>
	<h3>Exercice 4</h3>
	<p class="consigne"></p>
	<p class="reponse">
		<?php

		?>
	<h3>Exercice 5</h3>
	<p class="consigne"></p>
	<p class="reponse">
		<?php

		?>
	<h3>Exercice 6</h3>
	<p class="consigne"></p>
	<p class="reponse">
		<?php

		?>
	<h3>Exercice 7</h3>
	<p class="consigne"></p>
	<p class="reponse">
		<?php

		?>
	<h3>Exercice 8</h3>
	<p class="consigne"></p>
	<p class="reponse">
		<?php

		?>
</div>
</body>
</html>
