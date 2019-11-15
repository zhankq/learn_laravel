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

//        判断记录是否存在
//        $flag = $this->data_exists();
//        var_dump($flag);
//        指定一个 Select 语句
//        $this->data_select();
//        addSelect ,如果你已经有了一个查询构造器实例，并且希望在现有的查询语句中加入一个字段
//        $this->add_select();
//        原生表达式
        /*
          $users = DB::table('users')
          ->select(DB::raw('count(*) as user_count, status'))
          ->where('status', '<>', 1)
          ->groupBy('status')
          ->get();
          print_r($users);
         */
//            原生方法
        //selectRaw 方法可以代替 select(DB::raw(...))。该方法的第二个参数是可选项，值是一个绑定参数的数组
        /*
          $orders = DB::table('users')->selectRaw('count(*) as user_count')->get();
          print_r($orders);
         */
//        whereRaw 和 orWhereRaw 方法将原生的 where
        /*
          $orders = DB::table('users')->whereRaw('status > 0')->get();
          print_r($orders);
         */
//        orderByRaw
        /*
          //        $orders = DB::table('users')->whereRaw('status > 0')->orderByRaw('updated_at - created_at DESC')->get();
          $orders = DB::table('users')->orderByRaw('id DESC')->get();
          print_r($orders);
         */
        //Joins
//        「内链接」，你可以在查询构造器实例上使用 join 方法
        /*
          $users = DB::table('users')
          ->join('orders', 'users.id', '=', 'orders.userid')
          ->select('users.*', 'orders.price')
          ->get();
          print_r($users);
         */
//        Left Join 语句
        /*
          $users = DB::table('users')
          ->leftJoin('orders', 'users.id', '=', 'orders.userid')
          ->get();
          print_r($users);
         */
//        高级 Join 语句
        /*
          $users = DB::table('users')
          ->join('orders', function ($join) {
          $join->on('users.id', '=', 'orders.userid');
          })->get();
          print_r($users);
         */
        /*
          $users = DB::table('users')
          ->join('orders', function ($join) {
          $join->on('users.id', '=', 'orders.userid')
          ->where('users.status', '>', 0);
          })->get();
          print_r($users);
         */
//        子连接查询
//        你可以使用 joinSub，leftJoinSub 和 rightJoinSub 方法关联一个查询作为子查询。
//        他们每一种方法都会接收三个参数：子查询，表别名和定义关联字段的闭包
        /*
          $latestPosts = DB::table('orders')
          ->select('userid', DB::raw('MAX(add_time) as last_post_created_at'))
          ->groupBy('userid');

          $users = DB::table('users')
          ->joinSub($latestPosts, 'latest_orders', function($join) {
          $join->on('users.id', '=', 'latest_orders.userid');
          })->get();

          print_r($users);
         */
//        Unions
//        {提示} 你也可以使用 unionAll 方法，用法 union 方法是的一样。

        /*
          $first = DB::table('users')->where('status','=',0);

          $users = DB::table('users')->where('status','<>',0)
          ->union($first)
          ->get();

          print_r($users);
         * 
         */
//          Where 语句
//          为了方便，如果你只是简单比较列值和给定数值是否相等，可以将数值直接作为 where 方法的第二个参数：
//$users = DB::table('users')->where('votes', '=', 100)->get();
//$users = DB::table('users')->where('votes', 100)->get();
//当然，你也可以使用其他的运算符来编写 where 子句：
//$users = DB::table('users')->where('votes', '>=', 100)->get();
//你还可以传递条件数组到 where 函数中：
        /*
          $users = DB::table('users')->where([
          ['status', '>', '1'],
          ['email', '10086'],
          //    ['email', '=', '10086'],
          ])->get();
          print_r($users);
         */
//        Or 语句 select * from `users` where `status` > ? or `email` = ?
        /*
          $users = DB::table('users')
          ->where('status', '>', 1)
          ->orWhere('email', '10086')
          ->get();

          print_r($users);
         */
//        其他 Where 语句
//        whereBetween whereBetween 方法验证字段值是否在给定的两个值之间：
//        $users = DB::table('users')->whereBetween('id', [2, 3])->get();
//        print_r($users);
        #whereNotBetween 方法验证字段值是否在给定的两个值之外：
