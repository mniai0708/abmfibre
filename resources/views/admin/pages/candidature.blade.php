@extends('admin.layout.app')
@section('content')
    <table class="table">
        <thead class="black white-text">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Offre</th>
                <th scope="col">Nom</th>
                <!--<th scope="col">Prénom</th>-->
                <th scope="col">E-mail</th>
                <!--<th scope="col">Téléphone</th>-->
                <th scope="col">Etat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($candidatures as $candidature)
                <tr>
                    <th scope="row">{{ $candidature['id'] }}</th>
                    <th scope="row">{{ $candidature['offres']['titre'] }}</th>
                    <td>{{ $candidature['nom'] }}</td>
                    <!-- <td>{{ $candidature['prenom'] }}</td></td>-->
                    <td>{{ $candidature['email'] }}</td>
                    <!-- <td>{{ $candidature['telephone'] }}</td>-->
                    <td>En attente</td>

                    <td>
                        <form method="POST" action="{{ route('admin.candidature.sendAcceptMail',['id'=>$candidature['id']]) }}">
                            @csrf
                            <button type="button"
                                class="btn btn-outline-success btn-rounded waves-effect btn-sm">Accept</button>
                        </form>
                        <!-- Button 1 Visualiser trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#basicExampleModal{{ $candidature['id'] }}">
                            <i class="fas fa-eye"></i>
                        </button>

                        <!-- Button 3 Supprimer trigger modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#basicExampleModal">
                            <i class="fas fa-trash-alt"></i>
                        </button>



                        <!-- Modal -->
                        <div class="modal fade" id="basicExampleModal{{ $candidature['id'] }}" tabindex="-1"
                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-notify modal-info" role="document">
                                <div class="modal-content">
                                    <div class="modal-header primary-color">
                                        <h5 class="heading" style="font-weight: bold">
                                            {{ $candidature['offres']['titre'] }}</h5>
                                        <button type="button" class="close" style="color: white"
                                            data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <table class="table table-borderless">
                                            <tr>
                                                <td>
                                                    <p style="color:#0062cc; font-weight:bold;"> Nom </p>
                                                </td>
                                                <td>
                                                    <p>{{ $candidature['nom'] }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="color:#0062cc ; font-weight:bold;">Prénom </p>
                                                </td>
                                                <td>
                                                    <p>{{ $candidature['prenom'] }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="color:#0062cc; font-weight:bold;">Email </p>
                                                </td>
                                                <td>
                                                    <p>{{ $candidature['email'] }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="color:#0062cc ; font-weight:bold;"> Téléphone </p>
                                                </td>
                                                <td>
                                                    <p>{{ $candidature['telephone'] }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="color:#0062cc ; font-weight:bold;"> CV </p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-outline-default btn-rounded waves-effect btn-sm"><i
                                                            style="color:#2bbbad" class="fas fa-eye"></i></button>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-rounded waves-effect btn-sm"><i
                                                            style="color:#a6c " class="fas fa-download"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="color: #0062cc; font-weight: bold; ;">Lettre de motivation
                                                    </p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-outline-default btn-rounded waves-effect btn-sm"><i
                                                            style="color:#2bbbad" class="fas fa-eye"></i></button>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-rounded waves-effect btn-sm"><i
                                                            style="color:#a6c " class="fas fa-download"></i></button>
                                                </td>
                                            </tr>
                                        </table>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
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
