<!-- On définit la vue principale -->
@extends('layouts.erp.master_admin')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop

@section('content')
    <div class="app admin animated fadeIn ">
        <form action="{{ route('erp.put.update-user', $user->id )}}" method="POST" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PUT">
            @csrf
            <div class="head">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <h3>Modification de mon compte</h3>
                        </div>
                        <div class="col-md-6 col-xs-12 btnHead">
                            <button type="submit" class="btn btn-primary pull-right">Sauvegarder</button>
                            <button type="button" onclick="goBack()" class="btn btn-primary pull-right">Quitter sans sauvegarder</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="container">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-xs-12">
                            <label for="inputEntreprise">Entreprise</label>
                            <input type="text" name="entreprise" value="{{ $user->entreprise }}" class="form-control" id="inputEntreprise" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="inputSurname">Nom *</label>
                            <input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control" id="inputSurname">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="inputName">Prénom *</label>
                            <input type="text" name="firstname" value="{{ $user->firstname }}" class="form-control" id="inputName">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="inputEmail4">Email *</label>
                            <input type="email" name="email"  value="{{ $user->email }}" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="inputPassword4">Mot de passe *</label>
                            <div class="input-group" id="show_hide_password">
                                <input type="password" name="password"  class="form-control" id="inputPassword4" placeholder="" >
                                <div class="input-group-addon">
                                    <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="inputTel">Téléphone</label>
                            <input type="text" name="telephone"  value="{{ $user->telephone }}" class="form-control" id="inputTel" placeholder="">
                        </div>
                        <div class="form-group col-md-6 col-xs-12 logo">
                            @if($user->logo)
                                <label for="inputLogo">Logo</label>
                                <input type="file" name="logo" class="form-control" id="inputLogo" placeholder="">
                                <img src="{{ $user->logo ? url('storage/'.$user->logo) : URL::asset('images/user.png') }}" height="60" width="60" alt="Avatar" class="img-circle">
                            @else
                                <label for="inputLogo">Logo</label>
                                <input type="file" name="logo" class="form-control" id="inputLogo" placeholder="">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop