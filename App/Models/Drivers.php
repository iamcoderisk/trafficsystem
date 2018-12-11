<?php
namespace App\Models;
use Codefii\Entity\orm\Fiirm;
class Drivers extends Fiirm {
    public $table ='drivers';
    public $pk ='id';
    public $columns = ['license_number','firstname','lastname','state_of_origin','date_of_birth',
    'gender','address','phone','email','car_id','car_model','car_plate_number','car_engine_number','car_name'];
}