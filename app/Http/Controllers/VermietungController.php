<?php

namespace App\Http\Controllers;

use Mail;
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

        if($request->action == "Anfragen") {

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

            $data = array(
                'order' => $order,
                'orderedItems' => $orderedItems,
                'tax' => Cart::tax(),
                'total' => Cart::total()
            );

            Mail::send('emails.anfrageKunde', $data, function ($m) use ($request) {
                $m->from("info@djabdul.de", "DJ Abdul" );

                $m->to($request->email, $request->name . " " . $request->lastname)->subject('djabdul.de - Anfrage');
            });

            Mail::send('emails.anfrageAbdul', $data, function ($m) {
                $m->from('info@djabdul.de', 'DJ Abdul');

                $m->to("info@djabdul.de", "Dirk Hornung")->subject('Neue Anfrage!');
            });

            Cart::destroy();

            return redirect('Bestellung');
        } else { // Entfernen button clicked
            $id = $request->action;

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

            return view('einkaufswagen', compact('order'));
        }

    }

    public function Uebersicht() {
        $orders = Order::with('orderedItems')->get();
//        dd($orders);

        return view('shop/uebersicht', compact('orders'));
    }

    public function BestellungErfolgreich() {
        return view('shop/bestellung');
    }

    public function Kontakt(\Illuminate\Http\Request $request) {
        $data = array(
          'name'=>$request->name,
          'email'=>$request->email,
          'telefon'=>$request->telefon,
          'anliegen'=>$request->anliegen,
          'nachricht'=>$request->nachricht
        );

        Mail::send('emails.kontakt', $data, function ($m) use ($request) {
            $m->from($request->email, $request->name);
            $m->to("info@djabdul.de", "DJ Abdul")->subject($request->anliegen);
        });

        return view('kontakt', ['sent' => true]);
    }

}
