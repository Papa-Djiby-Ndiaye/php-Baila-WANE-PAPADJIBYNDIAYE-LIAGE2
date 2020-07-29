<?php
 
class Commentaire extends Controller {

    function __construct(){
      
        $this->dirname="commentaire";
        $this->layout="layoutCommentaire";
        //Objet de Validation
        $this->validator=new Validator();
        $this->manager=new CommentaireManager();

    }
    public function showPage(){
        //Afficher la Page de Connection
      
        $this->views="commentaire";
        $this->render();
    }
    public function Commentaire(){
        //Afficher la Page de Connection
      
      var_dump($_POST);
      $this->views="commentaire";
      $this->render();
    }
}