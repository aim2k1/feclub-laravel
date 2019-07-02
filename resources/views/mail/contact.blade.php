@extends('mail.base')

@section('content')
    <p>Name: {{ $data['name'] }}</p>
    <p>E-Mail-Adresse: {{ $data['email'] }}</p>
@endsection
