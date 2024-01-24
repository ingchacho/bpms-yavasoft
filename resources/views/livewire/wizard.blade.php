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
                <h5>Información servicio</h5>
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
            {{-- <div class="col-12">
                <h3>Información de nacimiento</h3>
            </div> --}}
            <div class="col-xs-12">
                <div class="col-md-12">
                    {{-- <h3>Información de nacimiento</h3> --}}
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
      
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
                    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
                </div>
            </div>
        </div>
        <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
            {{-- <div class="col-12">
                <h3>Información de ubicación</h3>
            </div> --}}
            <div class="col-xs-12">
                <div class="col-md-12">
                    {{-- <h3>Información de ubicación</h3> --}}
                    <table class="table">
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
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
                    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
                </div>
            </div>
        </div>
        <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">Back</button>
        </div>
        <div class="row setup-content {{ $currentStep != 5 ? 'displayNone' : '' }}" id="step-5">
            <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(4)">Back</button>
        </div>
    </div>