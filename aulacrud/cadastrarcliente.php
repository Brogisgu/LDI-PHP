<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MenuPrincipal</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header id = "banner">
        <a href="index.php">Início</a>
    </header>
    <section id="corpo">
        <form action="inserircliente.php" method= "POST">
            Nome:
            <input type="text" name="cxnome"> <br>
            Email:
            <input type="text" name="cxemail"> <br>
            <input type="submit" value="Gravar"> <br>
        </form>
    </section>
</body>
</html>