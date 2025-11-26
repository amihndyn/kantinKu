<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;
    public $showModal = false;
    public $showPaymentModal = false;
    public $quantity = 1;

    protected $listeners = ['openProductDetail' => 'openDetail'];

    public function openDetail($productId)
    {
        $this->product = Product::with('category')->find($productId);
        
        if (!$this->product) {
            return;
        }
        
        $this->showModal = true;
        $this->quantity = 1;
        $this->showPaymentModal = false;
    }

    public function closeDetail()
    {
        $this->showModal = false;
        $this->product = null;
        $this->quantity = 1;
        $this->showPaymentModal = false;
    }

    public function increment()
    {
        $this->quantity++;
    }

    public function decrement()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function addToCart()
    {
        session()->flash('message', $this->product->name . ' berhasil ditambahkan ke keranjang!');
        $this->closeDetail();
    }

    public function showPayment()
    {
        $this->showPaymentModal = true;
    }

    public function hidePayment()
    {
        $this->showPaymentModal = false;
    }

    public function toggleLike()
    {
        session()->flash('message', 'Produk ditambahkan ke favorit!');
    }

    public function render()
    {
        return view('livewire.product.product-detail');
    }
}