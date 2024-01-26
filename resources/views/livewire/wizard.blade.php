<div>
   
    @if(!empty($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif
      
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-circle  {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                <h5>Información Personal</h5>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <h5>Información de nacimiento</h5>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}">3</a>
                <h5>Información ubicación</h5>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-circle {{ $currentStep != 4 ? 'btn-default' : 'btn-primary' }}">4</a>
                <h5>Información caracterización</h5>
            </div>
            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-circle {{ $currentStep != 5 ? 'btn-default' : 'btn-primary' }}">5</a>
                <h5>Información servicio solicitado</h5>
            </div>
        </div>
    </div>
        {{-- inf personal --}}
        <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">    
            {{-- <div class="col-12">
                <h3>Información Personal</h3>
            </div> --}}
            <div class="col-6">            
                <div class="input-group{{ $errors->has('tipodocumento') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="tipodocumento" id="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" >
                        <option value="">Tipo de documento (*)</option>         
                        @foreach ($tipodocumentos as $tipodocumento)
                            <option value="{{ $tipodocumento->id }}">{{ $tipodocumento->descripcion }}</option>
                        @endforeach                   
                    </select>
                    {{-- <input type="text" name="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" placeholder="Tipo de documento" value="{{ old('tipodocumento') }}"> --}}
                    @include('alerts.feedback', ['field' => 'tipodocumento'])
                </div>
            </div>
            <div class="col-6">            
                <div class="input-group{{ $errors->has('numerodocumento') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-lock-circle"></i>
                        </div>
                    </div>
                    <input type="text" placeholder="Número de documento (*)" id="numerodocumento" name="numerodocumento" class="form-control{{ $errors->has('numerodocumento') ? ' is-invalid' : '' }}">
                    @include('alerts.feedback', ['field' => 'numerodocumento'])
                </div>
            </div>
            <div class="col-6">            
                <div class="input-group{{ $errors->has('nombres') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-single-02"></i>
                        </div>
                    </div>
                    <input type="text" placeholder="Nombres (*)" wire:model="nombres" id="nombres" name="nombres" class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}">
                    @include('alerts.feedback', ['field' => 'nombres'])
                </div>
            </div>
            <div class="col-6">            
                <div class="input-group{{ $errors->has('apellidos') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-single-02"></i>
                        </div>
                    </div>
                    <input type="text" placeholder="Apellidos (*)" id="apellidos" name="apellidos" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}">
                    @include('alerts.feedback', ['field' => 'apellidos'])
                </div>
            </div>       
            <div class="col-6">            
                <div class="input-group{{ $errors->has('nombres') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-link-72"></i>
                        </div>
                    </div>
                    <select name="identidadgenero" id="identidadgenero" class="form-control{{ $errors->has('identidadgenero') ? ' is-invalid' : '' }}" >
                        <option value="">Identidad de genero (*)</option>         
                        {{-- @foreach ($identidadgeneros as $identidadgenero)
                            <option value="{{ $identidadgenero->id }}">{{ $identidadgenero->descripcion }}</option>
                        @endforeach                    --}}
                    </select>                    
                    @include('alerts.feedback', ['field' => 'identidadgenero'])
                </div>
            </div>
            <div class="col-6">            
                <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-email-85"></i>
                        </div>
                    </div>
                    <input type="email" placeholder="Email (*)" id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
                    @include('alerts.feedback', ['field' => 'email'])
                </div>
            </div>         
            <div class="col-6">            
                <div class="input-group{{ $errors->has('telefono') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-tap-02"></i>
                        </div>
                    </div>
                    <input type="text" placeholder="Telefono fijo" id="telefono" name="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}">
                    @include('alerts.feedback', ['field' => 'telefono'])
                </div>
            </div>    
            <div class="col-6">            
                <div class="input-group{{ $errors->has('celular') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-wifi"></i>
                        </div>
                    </div>
                    <input type="text" placeholder="Celular WhatsApp (*)" id="celular" name="celular" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}">
                    @include('alerts.feedback', ['field' => 'celular'])
                </div>
            </div>       
            <div class="col-xs-12">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Product Name:</label>
                        <input type="text" wire:model="name" class="form-control" id="taskTitle">
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Product Amount:</label>
                        <input type="text" wire:model="amount" class="form-control" id="productAmount"/>
                        @error('amount') <span class="error">{{ $message }}</span> @enderror
                    </div>
      
                    <div class="form-group">
                        <label for="description">Product Description:</label>
                        <textarea type="text" wire:model="description" class="form-control" id="taskDescription">{{{ $description ?? '' }}}</textarea>
                        @error('description') <span class="error">{{ $message }}</span> @enderror
                    </div>
      
                    <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" >Siguiente</button>
                </div>
            </div>
        </div>
        {{-- inf nacimiento --}}
        <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
            
            <div class="col-6">     
                Fecha de nacimiento (*)       
                <div class="input-group{{ $errors->has('fechanacimiento') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <input type="date" name="fechanacimiento" class="form-control{{ $errors->has('fechanacimiento') ? ' is-invalid' : '' }}" placeholder="Fecha de nacimiento" value="{{ old('fechanacimiento') }}">
                    @include('alerts.feedback', ['field' => 'tipodocumento'])
                    <input type="text" name="edad" class="form-control" placeholder="Edad" value="{{ old('edad') }}" readonly>
                </div>
            </div>

            <div class="col-6">            
                Pais de nacimiento (*)
                <div class="input-group{{ $errors->has('paisnacimiento') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="paisnacimiento" id="paisnacimiento" class="form-control{{ $errors->has('paisnacimiento') ? ' is-invalid' : '' }}" >
                        <option value="">Seleccione una opcion</option>         
                        {{-- @foreach ($tipodocumentos as $tipodocumento)
                            <option value="{{ $tipodocumento->id }}">{{ $tipodocumento->descripcion }}</option>
                        @endforeach                    --}}
                    </select>
                    @include('alerts.feedback', ['field' => 'paisnacimiento'])
                </div>
            </div>

            <div class="col-6">            
                Departamento de nacimiento (*)
                <div class="input-group{{ $errors->has('departamentonacimiento') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="departamentonacimiento" id="departamentonacimiento" class="form-control{{ $errors->has('departamentonacimiento') ? ' is-invalid' : '' }}" >
                        <option value="">Seleccione una opción</option>         
                        {{-- @foreach ($tipodocumentos as $tipodocumento)
                            <option value="{{ $tipodocumento->id }}">{{ $tipodocumento->descripcion }}</option>
                        @endforeach                    --}}
                    </select>
                    {{-- <input type="text" name="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" placeholder="Tipo de documento" value="{{ old('tipodocumento') }}"> --}}
                    @include('alerts.feedback', ['field' => 'departamentonacimiento'])
                </div>
            </div>

            <div class="col-6">          
                Municipio de nacimiento (*)  
                <div class="input-group{{ $errors->has('municipionacimiento') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="municipionacimiento" id="municipionacimiento" class="form-control{{ $errors->has('municipionacimiento') ? ' is-invalid' : '' }}" >
                        <option value="">Seleccione una opción</option>         
                        {{-- @foreach ($municipionacimientos as $municipionacimiento)
                            <option value="{{ $municipionacimiento->id }}">{{ $municipionacimiento->descripcion }}</option>
                        @endforeach                    --}}
                    </select>
                    {{-- <input type="text" name="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" placeholder="Tipo de documento" value="{{ old('tipodocumento') }}"> --}}
                    @include('alerts.feedback', ['field' => 'municipionacimiento'])
                </div>
            </div>
           
                {{-- <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Product Status</label><br/>
                        <label class="radio-inline"><input type="radio" wire:model="status" value="1" {{{ $status == '1' ? "checked" : "" }}}> Active</label>
                        <label class="radio-inline"><input type="radio" wire:model="status" value="0" {{{ $status == '0' ? "checked" : "" }}}> DeActive</label>
                        @error('status') <span class="error">{{ $message }}</span> @enderror
                    </div>
      
                    <div class="form-group">
                        <label for="description">Product Stock</label>
                        <input type="text" wire:model="stock" class="form-control" id="productAmount"/>
                        @error('stock') <span class="error">{{ $message }}</span> @enderror
                    </div>
      
                    
                </div> --}}
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Atras</button>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Siguiente</button>

        </div>
        {{-- inf ubicacion --}}
        <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
            <div class="col-6">            
                Pais de residencia (*)
                <div class="input-group{{ $errors->has('paisresidencia') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="paisresidencia" id="paisresidencia" class="form-control{{ $errors->has('paisresidencia') ? ' is-invalid' : '' }}" >
                        <option value="">Seleccione una opcion</option>         
                        {{-- @foreach ($tipodocumentos as $tipodocumento)
                            <option value="{{ $tipodocumento->id }}">{{ $tipodocumento->descripcion }}</option>
                        @endforeach                    --}}
                    </select>
                    @include('alerts.feedback', ['field' => 'paisresidencia'])
                </div>
            </div>

            <div class="col-6">            
                Departamento de residencia (*)
                <div class="input-group{{ $errors->has('departamentoresidencia') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="departamentoresidencia" id="departamentoresidencia" class="form-control{{ $errors->has('departamentoresidencia') ? ' is-invalid' : '' }}" >
                        <option value="">Seleccione una opción</option>         
                        {{-- @foreach ($tipodocumentos as $tipodocumento)
                            <option value="{{ $tipodocumento->id }}">{{ $tipodocumento->descripcion }}</option>
                        @endforeach                    --}}
                    </select>
                    {{-- <input type="text" name="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" placeholder="Tipo de documento" value="{{ old('tipodocumento') }}"> --}}
                    @include('alerts.feedback', ['field' => 'departamentoresidencia'])
                </div>
            </div>

            <div class="col-6">          
                Municipio de residencia (*)  
                <div class="input-group{{ $errors->has('municipioresidencia') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="municipioresidencia" id="municipioresidencia" class="form-control{{ $errors->has('municipioresidencia') ? ' is-invalid' : '' }}" >
                        <option value="">Seleccione una opción</option>         
                        {{-- @foreach ($municipionacimientos as $municipionacimiento)
                            <option value="{{ $municipionacimiento->id }}">{{ $municipionacimiento->descripcion }}</option>
                        @endforeach                    --}}
                    </select>
                    {{-- <input type="text" name="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" placeholder="Tipo de documento" value="{{ old('tipodocumento') }}"> --}}
                    @include('alerts.feedback', ['field' => 'municipioresidencia'])
                </div>
            </div>

            <div class="col-6">            
                Comuna residencia (*)
                <div class="input-group{{ $errors->has('comunaresidencia') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="comunaresidencia" id="comunaresidencia" class="form-control{{ $errors->has('comunaresidencia') ? ' is-invalid' : '' }}" >
                        <option value="">Seleccione una opcion</option>         
                        {{-- @foreach ($tipodocumentos as $tipodocumento)
                            <option value="{{ $tipodocumento->id }}">{{ $tipodocumento->descripcion }}</option>
                        @endforeach                    --}}
                    </select>
                    @include('alerts.feedback', ['field' => 'comunaresidencia'])
                </div>
            </div>

            <div class="col-6">            
                Barrio de residencia (*)
                <div class="input-group{{ $errors->has('barrioresidencia') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="barrioresidencia" id="barrioresidencia" class="form-control{{ $errors->has('barrioresidencia') ? ' is-invalid' : '' }}" >
                        <option value="">Seleccione una opción</option>         
                        {{-- @foreach ($tipodocumentos as $tipodocumento)
                            <option value="{{ $tipodocumento->id }}">{{ $tipodocumento->descripcion }}</option>
                        @endforeach                    --}}
                    </select>
                    {{-- <input type="text" name="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" placeholder="Tipo de documento" value="{{ old('tipodocumento') }}"> --}}
                    @include('alerts.feedback', ['field' => 'barrioresidencia'])
                </div>
            </div>

            <div class="col-6">          
                Dirección residencia (*)  
                <div class="input-group{{ $errors->has('direccionresidencia') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>                  
                    <input type="text" name="direccionresidencia" class="form-control{{ $errors->has('direccionresidencia') ? ' is-invalid' : '' }}" placeholder="Direccion de residencia" value="{{ old('direccionresidencia') }}">
                    @include('alerts.feedback', ['field' => 'direccionresidencia'])
                </div>
            </div>
            {{-- <div class="col-12">
                <h3>Información de ubicación</h3>
            </div> --}}
            {{-- <div class="col-xs-12">
                <div class="col-md-12"> --}}
                    {{-- <h3>Información de ubicación</h3> --}}
                    {{-- <table class="table">
                        <tr>
                            <td>Product Name:</td>
                            <td><strong>{{$name}}</strong></td>
                        </tr>
                        <tr>
                            <td>Product Amount:</td>
                            <td><strong>{{$amount}}</strong></td>
                        </tr>
                        <tr>
                            <td>Product status:</td>
                            <td><strong>{{$status ? 'Active' : 'DeActive'}}</strong></td>
                        </tr>
                        <tr>
                            <td>Product Description:</td>
                            <td><strong>{{$description}}</strong></td>
                        </tr>
                        <tr>
                            <td>Product Stock:</td>
                            <td><strong>{{$stock}}</strong></td>
                        </tr>
                    </table>
                    
                </div>
            </div> --}}
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Atras</button>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="thirdStepSubmit">Siguiente</button>
        </div>
        {{-- inf caracterizacion --}}
        <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">

            <div class="col-6">            
                Nivel academico (*)
                <div class="input-group{{ $errors->has('nivelacademico') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="nivelacademico" id="nivelacademico" class="form-control{{ $errors->has('nivelacademico') ? ' is-invalid' : '' }}" >
                        <option value="">Seleccione una opción</option>         
                        {{-- @foreach ($tipodocumentos as $tipodocumento)
                            <option value="{{ $tipodocumento->id }}">{{ $tipodocumento->descripcion }}</option>
                        @endforeach                    --}}
                    </select>
                    {{-- <input type="text" name="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" placeholder="Tipo de documento" value="{{ old('tipodocumento') }}"> --}}
                    @include('alerts.feedback', ['field' => 'nivelacademico'])
                </div>
            </div>
            <div class="col-6">            
                Profesion oficio u ocupación (*)
                <div class="input-group{{ $errors->has('profesion') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="profesion" id="profesion" class="form-control{{ $errors->has('profesion') ? ' is-invalid' : '' }}" >
                        <option value="">Seleccione una opción</option>         
                        {{-- @foreach ($tipodocumentos as $tipodocumento)
                            <option value="{{ $tipodocumento->id }}">{{ $tipodocumento->descripcion }}</option>
                        @endforeach                    --}}
                    </select>
                    {{-- <input type="text" name="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" placeholder="Tipo de documento" value="{{ old('tipodocumento') }}"> --}}
                    @include('alerts.feedback', ['field' => 'profesion'])
                </div>
            </div>
            <div class="col-6">            
                Grupo poblacional (*)
                <div class="input-group{{ $errors->has('grupopoblacional') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="grupopoblacional" id="grupopoblacional" class="form-control{{ $errors->has('grupopoblacional') ? ' is-invalid' : '' }}" >
                        <option value="">Seleccione una opción</option>         
                        {{-- @foreach ($tipodocumentos as $tipodocumento)
                            <option value="{{ $tipodocumento->id }}">{{ $tipodocumento->descripcion }}</option>
                        @endforeach                    --}}
                    </select>
                    {{-- <input type="text" name="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" placeholder="Tipo de documento" value="{{ old('tipodocumento') }}"> --}}
                    @include('alerts.feedback', ['field' => 'grupopoblacional'])
                </div>
            </div>
            <div class="col-6">            
                Etnia (*)
                <div class="input-group{{ $errors->has('etnia') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="etnia" id="etnia" class="form-control{{ $errors->has('etnia') ? ' is-invalid' : '' }}" >
                        <option value="">Seleccione una opción</option>         
                        {{-- @foreach ($tipodocumentos as $tipodocumento)
                            <option value="{{ $tipodocumento->id }}">{{ $tipodocumento->descripcion }}</option>
                        @endforeach                    --}}
                    </select>
                    {{-- <input type="text" name="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" placeholder="Tipo de documento" value="{{ old('tipodocumento') }}"> --}}
                    @include('alerts.feedback', ['field' => 'etnia'])
                </div>
            </div>

            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">Atras</button>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="fourthStepSubmit">Siguiente</button>
        </div>
        {{-- inf servicio --}}
        <div class="row setup-content {{ $currentStep != 5 ? 'displayNone' : '' }}" id="step-5">
            
            <div class="col-12">
                Actua en calidad de (*)
                <div class="input-group{{ $errors->has('encalidad') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="encalidad" id="encalidad" class="form-control{{ $errors->has('encalidad') ? ' is-invalid' : '' }}" onchange="mostrarOcultarCampos1();">
                        <option value="">Seleccione una opción</option>         
                        <option value="EN NOMBRE PROPIO">EN NOMBRE PROPIO</option>
                        <option value="AGENTE OFICIOSO">AGENTE OFICIOSO</option>
                        <option value="REPRESENTANTE LEGAL">REPRESENTANTE LEGAL</option>
                    </select>
                    {{-- <input type="text" name="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" placeholder="Tipo de documento" value="{{ old('tipodocumento') }}"> --}}
                    @include('alerts.feedback', ['field' => 'encalidad'])
                </div>
            </div>
            
            <div class="col-12" id="camposAnonimos" style="display:none;">
                
                <div class="col-12">
                    <div class="input-group{{ $errors->has('numerodocumentorp') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-badge"></i>
                            </div>
                        </div>                
                        <input type="text" name="numerodocumentorp" class="form-control{{ $errors->has('numerodocumentorp') ? ' is-invalid' : '' }}" placeholder="Número de documento" value="{{ old('tipodocumento') }}">
                        @include('alerts.feedback', ['field' => 'numerodocumentorp'])
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group{{ $errors->has('nombresrp') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-badge"></i>
                            </div>
                        </div>                
                        <input type="text" name="nombresrp" class="form-control{{ $errors->has('nombresrp') ? ' is-invalid' : '' }}" placeholder="Nombres" value="{{ old('nombresrp') }}">
                        @include('alerts.feedback', ['field' => 'nombresrp'])
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group{{ $errors->has('apellidosrp') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-badge"></i>
                            </div>
                        </div>                
                        <input type="text" name="apellidosrp" class="form-control{{ $errors->has('apellidosrp') ? ' is-invalid' : '' }}" placeholder="Apellidos" value="{{ old('apellidosrp') }}">
                        @include('alerts.feedback', ['field' => 'apellidosrp'])
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group{{ $errors->has('telefonorp') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-badge"></i>
                            </div>
                        </div>                
                        <input type="text" name="telefonorp" class="form-control{{ $errors->has('telefonorp') ? ' is-invalid' : '' }}" placeholder="Teléfono fijo" value="{{ old('telefonorp') }}">
                        @include('alerts.feedback', ['field' => 'telefonorp'])
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group{{ $errors->has('celularrp') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-badge"></i>
                            </div>
                        </div>                
                        <input type="text" name="celularrp" class="form-control{{ $errors->has('celularrp') ? ' is-invalid' : '' }}" placeholder="Número Celular" value="{{ old('celularrp') }}">
                        @include('alerts.feedback', ['field' => 'celularrp'])
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group{{ $errors->has('emailrp') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-badge"></i>
                            </div>
                        </div>                
                        <input type="email" name="emailrp" class="form-control{{ $errors->has('emailrp') ? ' is-invalid' : '' }}" placeholder="Email" value="{{ old('emailrp') }}">
                        @include('alerts.feedback', ['field' => 'emailrp'])
                    </div>
                </div>

                <div class="col-12">
                    Copia documento de identidad (*)
                    <div class="input-group{{ $errors->has('copiacedularp') ? ' has-danger' : '' }}">
                        <input type="file" name="copiacedularp" class="{{ $errors->has('copiacedularp') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'copiacedularp'])
                    </div>
                </div>
            </div>

            <div class="col-12  border"></div>
                <div class="col-6">
                    <div class="input-group{{ $errors->has('nombreentidad') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-badge"></i>
                            </div>
                        </div>                
                        <input type="text" name="nombreentidad" class="form-control{{ $errors->has('nombreentidad') ? ' is-invalid' : '' }}" placeholder="Nombre de la entidad que esta vulnerando su derecho (*)" value="{{ old('nombreentidad') }}">
                        @include('alerts.feedback', ['field' => 'nombreentidad'])
                    </div>              
                </div>
                <div class="col-6">
                    <div class="input-group{{ $errors->has('ciudaddireccionentidad') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-badge"></i>
                            </div>
                        </div>                
                        <input type="text" name="ciudaddireccionentidad" class="form-control{{ $errors->has('ciudaddireccionentidad') ? ' is-invalid' : '' }}" placeholder="Ciudad y dirección de la entidad que esta vulnerando su derecho (*)" value="{{ old('ciudaddireccionentidad') }}">
                        @include('alerts.feedback', ['field' => 'ciudaddireccionentidad'])
                    </div>              
                </div>
                <div class="col-6">
                    <div class="input-group{{ $errors->has('telefonoentidad') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-badge"></i>
                            </div>
                        </div>                
                        <input type="text" name="telefonoentidad" class="form-control{{ $errors->has('telefonoentidad') ? ' is-invalid' : '' }}" placeholder="Télefono de la entidad que esta vulnerando su derecho (*)" value="{{ old('telefonoentidad') }}">
                        @include('alerts.feedback', ['field' => 'telefonoentidad'])
                    </div>              
                </div>
                <div class="col-6">
                    <div class="input-group{{ $errors->has('emailentidad') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-badge"></i>
                            </div>
                        </div>                
                        <input type="text" name="emailentidad" class="form-control{{ $errors->has('emailentidad') ? ' is-invalid' : '' }}" placeholder="Email de la entidad que esta vulnerando su derecho (*)" value="{{ old('nombreentidad') }}">
                        @include('alerts.feedback', ['field' => 'emailentidad'])
                    </div>              
                </div>

                <div class="col-12">
                    Adjunte una copia ampliada del documento de identidad del afectado por ambos lados (*)
                    <div class="input-group{{ $errors->has('copiadocumentoafectado') ? ' has-danger' : '' }}">
                        <input type="file" name="copiadocumentoafectado" class="{{ $errors->has('copiadocumentoafectado') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'copiadocumentoafectado'])
                    </div>
                </div>


                <div class="col-12">
                    Ha tramitado una tutela con anterioridad por los hechos planteados (*)
                    <div class="input-group{{ $errors->has('tutelaanterior') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-badge"></i>
                            </div>
                        </div>
                        <select name="tutelaanterior" id="tutelaanterior" class="form-control{{ $errors->has('tutelaanterior') ? ' is-invalid' : '' }}" onchange="mostrarOcultarCampos2();" >
                            <option value="">Seleccione una opción</option>         
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                        @include('alerts.feedback', ['field' => 'tutelaanterior'])
                    </div>
                </div>

                <div class="col-12" id="camposAnonimos1" style="display:none;">
                    <div class="col-12">
                        Adjunte una copia dela tutela anterior (*)
                        <div class="input-group{{ $errors->has('copiatutelaanterior') ? ' has-danger' : '' }}">                        
                            <input type="file" name="copiatutelaanterior" class="{{ $errors->has('copiatutelaanterior') ? ' is-invalid' : '' }}">
                            @include('alerts.feedback', ['field' => 'copiatutelaanterior'])
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    Resumen de los hechos (*)
                    <div class="input-group{{ $errors->has('copiatutelaanterior') ? ' has-danger' : '' }}">
                        {{-- <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-badge"></i>
                            </div>
                        </div>                 --}}
                        <textarea type="text" wire:model="description" class="form-control" id="taskDescription">{{{ $description ?? '' }}}</textarea>
                        @include('alerts.feedback', ['field' => 'copiatutelaanterior'])
                    </div>                  
                </div>

                <div class="col-12">
                    Adjunte una copia de las evidencias que soportan los hechos (*):
                    <div class="input-group{{ $errors->has('copiatutelaanterior') ? ' has-danger' : '' }}">                       
                        <input type="file" name="copiatutelaanterior" class="{{ $errors->has('copiatutelaanterior') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'copiatutelaanterior'])
                    </div>
                </div>

            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(4)">Atras</button>
            <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
        </div>
</div>



<script>
    function mostrarOcultarCampos1() {
        let encalidad = document.getElementById("encalidad");
        let camposAnonimos = document.getElementById("camposAnonimos");        
        if (encalidad.value === "EN NOMBRE PROPIO" || encalidad.value === ""){
            camposAnonimos.style.display = "none";
        } else {
            camposAnonimos.style.display = "block";
        }
    }


    function mostrarOcultarCampos2() {
        let tutelaanterior = document.getElementById("tutelaanterior");
        let camposAnonimos1 = document.getElementById("camposAnonimos1");        
        if (tutelaanterior.value === "NO" || tutelaanterior.value === ""){
            camposAnonimos1.style.display = "none";
        } else {
            camposAnonimos1.style.display = "block";
        }
    }
</script>