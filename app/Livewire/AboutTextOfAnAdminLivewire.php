<?php

namespace App\Livewire;

use App\Models\AboutText;
use Livewire\Component;

class AboutTextOfAnAdminLivewire extends Component
{
    public $AboutText, $AboutTextHeader;
    public function render()
    {
        return view('livewire.about-text-of-an-admin-livewire');
    }

    public function addAboutTextOfAnAdmin()
    {
        $this->validate(['AboutText' => 'required|string', 'AboutTextHeader' => 'required']);

        $aboutText = new AboutText();
        $aboutText->user_id = auth()->user()->id;
        $aboutText->about_text_header = $this->AboutTextHeader;
        $aboutText->about_text = $this->AboutText;


            $aboutText->save();

            session()->flash('about', 'About text is added successfully.');
            $this->AboutText = '';
        }
    }

