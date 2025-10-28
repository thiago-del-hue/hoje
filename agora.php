<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormulárioD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #37c97eff);
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        h2 {
            margin-top: 40px;
            color: #333;
        }

        form {
            background: #fff;
            padding: 25px 35px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            margin-top: 20px;
        }

        label {
            font-weight: bold;
            color: #444;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 20px;
            margin-top: 6px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus {
            border-color: #4a90e2;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4a90e2;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #357abd;
        }

        h3 {
            color: #333;
            margin-top: 40px;
        }

        .resultado {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-top: 20px;
        }
    </style>

</head>

<body>
    <h2>Conserto de Eletrodomésticos</h2>
    <form action="lilby.php" method="POST">
        <label>Nome do Cliente:</label><br>
        <input type="text" name="Nome" required><br><br>
        <label>Telefone de Contato:</label><br>
        <input type="number" name="Numero" required><br><br>
        <label>Tipo de Aparelho:</label><br>
        <select name="Tipo" required>
            <option value="">Selecione um aparelho</option>
            <option value="Geladeira">Geladeira</option>
            <option value="Máquina de lavar">Máquina de lavar</option>
            <option value="Micro-ondas">Micro-ondas</option>
            <option value="Fogão">Fogão</option>
        </select><br><br>
        <label> Data preferida para o Atendimento</label>
        <input type="date" name="Data" required><br><br>
        <label>Descrição do Problema</label>
        <input type="text" name="Descrição" required><br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeCliente = $_POST["Nome"];
        $TelCliente = $_POST["Numero"];
        $TipoAparelho = $_POST["Tipo"];
        $DataAtendimento = $_POST["Data"];
        $DescriçãoProblema = $_POST["Descrição"];
    }
    ?>

</body>

</html>