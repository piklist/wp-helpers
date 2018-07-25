<?php
/*
Title: Categories / Tags
Setting: piklist_wp_helpers
Tab: Media
Order: 800
Tab Order: 70
Flow: WP Helpers Settings Flow
*/

  piklist('field', array(
    'type' => 'checkbox'
    ,'field' => 'attachment_taxononmies'
    ,'label' => 'Use Taxonomies'
    ,'help' => 'Organize your Media with Categories and Tags'
    ,'list' => true
    ,'choices' => array(
      'categories' => 'Categories'
			,'tags' => 'Tags'
    )
  ));
