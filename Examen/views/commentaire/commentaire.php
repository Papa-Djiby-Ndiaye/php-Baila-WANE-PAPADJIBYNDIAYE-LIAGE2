 
  <p> Ajouter un Commentaire </p></br>
    <form action="./controllers/Commentaire.php " method="post"> 
      <div class="form-group">
       
        <label for="">Votre Nom</label>
        <input type="text" class="form-control" name="nom" id="" aria-describedby="helpId" placeholder="">
        <small id="helpId" class="form-text text-muted"></small></br>
      
        <label for="">Votre Email</label>
        <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
        <small id="emailHelpId" class="form-text text-muted">le contenu de ce champ ne sera pas montré publiquement</small></br>
        <label for="">page d'acceuil</label>
        <input type="text" class="form-control" name="nom" id="" aria-describedby="helpId" placeholder="">
        <small id="helpId" class="form-text text-muted"></small></br>
         
          <label for=""> Commentaire<abbr style="color: red;" title="(commentaire) ">*</abbr> </label>
          <textarea class="form-control" name="com" id="" rows="3" required></textarea>
          <div class="form-group">
            <label for="">Texte format</label>
            <select class="form-control" name="" id="">
              <option>Simple</option>
              <option>Plaint</option>
               
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Envoyer</button> 
          <a href="<?=WEBROOT?>/security/loadViewInscription" class="text-secondary pl-5"><button type="submit" class="btn btn-primary">Afficher</button></a> 
        
        </div>
      </div>
      </form>
    