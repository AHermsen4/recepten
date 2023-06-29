@props(['recept'])
<div class="card">
    <div class="content">
        <div class="imgBx">            
            <img src="{{$recept->body ? asset('storage/' . $recept->body) : asset('storage/images/no-image.jpg')}}">
        </div>
        <div class="contentBx" style="text-align: center;">
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
            <h5>
                {{$recept->created_at}}
            </h5>
            <p>Updated at {{$recept->updated_at}}</p>
            <br>
            <a href="/recepten/{{$recept['id']}}" class="leesMeer">Lees hier meer</a>
        </div>
    </div>
</div>