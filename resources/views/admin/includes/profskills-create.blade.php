



            <form action="{{ route('profskill.store') }}"
            method="POST">
            
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="col-md-6">

                        <input id="name_profskill" type="text"  name="name_profskill" class="form-control" required placeholder="Nueva Habilidad Profesional">
                        </div>
                        @error('name_profskill')
                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
            @enderror
                        <div class="col-md-6">
                            <label class="text-gray-700 text-sm font-bold mb-2" >
                                Porcentaje
                            </label>
                            <input id="percent" type="text"  name="percent" class="form-control" required placeholder="Porcentaje" >
                            </div>
                            @error('percent')
                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                @enderror
                            
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                    </div>
                </div>
                
            
            
            
                @csrf
            
                <button class="btn-success btn btn-lg" type="submit" class="site-btn">Agregar</button>
            </form>
