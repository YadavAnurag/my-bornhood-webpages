<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
    <head>
        <meta http-equiv="content-type" content="text/html ; charset:utf-8" />
        <title>Form handling</title>
        <style>
            .e{
                color: crimson;
                font-style: italic;
            }
        </style>
    </head>
    <body>
        <br/><hr style="background-color: rgb(150,150,150); color: rgb(150,150,150); width: 100%; height: 4px;"><br/>
    <?php
    if (isset($_POST)){
        if ($_POST['submit'] == "Save Text to Server"  && !empty($_POST['filename'])) {
            global $fliename;
            $filename = $_POST['filename'] . ".java";
            if(!file_exists("$filename")){
                $file = tmpfile();
            }
            $file = fopen("$filename","a+");
            while(!feof($file)){
               global $old;
                $old = $old . fgets($file). "<br />";
            }
            $text = $_POST["textdata"];
            file_put_contents("$filename", $old . $text);
            fclose($file);
        }

       /* if ($_POST['open'] == "Submit File Request") {
            if(!file_exists($_POST['filename'] . ".txt")){
                exit("Error: File does not exist.");
            }
            $file = fopen($_POST['filename'] . ".txt", "r");
            while(!feof($file)){
                echo fgets($file). "<br />";
            }
            fclose($file);
        }*/
        
          echo "File Contents:<br/>";
        
            /*$cmd = 'javac C:/xampp/htdocs/webpages/'.$filename;*/
        $cmd = 'who am i';
            echo $cmd."<br />";
    
            echo "<pre>".exec("java C:/xampp/htdocs/webpages/.$filename")."</pre>";
        
    }
    ?>
    </body>
</html>