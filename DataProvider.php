<?php
class DataProvider {
	public static function  ExecuteQuery( $sql ) {

		$servername = "localhost";$username = "root";$password = "";
		$dbname = "english";
		$connection = mysqli_connect($servername,$username,$password,$dbname);
		$result = mysqli_query($connection ,  $sql );
		mysqli_close( $connection );
		return $result;
	}
}
?>

