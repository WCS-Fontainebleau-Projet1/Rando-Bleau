<?php include 'includes/header.php'; ?>

<?php include_once 'model/connexion_bdd.php';
$result = $bdd->query('SELECT * FROM actu ORDER BY id DESC');

?>

    <div class="container container_custom container_custom_actu">
      <div class="row">
          <div class="col-xs-offset-5 col-xs-2">
              <a href="add_article.php" class="actu_link">Ajouter un article</a>
          </div>
        <?php while($donnee = $result->fetch()) { ?>
            <div class="col-sm-offset-3 col-sm-6 actu">
              <img src="<?php echo $donnee['url_img']; ?>" alt="<?php echo $donnee['alt_img']; ?>" />
              <h2><?php echo $donnee['title']; ?></h2>
              <p><em><?php echo $donnee['date_creation']; ?></em></p>
              <p><?php echo $donnee['content']; ?></p>
              <p><a href="delete_article_action.php?id=<?php echo $donnee['id']; ?>" class="actu_link">Supprimer</a><a href="edit_article.php?id=<?php echo $donnee['id']; ?>" class="actu_link">Éditer</a></p>
            </div>
        <?php } ?>
      </div>
    </div>
<?php include 'includes/footer.php'; ?>
