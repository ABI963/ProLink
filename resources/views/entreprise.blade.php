@extends('layouts.app')

@section('content')

<br>
<br>
<center>
    <h1 id="test" >
        ProLink
    </h1>
</center>
<br>
<div class="container-fluid">
    <div class="row">

        <div class="col-xl">
            <center>
                <div class="col" id="map">
                    <!-- Ici s'affichera la carte -->
                    affichage carte
                </div>
            </center>
        </div>
        <div class="col-xl ml-5 mr-5 mt-5">
            <div>
                <center>
                    <p>
                        <h3>
                            Mes demandes
                        </h3>
                    </p>
                </center>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Identité</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <button class="btn btn-info">
                                    traiter
                                </button>
                                <br>
                                <br>
                                <button class="btn btn-info">
                                    terminer
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <button class="btn btn-info">
                                    traiter
                                </button>
                                <br>
                                <br>
                                <button class="btn btn-info">
                                    terminer
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <button class="btn btn-info">
                                    traiter
                                </button>
                                <br>
                                <br>
                                <button class="btn btn-info">
                                    terminer
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <center>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Historique des services rendus
                    </button>
                </center>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Historique</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        Affichages de l'historique
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="col" id="publiciter">
    <center>
        <P>
            PUBLICITER
        </P>
    </center>
</div>



@endsection
