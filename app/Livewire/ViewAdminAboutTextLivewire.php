<?php

namespace App\Livewire;

use App\Models\AboutText;
use Livewire\Component;

class ViewAdminAboutTextLivewire extends Component
{
    public function render()
    {
        return view('livewire.view-admin-about-text-livewire', ['AboutText' => AboutText::with(['user'])->where('user_id', auth()->user()->id)->get()]);
    }

    public function deleteAboutText($id){
        $delete_about_text = AboutText::where("id", $id)->exists() ? AboutText::findOrFail($id)->delete() : false;
        session()->flash('deleteAboutText', 'About text is deleted successfully.');
    }
}
