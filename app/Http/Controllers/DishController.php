<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chef_id = Session::get('chef_id');
        $dishes = Dish::where('user_id', $chef_id)->get();
        $categories = Category::get();
        return view('chefs.dish.index', ['dishes' => $dishes, 'categories' => $categories]);
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
        $this->validate($request, [
            'dish_name' => ['required', 'string', 'unique:dishes'],
            'category' => 'required',
            'image' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $filenameWithExt = $request->file('image')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension = $request->file('image')->getClientOriginalExtension();

        $filenameToStore = $filename.'_'.time().'.'.$extension;

        $request->file('image')->move(public_path('uploads/dishImages'), $filenameToStore);

        $dish = Dish::create([
            'dish_name' => $request->input('dish_name'),
            'user_id' => Session::get('chef_id'),
            'category_id' => $request->input('category'),
            'image' => $filenameToStore,
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'isFree' => 0
        ]);

        if ($dish) {
            return redirect('chef/dish')->with('success', 'Dish added Successfully.');
        } else {
            return redirect()->back()->with('Error', 'Something wrong.');
        }
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
