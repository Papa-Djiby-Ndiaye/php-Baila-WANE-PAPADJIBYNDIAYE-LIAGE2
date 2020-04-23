 <?php
    function somme($a,$b){
        return $a+$b;
    }     
    function produit($a,$b){
        return $a*$b;
    }     
    function quotient($a,$b){
        if($b==0){
        return null;
    } 
        return $a/$b;
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
     
         
        
 ?>
 <!doctype html>
 <html lang="en">
   <head>
     <title>application</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
   <body>
       <div class="container  mt-5 ">
           <form action="" method="post">
               <div class="form-group row ml-2">
                   <label for="inputName" class="col-sm-1-12 col-form-label">Nbre1</label>
                   <div class="col-8">
                       <input type="text" class="form-control" name="nbre1" id="inputName" placeholder="Ecrivez un nombre">
                   </div>
               </div>
               <div class="form-group row ml-2">
                   <label for="inputName" class="col-sm-1-12 col-form-label">Nbre2</label>
                   <div class="col-8">
                       <input type="text" class="form-control" name="nbre2" id="inputName" placeholder="Ecrivez un nombre">
                   </div>
               </div>
                <div class="form-inline ml-1">
                  <label for="">opérateur : </label>
                  <select class="form-control col-2" name="op" id="">
                    <option value="+">Addition</option>
                    <option value="*">Multiplication</option>
                    <option value="/">Division</option>
                  </select>
                </div>
               <div class="form-group row mt-2">
                   <div class="offset-sm-8 col-sm-5">
                       <button type="submit" name="calcul" class="btn btn-primary">Calculer</button>
                   </div>
               </div>
           </form>
       </div>
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <?php
     if(isset($_POST['calcul'])){
         $nbre1=($_POST['nbre1']);
         $nbre2=($_POST['nbre2']);
         $op=($_POST['op']);
      if(isVide($nbre1) || isVide($nbre2)){
             echo "veuillez remplir tous les champs";
         }else{
             if(isNumerique($nbre1)&&isNumerique($nbre2)){
                if($op==="+"){
                   echo $result=somme($nbre1, $nbre2);
                }else if($op=="*"){
                   echo $result=produit($nbre1, $nbre2); 
                }else if($op=="/"){
                  echo  $result=quotient($nbre1, $nbre2); 
                }
             }else{
                echo "veuillez remplir qu'avec des numériques"; 
             }
         }
        }
         ?>
   </body>
 </html>