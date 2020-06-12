<h1>Liste des Professeurs</h1>
<div class="Tableau">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Prenom</th>
      <th scope="col">Nom</th>
      <th scope="col">Telphone</th>
      <th scope="col">Mail</th>
    </tr>
  </thead>
  @if($listeProfesseur) 
  @foreach($listeProfesseur as $prof)
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$prof->firstName}}</td>
      <td>{{$prof->lastName}}</td>
      <td>{{$prof->telephone}}</td>
      <td>({{$prof->mail}})</td>
    </tr>
    
    </tbody>
  @endforeach
  @else
        <li>La liste est vide ! </li>
    @endif
</table>
</div>