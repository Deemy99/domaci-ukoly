<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Zpracování formuláře</title>
</head>
<body>
    <h1>Odeslaná data</h1>

    <?php
    $jmeno   = htmlspecialchars($_POST["jmeno"] ?? "");
    $email   = htmlspecialchars($_POST["email"] ?? "");
    $heslo   = $_POST["heslo"] ?? "";
    $datum   = htmlspecialchars($_POST["datum"] ?? "");
    $souhlas = isset($_POST["souhlas"]) ? "Ano" : "Ne";
    ?>

    <p><strong>Jméno:</strong> <?php echo $jmeno; ?></p>
    <p><strong>E-mail:</strong> <?php echo $email; ?></p>
    <p><strong>Heslo:</strong> <?php echo str_repeat("*", strlen($heslo)); ?></p>
    <p><strong>Datum narození:</strong> <?php echo $datum; ?></p>
    <p><strong>Souhlas se zpracováním:</strong> <?php echo $souhlas; ?></p>

    <a href="index.html">Zpět na formulář</a>
</body>
</html>
