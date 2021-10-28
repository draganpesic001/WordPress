<?php
/*
 * @package NGS SAM Integrator
 * @since 1.0.0
 */
	if( null != $requested_song ) {
		$reqartist = $requested_song->artist;
		$reqtitle = $requested_song->title;
	?>
			<div id="reqsuccess">
				Tu petición de "<?php echo $reqtitle; ?>"  ha sido recibida y será puesta en cue.
			</div>
	<?php
	$wpdb->insert( 
			$ngs_request_table, 
			array(
				'songID' => $song_id,
				't_stamp' => current_time( 'mysql', 0),
				'host' => $client_host,
				'userid' => $current_user
			),
			array(
				'%d',
				'%s',
				'%s',
				'%d'
			)
		);
	}