<?php

namespace App\Livewire;

use App\Models\AboutText;
use Livewire\Component;

class EditAdminAboutTextLivewire extends Component
{
    public $AboutText,$AboutTextHeader, $id;
    public function render()
    {
        return view('livewire.edit-admin-about-text-livewire');
    }

    public function editAboutText($id){

        $this->validate(['AboutText' => 'string', 'AboutTextHeader' => 'string']);
        $edit_about_text = AboutText::findOrFail($id);


        $edit_about_text->about_text_header = $this->AboutTextHeader;
        $edit_about_text->about_text = $this->AboutText;

        $edit_about_text->update();


        $this->reset(['AboutText']);

        session()->flash('editAboutText', 'About text updated successfully.');
    }
}
