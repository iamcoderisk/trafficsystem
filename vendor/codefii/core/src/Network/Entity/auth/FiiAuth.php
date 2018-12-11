<?php
namespace Codefii\Entity\Auth;
use Codefii\Entity\Orm\Fiirm;
use Codefii\Hash\Hash;
class FiiAuth extends Fiirm{
    public $_sessionName,
            $_loggedIn=false;
    public function login($email=null,$password=null){
        if(is_array($email)){
            if(count($email)==1){
                foreach($email as $key=>$value){
                $user = $this->findBy([$key=>$value]);
                 if($user){
                     if($user->password ==Hash::make($password,$user->salt)){
                        $this->_loggedIn =true;
                     }
                 }
             }
            }
         }
    }
    public function isLoggedIn(){
      return $this->_loggedIn;
    }

}
