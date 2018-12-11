<?php
namespace App\Models;
use Codefii\Entity\auth\FiiAuth;
class Admin extends FiiAuth{
    public $table ='admin';
    public $columns = ['full_name','email','salt','password','role'];
    public $pk = 'id';
}