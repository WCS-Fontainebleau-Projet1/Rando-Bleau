<?php 

include_once('model/connexion_bdd.php');

if(is_numeric($_GET['id'])){
	$id = $_GET['id'];
	
	$query = $bdd->prepare('SELECT * FROM article where id=?');
	$query->execute(array($id));
	$donnee=$query->fetch();
	
	if(!$donnee){
		echo 'L\'article à modifier n\'existe pas ! Sorry...Vous allez être redirigé dans 5 secondes';
		header('refresh:5;url=materiels.php');
	}
	else{
		
?>
<head>
<link rel='stylesheet' type='text/css' href='css/style.css'/>
</head>

<script type='text/javascript'>
var selectedElt;
var selectionStart;
var selectionEnd;
var contentElt;

function selecter(){
selectedElt = window.getSelection().toString();
selectionStart = document.getElementById('materiel_description').selectionStart+3;
selectionEnd = document.getElementById('materiel_description').selectionEnd+3;
console.log(selectionStart, selectionEnd);
}

function changeColor(){
	if(selectedElt !== ''){
		contentElt = document.getElementById('materiel_description').value;
		contentElt = contentElt.replace("" + selectedElt + "", "<b>" + selectedElt + "</b>");
		document.getElementById('materiel_description').value = contentElt;
		document.getElementById('materiel_resultat_description').innerHTML = contentElt;
		keepTextSelected();
	}
	else{
		console.log('aucune sélection');
	}
}

function changeDecoration(){
	if(selectedElt !== ''){
		contentElt = document.getElementById('materiel_description').value;
		contentElt = contentElt.replace("" + selectedElt + "", "<u>" + selectedElt + "</u>");
		document.getElementById('materiel_description').value = contentElt;
		document.getElementById('materiel_resultat_description').innerHTML = contentElt;
		keepTextSelected();
	}
	else{
		console.log('aucune sélection');
	}
}
function keepTextSelected(){
	contentElt.focus();
	contentElt.setSelectionRange(selectionStart, selectionEnd);
}
</script>
		
		<form method='post' action='edit_materiels_action.php'>
			<input type='hidden' name='id' value='<?php echo $donnee['id']; ?>'/>
			<p>
				<label for='materiel_image'> Logo de la société :</label>
				<input type='text' id='materiel_image' name='image' value='<?php echo $donnee['image'];?>'/>
			</p>
			<p>
				<label for='materiel_image_description'> Description de l'image :</label>
				<input type='text' id='materiel_image_description' name='image_description' value='<?php echo $donnee['image_description'];?>'/>
			</p>
			<p>
				<label for='materiel_presentation'> Courte présentation de la société :</label>
				<input type='text' id='materiel_presentation' name='presentation' value="<?php echo $donnee['presentation'];?>"/>
			</p>
			
			<p>
				<label for='materiel_description'> Description de la société :</label><br />
				<textarea id='materiel_description' name='description' ><?php echo $donnee['description'];?></textarea><br /><br />
				<input type='button' id='materiel_description_button' value='Mettre en gras' onmouseover='selecter()' onclick='changeColor()'/>
				<input type='button' id='materiel_description_button' value='Souliner' onmouseover='selecter()' onclick='changeDecoration()'/>
			</p>
				<div id='materiel_resultat_description'>
					<p> Résultat </p>
					<?php echo html_entity_decode($donnee['description']);?>
				</div>
			<p>
				<label for='materiel_lien' class='materiel_lien'> Liens vers le site web de la société :</label>
				<input type='text' id='materiel_lien' name='lien' value='<?php echo $donnee['lien'];?>'/>
			</p>	
				<input type='submit'/>
			
		</form>

		<?php $query->closeCursor(); ?>
		
	<?php
	}
}

else{
	echo 'Erreur. Vous allez être redirigé dans 5 secondes';
	header('refresh: 5; url=materiels.php');
}



