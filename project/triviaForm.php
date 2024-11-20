<?php
?>
<!DOCTYPE html>
<!--
Name: Jappreet Singh
Date: March 04, 2024
Purpose: a trivia quiz game of basic science which give back the result in percentage
source: None
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Science Trivia Game</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/triviaCss.css">
</head>
<body class="d-flex justify-content-center align-items-center flex-column">
<main id="container" class=" container d-flex justify-content-center align-items-center flex-column">
    <h1>Trivia Game</h1>
    <br><br>
    <div id="bar" class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
    </div>
    <br>
    <div>Question 1/10</div>
    <br>
    <form id="triviaForm" class="border">
        <div class="form-group ">
            <div class="form-group content">
                <label class="content d-flex" for="Q1">1. What is the chemical symbol for sodium?</label>
                <input id="Q1" class="form-control" placeholder="type in the answer" type="text" required>
            </div>
        </div>
    </form>
    <div class="form-group d-flex">
        <div id="previousButton">
        <button type="button" class="btn btn-primary">Previous</button>
        </div>
        <div id="nextButton">
        <button type="button" class="btn btn-primary">Next</button>
        </div>
    </div>
</main>
</body>
</html>
