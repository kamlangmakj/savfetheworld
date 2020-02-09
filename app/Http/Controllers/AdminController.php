<?php

namespace App\Http\Controllers;

use App\Activities;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.index');
    }


//    public function getActivities() {
//        $activities = Activities::all();
//        return view('admin.activities',[
//            'activities'=>$activities
//        ]);
//    }

//    public function postCreateActivities(Request $request) {
//        $activities = new Activities();
//        $activities->name = $request->get('name');
//        $activities->agent = $request->get('agent');
//        $activities->detail = $request->get('detail');
//        $activities->address = $request->get('address');
//        $activities->category_types_activities_id = $request->get('category_types_activities_id');
//        $activities->province = $request->get('province');
//        $activities->started_date = $request->get('started_date');
//        $activities->expired_date = $request->get('expired_date');
//        $activities->point = $request->get('point');
//        $activities->cover_image = "cover_image";
//        $activities->save();
//        return redirect('admin/activities');
//    }

//    public function postEditActivities(Request $request) {
//        $activities = Activities::find($request->get('id'));
//        $activities->name = $request->get('name');
//        $activities->agent = $request->get('agent');
//        $activities->detail = $request->get('detail');
//        $activities->address = $request->get('address');
//        $activities->category_types_activities_id = $request->get('category_types_activities_id');
//        $activities->province = $request->get('province');
//        $activities->started_date = $request->get('started_date');
//        $activities->expired_date = $request->get('expired_date');
//        $activities->point = $request->get('point');
//        $activities->cover_image = "cover_image";
//        $activities->save();
//        return redirect()->back();
//    }
//
//    public function getEditActivities($id) {
//        $activity = Activities::find($id);
//        return view('admin.edit_activities',[
//            'activity'=>$activity
//        ]);
//    }

//    public function postDeleteActivities(Request $request) {
//        $activity = Activities::find($request->get('id'));
//        $activity -> delete();
//        return redirect()->back();
//    }

    public function getTrackingRewards() {
        return view('admin.tracking_rewards');
    }

//    public function getCreateActivities() {
//        return view('admin.create_activities');
//    }
}
