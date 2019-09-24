<?php

namespace App\Http\Controllers\Databases;

/*
 * @filename Database
 * @datetime 2019-9-22 22:35:51 
 * @desc 数据库学习-》入门操作模块
 */

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Rumen extends Controller {

    protected function tmpopt() {
//        $res = DB::insert('insert into test (username,email,phone) values (?, ?, ?)', ['Dayle','10086','13868049744']);
        $res = DB::statement('insert into test (username,email,phone) values (?, ?, ?)', ['Dayle', '123', '13868049744']);
        var_dump(($res));
    }

//        数据库事务
    protected function transaction() {
        
        $s = DB::transaction(function () {
            DB::table('test')->update(['phone' => '10086']);
            DB::table('posts')->delete();
        });
        
var_dump($s);
        
        
        
    }

    //实现读写分离
    public function readWrite() {
        $this->tmpopt();
//        
        //实现读写分离的前提是读表与写表有一样的记录的情况下才能实现。
//        $results = DB::select('select * from test where id = :id', ['id' => 1]);
//        $results = DB::select('select * from test where id = ?', [1]);
//        $results = DB::select('select * from test where id = 1');
//        print_r($results);
//        return "a";
    }

//        使用多个数据库连接
    public function connectMore() {

        $users = DB::connection('connection_more')->select('select * from jobs where id = :id', ['id' => 1]);
//        return collect($users);
        return $users;
    }

//    监听查询事件
    
    
    
}
