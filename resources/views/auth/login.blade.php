<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>{{ __('Login') }}</title>
   <!-- Style files -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- Custom fonts for this template-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">
   <!-- droplist search -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>

<body id="page-top">
   {{-- top nav --}}
   <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
      <div class="container">
         <a class="navbar-brand" href="/">
            <span class="brand">ON</span>
            <small class="span">Road</small>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
               <!-- Authentication Links -->
               @guest
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
               </li>
               @if (Route::has('register'))
               {{-- <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
               </li> --}}
               @endif
               @else
               <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
                  </div>
               </li>
               @endguest
            </ul>
         </div>
      </div>
   </nav>
   <!-- Page Wrapper -->
   <div id="wrapper">
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
         <!-- Main Content -->
         <div id="content">
            <!-- main body -->
            <div class="container in">
               <!-- form -->
               <form class="log-in" method="POST" action="{{ route('login') }}">
                  @csrf
                  <!-- form div -->
                  <div class="center">
                     <h2 class="font-weight-bold text-primary">{{ __('Login') }}</h2>
                     <!-- User Mail -->
                     <div class="form-group row">
                        <div class="col">
                           <div class="input-group">
                              <!-- icon div -->
                              <div class="input-group-prepend">
                                 <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                              </div>
                              <!-- mail input -->
                              <input id="email" type="email"
                                 class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                 value="{{ old('email') }}" required autofocus>

                              @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('email') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                     </div>
                     <!-- User Pass -->
                     <div class="form-group row ">
                        <div class="col">
                           <div class="input-group">
                              <!-- icon div -->
                              <div class="input-group-prepend">
                                 <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                              </div>
                              <!-- password input -->
                              <input id="password" type="password"
                                 class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                 required autocomplete="off">

                              @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('password') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                     </div>
                     <!-- Remember me -->
                     <div class="form-group form-check col">
                        <div class="checkbox">
                           <input id="remember" type="checkbox" name="gender" {{ old('remember') ? 'checked' : '' }}
                              name="remember">
                           <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>
                        {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember"
                           {{ old('remember') ? 'checked' : '' }}> --}}

                        {{-- <label class="form-check-label" for="remember">
                           {{ __('Remember Me') }}
                        </label> --}}
                     </div>
                     <!-- submit btn -->
                     <div class="form-group row mb-0">
                        <div class="col">
                           <button type="submit" class="btn btn-primary">
                              {{ __('Login') }}
                           </button>

                           @if (Route::has('password.request'))
                           <a class="btn btn-link" href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                           </a>
                           @endif
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- script files -->
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="js/script.js"></script>
</body>

</html>