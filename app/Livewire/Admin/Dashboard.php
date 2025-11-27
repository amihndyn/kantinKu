<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\User;
use App\Models\Visit;

class Dashboard extends Component
{
    public $totalProducts, $totalUsers, $totalVisitors;

    public function mount()
    {
        $this->totalProducts = Product::count();
        $this->totalUsers = User::count();
        $this->totalVisitors = Visit::count();
    }

    public function render()
    {
        return view('livewire.admin.dashboard')
            ->layout('layouts.admin');
    }
}