<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyTable;

class HelloController extends Controller {
    public function getIndex(Request $req) {
        $res = '<br>FULL URL:'.$req->fullUrl().
            '<br>PATH:'.$req->path().
            '<br><br>Please Input!';
        return view('hello',['message' => $res]);
    }

    public function postIndex(Request $req) {
        $res = "Result:".$req->input('str');//inputのnameと対応
        return view('hello',['message' => $res]);
    }

//    public function getUpdate(Request $request) {
//        $id = $request->id;
//        $data = MyTable::find($id);
//        $msg = 'MyTable Update [id = '.$id.']';
//        return view('update', ['message' => $msg, 'data' => $data]);
//    }
//    public function putUpdate(Request $request) {
//        $id = $request->input('id');
//        $data = MyTable::find($id);
//        $data->name = $request->input('name');
//        $data->mail = $request->input('mail');
//        $data->age = $request->input('age');
//        $data->save();
//        return redirect()->action('HelloController@getIndex');
//    }
}
