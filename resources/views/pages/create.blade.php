@extends('layouts.main')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ route('store') }}">

                @csrf
                @method('POST')
                
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-md-4 col-form-label text-md-right">Cognome</label>
                    <div class="col-md-6">
                        <input id="lastname" type="text" class="form-control" name="lastname">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">Data Nascita</label>
                    <div class="col-md-6">
                        <input id="date_of_birth" type="date" class="form-control" name="date_of_birth">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="document_type" class="col-md-4 col-form-label text-md-right">Tipo Documento</label>
                    <div class="col-md-6">
                        <input id="document_type" type="text" class="form-control" name="document_type">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="document_number" class="col-md-4 col-form-label text-md-right">Codice Documento</label>
                    <div class="col-md-6">
                        <input id="document_number" type="text" class="form-control" name="document_number">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12 text-center">
                         <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
 @endsection