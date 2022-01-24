<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        $arr = [100, 78, 33, 11, 5, 0];
        $new_arr = [];

        for($i=count($arr)-1; $i>=0 ; $i--){
            // dd($arr[5]);
            array_push($new_arr, $arr[$i]);

        }
        dd($new_arr);
    }

    public function test1()
    {
        $arr = [78 ,100, 0, 11, 5, 33];
        $new_arr = [];

        for($i=0; $i < count($arr) ; $i++){
            // dd($arr[5]);
            
            $k = 0;

            for($j=0; $j < count($arr) ; $j++){
                if($arr[$i] < $arr[$j]){
                    $k = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $k;
                }
            }
            // array_push($new_arr, $arr[$k]);
            // dd($arr[$k]);
            
        }
        dd($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test2()
    {
        $users = User::get();
        dd($users);
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
