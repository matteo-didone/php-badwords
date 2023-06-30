<?php
// Storing paragraph in a variable
$paragraph = $_POST['paragraph'];

// Storing wordToBeCensored in a variable
$wordToBeCensored = $_POST['wordToBeCensored'];

// Storing the length of the paragraph in another variable, that we'll be printing
$paragraphLength = strlen($paragraph);

// Using str_replace() method to replace the word that needs to be censored with "***", inside of the original paragraph
// Then, we store the "updated" paragraph in another variable, that I'm calling censoredParagraph
$censoredParagraph = str_replace($wordToBeCensored, '***', $paragraph);

// Storing the length of the censored paragraph in another variable, that we'll be printing
$censoredParagraphLength = strlen($censoredParagraph);
?>

<!DOCTYPE html>

<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Server</title>
    <link rel="stylesheet" href="server-style.css">
</head>

<body>
    <div class="first-section">
        <h1>Your Paragraph says:
            <?php echo $paragraph; ?>
        </h1>
        <h1>It is
            <?php echo $paragraphLength; ?> characters long
        </h1>
    </div>

    <div class="second-section">
    <h1>Your Updated Paragraph says:
            <?php echo $censoredParagraph; ?>
        </h1>
        <h1>It is
            <?php echo $censoredParagraphLength; ?> characters long
        </h1>
    </div>
</body>

</html>