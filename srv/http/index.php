<!DOCTYPE html>
<html>
<title>Jeu de Perudo</title>

<head>
<link rel="stylesheet" type="text/css" href="css/index.css" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>

<h1 class="titre"> <span style="color:#cc0000;">P</span><span style="color:#0066ff;">E</span><span style="color:#ff8000;">R</span><span style="color:#2eb82e;">U</span><span style="color:#ffcc00;">D</span><span style="color:#9933ff;">O</span></h1>
<div class="bossderegle">
	<div class="regle">
	<h2><a href="page/regle.php">Règle</a></h2>
	<center>Chaque joueur a un certain nombre de dés à lancer. Ces dés sont des dés à six faces normaux, excepté le 1, qu'on appelle Paco, et qui est une sorte de joker : il a toutes les autres valeurs à la fois. Ainsi, par exemple, si on a sur cinq dés Paco-deux-trois-cinq-cinq, on comptera 2 deux (le vrai et le Paco), 2 trois(le vrai et le paco), 1 quatre (le paco), 3 cinq (le paco et les deux vrais), ou 1 six(le paco).Les enchères sur les faces des dés sont toujours au moins. Si on parie sur 5 six, il faut qu'il y ait au moins 5 dés de valeur six pour que l'enchère soit correcte.
	</center></div>
</div>

<!--  Table des dés -->
<div class="tabled">
<?php 
if (isset($_POST['nbjoueur'])) { $var = $_POST['nbjoueur']; }
?>
<table> <tr> 
	<td>	<form action="index.php" method="POST">
	 	<input type="hidden" name="nbjoueur" value="2" />
    		<input type="image" src="img/jaune/2.png" name="submit" />
		</form>
	</td> 

 	<td>    <form action="index.php" method="POST">
                <input type="hidden" name="nbjoueur" value="3" />
                <input type="image" src="img/orange/3.png" name="submit" />
                </form>
        </td>
 	<td>    <form action="index.php" method="POST">
                <input type="hidden" name="nbjoueur" value="4" />
                <input type="image" src="img/bleu/4.png" name="submit" />
                </form>
        </td>	
 	<td>    <form action="index.php" method="POST">
                <input type="hidden" name="nbjoueur" value="5" />
                <input type="image" src="img/violet/5.png" name="submit" />
                </form>
        </td>
 	<td>    <form action="index.php" method="POST">
                <input type="hidden" name="nbjoueur" value="6" />
                <input type="image" src="img/vert/6.png" name="submit" />
                </form>
        </td>
 	<td>    <form action="page/jeu1.php" method="POST">
                <input type="hidden" name="nbjoueur" value="<?php echo htmlspecialchars($var);?>" />
                <input type="image" src="img/rouge/pako.png" name="submit" />
                </form>
        </td>

	</tr></table>
<?php
if ($var>1){echo'Il y\'a '.$var.' joueurs.';}
?>

</div>
</body>
</html>

