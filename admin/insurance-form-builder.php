<?php
defined('ABSPATH') || exit;
if (!class_exists('IFW_INSURANCE_INSURANCE_FORM_BUILDER')) {
    class IFW_INSURANCE_INSURANCE_FORM_BUILDER
    {
        public function __construct()
        {
            add_action('init', array($this, 'ifw_insurance_post_type'));
            add_action('dbx_post_sidebar', array($this, 'ifw_insurance_builder_page'));
            add_filter('admin_body_class', array($this, 'admin_body_class'));
            add_action('edit_form_top', [$this, 'remove_meta_boxes']);
            add_filter('screen_options_show_screen', [$this, 'hide_screen_options']);
            add_filter('enter_title_here', [$this, 'change_text_post_title']);
        }
        public function ifw_insurance_post_type()
        {
            $icon_url = 'dashicons-shield-alt';
            $label    = array(
                'name'          => esc_html__('Insurance Form', 'product-size-chart-for-woo'),
                'singular_name' => esc_html__('Insurance Form', 'product-size-chart-for-woo'),
                'add_new'       => esc_html__('Add New', 'product-size-chart-for-woo'),
                'all_items'     => esc_html__('All Form', 'product-size-chart-for-woo'),
                'add_new_item'  => esc_html__('Add Item', 'product-size-chart-for-woo')
            );
            $args = array(
                'label'               => $label,
                'labels'              => $label,
                'supports'            => array('title'),
                'hierarchical'        => false,
                'public'              => false,
                'show_ui'             => true,
                'show_in_menu'        => true,
                'show_in_nav_menus'   => false,
                'show_in_admin_bar'   => true,
                'can_export'          => true,
                'has_archive'         => true,
                'exclude_from_search' => true,
                'publicly_queryable'  => false,
                'capability_type'     => 'page',
                'query_var'           => false,
                'menu_position'       => 2,
                'map_meta_cap'        => true,
                'menu_icon'           => $icon_url
            );
            register_post_type('ifw-insurance', $args);
            flush_rewrite_rules();
        }
        public function ifw_insurance_builder_page($post)
        {
            if ($post->post_type !== 'ifw-insurance') {
                return;
            }
            $this->ifw_builder_box($post);
        }
        public function ifw_builder_box()
        {
            // echo 'ifw_builder_box';
            include_once plugin_dir_path(__FILE__) . 'insurance-editor.php';
        }
        public function admin_body_class($class)
        {
            //TODO Hide/show admin bar
            return $class;
        }
        public function remove_meta_boxes()
        {
            if (get_current_screen()->id == 'ifw-insurance') {
                global $wp_meta_boxes;
                $wp_meta_boxes = [];
            }
        }
        public function hide_screen_options()
        {
            if (get_current_screen()->id == 'ifw-insurance') {
                return false;
            }
            return true;
        }
        public function change_text_post_title($title)
        {
            if (get_current_screen()->id == 'ifw-insurance') {
                $title = esc_html__('Form name');
            }

            return $title;
        }
    }
}
