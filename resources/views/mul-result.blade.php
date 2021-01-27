@extends('layouts.main')

@section('title', 'Multiplication Table Result')

@section('content')
<table class="content-result">
    <p>
        <table align="center" border="1" width="50%" >
@for($i=1; $i<= 12; $i=$i+1 )
	<tr>
	 @for ($j=2; $j<=$n; $j=$j+1 )
                
                <td align="center">{{ $result=$i * $j }}</td>
	@endfor
        </tr>
@endfor
        </table>
    </p>
</table>
@endsection