@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="bg-warning">DETTAGLI SINGOLO OSPITE: </h1>
            <br>                       
            <h3> ID OSPITE: [{{ $ospiti -> id }}] </h3>
            <br>
            <h3> NOME: {{ $ospiti -> name }} </h3>
            <h3> COGNOME: {{ $ospiti -> lastname }} </h3>
            <br>
            <h3> DOCUMENTO: {{ $ospiti -> document_type }} </h3>
            <h3> NUMERO: {{ $ospiti -> document_number }} </h3>
            <br>
            <h3> NASCITA: {{ $ospiti -> date_of_birth }} </h3>
            <br>
            <hr>
        </div>
    </div>
</div>
 
 @endsection