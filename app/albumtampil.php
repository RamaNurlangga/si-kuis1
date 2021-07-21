<?php

require_once "app/album.php";

$album = new album();
$rows = $album->tampil();

?>

<table class="table-zebra-striping"width ="100%" border="1px" style="border-collapse:collapse;">
	<tr style="background-color:#FFFFFF;">
		<th>Id Album</th>
		<th>Nama</th>
		<th>Teks</th>
		<th>Id Photo</th>
	</tr>

		<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $row['album_id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['text'];?></td>
				<td><?php echo $row['photo_id'];?></td>
			</tr>

		<?php } ?>
	</table>