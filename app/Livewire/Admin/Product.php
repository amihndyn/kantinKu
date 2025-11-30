<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Product extends Component
{
    public $products;

    public function mount() {
        $this->products = \App\Models\Product::with('category')->get();
    }

    public function delete($id)
    {
        if (Auth::user()->role !== 'admin') return session()->flash('error', 'You do not have permission to perform this action.');

        $product = \App\Models\Product::find($id);

        if ($product) {
            $product->delete();
            session()->flash('message', 'Product deleted successfully.');

            $this->products = \App\Models\Product::with('category')->get();
        } else {
            session()->flash('error', 'Product not found.');
        }
    }

    public function render()
    {
        return view('livewire.admin.product')->layout('components.layouts.dashboard');
    }
}
