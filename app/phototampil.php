<?php

require_once "app/photo.php";

$photo = new photo();
$rows = $photo->tampil();

?>
<table class="table-zebra-striping"width ="100%" border="1px" style="border-collapse:collapse;">
	<tr style="background-color:#FFFFFF;">
		<th>Id Photo</th>
		<th>Tanggal</th>
		<th>Judul</th>
		<th>Teks</th>
		<th>Id Post</th>
	</tr>

		<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $row['photo_id'];?></td>
				<td><?php echo $row['date'];?></td>
				<td><?php echo $row['title'];?></td>
				<td><?php echo $row['text'];?></td>
				<td><?php echo $row['post_id'];?></td>
			</tr>

		<?php } ?>
	</table>