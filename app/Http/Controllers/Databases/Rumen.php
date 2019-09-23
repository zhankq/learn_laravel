<?php
namespace App\Http\Controllers\Databases;
/*
 * @filename Database
 * @datetime 2019-9-22 22:35:51 
 * @desc 数据库学习-》入门操作模块
*/
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class Rumen extends Controller{
    
    protected function tmpopt(){
        DB::insert('insert into test (username,email,phone) values (?, ?, ?)', ['Dayle','10086','13868049744']);
    }


    //实现读写分离
    public function readWrite(){
//        $this->tmpopt();
        //实现读写分离的前提是读表与写表有一样的记录的情况下才能实现。
        $results = DB::select('select * from test where id = :id', ['id' => 1]);
        print_r($results);
        return "a";
    }
    
    
    
    
    
}