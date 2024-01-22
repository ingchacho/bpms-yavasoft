@extends('layouts.app')

@section('content')

<div class="header-body text-center mb-7">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6">
            <h1>Servicios en linea</h1>
            {{-- <p class="text-lead text-light">
                {{ __('Use White Dashboard theme to create a great project.') }}
            </p> --}}
        </div>
    </div>
</div>
<br>
<br>

<div class="row">
    <div class="col-3"> 
            <div class="card">
                <div class="card-body">
                    <img src="data:image/jpeg;base64,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" alt="">
                    <hr>
                    <h4>Solicitar Accion de Tutela</h4>
                    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quidem, consectetur dolor quod temporibus quis laborum et tempore modi quos, mollitia perferendis sint doloremque fugiat non est voluptatum tempora ex?</p> --}}
                </div>
                <a class="btn btn-primary" href="{{ url('wizard') }}" >Diligenciar</a>
            </div>  
    </div>
    <div class="col-3">
        <div class="card"> 
            <div class="card-body">
                <img src="data:image/jpeg;base64,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" alt="">
                <hr>
                <h4>Impugnacion tutela</h4>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quidem, consectetur dolor quod temporibus quis laborum et tempore modi quos, mollitia perferendis sint</p> --}}
            </div>
            <a class="btn btn-primary" href="#">Diligenciar</a>
        </div>
    </div>
    <div class="col-3">
        <div class="card">
            <div class="card-body">
                <img src="https://copropiedades.com.co/wp-content/uploads/2023/03/DERECHO-DE-PETICION-.webp" alt="">
                <hr>
                <h4>Derecho de peticion</h4>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate minima, illo quos corporis dolorum quia. At, blanditiis cumque! Dicta iure possimus illum impedit</p> --}}
            </div>
            <a class="btn btn-primary" href="#">Diligenciar</a>
        </div>    
    </div>
    <div class="col-3">

        <div class="card">
            <div class="card-body">
                <img src="https://www.creativasesores.com/images/easyblog_articles/33/asesoria-empresas-sevilla-tecnologia.png" alt="">
                <hr>
                <h4>Asesoria juridica</h4>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate minima, illo quos corporis dolorum quia. At, blanditiis cumque! Dicta iure possimus illum impedit blanditiis ducimus magni</p> --}}
            </div>
            <a class="btn btn-primary" href="#">Diligenciar</a>
        </div>    
    </div>
    <div class="col-3">
        <div class="card">
            <div class="card-body">
                <img src="data:image/jpeg;base64,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" alt="">
                <hr>
                <h4>Incidente de desacato</h4>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quidem, consectetur dolor quod temporibus quis laborum et tempore modi quos, mollitia perferendis sint doloremque fugiat non est voluptatum tempora ex?</p> --}}
            </div>
            <a class="btn btn-primary" href="#">Diligenciar</a>
        </div>        
    </div>
    <div class="col-3">
        <div class="card">
            <div class="card-body">
                <img src="https://www.infobae.com/new-resizer/1PxHAV24_0KHTU-OSeuqqa7RR1U=/992x614/filters:format(webp):quality(85)/cloudfront-us-east-1.images.arcpublishing.com/infobae/MF4G64YOPFGFPMZ6N4INCVGNLE.jpg" alt="">
                <hr>
                <h4>Amparo de pobreza</h4>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quidem, consectetur dolor quod temporibus quis laborum et tempore modi quos, mollitia perferendis sint</p> --}}
            </div>
            <a class="btn btn-primary" href="#">Diligenciar</a>
        </div>                
    </div>
    <div class="col-3">
        <div class="card">
            <div class="card-body">
                <img src="https://tecnosolucionescr.net/templates/yootheme/cache/producto-3ac3cfb7.png" alt="">
                <hr>
                <h4>Derechos del consumidor</h4>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quidem, consectetur dolor quod temporibus quis laborum et tempore modi quos, mollitia perferendis sint doloremque fugiat non est</p> --}}
            </div>
            <a class="btn btn-primary" href="#">Diligenciar</a>
        </div>                        
    </div>
    <div class="col-3">
        <div class="card">
            <div class="card-body">
                <img src="https://panoramadirecto.com/wp-content/uploads/2023/06/submachine-gun-rifle-automatic-weapon-weapon-78783.jpeg" alt="">
                <hr>
                <h4>RRA conflicto armado</h4>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quidem, consectetur dolor quod temporibus quis laborum et tempore modi quos, mollitia perferendis sint</p> --}}
            </div>
            <a class="btn btn-primary" href="#">Diligenciar</a>
        </div>                                
    </div>
</div>
    {{-- <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1> Hola bienvenidos</h1>
                        <p class="text-lead text-light">
                            {{ __('Use White Dashboard theme to create a great project.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
