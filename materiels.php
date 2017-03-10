<?php 

include 'includes/header.php'; 
include_once('model/connexion_bdd.php');

$query = $bdd->query('SELECT * FROM article ORDER BY Id DESC');
?>

	<div class='container materiel_container_custom'>
		<a href='add_materiels.php'><input type='button' value='Ajouter un article'/>
		<?php while($donnee = $query->fetch())
		{
		?>
		
		<div class='row materiel_row_custom'>
			<div class='col-md-4 materiel_full'><a href='<?php echo $donnee['lien'];?>' target='_blank'><img src='<?php echo $donnee['image'];?>' alt='<?php echo $donnee['image_description'];?>'/></a>
				<p><?php echo html_entity_decode($donnee['presentation']);?> </p>
			</div>
			<div class='col-md-8 materiel_description'>
				<p>
					<?php echo html_entity_decode($donnee['description']);?>
					<a href='<?php echo $donnee['lien'];?>' target='_blank'><?php echo $donnee['lien'];?></a>
				</p>
					
				
			</div>	
			<div class='materiel_buttons'>	
				<a href='edit_materiels.php?id=<?php echo $donnee['id'];?>'><input type='button' value="Modifier l'article"/>
				<a href='delete_materiels.php?id=<?php echo $donnee['id'];?>'><input type='button' value="Supprimer l'article"/>
			</div>
		</div>
		
		
		<?php 
		}
		$query->closeCursor();
		?>
		
	</div>
	
<?php include 'includes/footer.php'; ?>
