<html xmlns:"http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8 "  />
    </head>
    <body>
        <form action="handle_from.php" method="post">
            <?php
                #script calender.php 
                #created on November 5 2017
                #created by Anurag Yadav 
                
                $month = array(1=>'January', 'February','March','April','May','June', 'July','August','September','Octobar','November','December');
                $days = range(1,31);
                $year = range(1990,2040);
                echo '<select name="month">';
                foreach($month as $key => $value){
                    echo "<option value=\"$key\">$value</option> \n";
                }
                echo '</select>';
            
                echo '<select>';
                foreach($days as $key => $value){
                    echo "<option value=\"$key\">$value</option>\n";
                }
                echo '</select>';
            
                echo '<select>';
                foreach($year as $key => $value){
                    echo "<option value=\"$key\">$value</option>";
                }
                echo '</select>';
             ?>
        </form>
    </body>
</html>