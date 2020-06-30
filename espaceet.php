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
     

<center><form class="fde" method="POST" action="espacesec.php">
	
		
			
			<input type="text" size="20" name="nomet" class="inputfirst nom" placeholder="NOM">
			
			<input type="text" name="prenomet" size="20" class="inputfirst prenom" placeholder="PRENOM">
	
			<b>DATE DE NAISSANCE</b>
			<input type="date" name="datnaiss" class="inputfirst">
		
			<input type="text" name="lieunaiss" class="inputfirst lieu" placeholder="LIEU DE NAISSANCE">
		
		
			<b>SEXE:</b>
			<input type="radio" name="sex" value="Masculin" id="Masculin"> <label for="Masculin">Homme</label>
			<input type="radio" name="sex" value="Féminin" id="Féminin"> <label for="Féminin">Femme</label>
			 
			<input type="email" name="adress" class="inputfirst mail" placeholder="E-MAIL">
		    
		    <input type="tel" name="tel" class="inputfirst tel"  placeholder="TELEPHONE">
		
		
			<b>FILIERE</b>
			<select name="filiere">
				<option value="Informatique">Informatique fondamentale</option>
				<option value="Mathématique">Mathématique</option>
				<option value="Physique">Physique</option>
				<option value="Chimie">Chimie</option>
				<option value="Biochimie">Biochimie</option>
				<option value="biologie Animale">Biologie Animale</option>
				<option value="Biologie Végétale">Biologie Végétale</option>
			</select>
		     
		     <b>CURSUS</b>
		     
		     	<select name="cursus">
		     	<option>Licence</option>
		     	<option>Master</option>
		     	<option>Doctorat</option>
		     </select>
		     
		 
		
		 	
		 		 <input type="submit" name="ton2" value="ENREGISTRER" >
		 	     <input type="reset" name="ton3" value="ANNULER">
		     


	
</form> </center>

<?php

 if (isset($_POST['nomet']) AND isset($_POST['prenomet']) AND isset($_POST['datnaiss']) AND isset($_POST['lieunaiss']) 
     AND isset($_POST['adress']) AND isset($_POST['tel']) AND isset($_POST['filiere']) AND isset($_POST['cursus']) 
     AND isset($_POST['sex'])) 
{
?>
<script type="text/javascript">alert("Veuillez vérifiez vos informations") </script>
<?php
$nom = $_POST['nomet'];
$prenom = $_POST['prenomet'];
$date_de_naissance = $_POST['datnaiss'];
$lieu_de_naissance = $_POST['lieunaiss'];
$email = $_POST['adress'];
$telephone = $_POST['tel'];
$filiere = $_POST['filiere'];
$cursus = $_POST['cursus'];
$sexe = $_POST['sex'];

//header('Location:verifinfo.php');

}

?>  
<div id="pieddepage"><p>INFO2|TOUS DROITS RESERVES</p></div>
 </body>
</html>