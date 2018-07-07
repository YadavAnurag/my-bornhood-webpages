
<html xmlns="http://www.w3.org/1999/html" xml:lang="en" lang="en"  >
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>User Defined String</title>
    </head>
    <body>
        <?php
            #script userstring.php
            #created November 3 2017
            #created by Anurag Yadav
            
        
            #string and string functions 
        
            $FirstName = "Anurag";
            $LastName = "Yadav";
            $Address = "Room No. F-17 Tagore Bhawan";
                echo "your first name<br /><b>$FirstName</b><br />";
                echo "Your Last Name <br /><b>$LastName</b><br />";
                echo "Your address is <br /><b>$Address</b>";
                echo "<br />Affter appending all variables <br />";
                echo "Your first name is $FirstName <br />"." "."Your last name is $LastName"."<br />"."Your address is "."<br />"."$Address";
                $All = $FirstName.$LastName.$Address;
                echo "<br /> all in uppercase \n ".strToUpper($All);
                echo "<br /> all in lowercase \n ".strToLower($All);
                echo "<br /> number of characters ".strlen($All);
                echo "<br /> only first word capitalization". ucFirst($All);
                echo "<br />all first words in uppercase". ucWords($All);
        
                #some number intro and number functions
        
                $Quantity = 30;
                $Price = 1202.32;
                $TaxRate = .05;
                echo "<br />";
                $Total = ($Quantity + $Price );
                echo $Total +=  ($Total)*$TaxRate;
                echo "<br />";
                echo $Total = round($Total, 2);
                echo "<br />";
                $Total = number_Format($Total);
                echo "rounded total price is ".$Total;
                echo "<br />";

        
                #defining some constants
                define("USER_NAME", "Anurag Yadav");
                echo USER_NAME;
                echo "<br />";
                echo PHP_OS;
                echo "<br />";
                echo PHP_VERSION;
                
        ?>
    </body>
</html>