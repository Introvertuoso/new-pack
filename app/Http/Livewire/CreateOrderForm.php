<?php


namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Order;
use Livewire\Component;

class CreateOrderForm extends Component
{
    // TODO: change approved to timestamp
    public $query = '';

    public $approved = 0;
    public $totalPreDiscount = 0;
    public $discount = 0.0;
    public $total = 0;
    public $client;
    public $clientName = '';
    public $user;
    public $userName = '';
    public $products = [];

    public $listeners = [
        'productPicked' => 'pickProduct',
        'productUnpicked' => 'unpickProduct',
        'productsChosen' => 'receiveProducts',
    ];

    public function updatedDiscount() {
        $this->calculateGrandTotal();
    }

    public function updatedTotalPreDiscount() {
        $this->calculateGrandTotal();
    }

    public function receiveProducts($products) {
        $this->products = $products;
    }

    public function calculateGrandTotal() {
        $this->total = $this->totalPreDiscount - ($this->totalPreDiscount * $this->discount / 100);
    }

    public function completeOrderCreation() {
        // TODO: Do this for all:
        // TODO: Required field trick from course on the front-end as well as on the back-end
        $order = new Order();
        $order->approved = $this->approved;
        $order->total = $this->total;
        $order->client_id = $this->client->id;
        $order->user_id = $this->user->id;
        $order->save();

        foreach($this->products as $productID => $amount) {
            $order->products()->attach($productID, ['amount' => $amount]);
        }

//        $this->emit('orderCreationCompleted');
    }

    public function confirmOrderCreation()
    {
        $this->query = '';
        $this->approved = 0;
        $this->totalPreDiscount = 0;
        $this->discount = 0.0;
        $this->total = 0;
        $this->client = null;
        $this->clientName = '';
        $this->user = auth()->user();
        $this->userName = $this->user->name;
        $this->products = [];

//        $this->dispatchBrowserEvent('confirming-create-client');
    }

    public function pickClient($value) {
        $client = Client::where('id', $value)->first();
        $this->client = $client;
        $this->query = $client->name;
        $this->clientName = $client->name;
    }

//    public function pickProduct($key) {
//        $product = Product::where('id', $key)->first();
//        $this->products[$key] = $product;
//    }
//
//    public function unpickProduct($key) {
//        unset($this->products[$key]);
//    }

    public function createOrder() {
        dump($this->products);
        $this->completeOrderCreation();
    }

    public function render() {
        return view('livewire.create-order-form');
    }
}
