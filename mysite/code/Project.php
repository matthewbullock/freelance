<?php

class Project extends DataObject {

    private static $db = array(
        'ProjectTitle' => 'Varchar',
        'Primary_Description' => 'HTMLText',
        'Project_Description_One' => 'HTMLText',
        'Project_Description_Two' => 'HTMLText',
        'Project_Description_Three' => 'HTMLText',
    );

    private static $has_one = array(
        'HomePage' => 'HomePage',
        'Cover_Image' => 'Image',
    ); 
}

  