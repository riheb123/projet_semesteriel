<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site web</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
</head>
<body>
<?php
 
 class reservation {
      
     public $code;
     public $debut;
     public $fin;
     public $type;
     public $commentaire;
     public $datecréation;
     
 
      
      
     public function inserer() {
  
         $conn= new mysqli($servername,$username,$password,$data);
      
     $conn->exec("INSERT INTO reservation (code, debut,fin,type,commentaire,datecréation)
     VALUES ('" . $this->code . "','" . $this->debut . "','" . $this ->fin . "','" . $this->type . "','" . $this->commentaire . "','" . $this->datecréation . "');
     }  
 }
 ?>
<div>
            <form method="POST" action="gestion-reservation.php">
            <p>
                <label for="date-début"> code : </label> 
                <input type="number" name="code"  placeholder="1234...." size="35" maxlenght="100" /> 
            <br>

                <label for="début"> Début : </label> 
                <input type="date" name="debut"  placeholder="Date" size="35" maxlenght="100" />
            <br>
             
                <label for="fin"> Fin : </label> 
                <input type="date" name="fin"  placeholder="Date" size="35" maxlenght="100" />   
            <br>
                 
                <label for="type"> Type :</label> 
                <input type="text" name="type"  placeholder="type" size="35" maxlength="100" />
            <br>
             
                <label for="commentaire"> Commentaire : </label> 
                <input type="text" name="commentaire"placeholder="commentaire" size="35" maxlength="500" size="10"/>
            <br>
                <label for="date-création"> date creation : </label> 
                <input type="date" name="date-création"  placeholder="Date" size="35" maxlenght="100" /> 
            <br>
            </p>
            
            <p>
                <input type="submit" name="envoyer" value="Envoyer" class="boutons">
                <input type="submit" name="Annuler" value="Annuler" class="boutons">
            
            </p>  
         
             </form>
             
         
        </div> 
</body>
</html>