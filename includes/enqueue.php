<?php
defined('ABSPATH') || exit;
class IFW_INSURANCE_ENQUEUE
{
    protected $slug;
    public function __construct()
    {
        $this->slug = INSURANCE_CONST['assets_slug'];
        add_action('admin_enqueue_scripts', [$this, 'enqueue_scripts']);
    }
    public function enqueue_scripts()
    {
        $screen_id = get_current_screen()->id;
        if (!in_array($screen_id, ['ifw-insurance'])) {
            return;
        }
        global $post;
        $this->register_scripts();
        $enqueue_styles = [
            'tab',
            'menu',
            'accordion',
            'insurance_builder'
        ];

        $enqueue_scripts = [
            'dimmer',
            'tab',
            'accordion',
            'insurance_builder'
        ];


        switch ($screen_id) {
            case 'ifw-insurance':
                wp_enqueue_editor();
                wp_enqueue_media();
                foreach ($enqueue_styles as $style) {
                    wp_enqueue_style($this->slug . $style);
                }
                foreach ($enqueue_scripts as $script) {
                    wp_enqueue_script($this->slug . $script);
                }
                break;
        }
    }
    public function register_scripts()
    {
        $suffix = WP_DEBUG ? '' : '.min';
        $lib_Styles = [
            'tab',
            'menu',
            'accordion'
        ];
        //Register css file
        $list_styles = [
            'insurance_builder'
        ];
        $lib_scripts = [
            'dimmer',
            'tab',
            'accordion'
        ];
        $scripts = [
            'insurance_builder' => ['jquery', 'jquery-ui-sortable', 'jquery-ui-draggable'],
        ];
        foreach ($lib_Styles as $style) {
            wp_register_style($this->slug . $style, INSURANCE_CONST['css_url'] . $style . $suffix . '.css', '', INSURANCE_CONST['version']);
        }
        foreach ($list_styles as $style) {
            wp_register_style($this->slug . $style, INSURANCE_CONST['css_url'] . $style . $suffix . '.css', '', INSURANCE_CONST['version']);
        }
        //Register script file
        foreach ($lib_scripts as $script) {
            wp_register_script($this->slug . $script, INSURANCE_CONST['js_url'] . $script . '.min.js', ['jquery'], INSURANCE_CONST['version']);
        }
        foreach ($scripts as $script => $depend) {
            wp_register_script($this->slug . $script, INSURANCE_CONST['js_url'] . $script . $suffix . '.js', $depend, INSURANCE_CONST['version']);
        }
    }
}
