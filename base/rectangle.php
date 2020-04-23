<?php
function surface($a,$b){
    return $a*$b;
}
function perimetre($a,$b){
    return ($a+$b)*2;
}
function demiP($a,$b){
    return $a+$b;
}
function long($a,$b){
    return $a>$b;
}
function isVide($nbre){
    if(empty($nbre)){
        return true;
    } 
        return false;
     }
    
function isNumerique($nbre){
    if(is_numeric($nbre)){
        return true;
    }
    return false;
}
if(isset($_POST['valider'])){
    $nbre1=($_POST['longueur']);
    $nbre2=($_POST['largeur']);
    if(isVide($nbre1) || isVide($nbre2)){
        echo "veuillez remplir tous les champs";
    }else{
        if(isNumerique($nbre1)&&isNumerique($nbre2)){
            
        }else{
            echo "entrer des numériques";
        }
     } 
      if(long($nbre1,$nbre2)){
                echo "le perimetre est:".$result=perimetre($nbre1, $nbre2);echo"</br>";
                echo "le demi perimetre est:".$result=demiP($nbre1, $nbre2);echo"</br>";
                echo "la surface est:".$result=surface($nbre1, $nbre2);echo"</br>";
            }
            else{
                echo "la longueur doit etre suppérieur a la largeur";
            }
             
        
    

        }



?>

<!doctype html>
<html lang="en">
  <head>
    <title>RECTANGLE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container mt-5">
            <form action="" method="post">
                <div class="form-group row ">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Longueur</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="longueur" id="inputName" placeholder="">
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="inputName" class="col-sm-1-12 col-form-label">Largeur</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="largeur" id="inputName" placeholder="">
                    </div>
                </div>
                 
                <div class="form-group row ">
                    <div class="offset-sm-8 col-sm-5">
                        <button type="submit" name="valider" class="btn btn-success">Valider</button>
                        <button type="delete" name="reinit" class="btn btn-danger">Reinitialiser</button>
                    </div>
                 
            </form>
        </div>      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>