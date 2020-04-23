<!doctype html>
    <html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>projet1</title>
        </head>
        <body>
            <form method="post" action=" ">
           Matricule : <input type="text" name="matricule" placeholder="votre matricule" required></br><br />
               Prenom : <input type="text" name="prenom" placeholder="votre prenom" required></br><br />
               Nom    : <input type="text" name="nom" placeholder="votre nom" required></br><br />
                <label >sexe:</label>  
	            <input type="radio" name="sexe" value="masculin" /> masculin  
	            <input type="radio" name="sexe" value="femini" /> feminin</br><br />
                adresse <textarea rows="5" cols="20" wrap="physique" name="adresse"></textarea><br /><br />
               Service: <select name="service">
		            <option>Choisir</option>
		            <option>service1 </option> 
	            	<option>Service2</option>
		            <option>Service3</option>
	            </select><br /><br />
                Fonction <select name="fonction">
		            <option>Choisir</option>
		            <option>fonction1 </option> 
	            	<option>fonction2</option>
		            <option>fonction3</option>
	            </select><br /><br />
                <input type="submit" name="Envoyer">
            </form>
            <?php
             
                $prenom=$_POST['prenom'];
                $nom=$_POST['nom'];
                $matricule=$_POST['matricule'];
                $sexe=$_POST['sexe']; $prenom=$_POST['prenom'];
                $service=$_POST['service'];
                $fonction=$_POST['fonction'];
                $adresse=$_POST['adresse'];
       $NbrLigne = 3;
       $tableau = array("<u> matricule </u> : "."</br>".$matricule,"<u> prenom </u> : "."</br>". $prenom,"<u> nom </u> : "."</br>". $nom,"<u> sexe </u> : "."</br>". $sexe,"<u> adresse </u> : "."</br>". $adresse,"<u> service </u> : "."</br>". $service,"<u> fonction </u> : "."</br>". $fonction);
       // --------------------------------
       // $NbreData : le nombre de données à afficher
       $NbreData = count($tableau);
       // --------------------------------
       $NbrCol = 0;
       // affichage
       if ($NbreData != 0) {
           $k = 0; // indice du tableau
       ?>
           <table>
           <tbody>
               <tr>
       <?php
           while ($k < $NbreData) 
           {
       ?>            <td valign="top">
                       <table border="1">
       <?php
               for ($i=1; $i<=$NbrLigne; $i++) 
               {
                   if ($k < $NbreData) 
                   {
       ?>
                           <tr>
                               <td>
       <?php                    // -------------------------
                               // DONNÉES À AFFICHER dans la cellule
                               echo $tableau[$k];
                               // -------------------------
       ?>
                               </td>
                           </tr>
       <?php
                       $k++;
                   }
                   if ($i == $NbrLigne) 
                   {
       ?>
                       </table>
                   </td>
       <?php
                   }
               }
               $NbrCol++;
           }
       ?>
               </tr>
           <tbody>
           </table>
       <?php
       } else {
       ?>    pas de donnée à afficher
       <?php
       }
       
    ?>
        </body>
        
    </html>