<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
/*
        body{
        background: #3399ff;
        }


        .circle{
        position: absolute;
        border-radius: 50%;
        background: white;
        animation: ripple 15s infinite;
        box-shadow: 0px 0px 1px 0px #508fb9;
        }

        .small{
        width: 200px;
        height: 200px;
        left: -100px;
        bottom: -100px;
        }

        .medium{
        width: 400px;
        height: 400px;
        left: -200px;
        bottom: -200px;
        }

        .large{
        width: 600px;
        height: 600px;
        left: -300px;
        bottom: -300px;
        }

        .xlarge{
        width: 800px;
        height: 800px;
        left: -400px;
        bottom: -400px;
        }

        .xxlarge{
        width: 1000px;
        height: 1000px;
        left: -500px;
        bottom: -500px;
        }

        .shade1{
        opacity: 0.2;
        }
        .shade2{
        opacity: 0.5;
        }

        .shade3{
        opacity: 0.7;
        }

        .shade4{
        opacity: 0.8;
        }

        .shade5{
        opacity: 0.9;
        }

        @keyframes ripple{
        0%{
        transform: scale(0.8);
        }

        50%{
        transform: scale(1.2);
        }

        100%{
        transform: scale(0.8);
        }
        } */
    </style>
    <title>Page de création</title>
</head>
<body>



	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		{{-- <div class="contact100-more">
			<i class="zmdi zmdi-phone-in-talk"></i>
			(+100) 345 6389
		</div> --}}
		<div class="wrap-contact100">
            <a href="{{ url('/home')}}">retour</a>
            <span class="contact100-form-title">
                Administration !
            </span>

            {{-- ajouter une catégorie --}}
            <form method="POST" action="{{route('create_category')}}">
                {{csrf_field()}}
                <div class="wrap-input100 validate-input" data-validate="Nouvelle catégorie">
                    <span class="label-input100">Catégorie</span>
                    <input class="input100" type="text" name="nom" placeholder="Nom catégorie...">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn" type="submit">
                            Ajouter catégorie
                        </button>
                    </div>
                </div>
            </form>

            <br>

            {{-- ajouter une Spécialiter --}}
            <form method="POST" action="{{route('create_specialiter')}}">

                {{ csrf_field() }}

                <div class="wrap-input100">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">
                            <h4>
                                <b>
                                    Catégorie
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

                    <span class="label-input100">Spécialitée métier</span>
                    <input class="input100" type="text" name="specialiter" placeholder="...">
                    <span class="focus-input100"></span>

                </div>


                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn">
                            Ajouter une spécialitée
                        </button>
                    </div>
                </div>

            </form>

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

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
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

		</div>
	</div>








<!--===============================================================================================-->
<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="{{ asset('js/map-custom.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/main.js')}}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


</body>
</html>
