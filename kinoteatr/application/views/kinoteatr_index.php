<?php foreach($movies as $movie): ?>
	<h2><a href="<?php echo _BASEURL_,'kinoteatr/movie/', $movie->id_mov; ?>"><?php echo $movie->name; ?></a></h2>
<?php endforeach ?>