<?php

require_once "app/post.php";

$post = new post();
$rows = $post->tampil();

?>
<table class="table-zebra-striping"width ="100%" border="1px" style="border-collapse:collapse;">
	<tr style="background-color:#FFFFFF;">
		<th>Id Post</th>
		<th>Tanggal</th>
		<th>Slug</th>
		<th>Judul</th>
		<th>Teks</th>
		<th>Id Categori</th>
	</tr>

		<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $row['post_id'];?></td>
				<td><?php echo $row['date'];?></td>
				<td><?php echo $row['slug'];?></td>
				<td><?php echo $row['title'];?></td>
				<td><?php echo $row['text'];?></td>
				<td><?php echo $row['cat_id'];?></td>
			</tr>

		<?php } ?>
	</table>