<?php
function getrunningno()
{
		$sql_query = mysql_query("SELECT count(*) FROM running_number");
		$myrow = mysql_fetch_array($sql_query);
		mysql_free_result($sql_query);
		return $myrow[0]+1;
}

?>