@extends('admin.layouts.client')


@section('main-content')
<section class="container-fluid">
    <div class="col-12">
        <div class="row">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if (session('danger'))
            <div class="alert alert-danger" role="alert">
                {{ session('danger') }}
            </div>
        @endif
           
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">About</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="services-tab" data-bs-toggle="tab" data-bs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false">Services</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="false">Technical Skills</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profskills-tab" data-bs-toggle="tab" data-bs-target="#profskills" type="button" role="tab" aria-controls="profskills" aria-selected="false">Professional Skills</button>
                  </li>
                 
                
              </ul>
              <div class="tab-content" id="myTabContent">
                
                <!-- SECCIÓN HOME ----------------------------------------------------------------------------------------------------------------------->

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="container">
                           
                            <form action="{{ route('updateClient', $user) }}"
                            method="POST" enctype="multipart/form-data">
                            
                            <div class="row">
                               

                                <div class="col-md-6">
                                    <h2>Datos Personales</h2>
                                    <div class="form-group">
                                        <label class="text-gray-700 text-sm font-bold mb-2" >
                                            Profesión
                                        </label>
                                        <input id="description" type="text"  name="description" class="form-control" required value="{{ old('description', $user->description) }}">
                                        @error('description')
                                            <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-700 text-sm font-bold mb-2" >
                                            Nombres
                                        </label>
                                        <input id="name" type="text"  name="name" class="form-control" required value="{{ old('name', $user->name) }}">
                                        @error('name')
                                            <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-700 text-sm font-bold mb-2" >
                                            Titulo
                                        </label>
                                        <input id="title_job" type="text"  name="title_job" class="form-control" required value="{{ old('title_job', $user->title_job) }}">
                                        @error('title_job')
                                            <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-700 text-sm font-bold mb-2" >
                                            Mail
                                        </label>
                                        <input id="email" type="email"  name="email" class="form-control" required value="{{ old('email', $user->email) }}">
                                        @error('email')
                                            <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-700 text-sm font-bold mb-2" >
                                            Telefono
                                        </label>
                                        <input id="tel" type="text"  name="tel" class="form-control" value="{{ old('tel', $user->tel) }}">
                                        @error('tel')
                                            <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-700 text-sm font-bold mb-2" >
                                            Direccion
                                        </label>
                                        <input id="address" type="text"  name="address" class="form-control" value="{{ old('address', $user->address) }}">
                                        @error('address')
                                            <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-700 text-sm font-bold mb-2" >
                                            Facebook
                                        </label>
                                        <input id="facebook" type="text"  name="facebook" class="form-control" value="{{ old('facebook', $user->facebook) }}">
                                        @error('facebook')
                                            <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-700 text-sm font-bold mb-2" >
                                            Twitter
                                        </label>
                                        <input id="twitter" type="text"  name="twitter" class="form-control" value="{{ old('twitter', $user->twitter) }}">
                                        @error('twitter')
                                            <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-700 text-sm font-bold mb-2" >
                                            Github
                                        </label>
                                        <input id="github" type="text"  name="github" class="form-control" value="{{ old('github', $user->github) }}">
                                        @error('github')
                                            <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-700 text-sm font-bold mb-2" >
                                            Dribbble
                                        </label>
                                        <input id="dribbble" type="text"  name="dribbble" class="form-control" value="{{ old('dribbble', $user->dribbble) }}">
                                        @error('dribbble')
                                            <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                   
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        @if ($user->image)
                                        <img class="img-thumbnail" src="{{ $user->get_image }}" alt="{{ $user->name }}" />
                                        @else
                                        <img src="{{ asset('assets/images/profile.jpg') }}" alt="Card image cap" class="img-thumbnail img-fluid">
                                        @endif
                                        <label for="file">
                                            Foto de perfil
                                            <small>
                                                (Tamaño recomendado: 400x400px - Peso Máximo: 512kb)
                                            </small>
                                        </label>
                                        <input type="file" name="file">
                                        @error('file')
                                            <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                </div>

                            </div>
                        
                    
                    
                    
                    
                                @csrf
                                @method('PUT')
                    
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </form>
                    </div>
                </div>

                <!-- SECCIÓN ABOUT ----------------------------------------------------------------------------------------------------------------------->

                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="container">
                           
                        <form action="{{ route('updateAbout', $user) }}"
                        method="POST" enctype="multipart/form-data">

                        <div class="row">
                           

                            <div class="col-md-6">
                                <h2>About Me</h2>
                                <div class="form-group">
                                    <label class="text-gray-700 text-sm font-bold mb-2" >
                                        Titulo
                                    </label>
                                    <input id="title_about" type="text"  name="title_about" class="form-control" required value="{{ old('title_about', $user->title_about) }}">
                                    @error('title_about')
                                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-gray-700 text-sm font-bold mb-2" >
                                        Descripción
                                    </label>
                                    <input id="about" type="text"  name="about" class="form-control" required value="{{ old('about', $user->about) }}">
                                    @error('about')
                                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                    @enderror
                                </div>
                                
            
                               
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    @if ($user->image_about)
                                    <img class="img-thumbnail" src="{{ $user->get_image_about }}" alt="{{ $user->title_about }}" />
                                    @else
                                    <img src="{{ asset('assets/images/ab-img.png') }}" alt="Card image cap" class="img-thumbnail img-fluid">
                                    @endif
                                    <input type="file" name="file-about">
                                    @error('file-about')
                                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                            </div>

                        </div>
                        
                       

                        @csrf
                        @method('PUT')
            
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>

                           

                        
                </div>

                </div>

                <!-- SECCIÓN SERVICES ----------------------------------------------------------------------------------------------------------------------->
                <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab">
                    <div class="container">

                        <div class="row">
                           
                            <form action="{{ route('updateServiceTitle', $user) }}"
                            method="POST" enctype="multipart/form-data">

                            <div class="col-md-6">
                                <h2>Servicios</h2>
                                <div class="form-group">
                                    <label class="text-gray-700 text-sm font-bold mb-2" >
                                        Titulo
                                    </label>
                                    <input id="title_services" type="text"  name="title_services" class="form-control" required value="{{ old('title_services', $user->title_services) }}">
                                    @error('title_services')
                                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                    @enderror
                                </div>
                
                                @csrf
                                @method('PUT')
                    
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </form>
                        </div>
                    </div>

                        <div id="services-content">
                           
                            @include('admin.includes.services-edit')
                           
                             @include('admin.includes.services-create')
            
                        </div>


                </div>
                   
        <!-- SECCIÓN SKILLS ----------------------------------------------------------------------------------------------------------------------->
                   
                </div>
                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                    <div class="container">


                        <div id="skills-content">

                            <form action="{{ route('updateSkillTitle', $user) }}"
                        method="POST" enctype="multipart/form-data">

                        <div class="row">
                           

                            <div class="col-md-6">
                                <h2>Technical Skills</h2>
                                <div class="form-group">
                                    <label class="text-gray-700 text-sm font-bold mb-2" >
                                        Titulo
                                    </label>
                                    <input id="title_skills" type="text"  name="title_skills" class="form-control" required value="{{ old('title_skills', $user->title_skills) }}">
                                    @error('title_skills')
                                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                    @enderror
                                </div>
                

                        </div>
                    </div>
                       

                        @csrf
                        @method('PUT')
            
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                           
                            @include('admin.includes.skills-edit')
                           
                             @include('admin.includes.skills-create')
            
                        </div>


                   
                </div>

              </div>

     <!-- SECCIÓN PROFESSIONAL SKILLS ----------------------------------------------------------------------------------------------------------------------->

              <div class="tab-pane fade" id="profskills" role="tabpanel" aria-labelledby="profskills-tab">
                <div class="container">

                    <div class="row">
                           
                        <form action="{{ route('updateProfSkillTitle', $user) }}"
                        method="POST" enctype="multipart/form-data">

                        <div class="col-md-6">
                            <h2>Professional Skills</h2>
                            <div class="form-group">
                                <label class="text-gray-700 text-sm font-bold mb-2" >
                                    Titulo
                                </label>
                                <input id="title_profskills" type="text"  name="title_profskills" class="form-control" required value="{{ old('title_profskills', $user->title_profskills) }}">
                                @error('title_profskills')
                                    <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                                @enderror
                            </div>

                            @csrf
                        @method('PUT')
            
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
            

                    </div>
                </div>

                    <div id="profskills-content">

                        <div class="row">
                            @include('admin.includes.profskills-edit')
                           
                             @include('admin.includes.profskills-create')
                        </div>
        
                    </div>


               
                </div>

                </div>
        </div>
    </div>
</section>


@endsection
