<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
    public function store(ServiceRequest $request, Service $service)
    {
        $data = $request->all();

        $service = Service::create([
            'name_service' => $data['name_service'],
            'user_id' => $data['user_id'],
            'description_service' => $data['description_service'],
            'icon' => $data['icon']
        ]);

        $service->save();

        if( $service->user_id == 1 )
        {
            return redirect()->to('user/'. $service->user_id . '/edit')->with('status', 'Servicio Creado con Exito');
        }
        else
        {
            return redirect()->to('my-portfolio')->with('status', 'Servicio creado con exito');
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
    public function update(Request $request, Service $service)
    {

        $service = Service::find($service->id);

        $service->update($request->all());

        if( $service->user_id == 1 )
        {
            return redirect()->to('user/'. $service->user_id . '/edit')->with('status', 'Servicio actualizado con Exito');
        }
        else
        {
            return redirect()->to('my-portfolio')->with('status', 'Servicio actualizado con Exito');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $id = $service->user_id;

        $service = Service::find($service->id);
        $service->delete();

        

        if( $service->user_id == 1 )
        {
            return redirect()->to('user/'. $id . '/edit')->with('danger', 'Servicio Eliminado con Exito');
        }
        else
        {
            return redirect()->to('my-portfolio')->with('danger', 'Servicio eliminado con Exito');
        }
    }
}
