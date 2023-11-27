<?php

namespace App\Http\Livewire\User\Dashboard;

use Illuminate\View\View;
use Livewire\Component;

class Index extends Component
{
    public function render(): View
    {
        return view('livewire.user.dashboard.index')->layout('layouts.app');
    }
}
