<?php

namespace App\Http\Livewire;

use App\Models\Cars;
use Livewire\Component;

class Rewiew extends Component
{
    public $record, $subject, $review, $car_id, $rate;


    public function mount($id){
        $this->record= Cars::findOrFail($id);
        $this->car_id= $this->record->id;
    }

    public function render(){
        return view('livewire.review');
    }

    public function resetInput(){
        $this->subject=null;
        $this->review=null;

    }
}
