<?php

/**
 * Created by PhpStorm.
 * User: igor
 * Date: 12.02.18
 * Time: 6:48
 */
require plugin_dir_path(__FILE__) . 'Action_Hook_SubscriberInterface.php';
require plugin_dir_path(__FILE__) . 'Filter_Hook_SubscriberInterface.php';

class My_Plugin implements Action_Hook_SubscriberInterface, Filter_Hook_SubscriberInterface
{
    /**
     * Get the action hooks My_Plugin subscribes to.
     *
     * @return array
     */
    public static function get_actions()
    {
        return array(
            'plugins_loaded' => 'on_plugins_loaded'
        );
    }

    /**
     * Get the filter hooks My_Plugin subscribes to.
     *
     * @return array
     */
    public static function get_filters()
    {
        return array(
            'the_title' => 'alter_title'
        );
    }

    /**
     * Alter the title.
     *
     * @param string $title
     *
     * @return string
     */
    public function alter_title($title)
    {
        // Alter the title

        return $title;
    }

    /**
     * Do operations for My_Plugin once plugins are loaded.
     */
    public function on_plugins_loaded()
    {
        // Do something useful
    }
}