@foreach ($user->service as $service)
<form action="{{ route('service.update', $service) }}"
method="POST">

    <div class="form-row">
        <div class="col-md-6">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Servicio
            </label>
            <input id="name_service" type="text"  name="name_service" class="form-control" required value="{{ old('name_service', $service->name_service) }}">
        </div>
        @error('name_service')
                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
            @enderror
        <div class="col-md-6">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Descripción
            </label>
            <input id="description_service" type="text"  name="description_service" class="form-control" required value="{{ old('description_service', $service->description_service) }}">
        </div>
        @error('description_service')
                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                @enderror

                <div class="col-md-6">
                    <label class="text-gray-700 text-sm font-bold mb-2">
                        Icono
                    </label>
                    <select name="icon" id="icon" required>
                        <option value="{{ old('icon', $service->icon) }}">{{ old('icon', $service->icon) }}</option>
                        <option value="bullseye">Bulls Eye</option>
                        <option value="code">Code</option>
                        <option value="object-ungroup">Object Ungroup</option>
                    </select>

                </div>
                
    </div>




    @csrf
    @method('PUT')

    <button class="btn-warning btn btn-lg" type="submit" class="site-btn">Actualizar</button>
</form>
<form action="{{ route('service.destroy', $service) }}"
method="POST">
    @csrf
    @method('DELETE')

    <button class="btn-danger btn btn-lg" type="submit" class="site-btn">Eliminar</button>
</form>
@endforeach