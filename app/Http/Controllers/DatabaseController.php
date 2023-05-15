<?php

namespace App\Http\Controllers;

use App\Models\DatabaseUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\DatabaseUsersImport;
use App\Models\Campaign;
use App\Models\logCampaign;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class DatabaseController extends Controller
{
    public function index()
    {
        $data = DatabaseUser::all();
        return view('pages.database.index', [
            'data'   => $data
        ]);
    }

    public function show($id)
    {
        $data = DatabaseUser::find($id);
        $campaign = Campaign::all();
        // $logCampaign = logCampaign::find($id);
        // dd($logCampaign);
        return view('pages.database.show', [
            'data' => $data,
            'campaign' => $campaign
        ]);
    }

    public function import(Request $request)
    {
        $fileName = request()->file->getClientOriginalName();
        request()->file('file')->storeAs('DatabaseUsers', $fileName, 'public');
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

    public function updateStatus($id)
    {
        $user   = DatabaseUser::find($id);
        // dd($user);
        if ($user->status == "0") {
            $user->update(['status' => "1"]);
            return redirect()->route('database.index')->with('success', 'User has been blocked successfully!');
        } elseif ($user->status == "1") {
            $user->update(['status' => "0"]);
            return redirect()->route('database.index')->with('success', 'User has been actived successfully!');
        } else {
            return redirect()->route('database.index')->with('error', 'Something went wrong!');
        }
    }
}
