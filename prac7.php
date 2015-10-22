<?php
$db_host="localhost";
$db_username="root";
$db_pass="osh7611.";
$db_name="practice_database";

@mysql_connect("$db_host","$db_username","$db_pass") or die("Could not connect to MySQL");

@mysql_select_db("$db_name") or die("No Database");

echo "Sucessful Connection<br>";

@mysql_query(" CREATE TABLE People
(
	ID int NOT NULL AUTO_INCREMENT,
	FirstName varchar(20) NOT NULL,
	Gender varchar(1) NOT NULL,
	Age int NOT NULL,
	PRIMARY KEY (ID)
)
") or die("Could not create the Table");

echo "Table Created.<br>";

@mysql_query("INSERT INTO People VALUES ('1','Oshin','F','21')") or die("Could not insert values into the Table");

echo "Values Inserted";
?>
