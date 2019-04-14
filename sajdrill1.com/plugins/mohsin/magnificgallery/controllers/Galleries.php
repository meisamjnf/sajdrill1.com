<?php
namespace Mohsin\MagnificGallery\Controllers;

use Flash;
use BackendMenu;
use Backend\Classes\Controller;
use System\Classes\SettingsManager;
use Mohsin\MagnificGallery\Models\Gallery;

class Galleries extends Controller {

  public $implement = [
    'Backend.Behaviors.FormController',
    'Backend.Behaviors.ListController'
  ];

  public $requiredPermissions = ['mohsin.magnificgallery.manage_galleries'];

  public $formConfig = 'config_form.yaml';
  public $listConfig = 'config_list.yaml';

  public function __construct()
  {
    parent::__construct();
    BackendMenu::setContext('October.System', 'system', 'settings');
    SettingsManager::setContext('Mohsin.MagnificGallery', 'galleries');
  }
}
?>
