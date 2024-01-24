<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ThemeOptions extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Theme Options';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Theme Options | Options';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $themeOptions = new FieldsBuilder('theme_options');

        $themeOptions
            ->addImage( name: 'logo')
            ->addText( name: 'text')
            ->addImage( name: 'logo_reverse')
            ->addImage( name: 'emb_1_reverse')
            ->addImage( name: 'emb_2_reverse')
            ->addImage( name: 'emb_3_reverse')
            ->addWysiwyg('kontakt', [
                'label' => __('Kontakt', 'kontakt'),
                'instructions' => __('Enter kontakt information', 'kontakt'),
                'default' => '',
            ])
            ->addImage( name: 'error_image')
            ->addWysiwyg('error_text', [
                'label' => __('404 Text', 'error_text'),
                'instructions' => __('Enter Error information', 'error_text'),
                'default' => '',
            ]);
            

        return $themeOptions->build();
    }
}
