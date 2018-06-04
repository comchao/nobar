<?php

namespace App\Http\Controllers;

use App\Model\foodCategory;
use App\Model\Menus;
use Illuminate\Http\Request;

class AddMenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //use App\Model\Menus

        $foodCategory = foodCategory::query()->get();
        // dd($category);
        //ความสัมพัน
        $query = Menus::with('foodCategory')->get();
//        return view('layouts.addmenu',['data' => $query]);
        return view('addmenu', ['data' => $query  , 'foodCategory' => $foodCategory]);

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = $request->get('menu');
        $price = $request->get('price');
        $foodcategoryid = $request->get('foodcategoryid');
        $data = new Menus();
        $data->menu = $menu;
        $data->price = $price;
        $data->foodcategoryid = $foodcategoryid;
//        $data->created_at = $created_at;
//        $data->updated_at = $updated_at;
        $data->save();

        return redirect()->action('AddMenuController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //use App\Model\Menus
        $query = Menus::find($id);
        $category = foodCategory::query()->get();

//        return view('layouts.addmenu',['data' => $query]);
        return view('editmenu', ['data' => $query,'category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $menu = $request->get('menu');
        $price = $request->get('price');
        $foodcategoryid = $request->get('foodcategoryid');

        $data = Menus::find($id);
        $data->menu = $menu;
        $data->price = $price;
        $data->foodcategoryid = $foodcategoryid;
        $data->save();

        $query = Menus::find($id);
        $category = foodCategory::query()->get();

//        return view('layouts.addmenu',['data' => $query]);
        return view('editmenu', ['data' => $query,'category' => $category]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Menus::find($id);
        $data->delete();

        return redirect()->action('AddMenuController@index');
    }
}
