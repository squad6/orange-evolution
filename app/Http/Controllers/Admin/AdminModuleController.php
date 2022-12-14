<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreModuleRequest;
use App\Models\Module;
use App\Models\Trail;
use Illuminate\Http\Request;

class AdminModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Trail $trail)
    {
        $modules = $trail->modules()->get();

        return view('admin.trail.module.index', ['trail'=> $trail, 'modules' => $modules]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreModuleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModuleRequest $request, Trail $trail)
    {
        // As validações estão sendo feitas no StoreModuleRequest
        $module_stored = $trail->modules()->create(
            $request->all(),
            ['trail_id' => $trail->id],
        );

        $modules = $trail->modules()->get();

        return view('admin.trail.module.index', ['trail' => $trail, 'modules' => $modules])->with('message', 'Módulo Cadastrado com sucesso!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Trail $trail, Module $module, Request $request)
    {
        $module = $trail->modules()->find($module)->first();

        $module->update($request->all());

        $modules = $trail->modules()->get();

        return view('admin.trail.module.index', ['trail' => $trail, 'modules' => $modules])->with('message', 'Módulo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trail $trail, Module $module)
    {
        $module = $trail->modules()->find($module)->first();

        $module->delete();

        $modules = $trail->modules()->get();

        return view('admin.trail.module.index', ['trail' => $trail, 'modules' => $modules])->with('message', 'Módulo excluído com sucesso!');
    }
}
