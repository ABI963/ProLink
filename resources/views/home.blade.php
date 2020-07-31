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
            <div class="col">
                <center>
                    <div class="form-group">
                        <select class="form-control" id="sel1">
                            <option>Catégorie</option>
                            <option>Plomberie</option>
                            <option>Construction</option>
                            <option>Mécanique</option>
                        </select>
                    </div>
                </center>
                <br>
                <center>
                    <div class="form-group">
                        {{-- <label for="sel1">Spécialuter  métier</label> --}}
                        <select class="form-control" id="sel1">
                            <option>Plomberie</option>
                            <option>Finition</option>
                            <option>Carrossier</option>
                            <option>Peintre automobile</option>
                        </select>
                    </div>
                </center>
                <br>
                <center>
                    <input class="btn btn-warning" type="button" value="recherche">
                </center>
            </div>
            <br>
            <div>
                <center>
                    Liste profesionnel
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
                                            <div class="col-xl">
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
                                                                <textarea name="" id="" cols="60" rows="5">

                                                                </textarea>
                                                            </center>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>


                                             <div class="col-xl">
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
                                                                <textarea name="" id="" cols="30" rows="2">

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
                        <tr>
                            <th scope="row">Faaa</th>
                            <td>+689 89 654 132</td>
                            <td>Thornton</td>
                            <td>
                                {{-- <button class="btn btn-light" type="submit">fiche entreprise</button> --}}
                                <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExample_id2" aria-expanded="false" aria-controls="collapseExample_id2">
                                    fiche entreprise
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="collapse" id="collapseExample_id2">
                                    <div class="card card-body">
                                        fiche entreprise !
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        <th scope="row">Punaauia</th>
                        <td>+689 87 174 852</td>
                        <td>the Bird</td>
                        <td>
                            <button class="btn btn-light" type="submit">fiche entreprise</button>
                        </td>
                        </tr>
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

        {{-- @admin
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle{{ currentRoute(
                    route('category.create'),
                    route('category.index'),
                    route('category.edit', request()->category)
                )}}" href="#" id="navbarDropdownGestCat" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @lang('Administration')
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownGestCat">
                <a class="dropdown-item" href="{{ route('category.create') }}">
                    <i class="fas fa-plus fa-lg"></i> @lang('Ajouter une catégorie')
                </a>
                <a class="dropdown-item" href="{{ route('category.index') }}">
                    <i class="fas fa-wrench fa-lg"></i> @lang('Gérer les catégories')
                </a>
            </div>
        </li>
        @endadmin --}}




{{-- Vaiarii --}}

        <!-- Extra large modal -->
        {{-- <center>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">
                Voir les catégories
            </button>
        </center> --}}

        {{-- <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">

                    <center>
                        <h4>
                            Selectionner une sous catégorie
                        </h4>
                    </center>

                    <div class=" justify-content-around d-flex flex-wrap">

                        <br><br><br><br><br>
                        <br>
                        <br><br><br><br><br>

                        @foreach($subcategory as $item)

                            <div class="col-2 subcategories" data-rowid="{{ $item['id'] }}">
                                <h3>{{ $item['name_subcategory'] }}</h3>
                            </div>

                        @endforeach


                    </div>

                    <br>
                    <center>
                        --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                    </center>
                </div>
            </div>
        </div> --}}



@endsection
