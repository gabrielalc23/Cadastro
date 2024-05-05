<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
         rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <title>Document</title>
</head>
<body>
   <div class="container"> 
      <div class="card mt-5">
         <div class="header mt-4 p-2 text-center"><h5><b>Suba sua foto de perfil</b></h5></div>
            <div class="card-body">
               <div class="alert alert-success mt-4" role="alert">
   <?php
   if(isset($_FILES['pic']))
   {
      $ext = strtolower(substr($_FILES['pic']['name'],-4)); 
      $new_name = uniqid() . $ext;

      $dir = 'imagens/'; 

      move_uploaded_file($_FILES['pic']['tmp_name'], $dir . $new_name); 
      
      echo ("Imagem enviada com sucesso!");
      echo '
               </div>
            </div>     
         </div>
      </div>';
   } else {
      echo '
      <div class="container"> 
      <div class="card mt-5">
         <div class="header mt-4 p-2 text-center"><h5><b>Erro ao enviar imagem</b></h5></div>
            <div class="card-body">
               <div class="alert alert-bg-danger mt-4" role="alert">
                  <h6>erro ao enviar imagem!!!</h6>
               </div>
            </div>     
      </div>
      </div>';
      
   }
   ?>
        
</body>
</html>
