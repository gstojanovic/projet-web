<!DOCTYPE html>
<html>
<title>Jeu de Perudo</title>

<head>
<link rel="stylesheet" type="text/css" href="../css/jeu1.css" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<div>
<?php
//on recupere ici le nb de dé de la page index.php
$nb = $_POST['nbjoueur'];
echo'Il y\'a '.$nb.' joueurs.';
//Boucle pour initialiser le nombre de dé de tout les joueurs a 5
for($i = 0; $i < $nb ; $i++)
{
$nbdeparjoueur[]=5;
}

//fonction qui permet de melanger les dés
$tabini=array(array());
function melange(&$tabini,&$nbdeparjoueur,$nb){
	for ($i = 0; $i < $nb ; $i++)
	{
		for ($j = 0; $j < $nbdeparjoueur[$i] ; $j++)
		{
		$tabini[$i][$j] = rand(1,6);
		}
	}
}
//initialisaiton des dés
melange($tabini,$nbdeparjoueur,$nb);
echo '<br>';
for ($i = 0; $i < $nb ; $i++)
{
for ($j = 0; $j < 5 ; $j++)
{
echo''.$tabini[$i][$j].'';

}
echo '<br>';
}

//on definit la couleur et le numéro du joueur
$couleur1=bleu;
$joueur=0;
?>
</div>
<div class="nbdeparjoueur">

<?php
//affichage du nb de dé par joueur
echo "Dé par joueur : <br>";
for($i=0; $i < $nb; $i++){
$j=$i+1;
echo "Joueur $j : $nbdeparjoueur[$i] ";
echo '<br>';
}
?>
</div>

//joli dé !
<div class="tabled">
<table> <tr> 
	<?php
for($i=0; $i < $nbdeparjoueur[$joueur];$i++){
echo "<td><img src=\"../img/$couleur1/".$tabini[$joueur][$i].".png\"</img></td>";
}
	?>
	</tr></table>
</div>


</body>
</html>

