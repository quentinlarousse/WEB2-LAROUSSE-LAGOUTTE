@extends('layouts.app')


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Mon compte</div>
        <div class="panel-body">

            {!! Form::open($user) !!}

            <div class="form-group">
                <label class="col-md-4 control-label">Mot de passe</label>
                <div class="col-md-6">
                    {!! Form::name('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Prénom</label>
                <div class="col-md-6">
                    {!! Form::firstname('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Nom</label>
                <div class="col-md-6">
                    {!! Form::lastname('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>

    @endsection