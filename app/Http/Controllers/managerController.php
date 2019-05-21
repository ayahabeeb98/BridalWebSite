<?php

namespace App\Http\Controllers;

use App\Hall;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class managerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $halls = Hall::where('manager_id', '=', $id)->get();
        return view('hall.managerHall', compact('halls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hall.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules(), $this->messages());
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $direction = public_path('image/');
        $image->move($direction, $imageName);
        $hall = new Hall();
        $hall->manager_id ='1';
        $hall->category_id = intval($request->category_id);

//        $hall->manager_id = Auth::user()->id;
//        dd($request->all());
        $hall->fill($request->all());
        $hall->image = "image/" . $imageName;
        $hall->save();

        return redirect()->back()->with('success', 'Hall has been saved successfully');

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
        try {
            $hall = Hall::findOrFail($id);
            return view('hall.edit', compact('hall'));
        } catch (\Exception $exception) {
            return redirect()->route('hall.create')
                ->with('error', 'book is not found');
        }
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
        try {
            $hall = Hall::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return redirect()->route('hall.create')
                ->with('error', 'Hall is not found');
        }
        $request->validate($this->rules($hall->id), $this->messages());

        $hall->fill($request->all());
        $hall->category_id = intval($request->category_id);
        if ($request->hasFile('image')) {
            if (File::exists(public_path($hall->image))) {
                File::delete(public_path($hall->image));
            }
            $hall->image = parent::uploadImage($request->file('image'));
        }

        $hall->update();
        return redirect()->route('hall.create')
            ->with('success', 'hall ' . $hall->name . 'Hall has been updated successfully');
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


    private
    function rules($id = null)
    {
        $rules = [
            'name' => 'required',
            'rooms_num' => 'required',
//            'category_id' => 'required',
            'address' => 'required',

        ];
        if ($id) {
            $rules['image'] = 'mimes:jpeg,bmp,png,jpg';
        } else {
            $rules['image'] = 'required|mimes:jpeg,bmp,png,jpg';
        }
        return $rules;
    }

    /**
     *
     * validation messages
     *
     * @return array
     */
    private
    function messages()
    {
        return [
            'name.required' => 'Name is required',
            'rooms_num.required' => 'Number of room  is required',
            'address.required' => 'Address  is required',

            'image.required' => 'Hall image is required',
            'image.mimes' => 'invalid image',
        ];
    }


}
