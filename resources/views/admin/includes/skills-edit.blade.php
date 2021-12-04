@foreach ($user->skill as $skill)

<form action="{{ route('skill.update', $skill) }}"
method="POST">

    <div class="form-row">
        <div class="col-md-6">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Habilidad
            </label>
            <input id="name_skill" type="text"  name="name_skill" class="form-control" required value="{{ old('name_skill', $skill->name_skill) }}">
        </div>
        @error('name_skill')
                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
            @enderror
        <div class="col-md-6">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Porcentaje
            </label>
            <input id="percent" type="text"  name="percent" class="form-control" required value="{{ old('percent', $skill->percent) }}">
        </div>
        @error('percent')
                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                @enderror
    </div>




    @csrf
    @method('PUT')

    <button class="btn-warning btn btn-lg" type="submit" class="site-btn">Actualizar</button>
</form>
<form action="{{ route('skill.destroy', $skill) }}"
method="POST">
    @csrf
    @method('DELETE')

    <button class="btn-danger btn btn-lg" type="submit" class="site-btn">Eliminar</button>
</form>

@endforeach