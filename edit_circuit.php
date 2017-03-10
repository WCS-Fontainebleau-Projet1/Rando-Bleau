<?php include 'includes/header.php'; ?>

<div class="row insert">
        <div class="col-md-offset-4 col-md-4">
           <form method="POST" action="add_circuit_action.php?id=<?php echo $_GET['id'];?>">
              <fieldest>
                <label for="titre">Votre titre</label>
                <input type="text" name="titre" id="titre"/><br>
                <label for="texte">Vos commentaires</label>
                <input type="text" name="commentaire" id="texte"/>
              </fieldest> 

                <div class="row button">
                  <div class="col-md-offset-4 col-md-4 validator">
                    <div id="submit">
                      <input type="submit" value="Partager"/>
                    </div>
                  </div>

                  <div class="col-md-offset-4">
                  </div>
                </form>  
           </div>     
      </div>