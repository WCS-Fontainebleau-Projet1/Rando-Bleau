    <footer>
      <div class="container-fluid container-footer">
        <div class="row">

         <!-- <div class="col-sm-offset-3 col-sm-2 text-center logo_onf">
            <a href="http://www.onf.fr/onf/@@index.html"  title="ONF"><img src="http://www.onf.fr/@@/onf.skin.fo.common.img/logo-v2.png" alt="ONF link"/></a>
        </div> -->

          <div class="col-sm-offset-8 col-sm-2 col-xs-6">
            <div class="row social">
              <a href="#" target="_blank"><img src="pics/Facebook.png" alt="facebook"></a>
              <a href="#" target="_blank"><img src="pics/Twitter.png" alt="Twitter"></a>
              <a href="#" target="_blank"><img src="pics/Youtube.png" alt="Youtube"></a>
            </div>
          </div>

          <h1 class="col-sm-2 col-xs-6 text-center form_contact"><a href="#myModal" role="button" class="btn btn-primary btn-lg btn_custom" data-toggle="modal">Contactez-nous</a></h1>

        </div>
      </div>

      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="myModalLabel">Nous adorerions avoir votre avis!</h3>
            </div>
            <div class="modal-body">
              <form method="POST" action="add_contact_action.php" class="form-horizontal col-sm-12" id="form1">
                <div class="form-group">
                    <label>Nom</label>
                    <input class="form-control required" name="name" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text">
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="message" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea>
                </div>

                <div class="form-group">
                    <label>E-Mail</label>
                    <input class="form-control email" name="email" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text">
                </div>

                <div class="form-group">
                    <label>Tel</label>
                    <input class="form-control phone" name="phone" placeholder="999-999-9999" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="text">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success pull-right">Envoyez!</button>
                    <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; Le formulair n'est pas valide !</p>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal" aria-hidden="true" form="form1">Annuler</button>
            </div>
          </div>
        </div>
      </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='js/style.js'></script>
</body>
</html>
