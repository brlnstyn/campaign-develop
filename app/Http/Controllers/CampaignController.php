<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\DatabaseUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class CampaignController extends Controller
{
    public function index()
    {
        return view('pages.campaign.index');
    }

    public function createStepOne(Request $request)
    {
        $campaign = $request->session()->get('campaign');

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
        // dd($request);
        $validatedData = $request->validate([
            'setup_total_respondent' => 'required',
        ]);
        // dd($validatedData);
        $campaign = $request->session()->get('campaign');
        $campaign->fill($validatedData);
        // $request->session()->put('campaign', $campaign);
        // dd($request);
        $campaign = $request->session()->get('campaign');
        $campaign->save();
        // dd($campaign);

        $request->session()->forget('campaign');
        // dd($request);
        Alert::success('Congratulation', 'Campaign Created Successfully');
        return redirect()->route('campaign.campaign');
    }

    public function lookUp(Request $request)
    {
        $campaign = $request->session()->get('campaign');
        // dd($campaign);
        $user = DatabaseUser::all()->count();
        // dd($user);
        $lookUp = DB::table('database_users')
            ->orWhere('province', 'like', "%" . $campaign->setup_domicile . "%")
            ->orWhere('age', 'like', "%" . $campaign->setup_age_start . "%")
            ->where('gender', 'like', "%" . $campaign->setup_gender . "%")
            ->orWhere('occupation', 'like', "%" . $campaign->setup_profession . "%")
            ->orWhere('marital_status', 'like', "%" . $campaign->setup_martial_status . "%")
            ->get();
        // dd($lookUp);
        $this->sendMail($lookUp);
        $request->session()->put('campaign', $campaign);
        // dd($lookUp);
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

    public function show()
    {
    }

    public function overview()
    {
        return view('pages.campaign.overview');
    }
    public function campaign()
    {
        $campaign = Campaign::all();
        // dd($campaign);
        return view('pages.campaign.project', [
            'campaign' => $campaign
        ]);
    }
    public function history()
    {

        return view('pages.campaign.history');
    }

    public function sendMail($lookUp)
    {
        // dd($lookUp->toArray());
        $data = $lookUp->toArray();
        // $data = array($lookUp);
        // dd($data);
        // $data = $lookUp;
        $emails = array_column($data, 'email');
        // dd($emails);
        $name = array_column($data, 'respondent_name');
        // dd($name);
        Mail::to($emails)->send(new SendMail($name));
        return view('pages.campaign.create.step-four');
    }
}
