<?php

namespace [[appns]]Http\Controllers;

use Illuminate\Http\Request;

use [[appns]]Http\Requests;
use [[appns]]Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;

use [[appns]][[model_uc]];

use DB;

class [[controller_name]]Controller extends Controller
{

    public function index(Request $request)
	{
	    $models = new [[model_uc]]();
	    if ($request->input('keyword')) {
            $models = $models->where('name', 'LIKE', '%' . $request->input('keyword') . '%');
        }
        if ($request->input('from_date') && Schema::hasColumn((new [[model_uc]]())->getTable(), 'ngay_tao')) {
            $fromDate = str_replace('/', '-', $request->input('from_date'));
            $models = $models->where('ngay_tao', '>', date('Y-m-d H:i:s', strtotime($fromDate)));
        }
        if ($request->input('to_date') && Schema::hasColumn((new [[model_uc]]())->getTable(), 'ngay_tao')) {
            $toDate = str_replace('/', '-', $request->input('to_date'));
            $models = $models->where('ngay_tao', '>', date('Y-m-d H:i:s', strtotime($toDate)));
        }
        $models = $models->paginate(20);
        return view('[[view_folder]].index', [
            'models' => $models->appends(Input::except('page'))
        ]);
	}

	public function create(Request $request)
	{
	    return view('[[view_folder]].add', [
	        []
	    ]);
	}

	public function edit(Request $request, $id)
	{
		$[[model_singular]] = [[model_uc]]::findOrFail($id);
	    return view('[[view_folder]].add', [
	        'model' => $[[model_singular]]
	    ]);
	}

	public function show(Request $request, $id)
	{
		$[[model_singular]] = [[model_uc]]::findOrFail($id);
	    return view('[[view_folder]].show', [
	        'model' => $[[model_singular]]
	    ]);
	}


	public function update(Request $request) {
	    //
	    /*$this->validate($request, [
	        'name' => 'required|max:255',
	    ]);*/
		$[[model_singular]] = null;
		if($request->id > 0) { $[[model_singular]] = [[model_uc]]::findOrFail($request->id); }
		else { 
			$[[model_singular]] = new [[model_uc]];
		}
	    

	    [[foreach:columns]]
		[[if:i.name=='id']]
	    $[[model_singular]]->[[i.name]] = $request->[[i.name]]?:0;
		[[endif]]
		[[if:i.name!='id']]
	    $[[model_singular]]->[[i.name]] = $request->[[i.name]];
		[[endif]]
	    [[endforeach]]
	    if ($request->id > 0) {
            $[[model_singular]]->nguoi_tao = Auth::user()->id;
            $[[model_singular]]->ngay_tao = date('Y-m-d H:i:s', time());
        }
        $[[model_singular]]->nguoi_sua = Auth::user()->id;
        $[[model_singular]]->ngay_sua = date('Y-m-d H:i:s', time());
	    $[[model_singular]]->save();
        if ($request->input('wgi_action') == 'SAVE_CREATE') {
            return redirect('/[[route_path]]/create');
        } else {
            return redirect('/[[route_path]]');
        }

	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		
		$[[model_singular]] = [[model_uc]]::findOrFail($id);

		$[[model_singular]]->delete();
		return "OK";
	    
	}

	
}