@extends('public.master')

@section('content')
    <section id="login">
        <div class="container">
            <div class="header text-center">
                <h3>The core of our success in three simple sentences:</h3>
                <h1>Be smart. Be first. Be cool.</h1>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="loginForm">
                            <header class="text-center">
                                <p>Sign in <br> to your account</p>
                            </header>
                            <div class="body">
                                <p>Wrong login or password</p>
                                <form action="#" method="post">
                                    <label for="username">
                                        <span><i class="ico ico-account"></i></span>
                                        <input type="text" id="username" name="username" placeholder="Login">
                                    </label>
                                    <label for="password">
                                        <span><i class="ico ico-password"></i></span>
                                        <input type="password" id="password" name="password" placeholder="Password">
                                    </label>
                                    <button type="submit">Sign In</button>
                                </form>
                            </div>
                            <footer>
                                <a href="#">Forgot your password?</a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection