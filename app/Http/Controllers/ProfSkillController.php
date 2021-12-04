<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfSkillRequest;
use App\Models\ProfSkill;
use Illuminate\Http\Request;

class ProfSkillController extends Controller
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
    public function store(ProfSkillRequest $request, ProfSkill $profskill)
    {
        $data = $request->all();

   

        $profskill = ProfSkill::create([
            'name_profskill' => $data['name_profskill'],
            'user_id' => $data['user_id'],
            'percent' => $data['percent']
        ]);

        $profskill->save();

        if( $profskill->user_id == 1 )
        {
            return redirect()->to('user/'. $profskill->user_id . '/edit')->with('status', 'Habilidad Creada con Exito');
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
    public function update(ProfSkillRequest $request, ProfSkill $profskill)
    {
        $profskill = ProfSkill::find($profskill->id);
        
        $profskill->update($request->all());

        if( $profskill->user_id == 1 )
        {
            return redirect()->to('user/'. $profskill->user_id . '/edit')->with('status', 'Habilidad Actualizada con Exito');
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
    public function destroy(ProfSkill $profskill)
    {
        $id = $profskill->user_id;

        $profskill = ProfSkill::find($profskill->id);
        $profskill->delete();

        

        if( $profskill->user_id == 1 )
        {
            return redirect()->to('user/'. $id . '/edit')->with('danger', 'Habilidad Eliminada con Exito');
        }
        else
        {
            return redirect()->to('my-portfolio')->with('danger', 'Habilidad eliminada con Exito');
        }
    }
}
