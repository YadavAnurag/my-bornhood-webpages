<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="conten-type" content="text/html; charset:utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            label{
                font-weight: bold;
                color: #300ACC;
            }
            form{
                background: aqua;
            }
        </style>
    </head>
    <body>
        <form id="form" action="handle_form.php" method="post">
            <fieldset  ><legend >Enter your information in the form below</legend>
                <p><label>Name:<input type="text" name="name" placeholder="Enter your name" required="required" size="20" maxlength="80%"/></label></p>
                <p><label>Email:<input type="email" name="email" placeholder="Enter your name here" size="20" maxlength="40" /></label></p>
                <p>
                    <label for"gender">Gender:</label><input type="radio" name="gender" value="M"  />Male
                    <input type="radio" name="gender" value="F"/>Female
                </p>
                <p>
                    <label>Age:
                        <select name="age" this.value="" onclick="this.value">
                            <option value="0-29">Under 30</option>
                            <option value="30-60">Between 30 and 60</option>
                            <option value="60+">More than 60</option>
                        </select>
                    </label>
                </p>
                
                
               <!-- <p>
                    <label>Date of Birth:
                        <select name="age" this.value="" onclick="this.value">
                            <option value="0-29">Under 30</option>
                            <option value="30-60">Between 30 and 60</option>
                            <option value="60+">More than 60</option>
                        </select>
                    </label>
                </p>-->
                
                <?php
                
                echo "<label>Date of Birth: </label>";
                 $month = array(1=>'January', 'February','March','April','May','June', 'July','August','September','Octobar','November','December');
               /* $days = range(1,31);
                $year = range(1990,2040);*/
                echo '<select name="month">';
                foreach($month as $key => $value){
                    echo "<option value=\"$key\">$value</option> \n";
                }
                echo '</select>';
            
                echo '<select>';
                /*foreach($days as $key => $value){
                    echo "<option value=\"$key\">$value</option>\n";
                }*/
                for($day=1;$day<=31;$day++){
                    echo "<option value=\"$day\" >$day</option>";
                }
                echo '</select>';
            
                echo '<select>';
               /* foreach($year as $key => $value){
                    echo "<option value=\"$key\">$value</option>";
                }*/
                for($year=1990;$year<=2020;$year++){
                    echo "<option value=\"$year\">$year</option>";
                }
                echo '</select>';
                ?>
                
                <p><label> Comments:<br /><textarea name="comments" rows="3" cols="40"></textarea></label></p>
            </fieldset>
                <p align="center" ><input type="submit" name="submit" value="Submit my form" /></p>
        </form>
    </body>
</html>