@extends('/layouts/app')

@section('content')

{{-- If statement om te kijken of er wel recepten zijn. Zo niet geef een message terug --}}
@if(count($recepten) == 0)
<p>Geen recepten gevonden</p>
@endif

<div class="box">
	<section>
		<div class="receptContainer">

@foreach($recepten as $recept)
    <x-recept-card :recept="$recept" />
@endforeach

		</div>
	</section>
</div>

@endsection