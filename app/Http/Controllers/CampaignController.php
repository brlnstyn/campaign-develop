<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Campaign;
use App\Models\logCampaign;
use App\Models\DatabaseUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Spatie\Activitylog\Models\Activity;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;

class CampaignController extends Controller
{
    public function index()
    {
        $user = DB::table('users')->get();
        foreach ($user as $value) {
            $value;
        }
        $count = Campaign::all()->count();
        // dd($campaign);
        return view('pages.campaign.index', [
            'value' => $value,
            'count' => $count
        ]);
    }

    public function createStepOne(Request $request)
    {
        $campaign = $request->session()->get('campaign');
        // dd($campaign);
        return view('pages.campaign.create.step-one', compact('campaign'));
    }

    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'campaign_name' => 'required',
            'client_name' => 'required',
        ]);
        // dd($validatedData);

        if (empty($request->session()->get('campaign'))) {
            $campaign = new Campaign();
            $campaign->fill($validatedData);
            $request->session()->put('campaign', $campaign);
        } else {
            $campaign = $request->session()->get('campaign');
            $campaign->fill($validatedData);
            $request->session()->put('campaign', $campaign);
        }

        return redirect()->route('campaign.create.step.two');
    }

    public function createSteptwo(Request $request)
    {
        $campaign = $request->session()->get('campaign');

        return view('pages.campaign.create.step-two', compact('campaign'));
    }

    public function postCreateStepTwo(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'setup_domicile' => 'required',
            'setup_age_start' => 'required',
            'setup_age_end' => 'required',
            'setup_gender' => 'required',
            'setup_profession' => 'required',
            'setup_martial_status' => 'required',
            'setup_age_married' => 'required',
        ]);
        // dd($validatedData);

        $campaign = $request->session()->get('campaign');
        $campaign->fill($validatedData);
        $request->session()->put('campaign', $campaign);

        return redirect()->route('campaign.create.step.three');
    }

    public function createStepfour(Request $request)
    {
        $campaign = $request->session()->get('campaign');
        $lookUp = [];

        return view('pages.campaign.create.step-four', [
            'campaign' => $campaign,
            'lookUp' => $lookUp
        ]);
    }

    public function postCreateStepfour(Request $request)
    {
        $validatedData = $request->validate([
            'setup_total_respondent' => 'required',
        ]);
        $campaign = $request->session()->get('campaign');
        $campaign->fill($validatedData);
        $campaign = $request->session()->get('campaign');
        $campaign->save();

        $lookUp = DB::table('database_users')
            ->orWhere('province', 'like', "%" . $campaign->setup_domicile . "%")
            ->orWhere('age', 'like', "%" . $campaign->setup_age_start . "%")
            ->where('gender', 'like', "%" . $campaign->setup_gender . "%")
            ->orWhere('occupation', 'like', "%" . $campaign->setup_profession . "%")
            ->orWhere('marital_status', 'like', "%" . $campaign->setup_martial_status . "%")
            ->get();

        $data = $lookUp->toArray();
        $emails = array_column($data, 'email');
        $name = array_column($data, 'respondent_name');
        Mail::to($emails)->send(new SendMail($name));

        foreach ($data as $key => $value) {
            $id_database = $value->id;
            $phone = $value->phone;
            $email = $value->email;
        }
        $id_campaign = $campaign->id;
        logCampaign::create([
            'campaign_id' => $id_campaign,
            'database_user_id' => $id_database,
            'phone' => $phone,
            'email' => $email,
            'status' => "0"
        ]);
        activity()
            ->causedBy(Auth::user())
            ->log($campaign->campaign_name);
        $request->session()->forget('campaign');
        // dd($request);
        Alert::success('Congratulation', 'Campaign Created Successfully');
        return redirect()->route('campaign.campaign');
    }

    public function lookUp(request $request)
    {
        $campaign = $request->session()->get('campaign');
        // dd($campaign);
        $user = DatabaseUser::all()->count();
        $lookUp = DB::table('database_users')
            ->orWhere('province', 'like', "%" . $campaign->setup_domicile . "%")
            ->orWhere('age', 'like', "%" . $campaign->setup_age_start . "%")
            ->where('gender', 'like', "%" . $campaign->setup_gender . "%")
            ->orWhere('occupation', 'like', "%" . $campaign->setup_profession . "%")
            ->orWhere('marital_status', 'like', "%" . $campaign->setup_martial_status . "%")
            ->get();
        return view('pages.campaign.create.step-four', [
            'lookUp' => $lookUp,
            'user' => $user,
            'campaign' => $campaign
        ]);
    }

    public function createStepthree(Request $request)
    {
        $campaign = $request->session()->get('campaign');
        // $lookUp = [];
        // dd($campaign);
        return view('pages.campaign.create.step-three', [
            'campaign' => $campaign
        ]);
    }

    public function postCreateStepthree(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'message' => 'required',
        ]);
        // dd($validatedData);

        $campaign = $request->session()->get('campaign');
        $campaign->fill($validatedData);
        $request->session()->put('campaign', $campaign);

        return redirect()->route('campaign.create.step.four');
    }

    public function show($id)
    {
        $data = Campaign::find($id);
        // dd($data);
        return view('pages.campaign.show', [
            'data' => $data
        ]);
    }

    public function overview()
    {
        $user = DB::table('users')->get();
        foreach ($user as $value) {
            $value;
        }
        $count = Campaign::all()->count();
        return view('pages.campaign.overview', [
            'value' => $value,
            'count' => $count
        ]);
    }
    public function campaign()
    {
        $campaign = DB::table('campaigns')->orderBy('created_at', 'DESC')->get();
        $user = DB::table('users')->get();
        foreach ($user as $value) {
            $value;
        }
        $count = Campaign::all()->count();
        return view('pages.campaign.project', [
            'campaign' => $campaign,
            'value' => $value,
            'count' => $count
        ]);
    }
    public function history(Request $request)
    {
        $log = Activity::latest()->get();
        $user = DB::table('users')->get();
        foreach ($user as $value) {
            $value;
        }
        $count = Campaign::all()->count();
        return view('pages.campaign.history', [
            'log'  => $log,
            'value' => $value,
            'count' => $count
        ]);
    }
}
