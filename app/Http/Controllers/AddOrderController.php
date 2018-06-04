<?php

namespace App\Http\Controllers;

use App\Model\foodCategory;
use App\Model\Menus;
use App\Model\Orders;
use Illuminate\Http\Request;

class AddOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //use App\Model\Menus


        $query = Menus::with('foodCategory')->get();

        $Orders = Orders::with('Menus')->get();
//        dd($query);
//        return view('layouts.addmenu',['data' => $query]);
        return view('addorder', ['data' => $query ,'orders' => $Orders]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_menus= $request->get('id_menus');
        $amount = $request->get('amount');
        $staff = 1;
        $table = 1;

        $data = new Orders();
        $data->id_menus = $id_menus;
        $data->amount = $amount;
        $data->staff = $staff;
        $data->table = $table;

        $data->save();

        return redirect()->action('AddOrderController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //use App\Model\Menus
        $Orders = Orders::with('Menus')
            ->where('id','=',$id)
            ->get();
        $category = foodCategory::query()->get();
        return view('edit_oder', ['orders' => $Orders,'category'=>$category]);

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
        $query = Orders::find($id);
        $query->amount = $request->get('amount');
        $query->save();
        return redirect()->action('AddOrderController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = Orders::find($id);
        $query->delete();
        return redirect()->action('AddOrderController@index');

    }
}
