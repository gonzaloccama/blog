<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        $data['title'] = 'Este es un Dashboard';

        return view('livewire.admin.dashboard-component', $data)->layout('layouts.admin');
    }
}
