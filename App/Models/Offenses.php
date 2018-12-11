<?php
namespace App\Models;
use Codefii\Entity\orm\Fiirm;
class Offenses extends Fiirm {
    public $pk ='of_id';
    public $columns = ['type','code','points','penalty','category','offense_status'];
}