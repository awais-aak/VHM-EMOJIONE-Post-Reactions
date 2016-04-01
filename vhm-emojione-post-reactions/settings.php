<div class="wrap">
    <h1>VHM EMOJIONE Post Reactions</h1>
	<?php if ($_REQUEST['message'] == 'created'): ?>
		<div id="message" class="updated"><p><?php echo __('Shortcode was successfully CREATED.', TEXTDOMAIN); ?></p></div>
    <?php elseif ($_REQUEST['message'] == 'not-created'): ?>
		<div id="notice" class="error"><p><?php echo __('Shortcode was NOT CREATED.', TEXTDOMAIN) ?></p></div>
	<?php elseif ($_REQUEST['message'] == 'deleted'):?>
		<div id="message" class="updated"><p><?php echo __('Shortcode was successfully DELETED.', TEXTDOMAIN); ?></p></div>
    <?php endif;?>
			<table class="wp-list-table widefat fixed tags">
				<thead>
					<tr>
						<th scope="col" class="column-label desc" style=""><?php _e('Label', TEXTDOMAIN)?></th>
						<th scope="col" class="column-cb desc" style=""><?php _e( 'Emoji code', TEXTDOMAIN ); ?></th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th scope="col" class="column-label desc" style=""><?php _e('Label', TEXTDOMAIN)?></th>
					</tr>
				</tfoot>
				<tbody id="vhm-emojione-reaction-list">
					<?php if (isset($this->options['reactions'])) { $i = 0; foreach($this->options['reactions'] as $k => $reaction) { ?>
				</tbody>
			</table>
		</div>
		
			<h2 class="title">About</h2 class="title">
			<p><strong><a href="http://viktormorales.com">Viktor H. Morales</a></strong> is a graphic and web designer.</p>
			<p>Contact me:</p>
			<ul>
				<li>Web: <a href="http://viktormorales.com">viktormorales.com</a></li>
				<li>Twitter: <a href="http://twitter.com/viktormorales">twitter.com/viktormorales</a></li>
				<li>Instagram: <a href="http://instagram.com/viktorhmorales">instagram.com/viktorhmorales</a></li>
			</ul>
		</div>
	
</div>