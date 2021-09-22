@extends('admin.layout.app')
@section('content')


@if (session()->has("success"))
    <div class="alert alert-success">
        {{session()->get("success")}}
    </div>
@endif

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModala">
  Ajouter un employé
</button>

<!-- Modal -->
<div class="modal fade" id="basicExampleModala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout d'un employé</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Default form group -->
        <form method="POST" action="{{route('admin.employe.store')}}">
            {{csrf_field()}}
            <!-- Default input -->
            <div class="form-group">
                <label for="formGroupExampleInput">Nom</label>
                <input type="text" class="form-control @if($errors->get('nom')) border border-danger @endif" name="nom" value="{{old('nom')}}"  id="formGroupExampleInput" placeholder="">
                @if ($errors->get('nom'))
                <ul>
                @foreach ($errors->get('nom') as $error )
                    <li style="color:red;  margin-left:-25px">{{$error}}
                    </li>
                @endforeach
                </ul>
                @endif
            </div>
            <!-- Default input -->
            <div class="form-group">
                <label for="formGroupExampleInput2">Prenom</label>
                <input type="text" value="{{old('prenom')}}" class="form-control @if($errors->get('prenom')) border border-danger @endif" name="prenom"  id="formGroupExampleInput1" placeholder="">
                @if (($errors)->get('prenom'))
                <ul>
                @foreach ($errors->get('prenom') as $error )
                    <li style="color:red;  margin-left:-25px">
                    {{$error}}
                    </li>
                @endforeach
                </ul>
                @endif
            </div>
            <!-- Default input -->
            <div class="form-group">
                <label for="formGroupExampleInput2">Téléphone</label>
                <input type="text" value="{{old('telephone')}}" class="form-control @if($errors->get('telephone')) border border-danger @endif" name="telephone"  id="formGroupExampleInput2" placeholder="">
                @if (($errors)->get('telephone'))
                <ul>
                @foreach ($errors->get('telephone') as $error )
                    <li style="color:red;  margin-left:-25px">
                    {{$error}}
                    </li>
                @endforeach
                </ul>
                @endif
            </div>
            <!-- Default input -->
            <div class="form-group">
                <label for="formGroupExampleInput2">Adresse email</label>
                <input type="text" value="{{old('email')}}" class="form-control @if($errors->get('email')) border border-danger @endif" name="email"  id="formGroupExampleInput3" placeholder="">
                @if (($errors)->get('email'))
                <ul>
                @foreach ($errors->get('email') as $error )
                    <li style="color:red; margin-left:-25px">
                    {{$error}}
                    </li>
                @endforeach
                </ul>
                @endif
            </div>
            <!-- Default input -->
            <div class="form-group">
                <label for="formGroupExampleInput2">Adresse</label>
                <input type="text" class="form-control @if($errors->get('adresse')) border border-danger @endif" name="adresse" value="{{old('adresse')}}" id="formGroupExampleInput4" placeholder="">
                @if (($errors)->get('adresse'))
                <ul>
                @foreach ($errors->get('adresse') as $error )
                    <li style="color:red;  margin-left:-25px">
                    {{$error}}
                    </li>
                @endforeach
                </ul>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
        <!-- Default form group -->
      </div>

    </div>
  </div>
</div>

<br><br><br>
<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Email</th>
      <th scope="col">Adresse</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($employes as $employe )
    <tr>
      <th scope="row">{{$employe['id']}}</th>
      <td>{{substr($employe['nom'],0,9)}}</td>
      <td>{{$employe['prenom']}}</td>
      <td>{{substr($employe['telephone'],0,9)}}</td>
      <td>{{substr($employe['email'],0,5)}}</td>
      <td>{{$employe['adresse']}}</td>
      <td>
            <!-- Button 1 Visualiser trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
                <i class="fas fa-eye"></i>
            </button>
             <!-- Button 2 Modifier trigger modal -->
             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#basicExampleModal">
                <i class="fas fa-edit"></i>
            </button>
            <!-- Button 3 Supprimer trigger modal -->
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#basicExampleModal">
                <i class="fas fa-trash-alt"></i>
            </button>


                <!-- Modal Visualiser-->
                <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Enregistrer</button>
                    </div>
                    </div>
                </div>
                </div>



                <!-- Modal Modifier -->
                <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
                        <button type="button" class="btn btn-primary">Enregistrer</button>
                    </div>
                    </div>
                </div>
                </div>



                <!-- Modal Supprimer -->
                <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Enregistrer</button>
                    </div>
                    </div>
                </div>
                </div>
     </td>
      @endforeach
    </tr>
  </tbody>
</table>


@endsection


@push('scripts')
    <script type="text/javascript">
        @if (count($errors) > 0)
            $("#basicExampleModala").modal('show');
        @endif
    </script>
@endpush
