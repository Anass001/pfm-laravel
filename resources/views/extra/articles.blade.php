@extends('layouts.main')
@section('title', $data['title'])

    @section('main-content')
        <div class="article">
            <h1>{{ $data['title']  }}}}</h1>
            <h2>{{  $data['short_details'] }}</h2>
            <p>
            {{ $data['text']  }}}}
            </p>
            </div>


    @endsection
