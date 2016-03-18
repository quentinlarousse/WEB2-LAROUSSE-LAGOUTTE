@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Formulaire de BAP</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/bap') }}">
                            {!! csrf_field() !!}










                            <h1>form en dur</h1>
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('store') }}">
                                {!! csrf_field() !!}



                                        <!-- INPUT NOM DU PROJET -->
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Nom du projet</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>





                                <!-- A PROPOS DU COMMANDITAIRE -->
                                <div class="text-center"><h3>A propos du commanditaire</h3></div>
                                <!-- INPUT PRÉNOM et NOM -->
                                <div class="form-group{{ $errors->has('NomPrenomCHEF') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Nom et Prénom du commanditaire</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="NomPrenomCHEF" value="{{ old('NomPrenomCHEF') }}">

                                        @if ($errors->has('NomPrenomCHEF'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('NomPrenomCHEF') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <!-- INPUT PRÉNOM et NOM -->
                                <div class="form-group{{ $errors->has('fonctionCHEF') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Fonction du commanditaire</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="fonctionCHEF" value="{{ old('fonctionCHEF') }}">

                                        @if ($errors->has('fonctionCHEF'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('fonctionCHEF') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <!-- INPUT ADRESSE POSTALE -->
                                <div class="form-group{{ $errors->has('adresseCHEF') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Code postal</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="adresseCHEF" value="{{ old('adresseCHEF') }}">

                                        @if ($errors->has('adresseCHEF'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('adresseCHEF') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <!-- INPUT EMAIL -->
                                <div class="form-group{{ $errors->has('emailCHEF') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Email</label>

                                    <div class="col-md-6">
                                        <input type="emailCHEF" class="form-control" name="email" value="{{ old('emailCHEF') }}">

                                        @if ($errors->has('emailCHEF'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('emailCHEF') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <!-- INPUT TELEPHONE -->
                                <div class="form-group{{ $errors->has('telCHEF') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Téléphone</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="telCHEF" value="{{ old('telCHEF') }}">

                                        @if ($errors->has('telCHEF'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('telCHEF') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>




                                <!-- A PROPOS DU CONTACT -->
                                <div class="text-center"><h3>A propos du contact</h3></div>
                                <!-- INPUT NOM PRENOM CONTACT -->
                                <div class="form-group{{ $errors->has('NomPrenomCON') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Nom et Prénom du contact</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="NomPrenomCON" value="{{ old('NomPrenomCON') }}">

                                        @if ($errors->has('NomPrenomCON'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('NomPrenomCON') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <!-- INPUT FONCTION CONTACT -->
                                <div class="form-group{{ $errors->has('fonctionCON') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Fonction du contact</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="fonctionCON" value="{{ old('fonctionCON') }}">

                                        @if ($errors->has('fonctionCON'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('fonctionCON') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <!-- INPUT ADRESSE POSTALE -->
                                <div class="form-group{{ $errors->has('adresseCON') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Code postal</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="adresseCON" value="{{ old('adresseCON') }}">

                                        @if ($errors->has('adresseCON'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('adresseCON') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <!-- INPUT EMAIL -->
                                <div class="form-group{{ $errors->has('emailCON') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Email</label>

                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="emailCON" value="{{ old('emailCON') }}">

                                        @if ($errors->has('emailCON'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('emailCON') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <!-- INPUT TELEPHONE -->
                                <div class="form-group{{ $errors->has('telCON') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Téléphone</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="telCON" value="{{ old('telCON') }}">

                                        @if ($errors->has('telCON'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('telCON') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>




                                <!-- VOTRE FICHE D'IDENTITÉ -->
                                <div class="text-center"><h3>Votre fiche d'identité</h3></div>

                                <!-- INPUT RAISON SOCIALE -->
                                <div class="form-group{{ $errors->has('social') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Raison social, activité ...</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="social" value="{{ old('social') }}">

                                        @if ($errors->has('social'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('social') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <!-- INPUT TYPE DE PROJET -->
                                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label"> Type de demande </label>

                                    <div class="col-md-6">
                                        <input type= "radio" name="demande" value="site"> Site internet
                                        <input type= "radio" name="demande" value="3D"> 3D
                                        <input type= "radio" name="demande" value="2D"> Animation 2D
                                        <input type= "radio" name="demande" value="installation"> Installation Multimédia
                                        <br>
                                        <input type= "radio" name="demande" value="JV"> Jeux-Vidéo
                                        <input type= "radio" name="demande" value="DVD"> DVD
                                        <input type= "radio" name="demande" value="print"> Print
                                        <input type= "radio" name="demande" value="CD"> CD-ROM
                                        <input type= "radio" name="demande" value="evenement"> Evemement
                                        <input type= "radio" name="demande" value="autre"> Autre

                                        @if ($errors->has('type'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <!-- INPUT RAISON DE LA DEMANDE -->
                                <div class="form-group{{ $errors->has('raison') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Raison de la demande</label>

                                    <div class="col-md-6">
                                        <textarea rows="8" cols="65" name="raison"> </textarea>
                                        @if ($errors->has('raison'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('raison') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <!-- INPUT CONTEXTE DE LA DEMANDE -->
                                <div class="form-group{{ $errors->has('contexte') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Contexte de la demande</label>

                                    <div class="col-md-6">
                                        <textarea rows="4" cols="65" name="contexte"> </textarea>
                                        @if ($errors->has('contexte'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('contexte') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <!-- INPUT OBJECTIF DE LA DEMANDE -->
                                <div class="form-group{{ $errors->has('objectif') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Objectifs de la demande</label>

                                    <div class="col-md-6">
                                        <textarea rows="4" cols="65" name="objectif"> </textarea>
                                        @if ($errors->has('objectif'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('objectif') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i>Envoyer
                                        </button>
                                    </div>
                                </div>


                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

