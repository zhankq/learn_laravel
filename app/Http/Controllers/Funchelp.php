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
        
        
    }

}
