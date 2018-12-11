<?php
namespace App\Models;
use Codefii\Entity\orm\Fiirm;
class Car_Details extends Fiirm {
    public $pk ='id';
    public $columns = ['car_name'];
}