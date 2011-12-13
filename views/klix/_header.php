<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Clean landing page</title>
		
		<?php
			echo HTML::stylesheet(array
			(
				'assets/css/reset',
				'assets/css/screen',
				'assets/css/prettyPhoto',
			), FALSE, FALSE, TRUE);

			echo HTML::script(array
			(
			    'assets/js/jquery-1.6.2.min',
				'assets/js/jquery.bt',
				'assets/js/jquery.colorbox', 
				'assets/js/jquery.form',
				'assets/js/jquery.prettyPhoto',
				'assets/js/jquery.validate',
				'assets/js/common',
				'assets/js/custom',
			), FALSE, TRUE);		
		?>
		
        <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' >
		
		<?php if ($Auth->loggedIn()): ?>
			<?php
				// Load Aloha Editor
				echo HTML::script(array
				(
					'assets/js/aloha/aloha',
					'assets/js/aloha/plugins/save/plugin',
					'assets/js/aloha/plugins/format/plugin',
					'assets/js/aloha/plugins/list/plugin',
					'assets/js/aloha/plugins/link/plugin',
					'assets/js/aloha/plugins/highlight/plugin',
					'assets/js/aloha/plugins/link/linklist',
					'assets/js/aloha/plugins/paste/plugin',
					'assets/js/aloha/plugins/paste/wordpastehandler',
				), FALSE, TRUE);
			?>
			<script type="text/javascript">
				GENTICS.Aloha.settings = {
					logLevels: {'error': true, 'warn': false, 'info': false, 'debug': false},
					errorhandling : false,
					ribbon: true,	
					"i18n": {
						"current": "en" 
					},
					"repositories": {
					 	"com.gentics.aloha.repositories.LinkList": {
					 		data: [
				 		        { name: 'Aloha Developers Wiki', url:'http://www.aloha-editor.com/wiki', type:'website', weight: 0.50 },
				 		        { name: 'Aloha Editor - The HTML5 Editor', url:'http://aloha-editor.com', type:'website', weight: 0.90  },
				 		        { name: 'Aloha Demo', url:'http://www.aloha-editor.com/demos.html', type:'website', weight: 0.75  },
				 		        { name: 'Aloha Wordpress Demo', url:'http://www.aloha-editor.com/demos/wordpress-demo/index.html', type:'website', weight: 0.75  },
				 		        { name: 'Aloha Logo', url:'http://www.aloha-editor.com/images/aloha-editor-logo.png', type:'image', weight: 0.10  }
					 		]
						}},
					"plugins": {
						"com.example.aloha.DummySave": { },
						"com.gentics.aloha.plugins.Format": {
						 	// all elements with no specific configuration get this configuration
							config : [ 'b', 'i','del','sup', 'p','h1','h2','h3' ],
						  	editables : {
								'#title'		: [ ], 
								'.article'		: [ 'b', 'i','del','sup', 'p','h1','h2','h3', 'h4', 'h5', 'h6','removeFormat' ],
						}},
					 	"com.gentics.aloha.plugins.List": { 
							config : [  'ul' ],
						  	editables : {
								'#title'	: [ ], 
						}},
					 	"com.gentics.aloha.plugins.Link": {
						 	// all elements with no specific configuration may insert links
							config : [ 'a' ],
						  	editables : {
								// No links in the title.
								'#title'	: [ ]
						  	},
						  	// all links that match the targetregex will get set the target
				 			// e.g. ^(?!.*aloha-editor.com).* matches all href except aloha-editor.com
						  	targetregex : '^(?!.*aloha-editor.com).*',
						  	// this target is set when either targetregex matches or not set
						    // e.g. _blank opens all links in new window
						  	target : '_blank',
						  	// the same for css class as for target
						  	cssclassregex : '^(?!.*aloha-editor.com).*',
						  	cssclass : 'aloha',
						  	// use all resources of type website for autosuggest
						  	objectTypeFilter: ['website'],
						  	// handle change of href
						  	onHrefChange: function( obj, href, item ) {
							  	if ( item ) {
									jQuery(obj).attr('data-name', item.name);
							  	} else {
									jQuery(obj).removeAttr('data-name');
							  	}
						  	}},
				  			}};

				$(document).ready(function() {
					$('.article').aloha();
					$('.teaser').aloha();
				});
			</script>
		<?php endif ?>
    </head>
<body>
        
