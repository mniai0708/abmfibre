@extends('admin.layout.app')
@section('content')

@if (session()->has('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
@endif

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModala">
    Créer une actualité
  </button>



  <!-- Modal -->
  <div class="modal fade" id="basicExampleModala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Création d'une actualité</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

    <div class="modal-body">
    <form action="{{route("admin.actualites.store")}}" method="POST">
        {{csrf_field()}}

          <!-- Default input -->
        <div class="form-group">
            <label for="formGroupExampleInput">Titre</label>
            <input type="text" id="formGroupExampleInput" name="titre" class="form-control @if ($errors->get('titre')) border border-danger @endif">
            @if ($errors->get('titre'))
            <ul>
                @foreach ( $errors->get('titre') as $error )
                <li style="color: red; margin-left: -25px"> {{$error }}</li>
                @endforeach
            </ul>

            @endif
        </div>
          <!-- Default input -->
            <label for="exampleForm2">Description</label>
            <input type="text" name="description" id="exampleForm2" class="form-control @if ($errors->get('description')) border border-danger @endif"><br>
            @if ($errors->get('description'))
            <ul>
                @foreach ($errors->get('description') as $error )
                    <li style="color:red; margin-left: -25px">{{$error}}</li>
                @endforeach
            </ul>
            @endif
          <!-- Default input -->
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Image</span>
                </div>

                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input "
                    aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01"></label>
                </div>

            </div>
            @if ($errors->get('image'))
            <ul>
                @foreach ($errors->get('image') as $error )
                    <li style="color:red; margin-left: -25px">{{$error}}</li>
                @endforeach
            </ul>
            @endif

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
</div>
      </div>
    </div>
  </div>
  <br><br><br>
<table class="table dark-grey-text">
    <thead class="black white-text">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($actualites as $actualite )
        <tr>
            <th scope="row">{{$actualite['id']}}</th>
            <td>{{$actualite['titre']}}</td>
            <td>{{substr($actualite['description'],0,50)}}</td>
            <td><img src="{{$actualite['image']}}" style="width: 100.0px" alt=""></td>
            <td>
                <!-- Button visualiser trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
                    <i class="fas fa-eye"></i>
                </button>
                <!-- Button editer trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#basicExampleModal">
                    <i class="fas fa-edit"></i>
                </button>
                <!-- Button supprimer trigger modal -->
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
            </td>
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
