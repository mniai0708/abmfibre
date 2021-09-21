@extends('admin.layout.app')
@section('content')


@if(session()->has("success"))
<div class="alert alert-success">
    {{session()->get("success")}}
</div>
@endif

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModala">
    Créer un service
  </button>

<!-- Modal -->
  <div class="modal fade" id="basicExampleModala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Création d'un service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form method="POST" action="{{route("admin.service.store")}}" >
                {{csrf_field()}}

                <!-- Default input -->
                <label for="exampleForm2">Titre</label>
                <input type="text" id="exampleForm2" name="titre" value="" class="form-control">
                @if ($errors->get('titre'))
                <ul>
                    @foreach ($errors->get('titre') as $error)
                        <li style="color: red; margin-left:-25px">{{$error}}</li>
                    @endforeach
                </ul>
                @endif

                <label for="exampleForm2">Contenu</label>
                <input type="text" id="exampleForm2" name="contenu" value="" class="form-control">
                @if (($errors)->get('contenu'))
                <ul>
                    @foreach ($errors->get('contenu') as $error)
                        <li style="color: red; margin-left:-25px">{{$error}}</li>
                    @endforeach
                </ul>
                @endif
                    <br>
                <div class="input-group">
                    <div class="input-group-prepend" >
                        <span class="input-group-text" id="inputGroupFileAddon01">Image</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" lang="fr"
                        aria-describedby="inputGroupFileAddon01">
                      <label class="custom-file-label" for="inputGroupFile01">Choisir fichier</label>
                    </div>
                </div>
                    @if(($errors)->get('image'))
                    <ul>
                    @foreach ($errors->get('image') as $error )
                        <li style="color: red; margin-left:-25px">{{$error}}</li>
                    @endforeach
                    </ul>
                    @endif
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>


      </div>
    </div>
  </div>
<!--End  Modal -->
<br><br>

<table class="table">

    <thead class="black white-text">
        <tr>
            <th scope="row">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Contenu</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>

        </tr>

    </thead>
    <tbody>
        @foreach ($services as $service)
        <tr>
            <th scope="row">{{$service['id']}}</th>
            <td>{{$service['Titre']}}</td>
            <td>{{$service['contenu']}}</td>
            <td><img src="{{$service['image']}}" alt="" style="width:200px"></td>
            <td><!-- Button Visulaiser trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
                    <i class="fas fa-eye"></i>
                </button>
                <!-- Button Modifier trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#basicExampleModal">
                    <i class="fas fa-edit"></i>
                </button>
                <!-- Button Supprimer trigger modal -->
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
