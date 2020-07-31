@extends('layouts.app')

@section('content')

	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
            <a href="{{ url('/home')}}">retour</a>
            <span class="contact100-form-title">
                Administration !
            </span>

            {{-- ajouter une catégorie --}}
            <form method="POST" action="{{route('create_category')}}">
                {{csrf_field()}}
                <div class="wrap-input100 validate-input" data-validate="Nouvelle catégorie">
                    <span class="label-input100">Créer catégorie</span>
                    <input class="input100" type="text" name="nom" placeholder="Nom catégorie...">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn" type="submit">
                            Créer
                        </button>
                    </div>
                </div>
            </form>
            <br>
            <br>
            <br>
            {{-- ajouter une Spécialiter --}}
            <form method="POST" action="{{route('create_specialiter')}}">

                {{ csrf_field() }}

                <div class="wrap-input100">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">
                            <h4>
                                <b>
                                    List catégorie
                                </b>
                            </h4>
                        </label>
                        <select class="form-control" name="category_id">
                            @foreach ($category as $item)
                                <option value="{{ $item['id'] }}">
                                    {{ $item['name_category'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="wrap-input100">

                    <span class="label-input100">Créer spécialitée métier</span>
                    <input class="input100" type="text" name="specialiter" placeholder="...">
                    <span class="focus-input100"></span>

                </div>


                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn">
                            Créer
                        </button>
                    </div>
                </div>

            </form>
            <br>
            <br>
            <br>
            {{-- ajouter un Pro --}}
            <form method="POST" action="{{route('create_pro')}}">

                {{ csrf_field() }}

                <div class="wrap-input100">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">
                            <h4>
                                <b>
                                    Ajouter un professionel
                                </b>
                            </h4>
                        </label>
                        <select class="form-control" name="subcategory_id">
                            @foreach ($specialiter as $item)
                                <option value="{{$item['id']}}">
                                    {{ $item['name_subcategory'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="wrap-input100">
                    <span class="label-input100">Spécialitée métier</span>
                    <input class="input100" type="text" name="name_entreprise" placeholder="Nom de l'entreprise">
                    <input class="input100" type="text" name="status_juridique" placeholder="Statut juridique">
                    <input class="input100" type="text" name="numero_rc" placeholder="Numéros RC">
                    <input class="input100" type="text" name="numero_tahiti" placeholder="Numéros Tahiti">
                </div>

                <div class="wrap-input100">
                    <span class="label-input100">Informations gérant</span>
                    <input class="input100" type="text" name="name_gerant" placeholder="Nom du gérant">
                    <input class="input100" type="text" name="phone" placeholder="Téléphone">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <input class="input100" type="text" name="password" placeholder="mot de passe">
                    <input class="input100" type="text" name="tarif" placeholder="Coût/Tarif">
                </div>

                <div class="wrap-input100">
                    <span class="label-input100">Informations adresse</span>
                    <input class="input100" type="text" name="adresse" placeholder="Adresse de l'entreprise">
                    <input class="input100" type="text" name="city" placeholder="Commune">
                    <input class="input100" type="text" name="lon" placeholder="Longitude">
                    <input class="input100" type="text" name="lat" placeholder="Latitude">
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn">
                            Ajouter un professionel
                        </button>
                    </div>
                </div>
            </form>
		</div>
	</div>




@endsection
