<?php
/*
Title: Exif Data
Post Type: piklist_wp_helpers_post
Priority: normal
Capability: default-none
Order: 5
*/
?>

<?php $meta = wp_get_attachment_metadata(); ?>

<?php if($meta) : ?>

	<?php $exif_data = $meta['image_meta']; ?>

	<?php if($exif_data) : ?>

		<ul>

		<?php foreach ($exif_data as $exif => $value) : ?>

			<li>

				<strong>

					<?php echo ucwords(str_replace('_', ' ', $exif)) . ': '; ?>

				</strong>

				<?php if(!empty($value)) : ?>

					<?php $value = is_array($value) ? $value : array($value); ?>

					<?php $list = implode(', ', $value); ?>

					<?php $list = ucwords(str_replace('_', ' ', $list));?>

					<?php echo $list; ?>

				<?php endif; ?>

			</li>

		<?php endforeach; ?>

		</ul>

	<?php endif; ?>

<?php endif;
