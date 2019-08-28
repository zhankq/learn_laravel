<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

class Funchelp extends Controller {

    //数组 & 对象
    public function used_array() {
        /*
          #@deprecated Arr::add() should be used directly instead. Will be removed in Laravel 6.0.
          $s = Arr::add(['name' => 'Desk'], 'price', 100);
          print_r($s);#['name' => 'Desk', 'price' => 100] 类似在往数组新增一个那键值对意义不大
         */
#$$$==PHP 在用户自定义函数中支持可变数量的参数列表。在 PHP 5.6 及以上的版本中，由 ... 语法实现
        //在 PHP 5.5 及更早版本中，使用函数 func_num_args()，func_get_arg()，和 func_get_args() 。
#array_collapse 函数将多个单数组合并成一个数组
        /**
         * function sum(...$numbers) {
          var_dump($numbers);
          $acc = 0;
          foreach ($numbers as $n) {
          $acc += $n;
          }
          return $acc;
          }

          echo sum(1, 2, 3, 4); [输入：10]
         */
        //$f = array_collapse([[1, 2, 3], [4, 5, 6], [7, 8, 9],['a'=>1,'b'=>'adf'],['a'=>45]]);
        //print_r($f);
#$$$==在 PHP 7.1 中，还能更省事儿：可以这样子赋值 了
        //[$key,$val] = [123,567]; 作用与 list($key,$val) = [123,567] 类似了
        //
        
//array_divide 函数返回两个数组，一个包含原始数组的健，另一个包含原始数组的值：
        //类似的[array_keys($array), array_values($array)];
        //$arys = array_divide(['a'=>1,'b'=>2,'c'=>'6']);
        //print_r($arys);
#array_dot 函数将多维数组平铺到一维数组中，该数组使用「点」符号表示深度
        /*
          $s = ['a'=>['job1'=>123],'b'=>['job1'=>345],'c'=>['jok'=>['s'=>1]]];
          print_r(array_dot($s));
         * 
          Array
          (
          [a.job1] => 123
          [b.job1] => 345
          [c.jok.s] => 1
          )
         */
#array_except 函数从数组中删除给定的键 / 值对：
#        与unset类似，好处是他能返回删除后的变量的值
        /*
          $f = array_except(['a' => 123, 'b' => 666, 'c' => 66,'d'=>'???'], [66, 'a']);
          print_r($f);
         */
        //array_first 函数返回数组中第一个通过指定测试的元素：
        /*
          $array = [100, 200, 300];
          $first = array_first($array, function ($value, $key) {
          return $value >= 150;
          },'asd');
          echo $first;
         */

#array_flatten 函数将多维数组平铺为一维数组。
        /*
          $array = ['name' => 'Joe', 'languages' => ['PHP', 'Ruby']];
          $flattened = array_flatten($array);
          print_r($flattened);
         */
#array_forget 函数使用「点」符号从深度嵌套数组中移除给定的键 / 值对：这是个引用函数
        /*
          $array = ['products' => ['desk' => ['price' => 100]],'chairs'=>'good jobs'];
          array_forget($array, 'products.desk');
          var_dump($array);
         * 
          array(2) {
          ["products"]=>
          array(0) {
          }
          ["chairs"]=>
          string(9) "good jobs"
          }
         */
        //Arr::get 函数使用「.」符号从深度嵌套的数组中根据指定键检索值：
        /*
          $array = ['products' => ['desk' => ['price' => 100]]];
          $price = Arr::get($array, 'products.desk');
          print_r($price);
         */
//        Arr::has 函数使用「.」符号查找数组中是否存在指定的一个或多个键：
        /*
          $array = ['product' => ['name' => 'Desk', 'price' => 100]];
          $contains = Arr::has($array, ['product.name']);
          //        $contains = Arr::has($array, ['product.name','product.price']);
          var_dump($contains);
         */
        //Arr::last 函数返回数组中通过指定测试的最后一个元素：
        /*
          $array = [100, 200, 300, 110];
          $last = Arr::last($array, function ($value, $key) {
          return $value >= 150;
          });
          //300
         */
        /*
          //Arr::only 函数只返回给定数组中指定的键／值对：
          $array = ['name' => 'Desk', 'price' => 100, 'orders' => 10];
          $slice = Arr::only($array, ['name', 'price']);
          print_r($slice);
         */ //// ['name' => 'Desk', 'price' => 100]
        // 
//        
        /*   Arr::pluck 函数从数组中检索给定键的所有值：
          $array = [
          ['developer' => ['id' => 1, 'name' => 'Taylor']],
          ['developer' => ['id' => 2, 'name' => 'Abigail']],
          ];
          $ary = Arr::pluck($array, 'developer.id');
          print_r($ary);
          //        你也可以指定获取的结果的键：
          $names = Arr::pluck($array, 'developer.name', 'developer.id');
          print_r($names);
         * 
         */
        //Arr::prepend 函数将一个值插入到数组的开始位置：
        /*
          $array = ['one', 'two', 'three', 'four'];
          $array = Arr::prepend($array, 'zero');
          $array = Arr::prepend($array, 'zero2','a');

          print_r($array);
          //Arr::pull()
          //Arr::pull 函数从数组中返回指定键的值并删除此键／值对：
          $name = Arr::pull($array, 'name');
          // Arr::random 函数从数组中随机返回一个值： //与array_rand差别着实不大
          $random = Arr::random($array,2);
          print_r($random);
          //        Arr::set 函数使用「.」符号在多维数组中设置指定键的值：
          $array = ['products' => ['desk' => ['price' => 100]]];
          Arr::set($array, 'products.desk.price', 200);
          Arr::set($array, 'products.desk.test', 6666);
          print_r($array);

          //        Arr::sort 函数根据数组的值对数组进行排序：
          $sorted = Arr::sort($array);
          print_r($sorted);

         */
        /* 对内部作了排序
          //        Arr::sortRecursive 函数使用 sort 函数对数组进行递归排序：

          $array = [
          ['Roman', 'Taylor', 'Li'],
          ['PHP', 'Ruby', 'JavaScript'],
          ['one' => 1, 'two' => 2, 'three' => 3],
          ];

          $sorted = Arr::sortRecursive($array);

         */
        /*
          [
          ['JavaScript', 'PHP', 'Ruby'],
          ['one' => 1, 'three' => 3, 'two' => 2],
          ['Li', 'Roman', 'Taylor'],
          ]
         */
        //Arr::where 函数使用给定闭包返回的结果过滤数组： *****
        /*
          $array = [100, '200', 300, '400', 500];
          //array_filter($array, $callback, ARRAY_FILTER_USE_BOTH);
          $filtered = Arr::where($array, function ($value, $key) {
          return is_string($value);
          });
          print_r($filtered);
         */
//        Arr::wrap 函数将给定的值变为一个数组，如果给定的值已经是数组，则不改变：
        /* 在未知返回值的状态的情况下或许能用到吧？
          $string = 'Laravel';
          $array = Arr::wrap($string);
         */

//        data_fill 函数使用「.」符号在多维数组或对象内设置缺省值：
        $data = ['products' => ['desk' => ['price' => 100]]];
        data_fill($data, 'products.desk.discount', 10);
        data_fill($data, 'products.desk.price', 200);
        print_r($data);
        
        $data = [
            'products' => [
                    ['name' => 'Desk 1', 'price' => 100],
                    ['name' => 'Desk 2'],
            ],
        ];

        data_fill($data, 'products.*.price', 200);
        print_r($data);
        
    }

}
