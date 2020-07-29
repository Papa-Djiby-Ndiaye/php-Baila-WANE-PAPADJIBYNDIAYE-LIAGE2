<?php

class CommentaireManager extends Manager{
   
    function __construct(){
        $this->className="Commentaire";
    }



    public function create($objet){
        $sql="INSERT INTO examen (`id`, `nom`, `email`, `commentaire`, `textFormat`) VALUES (NULL, '".$objet->getNom()."', '".$objet->getEmail()."', '".$objet->getCommentaire()."', '".$objet->getTextFormat()."')";
        //die($sql);
        return $this->ExecuteUpdate($sql)!=0;

    }
    public function update($objet,$id){
        
        $sql="UPDATE user SET  fullName=[.$objet->getFullName().],login=[.$objet->getLogin().],pwd=[.$objet->getPwd().],profil=[.$objet->getProfil().],score=[.$objet->getScore().] WHERE id=$id";
        //die($sql);
        return $this->ExecuteUpdate($sql)!=0;

    }
    public  function delete($id){
      $sql="DELETE FROM examen WHERE id='$id' ";

      return $this->ExecuteUpdate($sql)!=0;
    }
    public function findAllReponse(){

        $sql="select reponses from `question`";
        

        return $this-> ExecuteSelect($sql);
         }

         public function findAll(){

            $sql="select * from `question`";
            
    
            return $this-> ExecuteSelect($sql);
             }

             public function findDistinct(){

                $sql="SELECT DISTINCT question FROM `question`";
                
        
                return $this-> ExecuteSelect($sql);
                 }



             
    public function findById($id){

        $sql="select score,question,repones,nbrePoint from question where id='$id'";
        
       return $this-> ExecuteSelect($sql);

    }   
}