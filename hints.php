<?php
// Array with names
$a[] = "SELECT column1, column2, ... FROM table_name;";
$a[] = "SELECT * FROM table_name; ";
$a[] = "SELECT DISTINCT column1, column2, ... FROM table_name;";
$a[] = "SELECT column1, column2, ... FROM table_name WHERE condition;";
$a[] = "SELECT column1, column2, ... FROM table_name WHERE condition1 AND/OR condition2 AND/OR condition3 ...; ";
$a[] = "SELECT column1, column2, ... FROM table_name WHERE NOT condition; ";
$a[] = "SELECT column1, column2, ... FROM table_name ORDER BY column1, column2, ... ASC|DESC; ";
$a[] = "INSERT INTO table_name (column1, column2, column3, ...) VALUES (value1, value2, value3, ...); ";
$a[] = "INSERT INTO table_name VALUES (value1, value2, value3, ...); ";
$a[] = "UPDATE table_name SET column1 = value1, column2 = value2, ... WHERE condition; ";
$a[] = "DELETE FROM table_name WHERE condition;";
$a[] = "SELECT column_name(s) FROM table_name WHERE condition LIMIT number; ";
$a[] = "SELECT column1, column2, ... FROM table_name WHERE columnN LIKE pattern; ";
$a[] = "SELECT column_name(s) FROM table_name WHERE column_name IN (value1, value2, ...); ";
$a[] = "SELECT column_name(s) FROM table_name WHERE column_name IN (SELECT STATEMENT);";
$a[] = "SELECT column_name(s) FROM table_name WHERE column_name BETWEEN value1 AND value2; ";
$a[] = "SELECT column_name(s) FROM table_name WHERE condition GROUP BY column_name(s) ORDER BY column_name(s); ";
$a[] = "SELECT column_name(s) FROM table_name WHERE condition GROUP BY column_name(s) HAVING condition ORDER BY column_name(s);";
$a[] = "SELECT column_name(s) FROM table_name WHERE EXISTS (SELECT column_name FROM table_name WHERE condition); ";
$a[] = "SELECT column_name(s) FROM table_name WHERE column_name operator ANY (SELECT column_name FROM table_name WHERE condition); ";
$a[] = "SELECT column_name(s) FROM table_name WHERE column_name operator ALL (SELECT column_name FROM table_name WHERE condition); ";
$a[] = "CREATE TABLE table_name (column1 datatype constraint, column2 datatype constraint, column3 datatype constraint, ....);";
$a[] = "DROP TABLE table_name; ";
$a[] = "ALTER TABLE table_name ADD column_name datatype;";
$a[] = "ALTER TABLE table_name DROP COLUMN column_name; ";
$a[] = "ALTER TABLE table_name MODIFY COLUMN column_name datatype; ";
$a[] = "SELECT column_name AS alias_name FROM table_name;";
$a[] = "SHOW DATABASES";
$a[] = "SHOW TABLES";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
   $q = strtolower($q);
   $len=strlen($q);
   foreach($a as $name) {
       if (stristr($q, substr($name, 0, $len))) {
           if ($hint === "") {
               $hint = $name;
           } else {
               $hint .= "<br> $name";
           }
       }
   }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "" : $hint;
?>
