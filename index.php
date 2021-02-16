<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>PHP exercices</title>
</head>
<body>
	<div class="h1">
		<h1><a href="index.php">PHP</a></h1>
		<button><a href="#ancre1">Variables</a></button>
		<button><a href="#ancre2">Boucles</a></button>
		<button><a href="#ancre3">Fonctions</a></button>
		<button><a href="#ancre4">Tableaux</a></button>
	</div>
	<h2 id="ancre1"> Les Variables</h2>
<div class="container">
	<div class="row">
		<div class="column">
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
		</div>
		<div class="column">
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
		</div>
	</div>
	<div class="row">
		<div class="column">
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
		</div>
		<div class="column">
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
		</div>
	</div>
	<div class="row">
		<div class="column">
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
		</div>
		<div class="column">
			<h3> Exercice 6</h3>
			<p class ="consigne">Créer une variable «nom» et l'initialiser avec la valeur de votre choix.
			Afficher : "Bonjour" + nom + ", comment vas tu ?".</p>
			<p class="reponse">
				<?php
					$nom = "Evalunna";
					echo "Bonjour $nom, comment vas-tu ?"
				?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="column">
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
		</div>
		<div class="column">
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
	</div>
</div>
<h2 id ="ancre2">Les Boucles</h2>
<div class="container">
	<div class="row">
		<div class="column">
			<h3>Exercice 1</h3>
			<p class="consigne">Créer une variable et l'initialiser à 0. Tant que cette variable n'atteint pas 10 : => l'afficher => incrémenter de 1</p>
			<p class="reponse">
				<?php
					for ($i=0; $i <= 10; $i++){
						echo $i. ', ';
					}
				?>
			</p>
		</div>
		<div class="column">
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
		</div>
	</div>
	<div class="row">
		<div class="column">
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
		</div>
		<div class="column">
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
		</div>
	</div>
	<div class="row">
		<div class="column">
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
		</div>
		<div class="column">
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
		</div>
	</div>
	<div class="row">
		<div class="column">
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
		</div>
		<div class="column">
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
	</div>
</div>
<h2 id="ancre3">Les Fonctions</h2>
<div class="container">
	<div class="row">
		<div class="column">
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
		</div>
		<div class="column">
			<h3>Exercice 2</h3>
			<p class="consigne">Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
			<p class="reponse">
				<?php
					function JaimeraisBienManger($fruit){
					    echo 'J\'aimerais bien manger ' . $fruit . '.';
					}

					JaimeraisBienManger("<b>une petite fraise</b>");
				?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="column">
			<h3>Exercice 3</h3>
			<p class="consigne">Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit
		la concaténation de ces deux chaines.</p>
			<p class="reponse">
				<?php
					function JaimeraisBienGouter($fruit){
					    echo 'J\'aimerais bien goûter ' . $fruit . '.';
					}

					JaimeraisBienGouter("<b>une petite fraise</b>" . " et " . "<b>une petite pomme</b>");
				?>
			</p>
		</div>
		<div class="column">
			<h3>Exercice 4</h3>
			<p class="consigne">Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
		=> Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
		=> Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
		=> Les deux nombres sont identiques si les deux nombres sont égaux</p>
			<p class="reponse">
				<?php

					function ComparaisonDeNombres($a, $b){
						if($a > $b)
						{
							echo "<b>a est plus grand que b</b>";
						} 
						elseif ($a == $b) {
							echo "<b>a est égal à b</b>";
						}
						else
						{
							echo "<b>a est inférieur à b</b>";
						}
					}

					echo ComparaisonDeNombres(1, 3) . " quand a = 1 et b = 3<br/>";
					echo ComparaisonDeNombres(3, 3) . " quand a = 3 et b = 3<br/>";
					echo ComparaisonDeNombres(8, 3) . " quand a = 8 et b = 3";

				?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="column">
			<h3>Exercice 5</h3>
			<p class="consigne">Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit
		la concaténation de ces deux paramètres.</p>
			<p class="reponse">
				<?php
					function PrenomAge($PrenomAge){
					    echo 'Je m\'appelle ' . $PrenomAge;
					}

					PrenomAge("<b>Laeticia</b>" . " et j'ai <b>" . 43 . " </b>ans.");
				?>
			</p>
		</div>
		<div class="column">
			<h3>Exercice 6</h3>
			<p class="consigne">Faire une fonction qui prend trois paramètres : nom, prenom et age.
		Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prenom + ", tu as " + age + "ans"</p>
			<p class="reponse">
				<?php
					function Presentation($nom, $prenom, $age){
						echo 'On me nomme <b>' . $prenom . " " . $nom . ' </b>et je suis agée de <b>' . $age . ' </b>ans.';
					}

					Presentation('Hale', 'Jasper', 18);
				?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="column">
			<h3>Exercice 7</h3>
			<p class="consigne">Faire une fonction qui prend deux paramètres : age et genre.
		Le paramètre genre peut prendre comme valeur Homme ou Femme.
		La fonction doit renvoyer en fonction des paramètres (gérer tous les cas) :
		=> Vous êtes un homme et vous êtes majeur
		=> Vous êtes un homme et vous êtes mineur
		=> Vous êtes une femme et vous êtes majeur
		=> Vous êtes une femme et vous êtes mineur</p>
			<p class="reponse">
				<?php

					function AgeSexe($sexe, $age){
						if( $sexe == 'Femme' AND $age >= 18)
						{
							echo "Vous êtes une <b>femme majeure</b>.";
						}

						if($sexe == 'Femme' AND $age < 18)
						{
							echo "Vous êtes une <b>femme mineure</b>.";
						}

						if($sexe == 'Homme' AND $age >= 18)
						{
							echo "Vous êtes un <b>homme majeur</b>.";
						}

						if($sexe == 'Homme' AND $age < 18)
						{
							echo "Vous êtes un <b>homme mineur</b>.";
						}
					}

					AgeSexe('Femme', 26);
				?>
			</p>
		</div>
		<div class="column">
			<h3>Exercice 8</h3>
			<p class="consigne">Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
		Tous les paramètres doivent avoir une valeur par défaut.</p>
			<p class="reponse">
				<?php
					//je créé une fonction qui fait fonctionner l'addition quelque soit les nombres a, b et c
					function Addition($a = 0, $b = 1, $c = 2){
						$result = $a + $b + $c;
						echo "$a + $b + $c = <b>" . $result . "</b><br/>";
					}

					//je fais fonctionner ma fonction
					Addition();
					Addition(3, 2, 7);

				?>
			</p>
		</div>
	</div>
