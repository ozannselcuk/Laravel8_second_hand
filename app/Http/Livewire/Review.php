<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record,$subject,$review,$product_id;

    public function mount($id)
    {
        $this->record = Product::findOrFail($id);
        $this->product_id = $this->record->id;
    }

    public function render()
    {
        return view('livewire.review');
    }

    public function resetInput()
    {
        $this->subject =null;
        $this->review =null;
        $this->product_id=null;
        $this->IP=null;
    }

    public function store()
    {
        $this->validate([
            'subject'=>'required|min:5',
            'review'=>'required|min:10',
        ]);

        \App\Models\Review::create([
            'product_id'=>$this->product_id,
            'user_id'=>Auth::id(),
            'IP'=>$_SERVER['REMOTE_ADDR'],
            'subject'=>$this->subject,
            'review'=>$this->review
        ]);

        session()->flash('message','Review Send Successfully');
        $this->resetInput();
    }
}