//        $users = DB::table('users')->whereNotBetween('id', [2, 3])->get();
//        print_r($users);
//        whereIn / whereNotIn
//        $users = DB::table('users')->whereIn('id', [2, 3])->get();
//        $users = DB::table('users')->whereNotIn('id', [2, 3])->get();
//        print_r($users);
//whereNull / whereNotNull
//        whereNull 方法验证指定的字段必须是 NULL:
//$users = DB::table('users')->whereNull('testnull')->get();
//        $users = DB::table('users')->whereNotNull('testnull')->get();
//        print_r($users);
//        whereDate / whereMonth / whereDay / whereYear / whereTime
//        $users = DB::table('users')->whereDate('testnull', '2018-09-08')->get();
//        $users = DB::table('users')->whereMonth('testnull', '9')->get();
//        print_r($users);
//        whereDay 方法用于比较字段值与一月中指定的日期:
//        select * from `users` where day(`testnull`) = ?
//        $users = DB::table('users')->whereDay('testnull', '8')->get();
//        print_r($users);
//        whereYear 方法用于比较字段值与指定的年份:
//        select * from `users` where year(`testnull`) = ?
//        $users = DB::table('users')->whereYear('testnull', '2018')->get();
//        print_r($users);
//        $users = DB::table('users')->whereTime('testnull', '=', '11:20:45')->get();
//        print_r($users);
//        whereColumn 方法用于比较两个字段的值 是否相等:
//        select * from `users` where `username` = `email`
//        $users = DB::table('users')->whereColumn('phone', 'email')->get();
//        print_r($users);
//        你也可以传入一个比较运算符:
//        select * from `users` where `updated_at` >= `created_at`
        /*
          $users = DB::table('users')->whereColumn('updated_at', '>=', 'created_at')->get();
          print_r($users);

          //        whereColumn 你也可以传递数组 用 and 运算符链接:
          $users = DB::table('users')
          ->whereColumn([
          ['phone', '=', 'email'],
          ['updated_at', '>=', 'created_at']
          ])->get();
          print_r($users);
         */

//参数分组
//有时候你需要创建更高级的 where 子句，例如「where exists」或者嵌套的参数分组。 Laravel 的查询构造器也能够处理这些
//select * from `users` where `email` = ? and (`phone` > ? or `status` = ?)
        /*
          $users = DB::table('users')
          ->where('email', '=', '10086')
          ->where(function ($query) {
          $query->where('phone', '>', 10086)
          ->orWhere('status', '=', '1');
          })->get();
          print_r($users);
         */
//Where Exists 语句
//       select * from `users` where exists (select 1 from `orders` where orders.userid = users.id)
        /*
          DB::table('users')
          ->whereExists(function ($query) {
          $query->select(DB::raw(1))
          ->from('orders')
          ->whereRaw('orders.userid = users.id');
          })->get();
         */
//JSON Where 语句
//Ordering, Grouping, Limit, & Offset
//        $users = DB::table('users')->orderBy('name', 'desc')->get();
//        print_r($users);
        
//        latest / oldest latest 和 oldest 方法可以使你轻松地通过日期排序 -->最早的记录
//        $users = \App\Model\User::oldest()->first()->toArray();
//        $users = \App\Model\User::latest()->first()->toArray();
//        print_r($users);

//        inRandomOrder inRandomOrder 方法被用来将结果随机排序
        //select * from `users` order by RAND() limit 1
        $randomUser = DB::table('users')->inRandomOrder()->first();
        print_r($randomUser);
        
        return 'aa';
    }

    protected function add_select() {
        $query = DB::table('users')->select('username');
        $users = $query->addSelect('email')->get();

        print_r($users);
    }

    protected function data_select() {
//        $users = DB::table('users')->select('username', 'email as user_email')->get();
//        distinct 方法会强制让查询返回的结果不重复：
        $users = DB::table('users')->distinct()->select('phone')->get();

        print_r($users);
    }

//    除了通过 count 方法可以确定查询条件的结果是否存在之外，还可以使用 exists 和 doesntExist
    protected function data_exists() {
//        return DB::table('users')->where('id', 1)->exists();
        return DB::table('users')->where('id', 1)->doesntExist();
    }

    //查询构造器还提供了各种聚合方法，比如 count, max，min， avg，还有 sum。你可以在构造查询后调用任何方法：
    //
    protected function get_group() {
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