</div>
<h2 id="ancre4">Les Tableaux</h2>
<div class="container">
	<div class="row">
		<div class="column">
			<h3>Exercice 1</h3>
			<p class="consigne">Créer un tableau $mois et l'initialiser avec le nom des douze mois de l'année.</p>
			<p class="reponse">
				<?php
					$mois = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', "Septembre", 'Octobre', 'Novembre', 'Decembre');
					foreach ($mois as $elements) {
						echo $elements . ", ";
					}
				?>
			</p>
		</div>
		<div class="column">
			<h3>Exercice 2</h3>
			<p class="consigne">Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.</p>
			<p class="reponse">
				<?php
					echo $mois[2];
				?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="column">
			<h3>Exercice 3</h3>
			<p class="consigne">Avec le tableau de l'exercice , afficher la valeur de l'index 5.</p>
			<p class="reponse">
				<?php
					echo $mois[5];
				?>
			</p>
		</div>
		<div class="column">
			<h3>Exercice 4</h3>
			<p class="consigne">Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
			<p class="reponse">
				<?php
					echo "Avant : " . $mois[7] . "<br/>";
					$mois[7] = str_replace('u', 'û', 'Aout');
					echo "Après : " . $mois[7];
				?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="column">
			<h3>Exercice 5</h3>
			<p class="consigne">Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>
			<p class="reponse">
				<?php
					$departement_Hauts_De_France = array (
						'02' => 'Aisne',
						'59' => 'Nord',
						'60' => 'Oise',
						'62' => 'Pas_De_Calais',
						'80' => 'Somme');
					foreach ($departement_Hauts_De_France as $key => $value){
						echo $key . ' : ' . $value . '<br/>';
					}
				?>
			</p>
		</div>
		<div class="column">
			<h3>Exercice 6</h3>
			<p class="consigne">Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>
			<p class="reponse">
				<?php
					echo $departement_Hauts_De_France['59'];
				?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="column">
			<h3>Exercice 7</h3>
			<p class="consigne">Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
			<p class="reponse">
				<?php
					$departement_Hauts_De_France['51'] = 'Marne';
					echo '51 : ' . $departement_Hauts_De_France['51'] = 'Marne';

				?>
			</p>
		</div>
		<div class="column">
			<h3>Exercice 8</h3>
			<p class="consigne">Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
			<p class="reponse">
				<?php
					for($nombre_De_Mois=0; $nombre_De_Mois <12; $nombre_De_Mois++){
						echo $mois[$nombre_De_Mois]. ' , ';
					}
				?>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="column">
			<h3>Exercice 9</h3>
			<p class="consigne">Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
			<p class="reponse">
				<?php
					foreach ($departement_Hauts_De_France as $value){
						echo $value . '.<br/>';
					}
				?>
			</p>
		</div>
		<div class="column">
			<h3>Exercice 10</h3>
			<p class="consigne">Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
		Cela pourra être, par exemple, de la forme :
		"Le département" + nom_departement + "a le numéro" + num_departement</p>
			<p class="reponse">
				<?php
				foreach ($departement_Hauts_De_France as $key => $value){
						echo 'Le département <b>' . $value . ' </b>a le numéro  <b>' . $key . '</b>.<br/>';
					}
				?>
			</p>
		</div>
	</div>
</div>
<script src="script.js"></script>
</body>
</html>
