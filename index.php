<html>
    <head>
        <title>Simple Infinite Scroll</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
    <?php
        include 'db/mysql.php';

        $db = new db();
 
        if($db){
            echo "yosss boii";
        }else{
            echo "idiot";
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                One of three columns
            </div>
            <div class="col-sm">
                One of three columns
            </div>
            <div class="col-sm">
                One of three columns
            </div>
        </div>
    </div>

        
    </body>
</html>