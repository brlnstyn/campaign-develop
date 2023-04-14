<?php

namespace App\Http\Controllers;

use App\Models\DatabaseUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\DatabaseUsersImport;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class DatabaseController extends Controller
{
    public function index()
    {
        $data =DatabaseUser::all();
        return view('pages.database.index',[
            'data'   =>$data
        ]);
    }

    public function show()
    {
        return view('pages.database.show');
    }

    public function import(Request $request)
    {
        $fileName =request()->file->getClientOriginalName();
        request()->file('file')->storeAs('DatabaseUsers', $fileName, 'public');
        // dd($fileName);
        Excel::import(new DatabaseUsersImport, $request->file);
        Alert::success('Congratulation', 'File Upload Successfully');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $delete = DatabaseUser::find($id);
        $delete->delete();
        Alert::success('Congratulation', 'Delete Successfully');
        return redirect()->back();
    }
}
