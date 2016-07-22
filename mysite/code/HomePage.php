<?php
class HomePage extends UserDefinedForm {

	private static $db = array(
    	'Section_One_Intro_Heading'                    => 'Text',
    	'Section_One_Prime_Heading_Primary_Colour' 	   => 'Text',
        'Section_One_Prime_Heading_Secondary_Colour'   => 'Text',
    	'Section_One_Sub_Heading' 	                   => 'Text',

        'Section_Two_Section_Heading'                  => 'Text',
        'Section_Two_Content'                          => 'HTMLText',
        'Section_Two_Closing_Tag'                      => 'HTMLText',

        'Section_Three_Section_Heading'                => 'Text',
        'Section_Three_Content'                        => 'HTMLText',

        'Section_Five_Section_Heading'                 => 'Text',

        'Section_Six_Section_Heading'                  => 'Text',
        'Section_Six_Content'                          => 'HTMLText',

        'Section_Seven_Section_Heading'                => 'Text',

        'BgColor'                                      => 'Color',

    );
    
    private static $has_one = array(
        'Profile_Image'             => 'Image',
    );

    public static $has_many = array(
        'Projects' => 'Project'
    );


	public function getCMSFields() {
    
    $fields = parent::getCMSFields();

        // Create a default configuration for the new GridField, allowing record editing
        $config = GridFieldConfig_RelationEditor::create();
        // Set the names and data for our gridfield columns
        $config->getComponentByType('GridFieldDataColumns')->setDisplayFields(array(
            'ProjectTitle' => 'Name',
            'ID'=> 'ID' // Retrieve from a has-one relationship
        ));   
        // Create a gridfield to hold the student relationship    
        $projectField = new GridField(
            'Projects', // Field name
            'Project', // Field title
            $this->Projects(), // List of all related Projects
            $config
        );        
        // Create a tab named "Projects" and add our field to it
        
        $fields->addFieldToTab('Root.Projects', $projectField); 
      
        $fields->addFieldToTab('Root.Main',new ColorField('BgColor', 'Primary color'));

        $fields->addFieldToTab('Root.SectionOne', TextField::create('Section_One_Intro_Heading', 'Intro Heading'));   
        $fields->addFieldToTab('Root.SectionOne', TextField::create('Section_One_Prime_Heading_Primary_Colour', 'Prime Heading Primary Colour'));
        $fields->addFieldToTab('Root.SectionOne', TextField::create('Section_One_Prime_Heading_Secondary_Colour' , 'Prime Secondary Primary Colour'));
        $fields->addFieldToTab('Root.SectionOne', TextField::create('Section_One_Sub_Heading' , 'Sub Heading'));

        $fields->addFieldToTab('Root.SectionTwo', TextField::create('Section_Two_Section_Heading', 'Section Heading'));
        $fields->addFieldToTab(
                'Root.SectionTwo',    
                $uploadField = new UploadField(
                    $name = 'Profile_Image',
                    $title = 'Upload a profile image'
                )    
            );   
        $fields->addFieldToTab('Root.SectionTwo', HtmlEditorField::create('Section_Two_Content', 'Content'));
        $fields->addFieldToTab('Root.SectionTwo', TextField::create('Section_Two_Closing_Tag' , 'Closing Tag'));

        $fields->addFieldToTab('Root.SectionThree', TextField::create('Section_Three_Section_Heading', 'Section Heading'));   
        $fields->addFieldToTab('Root.SectionThree', HtmlEditorField::create('Section_Three_Content', 'Content'));

        $fields->addFieldToTab('Root.SectionFive', TextField::create('Section_Five_Section_Heading', 'Section Heading'));   

        $fields->addFieldToTab('Root.SectionSix', TextField::create('Section_Six_Section_Heading', 'Section Heading'));   
        $fields->addFieldToTab('Root.SectionSix', HtmlEditorField::create('Section_Six_Content', 'Content'));

        $fields->addFieldToTab('Root.SectionSeven', TextField::create('Section_Seven_Section_Heading', 'Section Heading'));  
        $fields->addFieldToTab('Root.SectionSeven', HtmlEditorField::create('Content'));    

    return $fields;
  }

}

class HomePage_Controller extends UserDefinedForm_Controller {

}