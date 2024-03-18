<?php

namespace App\Livewire;

use App\Models\PhoneNumber;
use Livewire\Component;

class AddPhoneNumbersLivewire extends Component
{
    public $phoneNumber, $PhoneNumber;
    public function render()
    {
        return view('livewire.add-phone-numbers-livewire');
    }
    public function addNewPhoneNumber(){
        $this->validate(['PhoneNumber' => 'required|digits:10']);
        $phoneNumber = new PhoneNumber();
        $phoneNumber->user_id = auth()->user()->id;
        $phoneNumber->phone_numbers = $this->PhoneNumber;
        $phoneNumber->save();

        session()->flash('phone', 'Phone number is added successfully.');
        $this->PhoneNumber = '';
    }
}
