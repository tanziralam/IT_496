<?php


require 'final2.php';
$result = $database ->query("SELECT * FROM inventory");
//echo $result;

changeColumn($database);

function changeColumn($database){
        $database->query("ALTER TABLE `inventory` CHANGE `Date_Received` `Date_Updated` VARCHAR(255);");
    }


function trimColumn($database){
        $database->query("ALTER TABLE `inventory` CHANGE `Description` `Description` VARCHAR(20);");
    }
trimColumn($database);

function removeTime($dateStr){
		return substr($dateStr,0,10);
	}
//echo $result;
//echo num_rows;
if ($result -> num_rows >0) {
   
    echo "<table><tr><th>Inventory_ID</th><th>Part_Number</th><th>Descripton</th><th>Quantity</th><th>Price</th><th>Date_Updated</th></tr>";
    while($row = $result->fetch_assoc()) {  
        echo "<tr><td>".$row["Inventory_Id"]."</td><td>".$row["Part_Number"]."</td><td>".$row["Description"]."</td><td>".$row["Quantity"]."</td><td>".$row["Price"]."</td><td>".removeTime($row["Date_Updated"])."</td></tr>";
    }
    echo "</table>";
} else {
    echo "cant find the table";
}
$database -> close();


?>