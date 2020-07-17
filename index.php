<?php

    session_start();

    $token = $_SESSION['TOKEN'];

    if (!isset($token)){
        header("Location: http://localhost:3000/"); 
    }

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Sunburst </title>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway');

        body {
        font-family: "Raleway", "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

</head>

<body>
<!-- Just an image -->
<div class="containter">
    <nav class="navbar navbar-light bg-light">
        <ul class="offset-10 list-unstyled">
            <li>
                <a class="navbar-brand" href="http://localhost:3000/">
                LogOut
                </a>
            </li>
        </ul>
      </nav>
        <div class="row">
            <aside class="col">
                <svg></svg>
            </aside>
           <div class="col">
            <main style=" float:right;width: auto;" class="status">
                
            </main>
           </div>
        </div>
</div>
    <script>
        
    </script>
    <script src="sunburst.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

