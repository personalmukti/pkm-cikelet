<!DOCTYPE html>
<html>
<head>
	<title>Sample Index Test Database</title>
</head>
<body>
	<?php foreach ($berita->result() as $row): ?>
		<hr>
	    Judul : <?php echo $row->berita_judul ?> <br>
	    Isi   : <?php echo $row->berita_isi ?> <br><hr>
   	<?php endforeach ?>
</body>
</html>