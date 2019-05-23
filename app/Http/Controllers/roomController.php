<?php

namespace App\Http\Controllers;
use App\Hall;
use App\RoomImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;

class roomController extends Controller
{

    public function index($hall){
        $halls = Hall::find($hall);

        $rooms = $halls->rooms()->get();
//        dd($rooms)
        return view('room.index', compact('rooms','halls'));
    }

    public function roomData($id)
    {
        $rooms = Room::find($id);
        $roomImage=$rooms->roomImages()->get();
        return view('room.rooms', compact('rooms','roomImage'
        ));
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