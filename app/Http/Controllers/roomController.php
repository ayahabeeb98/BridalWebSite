<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use App\Room;

class roomController extends Controller
{
    public function roomData($id)
    {
        $rooms = Room::findOrFail($id);

        dd($rooms);

        return view('room.rooms' and 'hall.index', compact($rooms));


    }
  //  public function insertDataRoom($id,$name,$tables,$chairs,$price,$earnest,$no_people,$hall_id){
      //  $roome=new Room();
       // dd($roome);
       // $roome->name="roome1";
      //  $roome->chairs=100;
      //  $roome->price='500$';
       // $roome->earnest="222";
      //  $roome->no_people="200";
      //  $roome->hall_id=2;
       // $roome->save();


  //  }

}