<h1>this is nested file which is accessed by folder inside file</h1>
<h2>user name is: {{$name}}</h2>
<p>{{ rand() }}: these all are random numbers</p>
<span>{{ $arr[0] }}</span>
<span>{{ $arr[1] }}</span>
<span>{{ $arr[2] }}</span>
<span>{{ $arr[3] }}</span>

@if($name == "anil")
    <div>Enter your roll number</div>
    <input type="text" placeholder="Enter your exact number">
@elseif($name == "sam")
    <h2>This is Sam</h2> 
@else
    <h3>Other user</h3>
@endif 

<div>
    @for($i = 0; $i < 10; $i++)
        <h3>{{ $i }}</h3>
    @endfor
</div>
<div>
    @php $j = 0; @endphp
    @while($j <= 15)
        <h2>{{ $j }}</h2>
        @php $j++; @endphp
    @endwhile
</div>
 <div>
    @foreach($arr as $arrs)
    <h2>{{$arrs}}</h2>
    @endforeach
 </div>
 @include("common.header");
 <div>
    @include('contact')
 </div>
 <p>@include('demo')</p>
 <div>
    @include('getuser')
 </div>