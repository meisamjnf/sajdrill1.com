<?php namespace Meisam\Contact;

use Backend;
use System\Classes\PluginBase;

/**
 * contact Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'contact',
            'description' => 'No description provided yet...',
            'author'      => 'meisam',
            'icon'        => 'icon-comments'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        //return []; // Remove this line to activate

        return [
            'Meisam\Contact\Components\Contactform' => 'contactform',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
  //      return []; // Remove this line to activate

        return [
            'meisam.contact.some_permission' => [
                'tab' => 'contact',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
       // return []; // Remove this line to activate

        return [
            'contact' => [
                'label'       => 'contact',
                'url'         => Backend::url('meisam/contact/contacts'),
                'icon'        => 'icon-comments',
                'permissions' => ['meisam.contact.*'],
                'order'       => 500,
            ],
        ];
    }
}
