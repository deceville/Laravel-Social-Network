@extends('layouts.master')

@section('title')
    LOL MANIA
@endsection

@section('content')
    @include('includes.message-block')


    <!-- Section: login -->
    <section id="login" class="home-section text-center bg-gray">
        <div class="heading-about marginbot-50">
            <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="login-form-link">Login</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="register-form-link">Register</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="login-form" action="{{ route('signin') }}" method="post" role="form" style="display: block;">
                                        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                            <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="E-mail">
                                        </div>
                                        <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                            <label for="remember"> Remember Me</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn btn-skin scroll" value="Log In">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
                                    </form>
                                    <form id="register-form" action="{{ route('signup') }}" method="post" role="form" style="display: none;">
                                        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="E-mail">
                                        </div>
                                        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
                                            <input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="First name">
                                        </div>
                                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
                                            <input type="text" name="last_name" id="last_name" tabindex="2" class="form-control" placeholder="Last name">
                                        </div>
                                        <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                                            <input type="text" name="phone" id="phone" tabindex="3" class="form-control" placeholder="Phone number">
                                        </div>
                                        <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                                            <input type="password" name="password" id="password" tabindex="4" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="5" class="btn btn-skin scroll" value="Register">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: about -->
    
    
    <!-- Section: services -->
    <section id="service" class="home-section text-center">
        
        <div class="heading-about marginbot-50">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
        
                    <div class="section-heading">
                    <h2>Our Servers</h2>
                    <p>Riot Games provides servers to host various aspects in League of Legends.</p>
                    </div>
            
                </div>
            </div>
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3">
            
                <div class="service-box">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-globe fa-3x"></i></a></a>
                    </div>
                    <div class="service-desc">
                        <h5>BR</h5>
                        <p>Brazil</p>
                    </div>
                </div>
    
            </div>
            <div class="col-sm-3 col-md-3">
            
                <div class="service-box">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-globe fa-3x"></i></a>
                    </div>
                    <div class="service-desc">
                        <h5>EUNE</h5>
                        <p>Europe Nordic & East</p>
                    </div>
                </div>
    
            </div><div class="col-sm-3 col-md-3">
            
                <div class="service-box">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-globe fa-3x"></i></a>
                    </div>
                    <div class="service-desc">
                        <h5>EUW</h5>
                        <p>Europe West</p>
                    </div>
                </div>
    
            </div><div class="col-sm-3 col-md-3">
            
                <div class="service-box">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-globe fa-3x"></i></a>
                    </div>
                    <div class="service-desc">
                        <h5>LAN</h5>
                        <p>Latin America North</p>
                    </div>
                </div>
    
            </div><div class="col-sm-3 col-md-3">
            
                <div class="service-box">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-globe fa-3x"></i></a>
                    </div>
                    <div class="service-desc">
                        <h5>LAS</h5>
                        <p>Latin America South</p>
                    </div>
                </div>
    
            </div><div class="col-sm-3 col-md-3">
            
                <div class="service-box">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-globe fa-3x"></i></a>
                    </div>
                    <div class="service-desc">
                        <h5>NA</h5>
                        <p>North America</p>
                    </div>
                </div>
    
            </div><div class="col-sm-3 col-md-3">
            
                <div class="service-box">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-globe fa-3x"></i></a>
                    </div>
                    <div class="service-desc">
                        <h5>OCE</h5>
                        <p>Oceania</p>
                    </div>
                </div>
    
            </div><div class="col-sm-3 col-md-3">
            
                <div class="service-box">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-globe fa-3x"></i></a>
                    </div>
                    <div class="service-desc">
                        <h5>RU</h5>
                        <p>Russia</p>
                    </div>
                </div>
    
            </div><div class="col-sm-3 col-md-3">
            
                <div class="service-box">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-globe fa-3x"></i></a>
                    </div>
                    <div class="service-desc">
                        <h5>TR</h5>
                        <p>Turkey</p>
                    </div>
                </div>
    
            </div><div class="col-sm-3 col-md-3">
            
                <div class="service-box">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-globe fa-3x"></i></a>
                    </div>
                    <div class="service-desc">
                        <h5>JP</h5>
                        <p>Japan</p>
                    </div>
                </div>
    
            </div><div class="col-sm-3 col-md-3">
            
                <div class="service-box">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-globe fa-3x"></i></a>
                    </div>
                    <div class="service-desc">
                        <h5>SEA</h5>
                        <p>South East Asia</p>
                    </div>
                </div>
    
            </div><div class="col-sm-3 col-md-3">
            
                <div class="service-box">
                    <div class="service-icon">
                        <a href="#"><i class="fa fa-globe fa-3x"></i></a>
                    </div>
                    <div class="service-desc">
                        <h5>KR</h5>
                        <p>Republic of Korea</p>
                    </div>
                </div>
    
            </div>
        </div>      
        </div>
    </section>
    <!-- /Section: services -->
@endsection