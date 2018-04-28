<?php
namespace app\admin\model;

use think\Model;

class Obtain extends Model
{
 
    protected $table='aiyouway';
    public static function ListData($table){
    	
        return self::all();
       // return self::select()->toArray();
    }
   

}