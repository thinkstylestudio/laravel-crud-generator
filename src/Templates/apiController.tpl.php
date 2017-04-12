<?php

namespace [[appns]]Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use [[appns]]Http\Requests;
use [[appns]]Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

use [[appns]][[model_uc]];

class [[controller_name]]ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
    public function store(Request $request)
    {
        return $this->update($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
    public function update(Request $request, $id = false)
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
    public function destroy($id)
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