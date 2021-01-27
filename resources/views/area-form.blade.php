@extends('layouts.main')

@section('title', 'Area Form')

@section('content')
    <form class="content-form" action="{{ route('area-result') }}" method="post">
        @csrf
       
            <b>Type :: </b><label> <input type="radio" name="a" value="1" /> Rectangular</label>
                             <label><input type="radio" name="a" value="2" /> Triangle</label>
            <br />
            <b>Width :: </b><label> <input type="number" name="width" /></label>
            <br />
            <b>Height :: </b><label> <input type="number" name="height" /></label>
            <br />
            <button type="submit">Submit</button>
        
    </form>
@endsection