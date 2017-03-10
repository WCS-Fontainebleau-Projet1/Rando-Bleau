<?php include 'includes/header.php'; ?>

<div class="container container_custom">

        <form action="add_article_action.php" method="POST" id="form1">
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" placeholder="Entrez le titre de votre article..." /><br>

            <label for="content">Contenu</label>
            <textarea name="content" id="content" rows="8" cols="80"></textarea><br>

            <label for="img_url">Image</label>
            <input type="text" id="url_img" name="url_img" placeholder="Entrer l'url de votre image..." /><br>
            
            <label for="alt_img">Description</label>
            <input type="text" name="alt_img" placeholder="Description de l'image..." />
        </form>

        <button type="submit" form="form1" value="Submit">Submit</button>
</div>

<?php include 'includes/footer.php' ?>
