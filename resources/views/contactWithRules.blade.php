@extends('welcome')

@section('title', $data['title'] )

@section('content')
  @if(Session::has('success'))
    {{ Session::get('success') }}
  @endif

  @if ($errors->any())
      @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
  @endif

  <form action="{{ route('contact.send') }}" method="post">
    {{ csrf_field() }}

    <input name="name" value="{{ old('name') }}">
    <input name="email" type="email" value="{{ old('email') }}">

    <button class="btn btn-primary" type="submit">Send</button>
  </form>
@endsection
