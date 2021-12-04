<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillRequest;
use App\Http\Requests\SkillTitleRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkillRequest $request, Skill $skill)
    {
        $data = $request->all();

   

        $skill = Skill::create([
            'name_skill' => $data['name_skill'],
            'user_id' => $data['user_id'],
            'percent' => $data['percent']
        ]);

        $skill->save();

        if( $skill->user_id == 1 )
        {
            return redirect()->to('user/'. $skill->user_id . '/edit')->with('status', 'Habilidad Creada con Exito');
        }
        else
        {
            return redirect()->to('my-portfolio')->with('status', 'Habilidad creada con Exito');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SkillRequest $request, Skill $skill)
    {
        $skill = Skill::find($skill->id);
        
        $skill->update($request->all());

        if( $skill->user_id == 1 )
        {
            return redirect()->to('user/'. $skill->user_id . '/edit')->with('status', 'Habilidad Actualizada con Exito');
        }
        else
        {
            return redirect()->to('my-portfolio')->with('status', 'Habilidad actualizada con Exito');
        }

    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $id = $skill->user_id;

        $skill = Skill::find($skill->id);
        $skill->delete();

        

        if( $skill->user_id == 1 )
        {
            return redirect()->to('user/'. $id . '/edit')->with('danger', 'Habilidad Eliminada con Exito');
        }
        else
        {
            return redirect()->to('my-portfolio')->with('danger', 'Habilidad eliminada con Exito');
        }
    }
}
