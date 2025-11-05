<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DateF</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(135deg, #e0eafc, #cfdef3);
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        height: 100vh;
    }

    h2 {
        margin-top: 50px;
        color: #333;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }

    form {
        background-color: #fff;
        padding: 25px 40px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        margin-top: 20px;
        text-align: center;
    }

    label {
        font-weight: bold;
        color: #333;
    }

    input[type="text"] {
        width: 220px;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        outline: none;
        font-size: 14px;
        transition: 0.3s;
    }

    input[type="text"]:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0,123,255,0.4);
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    hr {
        margin: 30px 0;
        width: 60%;
        border: 0;
        border-top: 1px solid #ddd;
    }

    p {
        font-size: 15px;
        padding: 10px 20px;
        border-radius: 6px;
        max-width: 300px;
        text-align: center;
    }

    p:nth-of-type(1) {
        background-color: #fff3cd;
        color: #856404;
    }

    p:has(> strong), p:contains("✅") {
        background-color: #d4edda;
        color: #155724;
    }

    p:contains("⚠️") {
        background-color: #f8d7da;
        color: #721c24;
    }
</style>
</head>
<body>
    <h2>Sistema de Login com CPF</h2>
    <form method="POST">
        <label>Digite seu CPF(apenas números):</label><br>
        <input type="text" name ="cpf" minLength="11" maxLenght="11" placeholder="Com 11 dígitos" required><br><br>
        <input type="submit" name="cadastrar" value="Enviar CPF">
         <input type="submit" name="entrar" value="Envio de CPF">
    </form>
<hr>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $cpf=$_POST["cpf"];
    if(!ctype_digit($cpf)||strlen($cpf)!=11){
echo "<p> ⚠️ O CPF deve conter exatamente 11 números.</p>";
exit;
}
$conn= new mysqli("localhost","root","aluno","cpf_sitemasdados","3307");
if($conn->connect_error) {
    die("<p>Erro de conexão: " . $conn->connect_error. "</p>");
}
if(isset($_POST["cadastrar"])){
    $sql="INSERT INTO usuarios (cpf) VALUES ('$cpf')";
    if($conn->query($sql)===TRUE){
        echo "<p> ✅ CPF cadastrado com sucesso!</p>";
    } else {
        echo "<p> ⚠️ CPF já cadastrado.</p>";
    }
}
$conn->close();
}
if(isset($_POPST["entrar"])){
    $sql="SELECT cpf FROM usuarios WHRE cfp='$cpf'";
    $result=$conn->query($sql);
    if($reslut->num_rows>0){
        echo "<script>window.location.href='bemvindo.php?cpf=$cpf';</script>";
    } else {
        echo "<p> ⚠️ CPF não econtrado. Por favor, cadastre-se primeiro.</p>";
    } 
    }
$conn->close();
}
?>
</body>

</html>
