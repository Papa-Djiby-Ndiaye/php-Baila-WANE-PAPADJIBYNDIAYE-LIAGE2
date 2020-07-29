<?php
class Commentaire implements IManager{
    private $id;
    private $textFormat;
    private $nom;
    private $email;
    private $commentaire;


    public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row){
        if (isset($row['id'])) {
            $this->id=$row['id'];
        }

        if (isset($row['textFormat'])) {
            $this->textFormat=$row['textFormat'];
        }

        if (isset($row['nom'])) {
            $this->nom=$row['nom'];
        }

        if (isset($row['email'])) {
            $this->email=$row['email'];
        }

        if (isset($row['commentaire'])) {
            $this->commentaire=$row['commentaire'];
        }
       
       
       
       
       
    }


    public function getId(){
        return $this->id;
    }

    public function getTextFormat(){
        return $this->textFormat;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getCommentaire(){
        return $this->commentaire;
    }

    public function setCommentaire($commentaire){
        $this->commentaire=$commentaire;
    }

    public function setTextFormat($textFormat){
        $this->textFormat=$textFormat;
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function setEmail($email){
        $this->email=$email;
    }

    
}