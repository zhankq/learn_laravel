<?php

namespace App\Http\Controllers\Databases;

/*
 * @filename Dueries
 * @datetime 2019-10-6 23:34:54 
 * @desc 关于数据库构造器部分的使用
 */

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Dueries extends Controller {

    public function result() {
//        从一个数据表中获取所有行
//        $this->get_all();
//        从数据表中获取单行或单列
//        $this->get_one();
//        则可以使用 value 方法从记录中获取单个值。
//        $this->get_value();   # ***
//        获取一列的值 
//        $this->pluck();
//        分块结果该方法一次获取结果集的一小块，并将其传递给 闭包 函数进行处理---->该方法在 Artisan 命令 编写数千条处理数据的时候非常有用
//        $this->chunk();
/*
//        聚合 比如 count, max，min， avg，还有 sum 返回的都是单个值 
//        $this->get_group();
        */
/*
//        判断记录是否存在
//        $flag = $this->data_exists();
//        var_dump($flag);
*/
//        指定一个 Select 语句
//        $this->data_select();
//        addSelect ,如果你已经有了一个查询构造器实例，并且希望在现有的查询语句中加入一个字段
        $this->add_select();
        
    }
    
    
    
    protected function add_select()
    {
        $query = DB::table('users')->select('username');
        $users = $query->addSelect('email')->get();
        
        print_r($users);
        
    }


    protected function data_select()
    {
//        $users = DB::table('users')->select('username', 'email as user_email')->get();
//        distinct 方法会强制让查询返回的结果不重复：
        $users = DB::table('users')->distinct()->select('phone')->get();

        print_r($users);

    }




//    除了通过 count 方法可以确定查询条件的结果是否存在之外，还可以使用 exists 和 doesntExist
    protected function data_exists()
    {
//        return DB::table('users')->where('id', 1)->exists();
        return DB::table('users')->where('id', 1)->doesntExist();

    }




    //查询构造器还提供了各种聚合方法，比如 count, max，min， avg，还有 sum。你可以在构造查询后调用任何方法：
    //
    protected function get_group()
    {
        $users = DB::table('users')->count();
        echo $users;
    }

    protected function chunk() {
        #我看了下结果就是分片取啊，分批次的查询数据库进行返回
        /*
          DB::table('users')->orderBy('id')->chunk(1, function ($users) {
          foreach ($users as $user) {
          print_r($user);
          //                你可以通过在 闭包 中返回 false 来终止继续获取分块结果：
          return false;
          }
          });
         */

//        如果要在分块结果时更新数据库记录，则块结果可能会和预计的返回结果不一致。 
//        因此，在分块更新记录时，最好使用 chunkById 方法。 此方法将根据记录的主键自动对结果进行分页
        DB::table('users')->where('phone', '13868049744')
                ->chunkById(1, function ($users) {
                    foreach ($users as $user) {
                        DB::table('users')
                        ->where('id', $user->id)
                        ->update(['phone' => '13869087322']);
                    }
                });
    }

    protected function pluck() {
//        $user = DB::table('users')->pluck('username');
        //当这个值 为两列时，前一个参数是值 ，后一个参数 是键值
        $user = DB::table('users')->pluck('id', 'username');
        print_r($user); //直接输出的是值 abc

        foreach ($user as $title) {
            echo $title, "\n";
        }
    }

    protected function get_value() {
        $user = DB::table('users')->where('id', '2')->value('username');
        print_r($user); //直接输出的是值 abc
    }

    protected function get_one() {
        $user = DB::table('users')->where('id', '1')->first();
        print_r($user);
    }

    protected function get_all() {
        $users = DB::table('users')->get();
        print_r($users);
        foreach ($users as $k => $user) {
            echo $k, "==>", $user->username, "\n";
        }
    }

}
