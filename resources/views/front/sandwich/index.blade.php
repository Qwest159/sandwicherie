<x-app-layout >

@foreach ($sandwichs as $sandwich )
<x-sandwich-card :sandwich="$sandwich" />

@endforeach

<div class="mt-8 text-center">{{ $sandwichs->links() }}</div>

</x-app-layout>
