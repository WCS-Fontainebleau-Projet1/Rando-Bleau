<?php include 'includes/header.php';

include_once 'model/connexion_bdd.php';
$id = $_GET['id'];
$result = $bdd->prepare('SELECT * FROM actu WHERE id = ? ');
$result->execute(array($id));
?>
    <div class="container container_custom">

        <?php while($donnee = $result->fetch()){ ?>
        <form action="edit_article_action.php?id=<?php echo $_GET['id'] ?>" method="POST" id="form1">
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" value="<?php echo $donnee['title']; ?>"><br>

            <label for="content">Contenu</label>
            <textarea type="text" name="content" id="content" rows="8" cols="80"><?php echo $donnee['content']; ?></textarea><br>

            <label for="img_url">Image</label>
            <input type="text" id="url_img" name="url_img" value="<?php echo $donnee['url_img']; ?>"><br>

            <label for="alt_img">Description</label>
            <input type="text" name="alt_img" value="<?php echo $donnee['alt_img']; ?>">

        </form>
        <?php } ?>
        <button type="submit" form="form1" value="Submit">Submit</button>
    </div>
<?php include 'includes/footer.php' ?>
