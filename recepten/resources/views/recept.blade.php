@extends('/layouts/app')

@section('content')

<div class="box">
	<section>
		<div class="receptContainer">
            <div class="infoCard">
                <div class="content">
                    <div class="imgBx">                        
                        <img src="{{$recept->body ? asset('storage/' . $recept->body) : asset('/images/rk4DoI3bla8nFdTyTMGGHxDZ3SekzkuDMhMbXB8R.jpg')}}">
                    </div>
                    <div class="contentBx">
                        <h2>
                            Titel: {{$recept->titel}}
                        </h2>
                        <h4>
                            Door: {{$recept->auteur}}
                        </h4>
                        <h4>
                            Kooktijd:
                            {{$recept->kooktijd}}
                            minuten
                        </h4>
                        <p>
                            {{$recept->created_at}}
                        </p>
                        @auth
                        <a class="btnEdit" href="/recepten/{{$recept->id}}/edit"><h4>Edit</h4></a>
                        <a class="btnEdit" href="/recepten/{{$recept->id}}/delete"><h4>Delete</h4></a>
                        @endauth
                    </div>
                </div>
            </div>                                     
</div>                                                                                                                                  
    </section>                                                                                                                                                                                                              
</div>

@endsection