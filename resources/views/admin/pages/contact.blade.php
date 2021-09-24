@extends('admin.layout.app');
@section('content')
<table class="table">
    <thead class="black white-text">

        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom complet</th>
          <th scope="col">Email</th>
          <th scope="col">Objet</th>
          <th scope="col">Message</th>
          <th scope="col">Action</th>
        </tr>

    </thead>
    <tbody>
    @foreach ($contacts as $contact )
      <tr>
        <th scope="row">{{$contact['id']}}</th>
        <td>{{$contact['nomComplet']}}</td>
        <td>{{$contact['email']}}</td>
        <td>{{$contact['objet']}}</td>
        <td>{{$contact['message']}}</td>
        <td><!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
                <i class="fas fa-eye"></i>
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
            </div></td>
      </tr>
    @endforeach

    </tbody>
  </table>

@endsection
