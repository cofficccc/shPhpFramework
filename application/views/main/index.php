<p>Главная страница</p>

<?php foreach ($news as $val): ?>
	<h3><?php echo $val['title']; ?></h3>
	<p><?php echo $val['description']; ?></p>
	<p>Date: <?php echo $val['datereg']; ?></p>
	<hr>
<?php endforeach; ?>