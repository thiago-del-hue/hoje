<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioD</title>
    <style>
        body {
            background-color: #0d1117;
            color: #e6edf3;
            font-family: "Poppins", sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }


        .resultado-container {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(100, 200, 255, 0.15);
            border-radius: 10px;
            padding: 30px 40px;
            width: 360px;
            box-shadow: 0 0 15px rgba(0, 150, 255, 0.1);
            backdrop-filter: blur(8px);
            animation: fadeIn 0.8s ease;
        }

        h1 {
            color: #4db8ff;
            text-align: center;
            font-weight: 600;
            margin-bottom: 25px;
            text-shadow: 0 0 6px rgba(77, 184, 255, 0.4);
            letter-spacing: 0.5px;
        }


        p,
        br {
            line-height: 1.6;
            font-size: 15px;
        }


        a {
            display: block;
            margin-top: 25px;
            text-align: center;
            background: #4db8ff;
            color: #0d1117;
            text-decoration: none;
            font-weight: 600;
            padding: 10px 0;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        a:hover {
            background: #3da0e6;
            box-shadow: 0 0 10px rgba(77, 184, 255, 0.4);
            transform: translateY(-1px);
        }


        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        @media (max-width: 400px) {
            .resultado-container {
                width: 85%;
                padding: 25px;
            }
        }
    </style>



</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeCliente = $_POST["Nome"];
        $TelCliente = $_POST["Numero"];
        $TipoAparelho = $_POST["Tipo"];
        $DataAtendimento = $_POST["Data"];
        $DescriçãoProblema = $_POST["Descrição"];
        echo "Nome: $nomeCliente<br>";
        echo "Numero: $TelCliente<br>";
        echo "Tipo: $TipoAparelho<br>";
        echo "Data: $DataAtendimento<br>";
        echo "Descriçao: $DescriçãoProblema<br>";
    }

    ?>
    <a href="agora.php"> Voltar</a>
</body>

</html>