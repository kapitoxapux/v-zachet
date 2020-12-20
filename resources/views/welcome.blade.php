@extends('layouts.app')

@section('styles')
    <style>
            /* html, body {
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
            } */
            
    </style>
@endsection

@section('content')
    <main>
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

        <section class="v-container fluid banners-section">
            <!-- <div class="v-container"> -->
                <v-row no-gutters class="justify-content-center">
                    <v-col cols="11">
                        <v-row :align="alignment" :justify="justify" class="" no-gutters>
                            <v-col cols="8" class="d-flex justify-content-center">
                                <div class="d-flex flex-column align-items-center col-12 col-md-10 col-lg-10 p-0">
                                    <div class="banner-slogan">
                                        <h2 class="m-0">Лучший интернет-сервис<br>помощи студентам</h2>
                                    </div>
                                    <div class="d-none d-md-flex d-lg-flex justify-content-between">
                                        <button-component icon-in="mdi-book-multiple" text-class="in_left" color="green">Заказать работу</button-component>
                                        <button-component icon-in="mdi-pencil" text-class="in_right" style="margin: 0 0 0 25px">Стать автором</button-component>
                                    </div> 
                                </div>    
                            </v-col>
                            <v-col cols="4" class="d-flex justify-content-center">
                                <!-- <div class="d-flex justify-content-center"> -->
                                    <img class="img-stuff py-5" src="/images/stuff.png" alt="stuff">
                                <!-- </div> -->
                            </v-col>
                        </v-row>
                        <div class="d-flex flex-column d-md-none d-lg-none justify-content-between mobile-main-buttons">
                            <button-component icon-in="mdi-book-multiple" text-class="in_left" color="green">Заказать работу</button-component>
                            <button-component icon-in="mdi-pencil" text-class="in_right">Стать автором</button-component>
                        </div>
                    </v-col>
                </v-row>
            <!-- </div> -->
        </section>
        <section class="helpers-slider">
            
        </section>
        <section class="seo-section">
            
        </section>
        <section class="instruction-section">
            
        </section>
        <section class="seo-section">
            
        </section>
        <section class="body-section">
            
        </section>
    </main>
    <footer>
    
    </footer>
@endsection

@section('scripts')
    <script type="text/javascript" src="/js/app_main.js"></script>
@endsection