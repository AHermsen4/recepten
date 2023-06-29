@extends('/layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Delete') }}</div>

                <div class="card-body">
                    <form action="/recepten/{{$recept->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <h2>Weet je zeker dat je het recept wilt verwijderen?</h2>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-5">
                        <button class="btnEdit">Verwijder</button>
                    </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection