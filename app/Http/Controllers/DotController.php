<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Dot;
use Illuminate\Support\Facades\Validator;

class DotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $dots = Dot::all();
        return view ('dots.index', compact('dots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      return view('dots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            "axis_x"=>"required|numeric|min:1|max:1300",
            "axis_y"=>"required|numeric|min:20|max:450",
        ];

        $messages =[
            "min"=>"El campo :attribute tiene un mínimo de :min",
            "max"=>"El campo :attribute tiene un máximo de :max",
            "required"=>"El campo :attribute no puede estar vacío",
            "numeric"=>"El campo :attribute debe ser numérico",
        ];

        $this->validate($request, $rules, $messages);

        $newDot = new Dot();
        $newDot->axis_x = $request->axis_x;
        $newDot->axis_y = $request->axis_y;
        $newDot->save();

        return redirect('dots');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dot = Dot::find($id);
        return view ('dots.show', compact('dot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dot = Dot::find($id);
        return view ('dots.edit', compact('dot'));
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
        $rules =[
            "axis_x"=>"required|numeric|min:1|max:1300",
            "axis_y"=>"required|numeric|min:20|max:450",
        ];

            $messages =[
            "min"=>"El campo :attribute tiene un minimo de :min",
            "max"=>"El campo :attribute tiene un maximo de :max",
            "required"=>"El campo :attribute no puede quedar en blanco",
            "numeric"=>"El campo :attribute debe ser numérico",
        ];

        $this->validate($request, $rules, $messages);

        $dot = Dot::find($id);
        $dot->axis_x = $request['axis_x'];
        $dot->axis_y =$request['axis_y'];
        $dot->save();
        return redirect ('dots');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dot = Dot::find($id);
        $dot->delete();
        return redirect ('dots');
    }


    public function nearby(Request $request, $id)

    {   $rules =[
            "count"=>"required|numeric|min:1|max:20",
        ];

        $messages =[
            "min"=>"El campo :attribute tiene un minimo de :min",
            "max"=>"El campo :attribute tiene un maximo de :max",
            "required"=>"El campo :attribute no puede quedar en blanco",
            "numeric"=>"El campo :attribute debe ser numérico",
        ];

        $this->validate($request, $rules, $messages);

        $count = $request->count;
        $dot = Dot::find($id);
        $dotPosition = (($dot->axis_x+$dot->axis_y)/2);
           
        $dotsCercanos = \DB::select("SELECT * FROM dots ORDER BY ABS(((axis_x + axis_y) /2) - $dotPosition) LIMIT $count");        
        
        return view ('dots.nearby', compact('dotsCercanos'));
        
    }
}


