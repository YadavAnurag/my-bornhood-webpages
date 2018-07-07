
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>PHP Perdefined Variables</title>
    </head>
    <body>
        <?php
            
            #script predefined.php
            #Created November 3 2017
            #created by Anurag Yadav
        
            $file = $_SERVER['SCRIPT_FILENAME'];
            $user = $_SERVER['HTTP_USER_AGENT'];
            $serverSoftware = $_SERVER['SERVER_SOFTWARE'];
            echo "you are running file <br /><b>$file</b><br/>";
            echo "you are viewing this page using<br /> <b>$user</b><br />";
            echo "this server is running <br /><b>$serverSoftware</b>"
        ?>
    </body>
</html>