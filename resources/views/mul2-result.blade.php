@extends('layouts.main')

@section('title', 'Multiplication Table V2 Form')

@section('content')

@if(in_array('left', $op) && in_array('top', $op))
<p>
        <table border="1" width="50%" align="center"> <th></th>
@for($i = 2 ; $i <= $n; $i = $i + 1)
    <th class="tb-header"> {{$i}} </th>
@endfor 
@for($i = 1 ; $i <= 12; $i = $i + 1)
<tr><th class="tb-header">{{$i}}</th>
	 @for ($ii = 2 ;$ii <= $n ; $ii = $ii + 1 )
                
             <td align='center'>{{ $ans = $i * $ii }}</td>
	@endfor
        </tr>
@endfor
        </table>
    </p>    
@elseif(in_array('left', $op))
<p>
        <table border="1" width="50%" align="center"> 
@for($i = 1 ; $i <= 12; $i = $i + 1)
<tr><th class="tb-header">{{$i}}</th>
	 @for ($ii = 2 ;$ii <= $n ; $ii = $ii + 1 )
                
             <td align='center'>{{ $ans = $i * $ii }}</td>
	@endfor
        </tr>
@endfor
        </table>
    </p> 

@elseif(empty($op))
<p>
        <table border="1" width="50%" align="center"> 
@for($i = 1 ; $i <= 12; $i = $i + 1)
<tr>
	 @for ($ii = 2 ;$ii <= $n ; $ii = $ii + 1 )
                
             <td align='center'>{{ $ans = $i * $ii }}</td>
	@endfor
        </tr>
@endfor
        </table>
    </p> 
@elseif(in_array('top', $op))
<p>
        <table border="1" width="50%" align="center" >
@for($i = 2 ; $i <= $n; $i = $i + 1)
    <th class="tb-header"> {{$i}} </th>
@endfor 
@for($i = 1 ; $i <= 12; $i = $i + 1)
<tr>
	 @for ($ii = 2 ;$ii <= $n ; $ii = $ii + 1 )
                
             <td align='center'>{{ $ans = $i * $ii }}</td>
	@endfor
        </tr>
@endfor
        </table>
    </p>

@endif

@endsection
