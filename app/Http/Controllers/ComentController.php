<?php

namespace App\Http\Controllers;

use App\Jobs\ComentJob;
use Illuminate\Http\Request;
use App\Models\Coment;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coments = Coment::all();
        return view('listAllComents', ['coments' => $coments]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function new()
    {
        return view('newComent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ComentJob::dispatch($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coment = Coment::find($id);
        return view('listComent', ['coment' => $coment]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coment = Coment::find($id);
        return view('editComent', ['coment' => $coment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coment = Coment::find($id);

        $coment->title = $request->title;
        $coment->coment = $request->coment;
        $coment->save();

        return redirect()->route('coments.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Coment::destroy($id);
        return redirect()->route('coments.list', ['msg' => "Coment??rio Apagado com sucesso!"]);
    }
}
