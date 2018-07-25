<?php
/*
Title: Redirects
Setting: piklist_wp_helpers
Tab: Reading
Order: 330
Flow: WP Helpers Settings Flow
*/

piklist('field', array(
	'type' => 'group'
	,'field'=> 'redirect_404'
	,'label' => 'Redirect 404\'s'
	,'fields' => array(
		array(
			'type' => 'select'
			,'field' => 'redirect_to_404'
			,'columns' => 3
			,'value' => '-1'
			,'choices' => array(
			      '-1' => 'No'
						,'0' => 'Home'
			    )
			    + piklist(get_pages()
			    ,array(
			      'ID'
			      ,'post_title'
			    )
			  )
			)
		,array(
			'type' => 'text'
			,'field' => 'redirect_status'
			,'value' => '301'
			,'columns' => 2
			,'attributes' => array(
				'placeholder' => 'Status (e.g. 301)'
			)
			,'conditions' => array(
	      array(
	        'field' => 'redirect_404:redirect_to_404'
	        ,'value' => '-1'
					,'compare' => '!='
	      )
	    )
		)
	)
));
