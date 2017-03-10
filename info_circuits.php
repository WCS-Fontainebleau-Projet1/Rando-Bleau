
  <?php include 'includes/header.php'; ?>

  <div class="container container_custom">

    <div class="row info">

      <div class="col-md-offset-1 col-md-2 icone pop">
          <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" title="Durée :" data-content="Avec de courtes poses : 3h40.""><img src="http://www.icone-png.com/png/14/14354.png" width="60" height="60" alt="icone_horloge"/>
          </button>
      </div>
      <div class="col-md-offset-2 col-md-2 icone pop">
          <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" title="Distance :" data-content="Le parcours de cette randonnée est de 11.69 km"><img src="https://maxcdn.icons8.com/windows10/PNG/512/Transport/milestone-512.png" width="60" height="60" alt="icone_borne"/>
          </button>
      </div>
      <div class="col-md-offset-2 col-md-2 icone pop">
        <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" title="Difficulté :" data-content="vous rencontrerez quelques dénivelés."><img src="http://icon-icons.com/icons2/390/PNG/512/mountaintop_38192.png" width="60" height="60" alt="icone_montagne"/>
        </button>
      </div>
      <div class="col-md-offset-1">
      </div>

    <div class="row carte plan">
      <div class="col-md-offset-3 col-md-5">
        <iframe height="300" width="400" frameborder="0" scrolling="no" src="https://www.visorando.com/index.php?component=externe&task=showCarte&idRandonnee=119073&satellite=1&carte=1&navigation=1&panZoom=1&mousePosition=1&scaleLine=1"></iframe><br /><a href="https://www.visorando.com" target="_blank">Visorando</a> 
      </div>
      <div class="col-md-offset-3"></div>
    </div>

<!--partie Description -->
    <div class="row">
      <div class="col-md-offset-4 col-md-4">
        <h2 id='description_h2'>Description de la randonnée</h2>
        <p>Du parking des platières d'Apremont, emprunter le sentier de l'érosion (balisage Jaune) et se rendre directement au point de vue sur les Gorges.</br>
        Puis, repartir sur la droite en continuant de suivre les marques Jaunes pour trouver l'escalier en bois (106 mètres de long et 149 marches) qui vous amène au fond des gorges, dans le "désert". Mais pourquoi donc ce terme car le lieu n'y ressemble vraiment pas? C'est parce qu'au début du 19ème siècle, il n'y avait pas d'arbres, seulement de la bruyère et des rochers et qu'une plantation de pins y a été décidée....</p>

      </div>
      <div class="col-md-offset-4">
      </div>
    </div>

<!--partie pour visualiser les commentaires-->


<div class="row acte"> 
    <div class="col-md-offset-4 col-md-4">

<?php include_once 'model/connexion_bdd.php';
$result = $bdd->query('SELECT * FROM commentaires');
?>




        <table>
          <caption>Vos commentaires</caption>
            <thead>
              <tr>
                <th>Titre</th>
                <th>Commentaire</th>
              </tr>
            </thead>

            <tbody>
              <?php 
                while ($donnee = $result->fetch()) { ?>
                  
                  <tr>
                    <td><?php echo $donnee['titre']; ?></td>
                    <td><?php echo $donnee['commentaire']; ?></td>
                    <a href="info_circuits.php?=<?php echo $donnee['id']; ?>Delete </a>
                  </tr>

              <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-offset-4">
    </div>
</div>




    <div class="row insert">
        <div class="col-md-offset-4 col-md-4">
           <form method="POST" action="">
              <fieldest>
                <label for="titre"></label>
                <input type="text" name="titre" id="titre"/><br>
                <label for="texte"></label>
                <input type="text" name="texte" id="texte"/>
              </fieldest> 
            </form>  
        </div>

        <div class="col-md-offset-4">
        </div>
    </div>

    <div class="row button">
        <div class="col-md-offset-4 col-md-4">
          <div id="submit">
            <input type="submit" value="Partager"/>
          </div>
        </div>

        <div class="col-md-offset-4">
        </div>
    </div>

</div>



  <?php include 'includes/footer.php'; ?>
