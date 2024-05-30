<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="Churrasquinho/favicon_io/favicon.ico" type="image/x-icon">
    <title>Churras dos Devs</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(Churrasquinho/img/caramelizada.png);
            background-size: cover;
            
        }
        
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 30px;
            border-radius: 15px;
            color: #fff;

            min-width: 320px;
            
        }
        h1{
            text-align: center;
        }
        input{
            padding: 15px;
            width: 94%;
            border-radius: 10px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        i{
            font-size: 30px;
            cursor: pointer;
            position: absolute;
            right: 18%;
            top: 62%;
            color: gray;
           
            
        }
        fieldset{
            padding: 50px;
            border: 3px solid #ff3131;
        }
        img{
            width: 100%;
            height: 100%;
        }
        legend{
            border: 1px solid #ff3131;
            padding: 10px;
            width: 30%;
            text-align: center;
            border-radius: 100px;
        }
        .inputSubmit{
            background-image: linear-gradient(to right,#ff3131, #ff914d);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-image: linear-gradient(to right,#ff1212, #fc6b11);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <fieldset>
            <legend><img src="Churrasquinho/img/churras-removebg-preview.png" alt="dev"></legend>
            <h1>Bem-Vindo</h1><br>
            <form action="Churrasquinho/testelogin.php" method="POST">
                <input type="text" name="email" placeholder="Email">
                <br><br>
                
                <input type="password" name="senha" placeholder="Senha" id="senha">
                <br><br>
                <input class="inputSubmit" type="submit" name="submit" value="Entrar">
            </form>
            <p>Não tem cadastro? Clique aqui:<a href="Churrasquinho/cadastro.php">Cadastro de Novos Devs</a></p> 
        </fieldset>
    </div>

    
</body>
</html>