<?php

namespace App\Http\Controllers;
use App\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    public function index()
    {
        $managers = Manager::all();
        return view('managers.index', compact("managers"));
    }

    public function store(Request  $request)
    {
        $fileName = null;
        if (Input::hasFile('photo')) {
            $destinationPath = public_path('uploads/files');
            $extension = Input::file('photo')->getClientOriginalExtension();
            $fileName = uniqid().'.'.$extension;
            $request->photo = $fileName;
            Input::file('photo')->move($destinationPath, $fileName);
        }
            $manager = new Manager();
            $manager->name = $request->name;
            $manager->email = $request->email;
            $manager->phone = $request->phone;
            $manager->company = $request->company;
            $manager->photo = $request->photo;
            $manager->save();
       return back();
    }

    public function edit($id){
        $manager = Manager::find($id);
        return $manager;
    }

    public function update(Request $request)
    {
        $fileName = null;
        if (Input::hasFile('photo')) {
            $destinationPath = public_path('uploads/files');
            $extension = Input::file('photo')->getClientOriginalExtension();
            $fileName = uniqid().'.'.$extension;
            $request->photo = $fileName;
            Input::file('photo')->move($destinationPath, $fileName);
        }
        $manager = Manager::find($request->id);
        $manager->name = $request->name;
        $manager->email = $request->email;
        $manager->phone = $request->phone;
        $manager->company = $request->company;
        $manager->photo = $request->photo;
        $manager->update();
        return back();
    }

    public function getAllData($id, $section)
    {
        if($section == 'managers') {
            return   DB::table('managers')
                ->leftJoin('project_manager', 'managers.id', '=', 'project_manager.manager_id')
                ->select('managers.id', 'managers.name', 'managers.email', 'managers.phone', 'managers.company')
                ->where('project_manager.project_id', $id)
                ->get();
        }
        if($section == 'projects') {
            return DB::table('projects')
                ->leftJoin('project_manager', 'projects.id', '=', 'project_manager.project_id')
                ->select('projects.id', 'projects.name', 'projects.price', 'projects.performer', 'projects.start', 'projects.finish')
                ->where('project_manager.manager_id', $id)
                ->get();
        }
    }



}
