<html>
<head>
	<title>ESPACE SECRETARIAT</title>
	<link rel="stylesheet" type="text/css" href="accueil.css">
	<!-- <link rel="icon" type="image/png" href="C:\Users\July NKADJI\Desktop\Projet de Programmation Web\Images"> -->
     <meta charset="utf-8">
</head>
 <body>
 	<div id="menu1">
     	<ul>
     		<li><a href="startaccueil.php">Accueil</a></li>
     		<li><a href="startinfo.php">Informations</a></li>
     		<li><a href="espaceet.php">Espace Etudiant</a></li>
     		<li><a href="espacesec.php">Espace Secretariat</a></li>
     	</ul>
	 </div>
     
     
<?php
 if (isset($_POST['nomet']) AND isset($_POST['prenomet']) AND isset($_POST['datnaiss']) AND isset($_POST['lieunaiss']) 
     AND isset($_POST['adress']) AND isset($_POST['tel']) AND isset($_POST['filiere']) AND isset($_POST['cursus']) 
     AND isset($_POST['sex'])) 
{

$nom = $_POST['nomet'];
$prenom = $_POST['prenomet'];
$date_de_naissance = $_POST['datnaiss'];
$lieu_de_naissance = $_POST['lieunaiss'];
$email = $_POST['adress'];
$telephone = $_POST['tel'];
$filiere = $_POST['filiere'];
$cursus = $_POST['cursus'];
$sexe = $_POST['sex'];


//connexion à la base de données

try{
$base = new PDO("mysql:host=127.0.0.1;dbname=inscription;charset=utf8" ,"root", "", array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
   }
catch (Exception $e){
     die ('Erreur:' .$e->getMessage());
                    }

$requete = $base->prepare("INSERT INTO informations(noms,prenoms,date_de_naissance,lieu_de_naissance,sexe,email,telephone,filiere,cursus) VALUES(?,?,?,?,?,?,?,?,?)");
$requete->execute(array($nom,$prenom,$date_de_naissance,$lieu_de_naissance,$sexe,$email,$telephone,$filiere,$cursus));

$requete1=$base->prepare("SELECT * FROM informations");
$requete1->execute(array($nom,$prenom,$date_de_naissance,$lieu_de_naissance,$sexe,$email,$telephone,$filiere,$cursus));


?>
<table border="1" cellpadding="0" cellspacing="0" align="center" id="tabinfo">
     <tr>
          <td>N°</td>
          <td>NOMS</td>
          <td>PRENOMS</td>
          <td>DATE DE NAISSANCE</td>
          <td>LIEU DE NAISSANCE</td>
          <td>SEXE</td>
          <td>EMAIL</td>
          <td>TELEPHONE</td>
          <td>FILIERE</td>
          <td>CURSUS</td>
     </tr>
     <?php
     while ($resultat = $requete1->fetch()) {
     ?>
       <tr>
            <td><?php echo $resultat['id']; ?></td>
            <td><?php echo $resultat['noms']; ?></td>
            <td><?php echo $resultat['prenoms']; ?></td>
            <td><?php echo $resultat['date_de_naissance']; ?></td>
            <td><?php echo $resultat['lieu_de_naissance']; ?></td>
            <td><?php echo $resultat['sexe']; ?></td>
            <td><?php echo $resultat['email']; ?></td>
            <td><?php echo $resultat['telephone']; ?></td>
            <td><?php echo $resultat['filiere']; ?></td>
            <td><?php echo $resultat['cursus']; ?></td>
       </tr>
       <?php
     }
       ?>
</table>
<?php
$requete->closeCursor();
}
?>



<div id="pieddepage"><p>INFO2|TOUS DROITS RESERVES</p></div>
</body>
</html>