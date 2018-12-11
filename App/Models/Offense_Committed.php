<?php
namespace App\Models;
use Codefii\Entity\orm\Fiirm;
class Offense_Committed extends Fiirm {
    public $table ='offense_committed';
    public $pk ='id';
    public $columns = ['offense_id','license_number'];
}