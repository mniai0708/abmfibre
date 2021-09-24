@extends('admin.layout.app')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">{{session()->get('success')}}</div>
@endif
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
    Ajouter une offre d'emploi
</button>

  <!-- Modal -->
  <div class="modal fade"  id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-fluid " style="width: 1000px" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Création d'une offre d'emploi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" >
          <!--Section: Contact v.2-->
            <section class="mb-4">
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="{{route("admin.offre.store")}}" method="POST">
                            {{csrf_field()}}


                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-4">
                                    <!-- Default input -->
                                    <label for="exampleForm2">Titre</label>
                                    <input type="text" id="exampleForm2" name="titre" class="form-control">
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-4">
                                    <!-- Default input -->
                                    <label for="exampleForm2">Contrat</label>
                                    <input type="text" id="exampleForm2" name="contrat" class="form-control">
                                </div>
                                <!--Grid column-->
                                <div class="col-md-4">
                                    <!-- Default input -->
                                    <label for="exampleForm2">Salaire</label>
                                    <input type="text" id="exampleForm2" name="salaire" class="form-control">
                                </div>
                            </div>

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-4">
                                    <!--Material textarea-->
                                        <label for="form75">Description</label>
                                        <textarea id="form75" name="description" class="md-textarea form-control" rows="3"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <!--Material textarea-->
                                        <label for="form75">Profil recherché</label>
                                        <textarea id="form75" name="profil_recherche" class="md-textarea form-control" rows="3"></textarea>
                                </div>
                                <div class="col-md-4">
                                <!--Material textarea-->
                                    <label for="form75">Informations complémentaires</label>
                                    <textarea id="form75" name="infocompl" class="md-textarea form-control" rows="3"></textarea>
                                </div>
                            </div>

                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-4">
                                    <!-- Default input -->
                                    <label for="exampleForm2">Mission 1</label>
                                    <input type="text" id="exampleForm2" name="contenu1" class="form-control">
                                </div>
                                <!--Grid column-->
                                <div class="col-md-4">
                                    <!-- Default input -->
                                    <label for="exampleForm2">Mission 2</label>
                                    <input type="text" id="exampleForm2" name="contenu2" class="form-control">
                                </div>
                                <!--Grid column-->
                                <div class="col-md-4">
                                    <!-- Default input -->
                                    <label for="exampleForm2">Mission 3</label>
                                    <input type="text" id="exampleForm2" name="contenu3" class="form-control">
                                </div>
                            </div>
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-4">
                                    <!-- Default input -->
                                    <label for="exampleForm2">Mission 4</label>
                                    <input type="text" id="exampleForm2" name="contenu4" class="form-control">
                                </div>
                                <!--Grid column-->
                                <div class="col-md-4">
                                    <!-- Default input -->
                                    <label for="exampleForm2">Mission 5</label>
                                    <input type="text" id="exampleForm2" name="contenu5" class="form-control">
                                </div>
                                <!--Grid column-->
                                <div class="col-md-4">
                                    <!-- Default input -->
                                    <label for="exampleForm2">Mission 6</label>
                                    <input type="text" id="exampleForm2" name="contenu6" class="form-control">
                                </div>
                            </div>
                            <!--Grid row-->

                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>

            </section>
<!--Section: Contact v.2-->
        </div>
      </div>
    </div>
  </div>
<br><br><br>
<table class="table">
    <thead class="black white-text">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
        <th scope="col">Profil recherché</th>
        <th scope="col">Contrat</th>
        <th scope="col">Salaire</th>
        <!--<th scope="col">Info.compl</th>
        <th scope="col">Mission</th>-->
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
    @foreach ( $offres as $offre )
      <tr>
        <th scope="row">{{$offre['id']}}</th>
        <td>{{$offre['titre']}}</td>
        <td>{{substr($offre['description'],0,10)}}</td>
        <td>{{substr($offre['profil_recherche'],0,20)}}</td>
        <td>{{$offre['contrat']}}</td>
        <td>{{$offre['salaire']}}</td>
        <!--
        <td>{{substr($offre['infocompl'],0,20)}}</td>
        <td>
            <ul>
                @foreach ( $offre->missions as $mission )
                    <li>{{$mission['contenu']}}</li>
                @endforeach
            </ul>
        </td>-->
        <td>
        <!-- Button trigger modal -->
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
            </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection
