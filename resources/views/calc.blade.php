@extends('layout')
@section('header')
    Hii broo
@endsection
@section('content')
<div>
    <h1>1 to 9</h1>
    <select name="" id="">
       @for ($i = 1; $i < 10; $i++)
           <option value={{ $i }}>{{ $i }}</option>
       @endfor
    </select>
   </div>
<div>
    <h1>impaire numbers</h1>
 <select name="" id="">
    @for ($i = 1; $i <= 1000; $i+=2)
        <option value={{ $i }}>{{ $i }}</option>
    @endfor
 </select>
</div>
<div>
    metohd 2
    <select name="" id="">
        @for ($i = 1; $i <= 1000; $i++)
            @if ($i % 2 != 0)
            <option value={{ $i }}>{{ $i }}</option>
            @endif
        @endfor
     </select>
</div>
@endsection

