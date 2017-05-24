<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\MyTable;

class DbaccessController extends Controller
{
//    public function getIndex(Request $request) {
//        $data = DB::select('SELECT * FROM myTable');
//
//        return view('dbaccess', ['message' => 'myTable データ','data' => $data]);
//    }

    public function getIndex(Request $req) {
        //$data = DB::select('SELECT * FROM myTable');
        //return view(‘dbaccess', ['message' => 'myTable データ','data' => $data]); $id = $req->id;
        $data = MyTable::all();
        return view('dbaccess', ['message' => 'myTable データ','data' => $data]);
        //viewが.phpファイルの名前
    }

    public function getInsert(Request $req) {
        return view('insert',['message' => 'MyTable Insert']);
    }

//    public function postInsert(Request $req) {
//    // 入力値取得
//    $name = $req->input('name'); $mail = $req->input('mail'); $age = $req->input('age');
//    // 連想配列で格納
//    $data = array(
//        'name'=>$name,
//        'mail'=>$mail,
//        'age'=>$age
//    );
//      MyTable::create($data);

    public function postInsert(Request $req) {
        // バリデーション
        $this -> validate($req,[
            'name' => 'required',
            'mail' => ['email', 'required'],
            'age' => 'required'
        ]);


        // 入力値取得
        $name = $req->input('name');
        $mail = $req->input('mail');
        $age = $req->input('age');

        //連想配列で格納
        $data = array (
            'name'=>$name,
            'mail'=>$mail,
            'age'=>$age
        );
        MyTable::create($data);
        returnredirect()->action('DbaccessController@getIndex');
    }

    public function getUpdate(Request $request) {
        $id = $request->id;
        $data = MyTable::find($id);
        $msg = 'MyTable Update [id = '.$id.']';
        return view('update', ['message' => $msg, 'data' => $data]);
    }

    public function putUpdate(Request $request) {
        $id = $request->input('id');
        $data = MyTable::find($id);
        $data->name = $request->input('name');
        $data->mail = $request->input('mail');
        $data->age = $request->input('age');
        $data->save();
        return redirect()->action('DbaccessController@getIndex');
    }

    public function getDelete(Request $request) {
        $id = $request->id;
        $data = MyTable::find($id);
        $data->delete();
    }


    public function getLogin(Request $request) {
        return view('login', ['message'=>'MyTable Login']);
    }

    public function postLogin(Request $request) {
        $id = $request->input('id');
        $data = MyTable::where('id', $id)->get();
        foreach ($data as $val) {
            session([
                'session_name'=>$val->name,
                'session_mail'=>$val->mail,
                'session_age'=>$val->age
            ]);
        }
        return redirect()->action('DbaccessController@getIndex');
        //@の後がメソッド
    }

}


?>