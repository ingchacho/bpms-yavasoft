<div>
   
    @if(!empty($successMessage))
    <div class="alert alert-success">
       {{ $successMessage }}
    </div>
    @endif
      
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                <p>Información Personal</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <p>Información de nacimiento</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}">3</a>
                <p>Información ubicación</p>
            </div>
        </div>
    </div>
      
        <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <div class="input-group{{ $errors->has('tipodocumento') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-badge"></i>
                            </div>
                        </div>
                        <select name="tipodocumento" id="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" >
                            <option value="">Selecione una opcion</option>
                            <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                            <option value="Cedula de extrangeria">Cedula de extrangeria</option>
                            <option value="Libreta militar">Libreta militar</option>
                        </select>
                        {{-- <input type="text" name="tipodocumento" class="form-control{{ $errors->has('tipodocumento') ? ' is-invalid' : '' }}" placeholder="Tipo de documento" value="{{ old('tipodocumento') }}"> --}}
                        @include('alerts.feedback', ['field' => 'tipodocumento'])
                    </div>


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
      
                    <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
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
      
                    <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
                </div>
            </div>
        </div>
    </div>