<?php
include('login.php');
if ($resultset = getSQLResultSet("SELECT *FROM infromacion")) {
	
    	while ($row = $resultset->fetch_array(MYSQLI_NUM)) {
    	echo json_encode($row);
    	}
    	
   }
   
?>