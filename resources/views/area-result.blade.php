@extends('layouts.main')

@section('title', 'Example-01 Result')

@section('content')
    <p class="content-result" >
        <b>Type :: </b>{{ $type }}<br />
        <b>Width :: </b>{{ $width }}<br />
        <b>Height :: </b>{{ $height }}<br />
        <b>Area :: </b><span class="net-value">{{ $area }}</span><br />
    </p>
@endsection