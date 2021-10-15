@extends('admin.layout.app')
@section('stylesheets')
<style>

</style>

@endsection
@section('content')


<!-- Material form register -->
<div  style="width: 600px; margin:auto;" class="card">

    <h5 style="background-color: #00c851" class="card-header  white-text text-center py-4">
        <strong>Modification du mot de passe</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #f0f0f0;" action="route('admin.password.update')" method="POST">
                {{csrf_field()}}
                {{method_field('UPDATE')}}

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" name="oldmdp"  id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName">Ancien mot de passe</label>
                    </div>
                </div>

            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" name="newmdp" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">Nouveau mot de passe</label>

            </div>
            <!-- Password -->
            <div class="md-form">
                <input type="password" name="confmdp" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword" >Confirmer votre nouveau mot de passe</label>

            </div>




            <!-- Sign up button -->
            <button class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0 " type="submit">Confirmer</button>


        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->

@endsection
