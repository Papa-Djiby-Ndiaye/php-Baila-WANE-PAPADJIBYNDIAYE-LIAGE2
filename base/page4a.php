<?php
        
                if(isset($_POST['Envoyer'])){
                    $prenom=$_POST['prenom'];
                    $nom=$_POST['nom'];
                    $matricule=$_POST['matricule'];
                    $sexe=$_POST['sexe']; $prenom=$_POST['prenom'];
                    $service=$_POST['service'];
                    $fonction=$_POST['fonction'];
                    $adresse=$_POST['adresse'];
                if(!empty($prenom) AND !empty($nom) AND !empty($adresse) AND !empty($matricule) AND !empty($sexe) AND !empty($service) AND !empty($fonction)){
                    echo"votre prenom : ".($_POST['prenom']);
                    echo"</br>";
                    echo"votre  nom : ".($_POST['nom']);  echo"</br>";
                    echo"votre matricule : ".($_POST['matricule']);
                    echo"</br>";
                    echo"votre  sexe: ".($_POST['sexe']);
                    echo"</br>";
                    echo"votre adresse : ".($_POST['adresse']);
                    echo"</br>";
                    echo"votre  service : ".($_POST['service']);
                    echo"</br>";
                    echo"votre fonction : ".($_POST['fonction']);
                    } 
                }else echo"infos manquant";
            ?>