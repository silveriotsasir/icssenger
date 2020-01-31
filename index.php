<?php
	require_once("dbManager.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/icse_icon.ico" />
        <meta charset="utf-8">
        <title>ICSSENGER</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style/main.css">
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1> ICSSENGER </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-primary">
                            <div class="panel-heading text-center">
                                <i class="glyphicon glyphicon-user"> </i>
                                 <input id="username" value="username" type="text" class="username" >
                            </div>
                            <div class="panel-body">
                                <div id="message-panel" class="message">
                                    <!-- COMPLETED USING AJAX -->
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <input id="message" class="form-control" placeholder="[type something here...]">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button class="btn btn-success form-control"  onclick="send_msg();"> write </button>
                                    </div>
                                </div>
                            </div>
                    </div>          
            </div>
        </div>
    </body>
</html>
<script src="js/main.js"></script>