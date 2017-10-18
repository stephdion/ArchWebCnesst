<?php include('../header.php'); ?>

	<div class="folder-content">

		<h3>Modèles</h3>
		
		<ul class="folder-list">
		<?php
			$files = scandir(getcwd());
			foreach ($files as $key => $file):
				if ( substr($file, -3) == "php" && substr($file, 0, 3) != "dev" && $file != "index.php" ):
		?>
					<li><a href="<?php echo str_replace(".php", ".html", $file); ?>"><?php echo str_replace(".php", "", $file); ?></a></li>
			<?php endif; ?>
		<?php endforeach; ?>
		</ul>

	</div>

</body>
</html>