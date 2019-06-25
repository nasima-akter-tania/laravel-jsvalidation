<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
class PractiseHelperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $string="Nasia Akter Tania";
        $data=explode(' ',$string);
        print_r($data['2']);
        exit();

    //from an array remove null value with using array  forget or expect and where helper function
        $get_str=[];
        $get_num=[];
        $num_test_array=[10,'',20,'',30,'',40,'','',50,60,70,''];
        echo "Array Forget Example ";
        $key_of_num=0;
        for($i=0;$i<count($num_test_array);$i++)
        {
           
            if($num_test_array[$i]== '')
            {
                Arr::forget($num_test_array,$num_test_array[$i]);
            }
            else
            {
                $key_of_num=$key_of_num+1;
                data_set($get_num,$key_of_num,$num_test_array[$i]);
            }
            
        }
        print_r($get_num);
        echo "<br>";

        $str_test_array=['tania','','nasima','','','roni','','samia','sumiya'];
        echo "Array Where Example ";
        $remove_null_value=Arr::where($str_test_array,function($value){
             
            if ($value != '')
            {
                print($value.',');
            }

         });
         echo "<br>";

       
        //get number from an array and count all number using helper function in Arr::flatten()

        echo "Array Faltter Example ";
        $numeric_data=['under10'=>10,9,5,6,7,'up20'=>[120,30,50]];
        $all_numeric_value=Arr::flatten($numeric_data);
        $total=0;
        for($j=0;$j<count($all_numeric_value);$j++)
        {
            $total=$total+$all_numeric_value[$j];

        }
        echo $total;
        echo "<br>";

        $array_exam=['programming'=>['framework'=>['python'=>'django']]];
        echo "Array Dot Eample ";
        print_r(Arr::dot($array_exam));
        echo "<br>";
       //from an array get string and number value indivisually and first on sort with sort helper function and second one sort with sortRecursive 
     
        $random_data_array=['python','django','laravel',5,20,30,70];
    
        $str_data=[];
        $num_data=[];
        $str_key=0;
        $num_key=0;
        for($i=0;$i<count($random_data_array);$i++)
        {
            if (is_string($random_data_array[$i]))
            {
              $str_key=$str_key+1;            
              data_set($str_data,$str_key,$random_data_array[$i]);
              
            }
            else
            {
               $num_key=$num_key+1;
               data_set($num_data,$num_key,$random_data_array[$i]);
            }


         } 
        echo "Sort Recursive ";
        print_r(Arr::sortRecursive($str_data));
        echo "Sort";
        print_r(Arr::sort($num_data));
        echo "<br>";


        //get the  first element of array and second element of array and show the sum of 2 number 
         echo "Head and Last Example ";
         $num_arr=[10,20,30,40,20];
         $first_data=head($num_arr);
         $last_data=last($num_arr);

         print($first_data+$last_data);
         echo "<br>";
         echo "divide and data_fill Example ";
         $arr_with_key=['orange'=>10,'apple'=>20,'cherry'=>20,'banana'=>40];
         $get_value=Arr::divide($arr_with_key);
         $fruit_total=0;
       
         for($k=0;$k<count($get_value['1']);$k++)
         {
             $fruit_total=$fruit_total+$get_value['1'][$k];
            
         }
         $get_fruit_final=[];
         data_fill($get_fruit_final,'total fruit',$fruit_total);
         print_r($get_fruit_final);

         echo "<br>";
         echo "Array Only Example";
         print_r(Arr::only($arr_with_key,'apple'));
         
         echo "<br>";
         echo "pluck Example ";
         $array = [
            ['samsung' => ['id' => 1, 'name' => 'samsung j7']],
            ['samsung' => ['id' => 2, 'name' => 'samsung j10']],
        ];
        
        $names = Arr::pluck($array, 'samsung.name');
        print_r($names);
        echo "<br>";
        echo "prepend Example ";
        $array = ['one', 'two', 'three', 'four'];
        $array = Arr::prepend($array, 'zero');
        print_r($array);
        echo "<br>";
        echo "last Example";
        $array = [100, 200, 300, 110];

        $last = Arr::last($array, function ($value, $key) {
         return $value >= 150;
        });
        print_r($last);



        //get only apple's value  from an array
        // $arr=['one'=>1,'two'=>2,'three'=>3,'four'=>4];
        // $arr1=[2,3,4];
        // $multi_arr=['product'=>['desk'=>['price'=>100]]];
        // $new=data_set($arr,100,100);
        // print_r(Arr::collapse([$arr,$arr1]));
    //     $dot=Arr::dot($multi_arr);
        
    //     $new_arr=Arr::except($arr,['one']);

    //    $first=Arr::first($arr,function($value){
    //        return $value <5;
    //    });
       
    //    $last=Arr::last($arr,function($value){
    //      return $value >=1;
    //    });
       
    //    $flatten=Arr::flatten($arr);

    //    $get=Arr::get($arr,'one');
    //    $only=Arr::only($arr,['one','two']);

    //    $set=Arr::set($arr,'one',10);
       
    //   $ran_num=[3,2,5,6];
    //   $sort=Arr::sort($ran_num);
    //   $arr2=['tania',1,3,3];
    //   $where=Arr::where($arr2,function($value)
    //   {
    //     if(is_string($value))
    //     {
    //         return $value;
    //     }
    //   });
    //   $str='sokina';
    //   $str_in_array=Arr::wrap($str);
    //   print_r($str_in_array);

    

        

         
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }
    public function str_helper()
    {
        print("Get the App path using app_path helper function-> ");
        $path = app_path();
        print($path);
        echo "<br>";
        print("Get the Base path using app_path helper function-> ");
        $base=base_path();
        print($base);
        echo "<br>";
        print("Get the Config file path using config_path helper function-> ");
        $config=config_path();
        echo "<br>";
        print("Get the database file path using helper function database_path->");
        $database=database_path();
        echo $database;
        echo "<br>";
        echo "using public_path helper function-> ";
        $public=public_path();
        print($public);
        echo "<br>";
        echo "using resource_path helper function ->";
        $resource=resource_path();
        echo $resource;
        echo "<br>";
        echo "using storage_path helper function ->";
        $storage=storage_path();
        print($storage);
        echo "<br>"; 
        // print("using mix helper function-> ");
        // $mix=mix('css/app.css');
        // print($mix);

        echo "using e helper function -> ";
        $e=e("<script>alert('ok')</script>");
        print($e);
        echo "<br>";
        $class = class_basename('Foo\Bar\Baz');
        print($class);
        
        echo "<br>";
        //you want a market and buy 2kg apple 3.8litter milk.i give you this without value fill this with helper function
        $str="you want a market and buy : apple : milk";
        echo " str preg_replace_array use output ->";
        $add_value=preg_replace_array('/:+/',['2kg','3.8litter'],$str);
        print($add_value);
        echo "<br>";
        // get the name from the given string
        $full_str="my name is tania";
        $after=Str::after($full_str,"my name is");
        echo " str after use output ->";
        print($after);
        echo "<br>"; 
        //get the first name from the given string
        $name="Nasima Akter Tania";
        $before=Str::before($name,"Akter Tania");
        echo " str before use output ->";
        print($before);
        echo "<br>";

        //given string printout with camelCase,kebab-case style
        $get_str="my function";
        $camel_case=Str::camel($get_str);
        echo "use camelCase ->";
        print($camel_case);

        echo "<br>";
        echo "use kabab helper function ->";
        print(Str::kebab($get_str));
        echo "<br>";
        echo "use snake helper function ->";
        print(Str::snake($get_str));
        echo "<br>";
        echo "use studly helper function ->";
        print(Str::studly($get_str));
        echo "<br>";
        //print yes if givenn fruit name have in array 
        $test_string="my fvrt fruit apple";
        $test_arr=['apple','orange','cherry'];
        echo "str contains helper function use -> "; 
        $contains=Str::contains($test_string,$test_arr);
        if($contains)
        {
         echo "Yes";
        }
        echo "<br>";
        echo "endsWith helper function use-> ";
        $endswith=Str::endsWith($test_string,'apple');
        if($endswith)
        {
          echo "Yes";
        }
        echo "<br>";
        $adjusted = Str::finish('this/string', '/');
        echo "finind helper function use-> ";
        print($adjusted);
        echo "<br>";
        $is_str="foobar";
        echo "Str::is helper use ->";
        $matches = Str::is('*bar', $is_str);
        if($matches)
        {
            echo "True";
        }
        else
        {
         echo "False";
        }
        echo "<br>";
        //show 20 words from given paragprah
        $paragraph="A paragraph is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose";
        echo "limit use-> ";
        $truncated = Str::limit($paragraph, 20); 
        print($truncated);
        echo "<br>";
        // print(Str::orderedUuid());
        // echo "<br>";
        echo "plural helper function ->";
        print(Str::plural('child'));
        echo "<br>";
        echo "singular helper function ->";
        print(Str::singular('persons'));
        echo "<br>";
        echo "slug helper function-> ";
        $slug = Str::slug('Laravel 5 Framework', '-');
        print($slug);
        echo "<br>";
        echo "random helper function ->";
        print(Str::random(40));
        echo "<br>";
        $string = 'The event will take place between ? and ?';
        $replaced = Str::replaceArray('?', ['8:30', '9:00'], $string);
        print($replaced);
        echo "<br>";
        $first_replace= Str::replaceFirst('the', 'a', 'the quick brown fox jumps over the lazy dog');
        echo $first_replace;
        echo "<br>";
        $last_rep= Str::replaceLast('the', 'a', 'the quick brown fox jumps over the lazy dog');
        echo $last_rep;
        echo "<br>";
        $adjusted = Str::start(' this/string', '/');
        echo "start helper function";
        print($adjusted);
        echo "<br>";




    }
    public function helper_function()
    {
        echo "action helper function-> ";
        $action_url = action('PractiseHelperController@index');
        print($action_url);
        echo "<br>";
        echo "Asset helper function-> ";
        $asset_url = asset('img/photo.jpg');
        print($asset_url);
        echo "<br>";
        // echo "route helper function -> ";
        // $route = route('practise');
        // print($route);
        // echo "<br>";
      
        echo "secure_asset helper function -> ";
        $secure_asset = secure_asset('img/photo.jpg');
        print($secure_asset);
        echo "<br>";
        echo "secure_url helper function -> ";
        $secure_url = secure_url('user/profile');
        print($secure_url);
        echo "<br>";
        echo "url helper function use-> ";
        $current = url()->current();
        print($current);
        echo "<br>";
        // echo "dd helper function";
        // dd(['one'=>1,'two'=>2,'three'=>3,'four'=>4]);
        // echo "<br>";
        echo "bcrypt function->";
        $str_data='my-secret-password';
        $password = bcrypt($str_data);
        print($password);
        echo "<br>";
        // echo "dcrypt function ->";
        //  $decrypt=decrypt($password);
        //  print($password==$decrypt);
        // echo "<br>";
        // echo "dump function-> ";
        // dump(['one','two','three','four']);
        // echo "<br>";
      
        echo "env function-> ";
        $env = env('APP_ENV');
        print($env);
        echo "<br>";
        
        echo "logger function-> ";
         info('Some helpful information!');
        echo "<br>";
       
        echo "now function-> ";
        print(now());
        echo "<br>";
        echo "today function-> ";
        print(today());
        echo "<br>";
        echo "policy function-> ";
        print(policy(App\User::class));
        echo "<br>";
        $value = old('value');

        $value = old('value', 'default');
        print($value);
        echo "<br>";
        // $request = request();

        // $value = request('key', $default);
        // print($value);
        echo "auth helper function->";
        $user = auth()->user();
        print($user);
        echo "<br>";
        echo "collection helper function";
        $collection = collect(['taylor', 'abigail']s,[1,2,3,4]);
        echo $collection;
        echo "<br>";
        echo "config helper function";
        $value = config('app.timezone');
        print($value);
        echo "<br>";

     
        //{{ csrf_token() }}  // Outputs: SomeRandomString

        //{{ csrf_field() }}  // Outputs: <input type="hidden" name="_token" value="SomeRandomString">
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
