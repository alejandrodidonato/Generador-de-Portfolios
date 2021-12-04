<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UserRequest;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\ServiceRequest;
use App\Http\Requests\TitleServicesRequest;
use App\Http\Requests\SkillTitleRequest;
use App\Http\Requests\ProfSkillTitleRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('skill', 'education','service','project', 'work', 'post', 'roles')->latest()->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user )
    {
        
         /* $request->validate([
            'name' => 'required | min:5 | max:64',
            'title_job' => 'required | min:5 | max:64',
            'tel' => 'required | numeric',
            'address' => 'required | min:10 | max:128',
            'file' => 'mimes:jpg,png | dimensions:min_width=100,min_height=200,max_width=400,max_height=500 | size:512',
        ]);
        */
        if($request->file('file')){

            Storage::disk('public')->delete($user->image);
            $user->image = $request->file('file')->store('users', 'public');
            $user->save();
        }

        $user->update($request->all());

        return redirect()->to('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if($user->image)
        {
            Storage::disk('public')->delete($user->image);
        }

        $user->delete();

        return redirect()->to('user');
       
    }

    /**
     * Display a listing of the resource.
     *
     *
     */
    public function logout_user()
    {
        Auth::logout();

        return view('auth.login');

    }

    public function my_portfolio()
    {


        $user = User::where('id', Auth::user()->id)->with('skill', 'education','service','project', 'work', 'post', 'roles')->first();
        return view('my-portfolio', compact('user'));
    }

    public function updateClient(UserRequest $request, User $user )
    {
        
        $user = User::where('id', Auth::user()->id)->with('skill', 'education','service','project', 'work', 'post', 'roles')->first();

        if($request->file('file')){

            Storage::disk('public')->delete($user->image);
            $user->image = $request->file('file')->store('users', 'public');
            $user->save();
        }


        $user->update($request->all());

        return redirect()->to('my-portfolio')->with('status', 'Usuario actualizado con Exito');
    }

    public function updateAbout(AboutRequest $request, User $user )
    {
        $user = User::where('id', Auth::user()->id)->with('skill', 'education','service','project', 'work', 'post', 'roles')->first();
        

        if($request->file('file-about')){

            Storage::disk('public')->delete($user->image_about);
            $user->image_about = $request->file('file-about')->store('users', 'public');
            $user->save();
        }

        $user->update($request->all());


        return redirect()->to('my-portfolio')->with('status', 'Usuario actualizado con Exito');
    }

    public function updateService(ServiceRequest $request, User $user )
    {
        $user = User::where('id', Auth::user()->id)->with('skill', 'education','service','project', 'work', 'post', 'roles')->first();
        

        $user->update($request->all());


        return redirect()->to('my-portfolio')->with('status', 'Usuario actualizado con Exito');
    }

    public function updateServiceTitle(TitleServicesRequest $request, User $user )
    {
        $user = User::where('id', Auth::user()->id)->with('skill', 'education','service','project', 'work', 'post', 'roles')->first();
        

        $user->update($request->all());


        return redirect()->to('my-portfolio')->with('status', 'Usuario actualizado con Exito');
    }

    public function updateSkillTitle(SkillTitleRequest $request, User $user)
    {
        $user = User::where('id', Auth::user()->id)->with('skill', 'education','service','project', 'work', 'post', 'roles')->first();
        
        $user->update($request->all());

        if( $user->user_id == 1 )
        {
            return redirect()->to('user/'. $user->user_id . '/edit')->with('status', 'Usuario Actualizado con Exito');
        }
        else
        {
            return redirect()->to('my-portfolio')->with('status', 'Usuario actualizado con Exito');
        }

    }

    public function updateProfSkillTitle(ProfSkillTitleRequest $request, User $user)
    {
        $user = User::where('id', Auth::user()->id)->with('skill', 'education','service','project', 'work', 'post', 'roles')->first();
        
        $user->update($request->all());

        if( $user->user_id == 1 )
        {
            return redirect()->to('user/'. $user->user_id . '/edit')->with('status', 'Usuario Actualizado con Exito');
        }
        else
        {
            return redirect()->to('my-portfolio')->with('status', 'Usuario actualizado con Exito');
        }

    }



}
