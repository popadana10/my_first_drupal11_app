<?php

namespace Drupal\hello_name\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\core\Link;
use Drupal\core\Url;

class HelloNameController extends ControllerBase
{

    public function content()
    {
        return ['#markup'=>$this->t('Hello'),];
    }
}
