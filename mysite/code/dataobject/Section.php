<?php 

class Section extends DataObject {

	private static $singular_name = 'Section';
    private static $plural_name = 'Sections';
    private static $default_sort = 'SortOrder';

    private static $db = [
        'SortOrder' => 'Int',
        'Title' 	=> 'VarChar(255)',
        'Content' 	=> 'Text',
    ];

	private static $has_one = [
        'HomePage' 		=> 'HomePage',
        'Feature_Image' 	=> 'Image',
    ];

}