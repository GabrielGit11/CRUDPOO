<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="cliente" class="form-label">{{ __('Cliente') }}</label>
            <input type="text" name="cliente" class="form-control @error('cliente') is-invalid @enderror" value="{{ old('cliente', $workOrder?->cliente) }}" id="cliente" placeholder="Cliente">
            {!! $errors->first('cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="grupo_de_trabajo" class="form-label">{{ __('Grupo de Trabajo') }}</label>
            <input type="text" name="grupo_de_trabajo" class="form-control @error('grupo_de_trabajo') is-invalid @enderror" value="{{ old('grupo_de_trabajo', $workOrder?->grupo_de_trabajo) }}" id="grupo_de_trabajo" placeholder="Grupo de Trabajo">
            {!! $errors->first('grupo_de_trabajo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $workOrder?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="vehículo" class="form-label">{{ __('Vehículo') }}</label>
            <input type="text" name="vehículo" class="form-control @error('vehículo') is-invalid @enderror" value="{{ old('vehículo', $workOrder?->vehículo) }}" id="vehículo" placeholder="Vehículo">
            {!! $errors->first('vehículo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripción') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $workOrder?->descripcion) }}" id="descripcion" placeholder="Descripción">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_programada" class="form-label">{{ __('Fecha Programada') }}</label>
            <input type="date" name="fecha_programada" class="form-control @error('fecha_programada') is-invalid @enderror" value="{{ old('fecha_programada', $workOrder?->fecha_programada) }}" id="fecha_programada" placeholder="Fecha Programada">
            {!! $errors->first('fecha_programada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_completada" class="form-label">{{ __('Fecha Completada') }}</label>
            <input type="date" name="fecha_completada" class="form-control @error('fecha_completada') is-invalid @enderror" value="{{ old('fecha_completada', $workOrder?->fecha_completada) }}" id="fecha_completada" placeholder="Fecha Completada">
            {!! $errors->first('fecha_completada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="notas" class="form-label">{{ __('Notas') }}</label>
            <input type="text" name="notas" class="form-control @error('notas') is-invalid @enderror" value="{{ old('notas', $workOrder?->notas) }}" id="notas" placeholder="Notas">
            {!! $errors->first('notas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="costo_estimado" class="form-label">{{ __('Costo Estimado') }}</label>
            <input type="number" name="costo_estimado" class="form-control @error('costo_estimado') is-invalid @enderror" value="{{ old('costo_estimado', $workOrder?->costo_estimado) }}" id="costo_estimado" placeholder="Costo Estimado">
            {!! $errors->first('costo_estimado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="costo_actual" class="form-label">{{ __('Costo Actual') }}</label>
            <input type="number" name="costo_actual" class="form-control @error('costo_actual') is-invalid @enderror" value="{{ old('costo_actual', $workOrder?->costo_actual) }}" id="costo_actual" placeholder="Costo Actual">
            {!! $errors->first('costo_actual', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>