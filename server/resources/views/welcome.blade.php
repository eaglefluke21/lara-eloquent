@php
    $user = ['name' => 'anon', 'work' => 'code'];
@endphp

    

<h1> Home Page </h1>
<p> Welcome {{ $user['name']}} </P>

<p> Create New Event </p>

<a href="{{route('events.create')}}"> Create  </a> 


<p> Choose your Event </p>

