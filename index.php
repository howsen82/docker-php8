<!DOCTYPE html>
<!-- File index.php -->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hello world</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Hello world: apache/php</h1>
        <?php
            $load = sys_getloadavg();
        ?>
        Date: <?php echo date("c"); ?><br />
        CPU usage utilization (load): <?php echo $load[0]; ?>
    </body>
</html>
