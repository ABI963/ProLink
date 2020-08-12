@extends('layouts.app')

@section('content')

<br>
<br>
<center>
    <h1 id="test" >
        Fenua ProLink
    </h1>
</center>
<br>
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
        <div class="col-xl ml-5 mr-5">
            <div class="col">
                    <h5>
                        Séléctionnez une catégorie
                    </h5>
                    <div class="form-group">
                        @if ($category)
                        <select class="form-control category" id="sel1">
                            <option value="">Choisir une catégorie</option>
                            @foreach ($category as $item_category)
                            <option value="{{$item_category->id}}">
                                {{$item_category->name_category}}
                            </option>
                            @endforeach
                        </select>
                        @endif
                    </div>
                <br>
                <h5>
                    Séléctionnez une spécialitée métier
                </h5>
                <div class="form-group">
                    <select class="form-control subcategory" id="sel1">

                    </select>
                </div>
                <br>
                <center>
                    <input class="btn btn-info rechercher" type="button" value="Rechercher">
                </center>
            </div>
            <br>
            <div class="col">
                <h5>
                    Liste profesionnel
                </h5>
                <center>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Commune</th>
                            <th scope="col">Numéro</th>
                            <th scope="col">Last</th>
                            <th scope="col">RDV</th>
                          </tr>
                        </thead>
                        <tbody>
                            {{-- @if () --}}

                            <tr>
                                <th scope="row">Paea</th>
                                <td>+689 87 235 456</td>
                                <td>Otto</td>
                                <td>
                                    {{-- <button class="btn btn-light" type="submit">fiche entreprise</button> --}}
                                    <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExample_id1" aria-expanded="false" aria-controls="collapseExample_id1">
                                        fiche entreprise
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <div class="collapse" id="collapseExample_id1">
                                        <div class="card card-body">
                                            <center>
                                                <h6>
                                                    fiche entreprise !
                                                </h6>
                                            </center>
                                            <br>
                                            <div class="row">
                                                <table id="fiche_entreprise" class="col-12">
                                                    <tbody>
                                                        <tr>
                                                            <td>catégorie</td>
                                                            <td>spécialité</td>
                                                            <td colspan="2">lOGO</td>
                                                        </tr>
                                                        <tr>
                                                            <td>cout/tarif</td>
                                                            <td>disponibilité</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-l-4">
                                                    <div class="card" >
                                                        <div class="card-body">
                                                            <h5 class="card-title">
                                                                <center>
                                                                    <h4>
                                                                        URGENT
                                                                    </h4>
                                                                    <input type="checkbox" name="" id="">
                                                                </center>
                                                            </h5>
                                                            <p class="card-text">
                                                                <center>
                                                                    <div class="file-field">
                                                                        <div class="d-flex justify-content-center">
                                                                            <div class="btn btn-mdb-color btn-rounded float-left">
                                                                            <span>
                                                                                Importer une photo
                                                                            </span>
                                                                            <br>
                                                                            <input type="file">
                                                                        </div>
                                                                        </div>
                                                                        <div class="z-depth-1-half mb-2">
                                                                            <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-fluid"
                                                                            alt="example placeholder" width=300>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                                <br>
                                                                <center>
                                                                    Dèscription de la demande
                                                                    <br>
                                                                    <textarea name="" id="" cols="50" rows="5">

                                                                    </textarea>
                                                                </center>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-l-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">
                                                                <center>
                                                                    <h4>
                                                                        Prendre RDV
                                                                    </h4>
                                                                    <input type="checkbox" name="" id="">
                                                                </center>
                                                            </h5>
                                                            <br>
                                                            <p class="card-text">
                                                                <center>
                                                                    <input type="date" name="" id="">
                                                                </center>
                                                                <br>
                                                                <center>
                                                                    <div class="file-field">
                                                                        <div class="d-flex justify-content-center">
                                                                        <div class="btn btn-mdb-color btn-rounded float-left">
                                                                            <span>
                                                                                Importer une photo
                                                                            </span>
                                                                            <br>
                                                                            <input type="file">
                                                                        </div>
                                                                        </div>
                                                                        <div class="z-depth-1-half mb-2">
                                                                        <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-fluid"
                                                                            alt="example placeholder" width=300>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                                <br>
                                                                <center>
                                                                    Dèscription de la demande
                                                                    <br>
                                                                    <textarea name="" id="" cols="50" rows="2">

                                                                    </textarea>
                                                                </center>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <br>
                                            <center>
                                                <button class="btn btn-info" type="submit">Envoyer</button>
                                            </center>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- @endif --}}
                        </tbody>
                    </table>
                </center>
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
