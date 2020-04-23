<!doctype html>
    <html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>projet1</title>
        </head>
        <body>
            <form method="post" action="page4a.php">
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
        
       
    ?>
        </body>
        
    </html>