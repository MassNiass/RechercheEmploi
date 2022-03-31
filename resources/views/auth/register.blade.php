<?php
    if(isset($_GET['type']) && $_GET['type']==1 || $_GET['type']==2){
        $_GET['type']==1 ? $type='employer' : $type='entreprise';
    }else{
        abort(404);
    }
?>
@extends("layouts.template",[
    "title"=>"Register Employer",
])
@section("menu")
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
    <div class="container">
        <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("register")}}">Register</a>
                </li>

            </ul>
        </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
</nav>
@endsection
@section("content")
<div class="container col-6 offset-3 mt-5">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="">Profile</label>
            <input type="text" readonly value="{{$type}}" name="type" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nom complet</label>
            <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" :value="old('email')" required>
        </div>
        <div class="form-group">
            <label for="">Mot de passe</label>
            <input type="password" name="password" class="form-control" required autocomplete="new-password">
        </div>
        <div class="form-group">
            <label for="">Confirmer mot de passe</label>
            <input type="password" name="password_confirmation" class="form-control" required autocomplete="new-password" >
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="S'inscrire">
            <input type="reset" class="btn btn-danger" value="Annuler">
        </div>
    </form>
</div>
@endsection
