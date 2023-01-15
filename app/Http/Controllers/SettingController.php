<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();
        return view('admin.setting.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request,[
            'name' => 'required',
            'copyroght' => 'required',
         ]);
         $path = null;
        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/setting/', $image_new_name);
            $path = '/storage/setting/' . $image_new_name;
        }
        $data =$request->all();
        $data['image'] = $path;
        $setting = new Setting();
        $setting->create($data);
        Session::flash('success', 'setting Profile created Succefully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        
        //$setting = Setting::first();
        //dd($setting);
        return view('admin.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //dd($request->all());
       $this->validate($request,[
        'name' => 'required',
        'copyroght' => 'required',
     ]);
     $path = null;
    if($request->hasFile('image')){
        $image = $request->image;
        $image_new_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move('storage/setting/', $image_new_name);
        $path = '/storage/setting/' . $image_new_name;
    }
    $data =$request->all();
    $data['image'] = $path;
    $setting = Setting::find($id);
    $setting->update($data);
    Session::flash('success', 'setting Profile created Succefully');
    return redirect()->back();
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
