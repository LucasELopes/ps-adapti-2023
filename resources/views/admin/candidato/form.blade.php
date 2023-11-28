<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Fotos') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('foto') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="foto" id="input-foto"
                type="text" placeholder="{{ __('Foto do Candidato') }}" value="{{ isset($candidato) ? $candidato->name : old('foto') }}"
                required="true" aria-required="true"/>
            @if ($errors->has('foto'))
                <span id="foto-error" class="error text-danger" for="input-foto">{{ $errors->first('foto') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Nome') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="nome" id="input-nome"
                type="text" placeholder="{{ __('Nome do Candidato') }}" value="{{ isset($candidato) ? $candidato->name : old('nome') }}"
                required="true" aria-required="true" />
            @if ($errors->has('nome'))
                <span id="nome-error" class="error text-danger" for="input-nome">{{ $errors->first('nome') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('formado') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="formado" id="input-formado"
                type="text" placeholder="{{ __('formado do Candidato') }}" value="{{ isset($candidato) ? $candidato->name : old('formado') }}"
                required="true" aria-required="true" />
            @if ($errors->has('formado'))
                <span id="formado-error" class="error text-danger" for="input-formado">{{ $errors->first('formado') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('curso') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="curso" id="input-curso"
                type="text" placeholder="{{ __('curso do Candidato') }}" value="{{ isset($candidato) ? $candidato->name : old('curso') }}"
                required="true" aria-required="true" />
            @if ($errors->has('curso'))
                <span id="curso-error" class="error text-danger" for="input-curso">{{ $errors->first('curso') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('descricao') }}</label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="descricao" id="input-descricaos"
                type="text" placeholder="{{ __('descricao do Candidato') }}" value="{{ isset($candidato) ? $candidato->name : old('descricao') }}"
                required="true" aria-required="true" />
            @if ($errors->has('descricao'))
                <span id="descricao-error" class="error text-danger" for="input-descricao">{{ $errors->first('descricao') }}</span>
            @endif
        </div>
    </div>
</div>
