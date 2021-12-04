
<form action="{{ route('service.store') }}"
method="POST">

    <div class="form-row">
        <div class="col-md-12">
            <div class="col-md-6">
            <input id="name_service" type="text"  name="name_service" class="form-control" required placeholder="Nuevo Servicio">
            </div>
            @error('name_service')
                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
            @enderror
            <div class="col-md-6">
                <input id="description_service" type="text"  name="description_service" class="form-control" required placeholder="Descripción">
                </div>
                @error('description_service')
                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                @enderror
                <div class="col-md-6">
                    <select name="icon" id="icon" required>
                        <option value="">Seleccionar icono</option>
                        <option value="bullseye">Bulls Eye</option>
                        <option value="code">Code</option>
                        <option value="object-ungroup">Object Ungroup</option>
                    </select>

                </div>
                
            <input type="hidden" name="user_id" value="{{ $user->id }}">
        </div>
    </div>




    @csrf

    <button class="btn-success btn btn-lg" type="submit" class="site-btn">Agregar</button>
</form>