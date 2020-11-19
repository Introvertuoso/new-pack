<?php


namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Livewire\Component;
use function DeepCopy\deep_copy;


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

    public function receiveProducts($products) {
        $this->products = $products;
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

    public function pickProduct($key) {
        $product = Product::where('id', $key)->first();
        $this->products[$key] = $product;
    }

    public function unpickProduct($key) {
        unset($this->products[$key]);
    }

    public function createOrder() {
//        // TODO: Do this for all:
//        // TODO: Required field trick from course on the front-end as well as on the back-end
//        $order = new Order();
//        $order->approved = $this->approved;
//        $order->total = $this->total;
//        $order->client_id = $this->client->id;
//        $order->user_id = $this->user->id;
//        $order->save();
//
//
//
//        $this->emit('orderCreationCompleted');

        dump($this->products);
    }

    public function render() {
        return view('livewire.create-order-form');
    }
}
