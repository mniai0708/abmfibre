@extends('admin.layout.app')
@section('content')
@if (session()->has('success'))
    <div class="alert alert-success">{{session()->get('success')}}</div>
@endif
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModala">
    Ajouter un chiffre
  </button>

  <!-- Modal -->
  <div class="modal fade" id="basicExampleModala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Création d'une icone</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route("admin.chiffre.store")}}" method="POST">
            {{csrf_field()}}
            <div class="modal-body">
                <!-- Default input -->
                <label for="exampleForm2">Titre</label>
                <input type="text" id="exampleForm2" name="titre" class="form-control @if (count($errors)) border border-danger @endif">
                @if (($errors)->get('titre'))
                <ul>
                    @foreach ($errors->get('titre') as $error )
                        <li style="color: red; margin-left:-25px">{{$error}}</li>
                    @endforeach
                </ul>
                @endif
                <!-- Default input -->
                <label for="exampleForm2">Contenu</label>
                <input type="text" id="exampleForm2" name="contenu" class="form-control @if (count($errors)) border border-danger @endif"><br>
                @if (($errors)->get('contenu'))
                <ul>
                    @foreach ($errors->get('contenu') as $error )
                       <li style="color: red; margin:-25px">{{$error}}</li>
                    @endforeach
                </ul>
                @endif
                <!-- Default input -->
                <label for="exampleForm2">Icon</label>
                <input type="text" id="exampleForm2" name="icon" class="form-control @if (count($errors)) border border-danger @endif"><br>
                @if (($errors)->get('icon'))
                <ul>
                    @foreach ($errors->get('icon') as $error )
                        <li style="color: red; margin-left: -25px">{{$error}}</li>
                    @endforeach
                </ul>
                @endif

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  <br><br><br>
  <table class="table">
    <thead class="black white-text">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Contenu</th>
        <th scope="col">Icons</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($chiffres as $chiffre )
      <tr>
        <th scope="row">{{$chiffre['id']}}</th>
        <td>{{$chiffre['titre']}}</td>
        <td>{{$chiffre['contenu']}}</td>
        <td>{{$chiffre['icon']}}</td>
        <td><!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
                <i class="fas fa-eye"></i>
            </button>
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#basicExampleModal">
                <i class="fas fa-edit"></i>
            </button>
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#basicExampleModal">
                <i class="fas fa-trash-alt"></i>
            </button>

            <!-- Modal -->
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div></td>
      </tr>
        @endforeach
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


