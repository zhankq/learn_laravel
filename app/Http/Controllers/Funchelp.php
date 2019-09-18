<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\{
    Arr,
    Str
}; //这个写法等同于下面的那两行

//use Illuminate\Support\Arr;
//use Illuminate\Support\Str;

class Funchelp extends Controller {

//    dispatch 函数将给定的 任务 推送到 Laravel 任务队列中：
//$result = dispatch_now(new App\Jobs\SendEmails);
//event(new UserRegistered($user)); event 函数向监听器派发给定 事件 ：
//broadcast 函数将 广播 给定的 事件 到它的监听器：
//factory 函数根据给定的类、名称和数量创建模型工厂构造器。它能够被用于 测试 或 数据填充：
//tap 函数接受两个参数： 任意 $value 和闭包。 $value 将被传递给闭包，并被 tap 函数返回。与闭包的返回值无关：






    public function others() {


//        with 函数返回给定的值。如果传递了一个 Closure 给第二个参数，那么会返回 Closure 执行的结果：
        $callback = function ($value) {
            return (is_numeric($value)) ? $value * 2 : 0;
        };

        $result = with(5, $callback);

        var_dump($result);

//        view 函数获取一个 view 实例：
//        return view('test');


        /*
          //        value 函数返回给定值。如果传递 闭包 给此函数，将执行 闭包 并返回闭包调用的结果：把两步分成了一步上了
          //感觉作用不大，如果 要重复使用会定义成变量或函数 ，如果 是只用一次，直接过程化的方式处理就可以了
          $result = value(function () {
          return false;
          });
          var_dump($result);

          //        validator 函数根据指定的参数创建一个新的 验证器 实例。方便起见可以用它来代替 Validator facade：


          //        还可以传递一个默认值或 闭包 作为该函数的第三个参数。如果给定的值为空时，返回该值：

          //        $result = transform(null, function(){}, 'The value is blank');


          //        trait_uses_recursive 返回被 trait 使用的全部 trait：


          //        在给定的布尔表达式结果为 false 时，throw_unless 函数抛出给定的异常：
          //        在给定的布尔表达式结果为 true 时，throw_if 函数抛出给定的异常：


          //today 函数根据当前日期创建新的 Illuminate\Support\Carbon 实例：
          $today = today();
          var_dump($today);



          //        tap 函数接受两个参数： 任意 $value 和闭包。 $value 将被传递给闭包，并被 tap 函数返回。与闭包的返回值无关：
          //        可以向该函数传递键值对数组来设置 session 值：
          session(['chairs' => 7, 'instruments' => 3]);
          //        session 函数用于获取或设置 session 值：
          $value = session('key');

          //        print_r($_SESSION);

          //        retry 函数尝试执行给定的回调，直到达到给定的最大尝试阈值。如果回调没有抛出异常，回调返回值将被返回。
          //        如果回调抛出异常，将自动重试。达到最大尝试次数，将抛出异常：

          //        response 函数创建 响应 实例，或者获得响应工厂的实例：
          //        return response('Hello World', 200);
          //        return response()->json(['foo' => 'bar'], 200);




          //        resolve 函数使用 服务容器 解析给定名称的类或接口的实例：
          $api = resolve('Illuminate\Cookie\CookieServiceProvider');
          return $api;


          //        rescue 函数执行给定的闭包，并且捕获其执行过程中引发的任何异常。捕获的所有异常都将传递给 异常处理器 的 report 方法；然后继续处理此次请求：
          //        return rescue(function () {
          //            return $this->method();
          //        });
          return rescue(function () {
          return $this->method();
          }, false);

          return rescue(function () {
          return $this->method();
          }, function () {
          return $this->failure();
          });

          //request 函数返回当前 请求 实例，或者获取一个输入项：
          $request = request();
          $value = request('key', '$default');
          var_dump($request);

          //        report 函数使用 异常处理器 的 report 方法报告异常：
          //        redirect 函数返回 重定向 HTTP 响应，如果不带参数调用则返回重定向器实例：



          //        policy 方法为给定的类获取 policy 实例：
          $policy = policy(App\User::class);
          var_dump($policy);
          // optional 函数接受任何参数，并允许你访问该对象上的属性或调用其方法。如果给定对象为 null，属性或方法将返回 null 而不是引发错误：
          $user = new \stdClass();
          return optional($user->address)->street;


          //         old 函数 获取 刷入 session 的 旧的输入值 :
          $value = old('value');
          var_dump($value);

          $now = now();
          var_dump($now);
          //         method_field 行数生成包含模仿表单 HTTP 动作的 HTML hidden 域。下面的例子使用了 Blade 语法：
          //         return method_field('DELETE');
          //         return view('test');
          //         logger 函数可以被用于将 debug 级别的消息写入 log：
          //        logger('Debug message');
          //如果不带参数调用此函数，它将返回 logger 实例：
          //return logger()->error('You are not allowed here.');




          //         info 函数将信息写入 log：
          //echo         date('Ymd');
          //        info('Some helpful information!');
          //        可以将上下文数据数组传递给此函数：
          //info('User login attempt failed.', ['id' => '$user->id']);



          //         decrypt 函数可以使用 Laravel 的 加密解密机制:
          //         dispatch 函数将给定的 任务 推送到 Laravel 任务队列中：
          //         dump 打印给定的变量： [会继续执行]
          //$user = factory(App\User::class)->make();




          $value='';
          dd($value);

          //        abort(403);
          //        abort(403, 'Unauthorized.');
         */
        //如果给定的布尔表达式计算结果为 true， abort_if 函数将抛出一个 HTTP 异常：
//        abort_if(! Auth::user()->isAdmin(), 403);
//        与 abort_if 作用相反
//        abort_unless(Auth::user()->isAdmin(), 403);
//        app 函数返回 服务容器 实例：
//        $container = app();
//        print_r($container);
        //你可以传递一个类或接口名称来从容器中解析它：
//        $api = app('HelpSpot\API');
//        $user = auth()->user();
//        var_dump($user);
//        return back();
//        $password = bcrypt('my-secret-password');
//        return $password;
//        $value = cache('key');
//        return $value;
//        $collection = collect(['taylor', 'abigail']);
//        return $collection;
//        你也可以在运行时通过传递一个键／值对数组来设置配置变量：
//        config(['app.debug' => true]);
//        $cookie = cookie('name', 'value', 10);
//        return $cookie;
        //csrf_field 函数生成一个包含 CSRF 令牌值的 HTML 输入表单字段 hidden 。例如，使用 Blade 语法：
//        echo $token = csrf_token();
//        return csrf_field();
    }

