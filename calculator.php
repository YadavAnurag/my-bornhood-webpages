<?php #script calculator.php 
$page_title = "Trip Cost Calculator";
require('includes/header.html');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    //form validation
    if(isset($_POST['distance'] , $_POST['gallon_price'], $_POST['efiiciency']) && is_numeric($_POST['distance']) && is_numeric($_POST['gallon_price']) && is_numeric($_POST['efficiency'])){
        
        //calculates the results:
        $gallons = $_POST['distance']/$_POST['efficiency'];
        $dollars = $gallons * $_POST['gallon_price'];
        $hours = $_POST['distance']/65;
        
        //prints the results:
        echo '<h1>Total Esimated cost</h1>
        <p>The total cost of driving'.$_POST['distance']>' miles, averaging '.$_POST['efficiency'].'miles per gallon, and paying an average of'.$_POST['gallon_price'].' per gallon, is '.number_format($dollars, 2).'if you drive at an average of 65 miles per hours, the trip will take approximately'.number_format($hours, 2).'hours.</p>';
    }
    else{
        //invalid values submitted
        echo "<h1>Error!</h1>
        <p>Please enter a valid distance, price per gallon, and fuel efficiency</p>";
    }

}
?>

<h1>Trip cost calculator</h1>
<form method="post" action="calculator.php">
    <p>Distance (in miles)<input type="text" name="distance"/></p>
    <p>Avarage price per gallon: <span class="input">
        <input type="radio" name="gallon_price" value="3.00"/>3.00
        <input type="radio" name="gallon_price" value="3.50"/>3.50
        <input type="radio" name="gallon_price" value="4.00"/>4.00
        </span>
    </p>
    <p>Fuel Efficiency: <select name="efficiency">
        <option value="10">Terrible</option>
        <option value="20">Decent</option>
        <option value="30">Very Good</option>
        <option value="40">Outstanding</option>
        </select>
    </p>
    <input type="submit" name="submit" value="Calculate!"/>
</form>

<?php
require('includes/footer.html');
?>