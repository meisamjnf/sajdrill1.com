<?php
namespace CheerfulLab\FrontendSpelling;

use Backend;
use System\Classes\PluginBase;

/**
 * frontend-spelling Plugin Information File
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
            'name' => 'Frontend Spelling',
            'description' => 'Response spelling from users',
            'author' => 'Pawel Samusev, Yuri Kostin',
            'icon' => 'icon-envelope-square',
        ];
    }

    public function registerNavigation()
    {
        return [
            'spelling' => [
                'label'       => 'Spelling requests',
                'url' => Backend::url('cheerfullab/frontendspelling/spellingrequests'),
                'icon'        => 'icon-envelope-square',
                'order'       => 500,
                'sideMenu' => [
                    'requests' => [
                        'label'       => 'Spelling requests',
                        'icon' => 'icon-envelope-square',
                        'url' => Backend::url('cheerfullab/frontendspelling/spellingrequests'),
                    ],
                ]

            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'CheerfulLab\frontendspelling\components\Frontendspelling' => 'frontendspellings'
        ];
    }

}