    /**
     * 数组 & 对象
     */
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
         */
//        data_get 函数使用「点」符号从嵌套数组或对象中检索值：
        /*
          $data = ['products' => ['desk' => ['price' => 100]]];
          $price = data_get($data, 'products.desk.price');
          print_r($price);

          $data = ['products' => ['desk' => ['price' => 100]]];
          data_set($data, 'products.desk.price', 200);
          print_r($data);
          //        这个函数也接受通配符「*」，并相应地在目标上设置值：
          $data = [
          'products' => [
          ['name' => 'Desk 1', 'price' => 100],
          ['name' => 'Desk 2', 'price' => 150],
          ],
          ];
          data_set($data, 'products.*.price', 200);
          print_r($data);
          $array = [100, 200, 300];
          $first = head($array);
          print_r($first);
          //======================================================================
          $array = [100, 200, 300];
          $last = last($array);
          echo $last;
         */
    }

    /**
     * 路径函数
     */
    public function used_route() {
        //app_path 函数返回 app 目录的完整路径．你也可以使用 app_path 函数来设置应用程序 app 目录的完整路径：
        /*
          //        $path = app_path();
          //        print_r($path);
          //        $path = app_path('Http/Controllers/Controller.php');
          //        print_r($path);
          //base_path 函数返回项目根目录的完整路径．你也可以使用 base_path 函数设置项目根目录的完整路径：
          $path = base_path();
          echo $path,"\n";
          $path = base_path('vendor/bin');
          echo $path;
          //config_path 函数返回 config 目录的完整路径．你也可以使用 config_path 函数设置应用程序 config 目录中给定文件的完整路径：
          $config = config_path();
          print_r($config);

          //        database_path 函数返回 database 目录的完整路径．你也可以使用 database_path 函数来设置 database 目录中给定文件的完整路径：
          $path = database_path();
          print_r($path);
          $path = mix('css/app.css');
          print_r($path);
          //public_path 函数返回 public 目录的完整路径．你也可以使用 public_path 函数来生成 public 目录中给定文件的完整路径：
          $path = public_path();
          print_r($path);
          //        resource_path 函数返回 resources 目录的完整路径．你也可以使用 resource_path 函数来生成资源文件中给定文件的完整路径
          $path = resource_path();
          print_r($path);
         */
//        storage_path 函数返回 storage 目录的完整路径．你也可以使用 storage_path 函数来设置存储目录下指定文件的完整路径 ：
        $path = storage_path();
        print_r($path);
    }

    public function used_string() {
//        __ 函数使用你的 本地化文件来翻译给定的翻译字符串或翻译键：
        /*
          echo __('messages.welcome');
          echo __('Welcome to our application'); #cn.json
         */
//        camel_case 函数将给定的字符串转换为「驼峰命名」：
        /* echo camel_case('hello_world'); */
//        class_basename 返回给定类删除命名空间的类名：
        /*
          $class = class_basename('Foo\Bar\Baz'); #Baz
          echo $class;
         */
//        e 函数将 double_encode 选项设置为 false 来运行 PHP 的 htmlspecialchars 函数：
        /* echo e('<html>foo</html>'); */
//        ends_with 函数判断给定的字符串是否以给定的值结尾：
        /*
          $result = Str::endsWith('This is my 你', '你');
          var_dump($result);
         */
//        Str::kebab 函数将给定的「驼峰式」字符串转化为 kebab-case「短横式」字符串：
        /* echo Str::kebab("KebiBright"); */
//        preg_replace_array 函数使用数组顺序替换字符串中的给定模式：
        /*
          $string = 'The event will take place between :start and :end';
          $replaced = preg_replace_array('/:[a-z_]+/', ['8:30', '9:00'], $string);
          print_r($replaced);
         */
//        Str::snake 函数将给定的字符串转换为 snake_case「蛇式」： #可以带参数
        /*
          $converted = Str::snake('fooBar');
          echo $converted;
         */
//        Str::startsWith 函数判断给定的字符串的开头是否是指定值：与这一样var_dump(strpos('This is my name', 'This')===0);
        /*
          $result = Str::startsWith('This is my name', 'This');
          var_dump($result);
          var_dump(strpos('This is my name', 'This')===0);
         */
//        Str::after 函数返回在字符串中指定值之后的所有内容：
        /* echo $slice = Str::after('This is my name', 'This is'); */
//        Str::before 函数返回在字符串中指定值之前的所有内容：
        /* echo $slice = Str::before('This is my name', 'my name'); */
//Str::contains 函数判断给定的字符串是否包含给定的值（区分大小写）：
        /*
          $contains = Str::contains('This is my name', 'This');
          var_dump($contains);

         * 你也可以传递一个数组形式的值来判断字符串中是否包含任何值：
          $contains = Str::contains('This is my name', ['my', 'foo']);
          var_dump($contains);
         */
//        Str::finish 函数将给定的字符串以给定的值结尾返回（如果它尚未以给定值结尾）：
        /*
          $adjusted = Str::finish('this/string', '/');
          var_dump($adjusted);
         */
//        Str::is 函数判断给定的字符串是否匹配给定的模式。星号 * 可以用来表示通配符：
        /*
          $matches = Str::is('foo*', 'foobar');
          var_dump($matches);
         */
//        Str::limit 函数按给定的长度截断给定的字符串：
//        $truncated = Str::limit('The quick brown fox jumps over the lazy dog', 20);
        /*
          $truncated = Str::limit('可以用来表示通配符', 2);
          echo $truncated;
         */
//        The Str::orderedUuid 方法高效生成一个可存储在索引数据库列中的「第一时间」 UUID：
//        Str::orderedUuid(); *********************
//        Str::plural 函数将字符串转换为复数形式。该函数目前仅支持英文：
        /*
          $plural = Str::plural('child');
          echo $plural;
         */
//        你可以提供一个整数作为函数的第二个参数来检索字符串的单数或复数形式：
        /*
          $plural = Str::plural('new', 2);
          var_dump($plural);
         */
//        Str::random 函数生成一个指定长度的随机字符串。这个函数用 PHP 的 random_bytes 函数：
        /* echo Str::random(15); */

        /*
          //        Str::replaceArray 函数使用数组顺序替换字符串中的给定值：
          $string = 'The event will take place between ? and ?';
          $replaced = Str::replaceArray('?', ['8:30', '9:00'], $string);
          echo $replaced;
         */
//        Str::replaceFirst 函数替换字符串中给定值的第一个匹配项：
        /*
          $replaced = Str::replaceFirst('the', 'a', 'the quick brown fox jumps over the lazy dog');
          echo $replaced;// a quick brown fox jumps over the lazy dog
         */
        //Str::replaceLast 函数替换字符串中最后一次出现的给定值：
        /*
          //        echo $replaced = Str::replaceLast('the', 'a', 'the quick brown fox jumps over the lazy dog');
          //// the quick brown fox jumps over a lazy dog
         */
        //Str::singular 函数将字符串转换为单数形式。该函数目前仅支持英文：
        /*
          $singular = Str::singular('cars');
          var_dump($singular);
         */
        //Str::slug 函数将给定的字符串生成一个 URL 友好的 「slug」 ：
        /*
          echo $slug = Str::slug('Laravel 5 Framework', '-');//// laravel-5-framework
         */
//        Str::start 函数将给定值添加到给定字符串的开始位置（如果字符串尚未以给定值开始）：
        /*
          echo $adjusted = Str::start('this/string', '/');
         */
        //Str::studly 函数将给定的字符串转换为 「变种驼峰命名」：
        /*
          $converted = Str::studly('foo_bar');
          echo $converted;
         */
        //Str::title 函数将给定的字符串转换为「首字母大写」：
        //mb_convert_case($value, MB_CASE_TITLE, 'UTF-8');
        /*
          $converted = Str::title('a nice title uses the correct case');
          echo $converted;
          echo trans('messages.welcome');
         */
//        echo trans_choice('messages.welcome', 2);
//        Str::uuid 方法生成一个 UUID（版本 4）：
//        return (string) Str::uuid();
    }

    public function used_urls() {
//        $url = action('Funchelp@used_urls');
//        $url = action('Funchelp@used_urls', ['id' => 1]);
//        echo $url;
//        asset 函数使用当前请求的协议（ HTTP 或 HTTPS ）为资源文件生成 URL ：
//        您可以通过 ASSET_URL 在 .env 文件中设置变量来配置资产 URL 主机。如果您在 Amazon S3 等外部服务上托管资产
//        默认没有设置
//        $url = asset('img/photo.jpg');
//        echo $url;
//        secure_asset 函数使用 HTTPS 协议为资源文件生成 URL：
//        $url = secure_asset('img/photo2.jpg');
//        echo $url;
//        route 函数为给定的命名路由生成一个 URL ：
//        $url = route('func');
//        echo $url;
//        url 函数生成给定路径的标准 URL：
//        $url = url('user/profile');
//        $url = url('user/profile', [1]);
//        echo $url;

        $current = url()->current();
        echo $current, "\n";

        echo "<a href='http://laravel.ifentong.com/funsurls?id=333'>ssssss</a>";

        //完整地址带参
        $full = url()->full();
        echo $full, "\n";

        $previous = url()->previous();
        echo $previous;
    }

}
