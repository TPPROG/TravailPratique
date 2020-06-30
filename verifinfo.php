<html>
<head>
	<title>ESPACE ETUDIANT</title>
	<link rel="stylesheet" type="text/css" href="start.css">
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
     <div id="header">
	     <h1><p>FORMULAIRE D'ENREGISTREMENT</p></h1>
     </div>
     
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
 

echo "VOS INFORMATIONS  </br>  </br>  </br>";
echo "Nom(s): $nom  </br> ";
echo "Prénom(s): $prenom  </br> ";
echo "Date de naissance: $date_de_naissance  </br> ";
echo "Lieu de naissance: $lieu_de_naissance  </br> ";
echo "Sexe: $sexe  </br> ";
echo "Email: $email  </br> ";
echo "Téléphone: $telephone  </br> ";
echo "Filière: $filiere  </br> ";
echo "Cursus: $cursus  </br> ";


?>  
<div id="pieddepage"><p>INFO2|TOUS DROITS RESERVES</p></div>
 </body>
</html>