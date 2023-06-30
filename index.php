<!-- 
Create a PHP form that allows sending two fields: a paragraph and a word to censor.
Manage everything with two different files. The first file should allow the user to input the data and send the request to the server.
The second file will receive the request and perform the following operations:

Display the paragraph and its length on the screen.
Display the paragraph and its length again, after replacing all occurrences of the censored word with three asterisks.
Translated into English:
Description:
Create a PHP form that allows sending two fields: a paragraph and a word to censor.
Manage everything with two different files. The first file should allow the user to input the data and send the request to the server.
The second file will receive the request and perform the following operations:

Display the paragraph and its length on the screen.
Display the paragraph and its length again, after replacing all occurrences of the censored word with three asterisks.
-->

<?php

?>

<!DOCTYPE html>

<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <!-- Form Section -->
    <!-- Action is the receiver of my form's data -->
    <!-- Method is the method that's being used to pass the data -->
    <form action="server.php" method="POST">

        <!-- First Label -->
        <label for="paragraph">First Paragraph: </label>
        <!-- First Paragraph Field -->
        <input type="text" name="paragraph">

        <!-- Second Label -->
        <label for="word">Word To Be Censored: </label>
        <!-- Word that needs to be censored -->
        <input type="text" name="wordToBeCensored" id="word">

        <button type="submit">
            Send the form
        </button>
    </form>
</body>

</html>