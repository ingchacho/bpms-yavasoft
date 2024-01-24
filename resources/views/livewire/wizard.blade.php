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
        <div class="row setup-content {{ $currentStep != 5 ? 'displayNone' : '' }}" id="step-5">
            <div class="col-12">
                Actua en calidad de (*)
                <div class="input-group{{ $errors->has('encalidad') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-badge"></i>
                        </div>
                    </div>
                    <select name="encalidad" id="encalidad" class="form-control{{ $errors->has('encalidad') ? ' is-invalid' : '' }}" >
                        <option value="">Seleccione una opción</option>         
                        {{-- @foreach ($tipodocumentos as $tipodocumento)
                            <option value="{{ $tipodocumento->id }}">{{ $tipodocumento->descripcion }}</option>
                        @endforeach                    --}}
                    </select>
                    {{-- <input type="text" name="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" placeholder="Tipo de documento" value="{{ old('tipodocumento') }}"> --}}
                    @include('alerts.feedback', ['field' => 'encalidad'])
                </div>
            </div>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(4)">Atras</button>
            <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
        </div>
    </div>