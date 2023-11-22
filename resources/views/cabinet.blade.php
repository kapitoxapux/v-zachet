@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/main_1.css') }}" rel="stylesheet">
@endsection

@section('content')
<div id="grid">
    <header class="header">
                            <div class="header-left-aside"></div>

                            <div class="header-content">
                                <div class="header-content-block-1">
                                    <a href="javascript;" class="logo-link">
                                        <img class="header-logo" src="/img/header-logo.png" alt="Header Logo">
                                    </a>
                                    <ul class="header-menu">
                                        <li><a href="javascript;">Сообщения</a></li>
                                        <li><a href="javascript;">Календарь работ</a></li>
                                        <li><a href="javascript;">Исполнители</a></li>
                                        <li><a href="javascript;">Форум</a></li>
                                        <li><a href="javascript;">ФАК</a></li>
                                    </ul>
                                    <div class="time-block">

                                        <img class="clock-picture" src="">
                                        <div>
                                            <span class="time">12:12 PM</span>
                                            <span class="time-pos">по МСК</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-content-block-2">
                                    <div class="avatar-block">
                                        <img class="avatar-picture" src="">
                                        <div>
                                            <span class="avatar-name">Юлия СнуСну</span>
                                            <span class="avatar-status">offline</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="header-right-aside"></div>
                        </header>
                        <main class="main">
                            <aside class="main-left-aside">
                            <div class="consultant">
                                <a href="javascript;">Консультант</a>
                            </div>
                            </aside>

                            <section class="main-content">
                                <div class="main-content-block-1">

                                </div>
                                <div class="main-content-block-2">

                                </div>




                            </section>

                            <aside class="main-right-aside">
                                <nav class="navigation">
                                    <ul>
                                        <li><a href="#">link 1</a></li>
                                        <li><a href="#">link 2</a></li>
                                        <li><a href="#">link 3</a></li>
                                        <li><a href="#">link 4</a></li>
                                    </ul>
                                </nav>

                            </aside>
                        </main>
                        <footer class="footer">
                            <div class="footer-left-aside">
                                <a href="javascript;" class="logo-link">
                                    <img class="footer-logo" src="/img/footer-logo.png" alt="Footer Logo">
                                </a>
                            </div>

                            <div class="footer-content">
                                <div class="copyright">
                                    <p>Copyright © Vzachet 2018. Все права защищены.</p>
                                    <p><a href="javascript;">Пользовательское соглашение</a></p>
                                </div>
                                <div class="k_oplate">
                                    <span>Мы принимаем к оплате:</span>
                                    <div class="footerIcons">
                                        <span class="pIcons master"></span>
                                        <span class="pIcons visa"></span>
                                        <span class="pIcons discover"></span>
                                        <span class="pIcons amazon"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-right-aside"></div>
                        </footer>
</div>
<!--     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <!-- <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div> -->
                    
                </div>
            </div>
        </div>
    </div> -->
@endsection