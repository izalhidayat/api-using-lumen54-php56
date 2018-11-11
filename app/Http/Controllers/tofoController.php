<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\tofoModel;

class tofoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

public function index(){
    $data = tofoModel::all();
    return response($data);
}
public function show($id){
    $data = tofoModel::where('id',$id)->get();
    return response ($data);
}
public function store(Request $request){
    $data = new tofoModel();
    $data->activity = $request->input('activity');
    $data->description = $request->input('description');
    $data->save();
    return response('Berhasil Tambah Data');
}
public function update(Request $request, $id){
    $data = tofoModel::where('id',$id)->first();
    $data->activity = $request->input('activity');
    $data->description = $request->input('description');
    $data->save();

    return response('Berhasil Merubah Data');
}

public function destroy($id){
    $data = tofoModel::where('id',$id)->first();
    $data->delete();

    return response('Berhasil Menghapus Data');
}
    //
}
