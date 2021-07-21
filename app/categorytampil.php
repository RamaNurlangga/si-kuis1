<?php

require_once "app/category.php";

$cat = new cat();
$rows = $cat->tampil();

?>
<table class="table-zebra-striping"width ="100%" border="1px" style="border-collapse:collapse;">
	<tr style="background-color:#FFFFFF;">
		<th>Id Categori</th>
		<th>Nama</th>
		<th>Text</th>
	</tr>


		<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $row['cat_id'];?></td>
				<td><?php echo $row['cat_name'];?></td>
				<td><?php echo $row['text'];?></td>
			</tr>

		<?php } ?>
	</table>