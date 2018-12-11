<?php

namespace App\Controllers;
use Codefii\Controller\BaseController;
abstract class Controller extends BaseController
{
  public function init(){
    $this->setHeader("includes/navbar");
    $this->setFooter('includes/footer');
  }
}
