<?php
  
namespace App\Livewire;
  
use Livewire\Component;
use App\Models\Product;
use App\Models\Tipodocumento;
  
class Wizard extends Component
{
    public $currentStep = 1;
    public $name, $amount, $description, $status = 1, $stock;
    public $successMessage = '';
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        $tipodocumentos = Tipodocumento::all(); 
        return view('livewire.wizard', compact('tipodocumentos'));
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
    public function submitForm()
    {
        Product::create([
            'name' => $this->name,
            'amount' => $this->amount,
            'description' => $this->description,
            'stock' => $this->stock,
            'status' => $this->status,            
        ]);
  
        $this->successMessage = 'Product Created Successfully.';
  
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
        $this->name = '';
        $this->amount = '';
        $this->description = '';
        $this->stock = '';
        $this->status = 1;
    }
}