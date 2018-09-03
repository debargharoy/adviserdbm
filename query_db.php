<?php
function getOutput($query='')
{
  $query=trim($query);
  require 'db_config.php';
  $con_var = @mysqli_connect($svnm,$un,$pd,$db);
  if (!$con_var) {
    $result= "Connection To Database:<span style='color:#ff5c33'> Failed...<br>Error: ".mysqli_connect_error()."</span>";
    return $result;
  }
  $output = "Connection To Database:<span style='color:#00ff00'> Success...</span><br>Executing query on <span style='color:#00ff00'>$db@$svnm</span>...<br>";
  $result = mysqli_query($con_var,$query);
  if (!$result) {
    $output.="<span style='color: #ff5c33'>Error: ".mysqli_error($con_var)."</span>";
    return $output;
  }
  if (!@mysqli_num_rows($result)) {
    $output.="Query executed successfully...<br><br><span style='color: #ffff00'>0 - Row(s) Affected</span>"; return $output;
  }
  else {
    $output.= "Query executed successfully...<br><br><span style='color: #ffff00'>".mysqli_num_rows($result)." - Row(s) Affected<br><br>" ;
  }
  $output.= "<table class='output_table'><thead>";
  $col_count = 0;
  while ($col_info = mysqli_fetch_field($result)) {
    $output.= "<th>".$col_info->name."</th>"; ++$col_count;
  }
  $output.= "</thead><tbody>";
  while ($row = mysqli_fetch_row($result))
	{
		$output.= '<tr>';
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			$c_row = current($row);
			$output.= '<td>' . $c_row . '</td>';
			next($row);
			$y = $y + 1;
		}
		$output.= '</tr>';
	}
  $output.="</tbody></table><br></span>";
  return $output;
}
 ?>
