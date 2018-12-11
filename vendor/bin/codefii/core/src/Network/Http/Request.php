<?php

namespace Codefii\Http;
use Codefii\Http\Input;
class Request
{
  protected static $fileName, $fileMoved=false;
  public static function exists($type='post')
  {
    switch($type){
      case 'post':
      return (!empty($_POST)) ? true :false;
      break;
      case 'get':
      return (!empty($_GET)) ? true :false;
      break;
      default:
      return false;
      break;

    }

  }
  public static function get($item)
  {
    if(isset($_POST[$item]))
    {
      return $_POST[$item];
    }else{
      return $_GET[$item];
    }
    return '';//return an empty string
  }
  public static function getParam($param = array()){
    return $param;
  }
  public static function getApi($api){
   if(isset($_GET[$api])){
    return $_GET[$api];
   }
  }
  public static function hasFile($name,$location){
    if(isset($_FILES[$name]['name']))
        self::$fileName  = $_FILES[$name]['name'];
    $fileTmploc = $_FILES[$name]['tmp_name'];
    $fileType = $_FILES[$name]['type'];
    $fileSize = $_FILES[$name]['size'];
    $fileErrorMsg = $_FILES[$name]['error'];
    if(move_uploaded_file($fileTmploc,"$location/{self::$fileName}")){
      self::$fileMoved = true;
    }
  }
  public static function getFileName(){
    return self::$fileName;
  }
  public static function fileIsMoved(){
    return self::$fileMoved;
  }
}
