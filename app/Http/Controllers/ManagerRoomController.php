<?php

namespace App\Http\Controllers;
use App\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ManagerRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('room.create');
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
        
        $roomData = $request->all();
        //dd($roomData);
        $room = new Room();
        $room->name = $roomData['name'];
        $room->tables = $roomData['tables'];
        $room->chairs = $roomData['chairs'];
        $room->price = $roomData['price'];
        $room->earnest = $roomData['earnest'];
        $room->no_people = $roomData['no_people'];
        $room->hall_id = 1;
       // $room->hall_id = intval($request->hall_id);

        $room->save();
        return redirect()->back()->with('success', 'Room has been saved successfully');

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
            $room = Room::findOrFail($id);
            return view('room.edit', compact('room'));
        } catch (\Exception $exception) {
            return redirect()->route('room.create')
                ->with('error', 'room is not found');
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
            $room = Room::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return redirect()->route('room.create')
                ->with('error', 'room is not found');
        }
       $request->validate($this->rules($room->id), $this->messages());

        $room->fill($request->all());
        //$room->category_id = intval($request->category_id);
        // if ($request->hasFile('image')) {
        //     if (File::exists(public_path($hall->image))) {
        //         File::delete(public_path($hall->image));
        //     }
        //     $hall->image = parent::uploadImage($request->file('image'));
        // }

        $room->update();
        return redirect()->route('room.create')
            ->with('success', 'Room ' . $room->name . 'Room has been updated successfully');
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


    private function rules($id = null)
    {
        $rules = [
            'name' => 'required',
            'tables' => 'required',
            'chairs' => 'required',
            'price' => 'required',
            'earnest' => 'required',
            'no_people' => 'required',
//            'hall_id' => 'required',
        ];
        // if ($id) {
        //     $rules['image'] = 'mimes:jpeg,bmp,png,jpg';
        // } else {
        //     $rules['image'] = 'required|mimes:jpeg,bmp,png,jpg';
        // }
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
            'name.required' =>   'Name is required',
            'tables.required' => 'no.tables is required',
            'chairs.required' => 'no.chairs is required',
            'price.required' => 'Price is required',
            'earnest.required' => 'earnest is required',
            'no_people' => 'no.people is required',
           // 'image.required' => 'Hall image is required',
           // 'image.mimes' => 'invalid image',
        ];
    }


}

