{{-- @extends('layouts.app', ['class' => 'register-page', 'page' => __('Register Page'), 'contentClass' => 'register-page']) --}}

{{-- @extends('layouts.app') --}}


<!DOCTYPE html>
<html>
  <head>
      <title>Servicios en linea</title>
      @livewireStyles
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('white') }}/img/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('white') }}/img/favicon.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('white') }}/css/nucleo-icons.css" rel="stylesheet" />
        <!-- CSS -->
        <link href="{{ asset('white') }}/css/white-dashboard.css?v=1.0.0" rel="stylesheet" />
        <link href="{{ asset('white') }}/css/theme.css" rel="stylesheet" />

      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>    
      <link href="{{ asset('wizard.css') }}" rel="stylesheet" id="bootstrap-css">
  </head>
  <body class="white-content {{ $class ?? '' }}">    
    <div class="container">    
        <div class="card card-register card-white">
          <div class="card-header">
          </div>
          <div class="card-body">
            <h1>Tutela en linea</h1>

            <livewire:wizard />
          </div>
        </div>        
    </div>    
  </body>
  @livewireScripts
</html>