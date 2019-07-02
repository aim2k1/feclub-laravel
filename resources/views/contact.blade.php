@extends('welcome')

@section('title', $data['title'] )

@section('content')
  <form action="{{ route('contact.send') }}" method="post">
    {{ csrf_field() }}

    <input name="name">
    <input name="email" type="email">

    <button class="btn btn-primary" type="submit">Send</button>
  </form>
@endsection
