
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre', ['for' => 'nombre'] ) !!}
        {!! Form::text('nombre', $producto->nombre  , ['class' => 'form-control', 'id' => 'nombre', 'placeholder' => 'Escribe el nombre del producto...']  ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('clasificacion', 'clasificacion', ['for' => 'clasificacion'] ) !!}
        <select name="clasificacion" class="form-control">
            <option value="" disabled selected>Elige una clasificación...</option>
            <option value="basico">basico</option>
            <option value="emergencias">emergencias</option>
            <option value="no perecedero">no perecedero</option>
            <option value="perecedero">perecedero</option>
        </select>
    </div>
    <div class="form-group">
        {!! Form::label('marca', 'marca', ['for' => 'marca'] ) !!}
        <select name="marca" class="form-control">
            <option value="" disabled selected>Elige una marca...</option>
            <option value="Ariel">Ariel</option>
            <option value="Diana">Diana</option>
            <option value="Familia">Familia</option>
            <option value="Mamaines">Mamaines</option>
            <option value="Pantene">Pantene</option>
            <option value="Protex">Protex</option>
            <option value="Recreo">Recreo</option>
            <option value="Rexona">Rexona</option>
            <option value="Tutifruty">Tutifruty</option>
        </select>
    </div>

