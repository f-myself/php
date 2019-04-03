<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center"><?=$statusMessage?></h2>
        <div class="row pt-3 bg-white">
            <div class="col-12">
                <h5 class="text-center">Example of simple select:</h5>
                <p>
                   <?php
                        echo $simpleSelect;
                   ?>
                </p>
            </div>
        </div>
        <div class="row pt-3 bg-light">
            <div class="col-12">
                <h5 class="text-center">Example of multiply select:</h5>
                <p>
                   <?php
                        echo $multiSelect;
                   ?>
                </p>
            </div>
        </div>
        <div class="row pt-3 bg-white">
            <div class="col-12">
                <h5 class="text-center">Example of table:</h5>
                <p>
                   <?php
                        echo $table;
                   ?>
                </p>
            </div>
        </div>
        <div class="row pt-3 bg-light">
            <div class="col-12">
                <h5 class="text-center">Example of marked List:</h5>
                <p>
                   <?php
                        echo $markedList;
                   ?>
                </p>
            </div>
        </div>
        <div class="row pt-3 bg-white">
            <div class="col-12">
                <h5 class="text-center">Example of numeric List:</h5>
                <p>
                   <?php
                        echo $numList;
                   ?>
                </p>
            </div>
        </div>
        <div class="row pt-3 bg-light">
            <div class="col-12">
                <h5 class="text-center">Example of definition List:</h5>
                <p>
                   <?php
                        echo $defList;
                   ?>
                </p>
            </div>
        </div>
        <div class="row pt-3 bg-white">
            <div class="col-12">
                <h5 class="text-center">Example of radio buttons:</h5>
                <p>
                   <?php
                        echo $radio;
                   ?>
                </p>
            </div>
        </div>
        <div class="row pt-3 bg-light">
            <div class="col-12">
                <h5 class="text-center">Example of checkboxes:</h5>
                <p>
                   <?php
                        echo $checkboxes;
                   ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>