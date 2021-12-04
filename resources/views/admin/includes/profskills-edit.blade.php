@foreach ($user->profskill as $profskill)

<form action="{{ route('profskill.update', $profskill) }}"
method="POST">

    <div class="form-row">
        <div class="col-md-6">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Habilidad Profesional
            </label>
            <input id="name_profskill" type="text"  name="name_profskill" class="form-control" required value="{{ old('name_profskill', $profskill->name_profskill) }}">
        </div>
        @error('name_profskill')
                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
            @enderror
        <div class="col-md-6">
            <label class="text-gray-700 text-sm font-bold mb-2" >
                Porcentaje
            </label>
            <input id="percent" type="text"  name="percent" class="form-control" required value="{{ old('percent', $profskill->percent) }}">
        </div>
        @error('percent')
                        <div class="bg-danger w-100 p-3 text-white">{{ $message }}</div>
                @enderror
    </div>




    @csrf
    @method('PUT')

    <button class="btn-warning btn btn-lg" type="submit" class="site-btn">Actualizar</button>
</form>
<form action="{{ route('profskill.destroy', $profskill) }}"
method="POST">
    @csrf
    @method('DELETE')

    <button class="btn-danger btn btn-lg" type="submit" class="site-btn">Eliminar</button>
</form>

@endforeach