<h1>Portfolio</h1>
<p>
<table>
    All projects in the following table are fictitious, so do not even try to go through the links below.
    <tr><td>Year</td><td>Project</td><td>Description</td></tr>
<?php

	foreach($data as $row)
	{
		echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
	}

?>
</table>
</p>