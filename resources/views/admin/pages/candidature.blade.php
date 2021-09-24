@extends('admin.layout.app');
@section('content')
<table class="table">
    <thead class="black white-text">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Offre</th>
        <th scope="col">Nom</th>
      <!--<th scope="col">Prénom</th>
       <th scope="col">E-mail</th>
        <th scope="col">Téléphone</th>-->
        <th scope="col">Etat</th>
        <th scope="col">Lettre de motivation</th>
        <th scope="col">CV</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($candidatures as $candidature )
    <tr>
      <th scope="row">{{$candidature['id']}}</th>
      <th scope="row">{{$candidature['offres']['titre']}}</th>
      <td>{{$candidature['nom']}}</td>
     <!-- <td>{{$candidature['prenom']}}</td>
      <td>{{$candidature['email']}}</td>
      <td>{{$candidature['telephone']}}</td>-->
      <td>En attente</td>
      <td>
          <button type="button" class="btn btn-outline-default btn-rounded waves-effect btn-sm"><i class="fas fa-eye"></i></button>
          <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect btn-sm"><i class="fas fa-download"></i></button>
     </td>
      <td>
          <button type="button" class="btn btn-outline-default btn-rounded waves-effect btn-sm"><i class="fas fa-eye"></i></button>
          <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect btn-sm"><i class="fas fa-download"></i></button>
     </td>
      <td>
          <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
          <button type="button" class="btn btn-yellow btn-sm"><i class="fas fa-pause"></i></button>
          <button type="button" class="btn btn-danger btn-rounded btn-sm"><i class="fas fa-trash-alt"></i></button>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>




@endsection
