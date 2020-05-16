@extends('layouts.app')

@section('content')

    <br>
    <br>
    <center>

        <h1 id="test" >
            ProLink
        </h1>
    </center>

    <center>
        <div id="map">
                <!-- Ici s'affichera la carte -->
        </div>
    </center>

        <br>
        <br>

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

        <!-- Extra large modal -->
        <center>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">
            Voir les catégories
        </button>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </center>

        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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

                        {{-- <div class="col-2 sub_categories" data-rowid="{{ $item['subcategory_id'] }}">
                            <h3>{{ $item['name_category'] }}</h3>
                        </div> --}}



                    </div>
                    <br>
                    <center>
                        --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                    </center>
                </div>
            </div>
        </div>



@endsection
