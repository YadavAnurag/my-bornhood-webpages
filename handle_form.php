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
        <?php 
            $name = $_POST['name'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $submit = $_POST['submit'];
            $comments = $_POST['comments'];
        
            if(!empty($_POST['name'])){
             $name = $_POST['name'];   
            }
            else{
                $name = NULL;
            }
        
            //age checking
            if(isset($_POST['age'])){
                $age = $_POST['age'];
            }
            else{
                 echo "<br /><p >Please select your age!!!!</p>";
                $age = NULL;
            }
        
            //ceheking if gender is selected
            
            if(isset($_POST['gender'])){
                $gender = $_POST['gender'];
            }
            else{
                $gender = NULL;
                echo "Please select your gender";
            }
        
            //comments checking
            if(!empty($_POST['comments'])){
                 $comments = $_POST['comments'];
            }
            elseif(empty($_POST['comments'])){
                 echo "<br /><p >Please enter your comments!!!!</p>";
            }
            else{
                //nothing todo
            }
        
            /*
            //date of birth
            if(isset($month)){
               $month =  $month[];
            }*/
                
            
            if($name && $age && $email && $comments && $gender){
                
                echo "<br /><p>Thank you $name<br />For your following comments<br /><b>$comments</b></p>";
                echo "<br />We will respond you at<i><b> &nbsp $email</b></i> ";
                switch($gender){
                    case 'F':
                        echo "<br />Good day Mam";
                        break;
                    case 'M':
                        echo "<br />Good day Sir !!!";
                        break;
                    default:
                        echo "<br />gender should be either Male or Female";
                        break;
                }
            }
        ?>
    </body>
</html>