<?php
  
namespace App\Livewire;

use Illuminate\Http\Request;  
use Livewire\Component;
// use App\Models\Product;
use App\Models\Tipodocumento;
use App\Models\identidadgenero;
use App\Models\nivelacademico;
use App\Models\profesion;
use App\Models\poblacion;
use App\Models\etnia;

use App\Models\pais;
use App\Models\departamento;
use App\Models\ciudades;
use App\Models\comunas;
use App\Models\barrios;
  
class Wizard extends Component
{
    public $currentStep = 1;
    // public $name, $amount, $description, $status = 1, $stock;
    public $successMessage = '';
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        $tipodocumentos = Tipodocumento::all(); 
        $identidadgeneros = identidadgenero::all(); 
        $nivelacademicos = nivelacademico::all();     
        $profesions = profesion::all();     
        $poblacions = poblacion::all();     
        $etnias = etnia::all();     
        $pais = pais::all();     
        
        return view('livewire.wizard', compact('tipodocumentos', 'identidadgeneros', 'nivelacademicos', 'profesions', 'poblacions', 'etnias', 'pais'));
    }
  
    public function getDepartamentos($id)
    {
        $departamentos = departamento::where('pais_id', $id)->get();
        return response()->json($departamentos);
    }

     public function getCiudades($id)
    {
        $ciudades = ciudades::where('depto_id', $id)->get();
        return response()->json($ciudades);
    }


    public function getComunas($id)
    {
        $comunas = comunas::where('ciudad_id', $id)->get();
        return response()->json($comunas);
    }


    public function getBarrios($id)
    {
        $barrios = barrios::where('comuna_id', $id)->get();
        return response()->json($barrios);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()   
    {
        // $validatedData = $this->validate([
        //     'name' => 'required',
        //     'amount' => 'required|numeric',
        //     'description' => 'required',
        // ]);
 
        $this->currentStep = 2;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        // $validatedData = $this->validate([
        //     'stock' => 'required',
        //     'status' => 'required',
        // ]);
  
        $this->currentStep = 3;
    }
  
    public function thirdStepSubmit()
    {
        $this->currentStep = 4;
    }
    
    public function fourthStepSubmit()
    {
        $this->currentStep = 5;
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm(Request $request)
    {

        dd($request);
        // Product::create([
        //     'name' => $this->name,
        //     'amount' => $this->amount,
        //     'description' => $this->description,
        //     'stock' => $this->stock,
        //     'status' => $this->status,            
        // ]);
  
        $this->successMessage = 'Información registrada con exito';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        // $this->name = '';
        // $this->amount = '';
        // $this->description = '';
        // $this->stock = '';
        // $this->status = 1;
    }
}