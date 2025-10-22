<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>FormulárioP</title>
   <style>
          body {
               background-color: indianred;
               font-family: Arial, sans-serif;
               text-align: center;
               color: white;
               padding: 20px;
          }

          h2 {
               margin-bottom: 30px;
          }

          form {
               background-color: rgba(255, 255, 255, 0.1);
               padding: 20px;
               border-radius: 10px;
               max-width: 400px;
               margin: 0 auto;
               box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
          }

          label {
               font-weight: bold;
               display: block;
               margin-top: 15px;
               margin-bottom: 5px;
               text-align: left;
          }

          input[type="text"],
          input[type="number"],
          input[type="email"] {
               width: 100%;
               padding: 10px;
               border: none;
               border-radius: 5px;
               margin-bottom: 10px;
          }

          input[type="radio"] {
               margin-right: 5px;
          }

          input[type="submit"] {
               background-color: #fff;
               color: indianred;
               padding: 10px 20px;
               border: none;
               border-radius: 5px;
               font-weight: bold;
               cursor: pointer;
               margin-top: 20px;
          }

          input[type="submit"]:hover {
               background-color: #ffe6e6;
          }

          h3 {
               margin-top: 40px;
               color: #fff0f5;
          }

     </style>
</head>
<body>
     <h2>Formulário Outubro Rosa 🩷</h2>
     <form action="klin.php" method="POST">
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
