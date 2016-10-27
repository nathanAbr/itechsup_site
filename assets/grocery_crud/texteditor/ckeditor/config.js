/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	config.language = 'fr';
	config.uiColor = '#F3F3F3';
	config.entities_processNumerical = true;
	

	config.toolbar_Basic =
	[
	    ['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-','Image','About']
	];

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
};
