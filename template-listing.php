<?php 

if ( !empty( $files['contents'] ) && !is_admin() ) : ?>

	<div class="dfc-file-listing">
		<h2>Files</h2>
		<ul>
			<?php foreach( $files['contents'] as $file ) : ?>
				<?php if ( $file['is_dir'] ) : ?>
					<li class="<?php echo $file['icon']; ?>">
						<a href="<?php echo home_url( $file['path'] ); ?>"><?php echo basename( $file['path'] ) ;?></a>
					</li>
				<?php endif; ?>
			<?php endforeach; ?>
			<?php foreach( $files['contents'] as $file ) : ?>
				<?php if ( !$file['is_dir'] ) : ?>
					<li class="<?php echo $file['icon']; ?>">
						<a href="<?php echo home_url( 'dropbox' . $file['path'] ); ?>"><?php echo basename( $file['path'] ) ;?></a> (<?php echo $file['size']; ?>)
					</li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</div>
	
<?php endif; ?>
