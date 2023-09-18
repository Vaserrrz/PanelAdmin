<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombres y Apellidos') }}
            {{ Form::text('nombre', $persona->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cédula o Pasaporte') }}
            {{ Form::number('cedula', $persona->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula o Pasaporte']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('direccion', $persona->direccion, ['maxlength' => 100,'class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono principal') }}
            {{ Form::tel('telef1', $persona->telef1, ['maxlength' => 12,'pattern' => '[0-9]*', 'class' => 'form-control' . ($errors->has('telef1') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Movil']) }}
            {!! $errors->first('telef1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono Alternativo') }}
            {{ Form::tel('telef2', $persona->telef2, ['maxlength' => 12,'pattern' => '[0-9]*', 'class' => 'form-control' . ($errors->has('telef2') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Alternativo']) }}
            {{-- {!! $errors->first('telef2', '<div class="invalid-feedback">:message</div>') !!} --}}
        </div>
        <div class="form-group">
            {{ Form::label('whatsapp') }}
            {{ Form::text('whatsapp', $persona->whatsapp, ['maxlength' => 12,'pattern' => '[0-9]*','class' => 'form-control' . ($errors->has('whatsapp') ? ' is-invalid' : ''), 'placeholder' => 'Telefono asociado a Whatsapp']) }}
            {{-- {!! $errors->first('whatsapp', '<div class="invalid-feedback">:message</div>') !!} --}}
        </div>
        <div class="form-group">
            {{ Form::label('telegram') }}
            {{ Form::text('telegram', $persona->telegram, ['class' => 'form-control' . ($errors->has('telegram') ? ' is-invalid' : ''), 'placeholder' => 'Telefono o Correo asociado a Telegram']) }}
            {{-- {!! $errors->first('telegram', '<div class="invalid-feedback">:message</div>') !!} --}}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $persona->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'E-mail']) }}
            {{-- {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!} --}}
        </div>
        <div class="form-group">
            {{ Form::label('tipo','Tipo de Persona' ) }}
            {{ Form::select('tipo', ['Socio' => 'Socio','Técnico' => 'Técnico','Revendedor' => 'Revendedor'],null,['class' => 'form-control'] )}}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a class="btn btn-primary" href="{{ route('personas.index') }}"> {{ __('Volver') }}</a>
    </div>
</div>
