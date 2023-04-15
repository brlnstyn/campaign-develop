<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CampaignController extends Controller
{
    public function index()
    {
        return view('pages.campaign.index');
    }

    public function createStepOne(Request $request)
    {
        $campaign = $request->session()->get('campaign');

        return view('pages.campaign.create.step-one',compact('campaign'));
    }

    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'campaign_name' => 'required',
            'client_name' => 'required',
        ]);
        // dd($validatedData);

        if(empty($request->session()->get('campaign'))){
            $campaign = new Campaign();
            $campaign->fill($validatedData);
            $request->session()->put('campaign', $campaign);
        }else{
            $campaign = $request->session()->get('campaign');
            $campaign->fill($validatedData);
            $request->session()->put('campaign', $campaign);
        }

        return redirect()->route('campaign.create.step.two');
    }

    public function createSteptwo(Request $request)
    {
        $campaign = $request->session()->get('campaign');

        return view('pages.campaign.create.step-two',compact('campaign'));
    }

    public function postCreateStepTwo(Request $request)
    {
        // dd($request);
    	$validatedData = $request->validate([
            'setup_domicile' => 'required',
            'setup_age_start' => 'required',
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

    public function createStepthree(Request $request)
    {
        $campaign = $request->session()->get('campaign');

        return view('pages.campaign.create.step-three',compact('campaign'));
    }

    public function postCreateStepthree(Request $request)
    {
        // dd($request);
    	$validatedData = $request->validate([
            'setup_total_respondent' => 'required',
        ]);
        // dd($validatedData);

        $campaign = $request->session()->get('campaign');
        $campaign->fill($validatedData);
        $request->session()->put('campaign', $campaign);

        return redirect()->route('campaign.create.step.four');
    }

    public function createStepfour(Request $request)
    {
        $campaign = $request->session()->get('campaign');

        return view('pages.campaign.create.step-four',compact('campaign'));
    }

    public function postCreateStepfour(Request $request)
    {
        // dd($request);
    	$validatedData = $request->validate([
            'message' => 'required',
        ]);
        // dd($validatedData);

        $campaign = $request->session()->get('campaign');
        $campaign->fill($validatedData);
        // $request->session()->put('campaign', $campaign);
        // dd($request);
        $campaign = $request->session()->get('campaign');
        $campaign->save();
        dd($campaign);

        $request->session()->forget('campaign');
        // dd($request);
        Alert::success('Congratulation', 'Campaign Created Successfully');
        return redirect()->route('campaign.campaign');
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
        return view('pages.campaign.project');

    }
    public function history()
    {

        return view('pages.campaign.history');

    }
}
