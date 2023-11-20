<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ddcar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $car = new car;
        $car->carTitl=$request->title;
        $car->discription=$request->contant;
        $pub=$request->remember;
        if($pub){
            $car->published=1;
        }
        else{
            $car->published=0;
        }
        
        $car->save();
     //$cars = new car;
        //$cars->carTitl = "BM";
        //$cars->discription= "my car is ";
       //$cars->published= true;
        //$cars->save();
        return "car data add";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
