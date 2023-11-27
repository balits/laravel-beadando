<x-guest-layout>
    @if (isset($crash))
       <p>{{ $crash -> id }}</p> 
       <p>{{ $crash -> time }}</p> 
       <p>{{ $crash -> location }}</p> 
       <p>{{ $crash -> description }}</p> 
    @endif
</x-guest-layout>
