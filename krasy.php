<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>FormulárioP</title>
     <style>
          body{
               background-color: indianred;
               test-align:  center;
          }
     </style>
</head>
<body>
     <h2>Formulário Outubro Rosa 🩷</h2>
     <form action="krasy.php" method="POST">
     <label>Nome:</label><br>
     <input type="text" name="nome" required><br><br>
     <label>Idade:</label><br>
      <input type="number" name="idade" required><br><br>
      <label>E-mail:</label><br>
      <input type="email" name="email" required><br><br>
     <label>Já realizou o exame de mamografia este ano?</label><br>
     <input type="radio" name="mamografia" value="Sim"required>Sim<br>
     <input type="radio" name="mamografia" value="Não">Não<br><br>
     <input type="submit" value="Enviar Resposta">
  
     </form>
     <?php
     if ($_SERVER["REQUEST_METHOD"]== "POST"){
          $nome= $_POST["nome"];
          $mamografia= $_POST["mamografia"];
          $idade= $_POST["idade"];
          $Email= $_POST["email"];

     echo"<h3>🩷 Dados Recebidos(POST)</h3>";
     echo"Nome: $nome <br>";
     echo"Fez mamografia:$mamografia <br>";
     echo"Idade:$idade<br>";
     echo"e-mail:$Email<br>";
     }
     ?>
     
</body>
</html>