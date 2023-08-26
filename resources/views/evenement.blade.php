@extends('layouts.app')

@section('content')
    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>PUBLIER UN EVENEMENT</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('evenement')}}">Home</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    <!-- Login Section Section Starts Here -->
    <div class="login-section padding-tb section-bg">
        <div class="container">
            <div class="account-wrapper">
                <h3 class="title">Publication d'un évènement</h3>
                <form method="POST" action="{{route('evenement')}}" class="account-form">
                @csrf

                    <div class="form-group">
                    <input type="file" name="photos" placeholder="photos">
                    @error('photos')
                         <span  role="alert">
                              <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                    <input id="titre" type="text" name="titre" value="{{ old('titre') }}" required autocomplete="titre" autofocus  placeholder="Titre de l'évènement">
                    @error('titre')
                         <span  role="alert">
                              <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                    </div>
                    <div class="form-group">
                    <input id="description" type="text" name="description" value="{{ old('description') }}" required autocomplete="description" placeholder="description">
                    @error('description')
                         <span  role="alert">
                              <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                    </div>

                    <div class="form-group">
                    <input id="lieu" type="lieu" name="lieu" required autocomplete="lieu" placeholder="lieu">

                    @error('password')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <a href="{{ route('home') }}">
                        <button type="submit"  class="lab-btn">
                                    {{ __('Publier') }}
                                </button>
                            </a>
                    </div>
                </form>
                <!-- <div class="account-bottom">
                    <span class="d-block cate pt-10">Are you a member? <a href="login.html">Login</a></span>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Login Section Section Ends Here -->


    <!-- footer -->
    <div class="news-footer-wrap">

        <!-- Newsletter Section Start Here -->

        <!-- Newsletter Section Ending Here -->

        @endsection
