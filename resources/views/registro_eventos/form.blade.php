<div class="form-group {{ $errors->has('Tipo_registro') ? 'has-error' : ''}}">
    <label for="Tipo_registro" class="control-label">{{ 'Tipo Registro' }}</label>
    <select name="Tipo_registro" class="form-control" id="Tipo_registro" >
    @foreach (json_decode('{"seminario": "Seminario", "actividades": "Actividades", "conferencias": "Conferencias"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registro_evento->Tipo_registro) && $registro_evento->Tipo_registro == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Tipo_registro', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Recursos_utilizados') ? 'has-error' : ''}}">
    <label for="Recursos_utilizados" class="control-label">{{ 'Recursos Utilizados' }}</label>
    <select name="Recursos_utilizados" class="form-control" id="Recursos_utilizados" >
    @foreach (json_decode('{"encuestas": "Encuestas", "entrevistas": "Entrevistas", "cuestionarios": "Cuestionarios", "otros": "Otros", "ninguno": "Ninguno"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registro_evento->Recursos_utilizados) && $registro_evento->Recursos_utilizados == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Recursos_utilizados', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Direccion_de_necesidades') ? 'has-error' : ''}}">
    <label for="Direccion_de_necesidades" class="control-label">{{ 'Direccion De Necesidades' }}</label>
    <input class="form-control" name="Direccion_de_necesidades" type="text" id="Direccion_de_necesidades" value="{{ isset($registro_evento->Direccion_de_necesidades) ? $registro_evento->Direccion_de_necesidades : ''}}" >
    {!! $errors->first('Direccion_de_necesidades', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Responsable') ? 'has-error' : ''}}">
    <label for="Responsable" class="control-label">{{ 'Responsable' }}</label>
    <input class="form-control" name="Responsable" type="text" id="Responsable" value="{{ isset($registro_evento->Responsable) ? $registro_evento->Responsable : ''}}" >
    {!! $errors->first('Responsable', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Correo') ? 'has-error' : ''}}">
    <label for="Correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="Correo" type="email" id="Correo" value="{{ isset($registro_evento->Correo) ? $registro_evento->Correo : ''}}" >
    {!! $errors->first('Correo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Telefono') ? 'has-error' : ''}}">
    <label for="Telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="Telefono" type="text" id="Telefono" value="{{ isset($registro_evento->Telefono) ? $registro_evento->Telefono : ''}}" >
    {!! $errors->first('Telefono', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Fecha_de_Inicio') ? 'has-error' : ''}}">
    <label for="Fecha_de_Inicio" class="control-label">{{ 'Fecha De Inicio' }}</label>
    <input class="form-control" name="Fecha_de_Inicio" type="date" id="Fecha_de_Inicio" value="{{ isset($registro_evento->Fecha_de_Inicio) ? $registro_evento->Fecha_de_Inicio : ''}}" >
    {!! $errors->first('Fecha_de_Inicio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Fecha_de_fin') ? 'has-error' : ''}}">
    <label for="Fecha_de_fin" class="control-label">{{ 'Fecha De Fin' }}</label>
    <input class="form-control" name="Fecha_de_fin" type="date" id="Fecha_de_fin" value="{{ isset($registro_evento->Fecha_de_fin) ? $registro_evento->Fecha_de_fin : ''}}" >
    {!! $errors->first('Fecha_de_fin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nombre_de_Actividad') ? 'has-error' : ''}}">
    <label for="Nombre_de_Actividad" class="control-label">{{ 'Nombre De Actividad' }}</label>
    <input class="form-control" name="Nombre_de_Actividad" type="text" id="Nombre_de_Actividad" value="{{ isset($registro_evento->Nombre_de_Actividad) ? $registro_evento->Nombre_de_Actividad : ''}}" >
    {!! $errors->first('Nombre_de_Actividad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Dirigido_a') ? 'has-error' : ''}}">
    <label for="Dirigido_a" class="control-label">{{ 'Dirigido A' }}</label>
    <input class="form-control" name="Dirigido_a" type="text" id="Dirigido_a" value="{{ isset($registro_evento->Dirigido_a) ? $registro_evento->Dirigido_a : ''}}" >
    {!! $errors->first('Dirigido_a', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Costo_de_Servicio') ? 'has-error' : ''}}">
    <label for="Costo_de_Servicio" class="control-label">{{ 'Costo De Servicio' }}</label>
    <input class="form-control" name="Costo_de_Servicio" type="number" id="Costo_de_Servicio" value="{{ isset($registro_evento->Costo_de_Servicio) ? $registro_evento->Costo_de_Servicio : ''}}" >
    {!! $errors->first('Costo_de_Servicio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Tipo_de_Actividad') ? 'has-error' : ''}}">
    <label for="Tipo_de_Actividad" class="control-label">{{ 'Tipo De Actividad' }}</label>
    <select name="Tipo_de_Actividad" class="form-control" id="Tipo_de_Actividad" >
    @foreach (json_decode('{"servicios": "Servicios", "promocion_cultural": "Promocion_Cultural", "accion_social": "Accion_Social", "egresados": "Egresados", "convenios": "Convenios", "asesoria": "Asesoria", "giras_academicas": "Giras_Academicas", "pasantias": "Pasantias", "peritaje": "Pasantias", "otros": "Otros"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registro_evento->Tipo_de_Actividad) && $registro_evento->Tipo_de_Actividad == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Tipo_de_Actividad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Tipo_de_Evento') ? 'has-error' : ''}}">
    <label for="Tipo_de_Evento" class="control-label">{{ 'Tipo De Evento' }}</label>
    <select name="Tipo_de_Evento" class="form-control" id="Tipo_de_Evento" >
    @foreach (json_decode('{"nacional": "Nacional", "internacional": "Internacional"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registro_evento->Tipo_de_Evento) && $registro_evento->Tipo_de_Evento == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Tipo_de_Evento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Total_de_horas') ? 'has-error' : ''}}">
    <label for="Total_de_horas" class="control-label">{{ 'Total De Horas' }}</label>
    <input class="form-control" name="Total_de_horas" type="number" id="Total_de_horas" value="{{ isset($registro_evento->Total_de_horas) ? $registro_evento->Total_de_horas : ''}}" >
    {!! $errors->first('Total_de_horas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Numero_de_participantes') ? 'has-error' : ''}}">
    <label for="Numero_de_participantes" class="control-label">{{ 'Numero De Participantes' }}</label>
    <input class="form-control" name="Numero_de_participantes" type="number" id="Numero_de_participantes" value="{{ isset($registro_evento->Numero_de_participantes) ? $registro_evento->Numero_de_participantes : ''}}" >
    {!! $errors->first('Numero_de_participantes', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Descripcion') ? 'has-error' : ''}}">
    <label for="Descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="Descripcion" type="text" id="Descripcion" value="{{ isset($registro_evento->Descripcion) ? $registro_evento->Descripcion : ''}}" >
    {!! $errors->first('Descripcion', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
