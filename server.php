<?php
$paragraph = $_POST['paragraphToBePrinted'];

$wordToBeCensored = $_POST['wordToBeCensored'];
?>

<!DOCTYPE html>

<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Server</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="first-section">
        <h1>Your Paragraph says:
            <?php echo $paragraph; ?>
        </h1>
        <h1>It is
            <?php strlen($paragraph); ?> characters long
        </h1>
    </div>

    <div class="second-section">
        
    </div>
</body>

</html>