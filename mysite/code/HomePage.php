<?php

class HomePage extends UserDefinedForm {

    private static $db = array(
        'Section_One_Intro_Heading'                    => 'Text',
        'Section_One_Main_Heading'                     => 'Text',
        'BgColor'                                      => 'Color',

    );

    private static $has_one = array(
        'Profile_Image'             => 'Image',
    );

    public static $has_many = array(
        // 'Projects' => 'Project'
        'Section' => 'Section'

    );

    public function getCMSFields() {

        $fields = parent::getCMSFields();

        $fields->addFieldToTab( 'Root.Main', new ColorField( 'BgColor', 'Primary color' ) );
        $fields->addFieldToTab( 'Root.Main', TextField::create( 'Section_One_Intro_Heading', 'Intro Heading' ) );
        $fields->addFieldToTab( 'Root.Main', TextField::create( 'Section_One_Main_Heading' , 'Main Heading' ) );

        $config = GridFieldConfig_RelationEditor::create();

        $config->getComponentByType( 'GridFieldDataColumns' )->setDisplayFields( array(
                'Title' => 'Name',
                'ID'=> 'ID'
            ) );

        $sectionField = new GridField(
            'Sections', // Field name
            'Section', // Field title
            $this->Section(), // List of all related Sections
            $config
        );

        $fields->addFieldToTab( 'Root.Sections', $sectionField );



        // $fields->addFieldToTab('Root.SectionTwo', TextField::create('Section_Two_Section_Heading', 'Section Heading'));
        // $fields->addFieldToTab(
        //         'Root.SectionTwo',
        //         $uploadField = new UploadField(
        //             $name = 'Profile_Image',
        //             $title = 'Upload a profile image'
        //         )
        //     );
        // $fields->addFieldToTab('Root.SectionTwo', HtmlEditorField::create('Section_Two_Content', 'Content'));
        // $fields->addFieldToTab('Root.SectionTwo', TextField::create('Section_Two_Closing_Tag' , 'Closing Tag'));

        // $fields->addFieldToTab('Root.SectionThree', TextField::create('Section_Three_Section_Heading', 'Section Heading'));
        // $fields->addFieldToTab('Root.SectionThree', HtmlEditorField::create('Section_Three_Content', 'Content'));

        // $fields->addFieldToTab('Root.SectionFive', TextField::create('Section_Five_Section_Heading', 'Section Heading'));

        // $fields->addFieldToTab('Root.SectionSix', TextField::create('Section_Six_Section_Heading', 'Section Heading'));
        // $fields->addFieldToTab('Root.SectionSix', HtmlEditorField::create('Section_Six_Content', 'Content'));

        // $fields->addFieldToTab('Root.SectionSeven', TextField::create('Section_Seven_Section_Heading', 'Section Heading'));
        // $fields->addFieldToTab('Root.SectionSeven', HtmlEditorField::create('Content'));

        return $fields;
    }


}

class HomePage_Controller extends UserDefinedForm_Controller {


}
