<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\ShopItem;
use App\Order;
use App\OrderedItem;
use Cart;

class VermietungController extends Controller
{
    public function show()
    {
        $shopItems = ShopItem::all();

        $cart = Cart::content()->all();

        $itemsInCart = [];
        foreach ($cart as $item) {
            array_push($itemsInCart, $item->id);
        }

        return view('vermietung', compact('shopItems', 'itemsInCart'));
    }

    public function removeItem($id) {



        $cart = Cart::content()->all();

        $itemInCart = false;
        foreach ($cart as $item) {
            if($item->id == $id) {
                $itemInCart = true;
                $itemRowId = $item->rowId;
                $itemName = $item->name;
            }
        }
        Cart::remove($itemRowId);
        $this->FlashNotification("$itemName wurde aus dem Warenkorb entfernt.", "alert-danger");


        return redirect('Einkaufswagen');
    }

    public function showItem($id) {
        $shopItem = ShopItem::find($id)['attributes'];
        $itemsInCart = [];
        $cart = Cart::content()->all();
        foreach ($cart as $item) {
            array_push($itemsInCart, $item->id);
        }

        return view('shop/shop-item', compact('shopItem', 'itemsInCart'));
    }

    public function cart() {
        $shopItemId = Request::get('shopItemId');
        $shopItem = ShopItem::find($shopItemId)['attributes'];
        $cart = Cart::content()->all();



        $itemInCart = false;
        foreach ($cart as $item) {
            if($item->id == $shopItemId) {
                $itemInCart = true;
                $itemRowId = $item->rowId;
                $itemName = $item->name;
            }
        }

        if($itemInCart) {
            Cart::remove($itemRowId);
            $this->FlashNotification("$itemName wurde aus dem Warenkorb entfernt.", "alert-danger");
        } else {
            Cart::add($shopItem['id'], $shopItem['name'], 1, $shopItem['price']);
            $this->FlashNotification($shopItem['name']." wurde dem Warenkorb hinzugefügt.", "alert-success");
        }



            return redirect()->action('VermietungController@show');
    }

    private function FlashNotification($message, $class) {
        \Session::flash('flash_message', $message);
        \Session::flash('flash_message_class', $class);
    }

    public function Bestellung(\Illuminate\Http\Request $request) {
        $order = new Order;
        $order->name = $request->name;
        $order->lastname = $request->lastname;
        $order->email = $request->email;
        $order->street = $request->street;
        $order->postcode = $request->postcode;
        $order->city = $request->city;
        $order->company = $request->company;
        $order->telephone = $request->telephone;
        $order->period = $request->period;
        $order->comment = $request->comment;

        $order->save();

        $cart = Cart::content()->all();
        $orderedItems = [];
        foreach ($cart as $item) {
            $orderedItem = new OrderedItem();
            $orderedItem->name = $item->name;
            $orderedItem->price = $item->price;
            array_push($orderedItems, $orderedItem);
        }

        $orderedItem = $order->orderedItems()->saveMany($orderedItems);

        Cart::destroy();

        return redirect('Bestellung');

    }

    public function Uebersicht() {
        $orders = Order::with('orderedItems')->get();
//        dd($orders);

        return view('shop/uebersicht', compact('orders'));
    }

    public function BestellungErfolgreich() {

        return view('shop/bestellung');
    }

}
