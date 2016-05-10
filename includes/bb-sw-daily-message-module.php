<?php


class SWDailyMessageClass extends FLBuilderModule {

    public function __construct()
    {
        
        parent::__construct(array(
            'name'              => __( 'Daily Message', 'fl-builder' ),
            'description'       => __( 'Add a daily mesage to your site', 'fl-builder' ),
            'category'          => __( 'My Custom Module', 'fl-builder' ),
            'partial_refresh'   => true,
            'dir'               => SW_DAILY_MESSAGE_MODULE_DIR . '/',
            'url'               => SW_DAILY_MESSAGE_MODULE_URL . '/',
        ));
        

        $this->add_js('dailyMessages.file', $this->url . 'js/dailyMessages.js', array(), '', true);
        //$this->add_css('css.file', $this->url . 'css/css.css');
        
    }    
    
}

FLBuilder::register_module( 'SWDailyMessageClass', array(
    
    'content-tab'      => array(
        
        'title'         => __( 'Content', 'fl-builder' ),
        'sections'      => array(
            
              'content'  => array(
                  
                    'title'         => __( 'Quotes', 'fl-builder' ),
                  
                    'fields'        => array(
                        
                        'monday'     => array(
                            'type'          => 'textarea',
                            'label'         => __( 'Monday Quotes', 'fl-builder' ),
                            'default'       => 'Case of the Mondays?',
                        ),
                        
                        'tuesday'     => array(
                            'type'          => 'textarea',
                            'label'         => __( 'Tuesday Quotes', 'fl-builder' ),
                            'default'       => 'I know it\'s only Tuesday, but you can do it!',                            
                        ),
                        
                        'wednesday'     => array(
                            'type'          => 'textarea',
                            'label'         => __( 'Wednesday Quotes', 'fl-builder' ),
                            'default'       => 'Hump day baby!',    
                        ),
                        
                        'thursday'     => array(
                            'type'          => 'textarea',
                            'label'         => __( 'Thursday Quotes', 'fl-builder' ),
                            'default'       => 'We all know Thursday is the new Friday.',    
                        ),
                        
                        'friday'     => array(
                            'type'          => 'textarea',
                            'label'         => __( 'Friday Quotes', 'fl-builder' ),
                            'default'       => 'Thank God! We made it. Happy Friday folks!',    
                        ),
                        
                        'saturday'     => array(
                            'type'          => 'textarea',
                            'label'         => __( 'Saturday Quotes', 'fl-builder' ),
                            'default'       => 'It\'s Saturday fool! Stop using the Internets and go outside!',    
                        ),
                        
                        'sunday'     => array(
                            'type'          => 'textarea',
                            'label'         => __( 'Sunday Quotes', 'fl-builder' ),
                            'default'       => 'NFL Sunday! Or maybe some Netflix? Chill.',    
                        ),

                    ) // end fields
                  
                ), // end content
            
        ) // end sections
        
    ), // end content-tab
    
    'style-tab'      => array(
        
        'title'         => __( 'Styles', 'fl-builder' ),
        'sections'      => array( 
            
              'styles'  => array(
                  
                    'title'         => __( '', 'fl-builder' ),
                  
                    'fields'        => array(
                        
                        'font' => array(
                            'type'          => 'font',
                            'label'         => __( 'Font', 'fl-builder' ),
                            'default'       => array(
                                'family'        => 'Default',
                                'weight'        => 'Default',
                            )
                        ), // end font
                        
                        'custom_size' => array(
                            'type'          => 'select',
                            'label'         => __( 'Custom Font Size', 'fl-builder' ),
                            'default'       => 'no',
                            'options'       => array(
                                'no'        => __( 'No', 'fl-builder' ),
                                'yes'       => __( 'Yes', 'fl-builder' )
                            ),
                            'toggle'        => array(
                                'yes'      => array(
                                    'fields'        => array( 'font_size' ),
                                ),
                                'no'      => array()
                            )
                        ), // end custom_size
                        
                        'font_size' => array(
                            'type'          => 'text',
                            'label'         => __('Font Size', 'fl-builder'),
                            'default'       => '14',
                            'placeholder'   => '14',
                            'size'          => '4',
                            'maxlength'     => '3',
                            'description'   => 'px',
                            'help'          => __( 'Enter your custom font size', 'fl-builder'),
                        ), // end font_size
                        
                        'font_color' => array(
                            'type'          => 'color',
                            'label'         => __('Font Color', 'fl-builder'),
                            'preview'       => array(
                                'type'          => 'css',
                                'rules'           => array(
                                    array(
                                        'selector'     => 'p.quote',
                                        'property'     => 'color'
                                    ), 
                                )
                            )
                        ), // end font_color

                    ) // end fields
                  
                ), // end styles
            
        ) // end sections
        
    ), // end style-tab
    
) ); 