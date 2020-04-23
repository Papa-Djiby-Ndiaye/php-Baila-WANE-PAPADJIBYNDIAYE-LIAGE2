<?php
        
                if(isset($_POST['Envoyer'])){
                    $prenom=$_POST['prenom'];
                    $nom=$_POST['nom'];
                if(!empty($prenom) AND !empty($nom)){
                    echo"votre prenom : ".($_POST['prenom']);
                    echo"</br>";
                    echo"votre  nom : ".($_POST['nom']); 
                    } 
                }else echo"infos manquant";
            ?>