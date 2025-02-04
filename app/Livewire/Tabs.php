<?php

namespace App\Livewire;

use Livewire\Component;

class Tabs extends Component
{
    public function render()
    {
        return view('livewire.tabs');
    }

    public $activeTab = 'tab1';

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
    }
}
