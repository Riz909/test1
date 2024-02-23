<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\list_item;

class todolistCtrl extends Controller
{
    public function index(){
        $newlistitem = list_item::where('is_complete', 0)->get();
        return view('welcome')->with(["ListItem" => $newlistitem]);
    }

    public function add_todo(Request $request){
        $newlistitem = new list_item();
        $newlistitem->to_do = $request->to_do;
        $newlistitem->is_complete = 0;
        $newlistitem->save();

        return redirect('/');
    }

    public function edit($id, Request $request){
        $newlistitem = list_item::find($id);
        $newlistitem->to_do = $request->new_name;
        $newlistitem->save();

        return redirect('/');
    }

    public function delete($id){
        $newlistitem = list_item::find($id);
        $newlistitem->delete();

        return redirect('/');
    }
}
