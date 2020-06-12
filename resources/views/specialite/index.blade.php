<h1>Liste des Spécialités</h1>
<ul>
    @if($listeSpecialite != null)
        <li>
            
        @foreach($listeSpecialite as $spece)
                    Specialite: <ul>
                        <li>
                        N°:{{$spece->code}} - {{$spece->libelle}}</li>

                    @endforeach

                    </ul>

            </li>

    

    @else
    <li>La liste est vide ! </li>

    @endif
</ul>