<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\User;

class AdminPanelLivewire extends Component
{
    public function render()
    {

        return view('livewire.admin-panel-livewire', ['profileImage' => User::where('id', auth()->user()->id)->first() ]);
    }
}
