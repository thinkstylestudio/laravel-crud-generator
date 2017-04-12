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
            $models = $models->where('[[first_column_nonid]]', 'LIKE', '%' . $request->input('keyword') . '%');
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
	        if (Schema::hasColumn((new [[model_uc]]())->getTable(), 'nguoi_tao')) {
                $[[model_singular]]->nguoi_tao = isset(Auth::user()->id)?Auth::user()->id:null;
            }
            if (Schema::hasColumn((new [[model_uc]]())->getTable(), 'ngay_tao')) {
                $[[model_singular]]->ngay_tao = date('Y-m-d H:i:s', time());
            }
        }
        if (Schema::hasColumn((new [[model_uc]]())->getTable(), 'nguoi_sua')) {
            $[[model_singular]]->nguoi_sua = isset(Auth::user()->id)?Auth::user()->id:null;
        }
        if (Schema::hasColumn((new [[model_uc]]())->getTable(), 'nguoi_sua')) {
            $[[model_singular]]->nguoi_sua = date('Y-m-d H:i:s', time());
        }
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

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apiIndex()
    {
        $[[model_singular]] = [[model_uc]]::all();
        return Response::json([
            'status' => true,
            'data' => $[[model_singular]]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function apiStore(Request $request)
    {
        return $this->update($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function apiShow($id)
    {
        $[[model_singular]] = [[model_uc]]::findOrFail($id);
        return Response::json([
            'status' => true,
            'data' => $[[model_singular]]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int|bool  $id
     * @return \Illuminate\Http\Response
     */
    public function apiUpdate(Request $request, $id = false)
    {
        //
        /*$this->validate($request, [
            'name' => 'required|max:255',
        ]);*/
        $[[model_singular]] = null;
        if($id > 0) { $[[model_singular]] = [[model_uc]]::findOrFail($id); }
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

        try {
            $[[model_singular]]->save();
        } catch (QueryException $exception) {
            return Response::json([
                'status' => false,
                'message' => $exception->getMessage()
            ]);
        }
        return Response::json([
            'status' => true,
            'data' => $[[model_singular]]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function apiDestroy($id)
    {
        $[[model_singular]] = [[model_uc]]::findOrFail($id);
        try {
            $[[model_singular]]->delete();
        } catch (QueryException $exception) {
            return Response::json([
                'status' => false,
                'message' => $exception->getMessage()
            ]);
        }
        return Response::json([
            'status' => true
        ]);
    }

	
}