<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;
  //import  models
use App\Pizza;
use App\Dropped_orders;  
use App\Completed_orders; 
use App\Mail\order_completed;

class pizzasController extends Controller
{
    public function viewPizzas() {
        return view('pizzas');
      }

    public function viewAllOrders() {
        //fetch data from the database
        $pizzaOrders = Pizza::all();
        return view(
            'allOrders', [
            'pizzaOrders' => $pizzaOrders,
            ])->with('success', 'Order completed');
    }
    public function completePizzaOrder() {

        return view('pizzas'); 
      }
      public function createPizzaOrder() {
           return view('/createPizza'); 
      }

      public function storePizza(Request $request) {
          $this->validate($request,[
            'toppings'=> 'required',
            'size'=> 'required'
                ]);
          $pizza = new Pizza();  //create a new instance of the pizza model
          $pizza ->name =  request('name');
          $pizza ->email =  request('email');
          $pizza ->phone =  request('phone');
          $pizza ->address =  request('address');
          $pizza->type =  request('type');
          $pizza->size =  request('size');
          $pizza->toppings =  request('toppings');
            // save record
          $pizza->save();              
       return redirect('/createPizza')->with('success', 'Thankyou. Your order has been placed!'); 
      }
      public function viewCompletedOrders(){
          //fetch data from the database
          $pizzaOrders = Completed_orders::all();
          return view(
              'completeOrders', [
              'pizzaOrders' => $pizzaOrders,
              'title' => $title='Completed orders',
                 ]);
      }
      public function deleted_orders(){
        //fetch data from the database
        $pizzaOrders = Dropped_orders::all();
        return view(
            'deleted_orders', [
            'pizzaOrders' => $pizzaOrders,
            'title' => $title='Canceled orders',
            ]);
      }

          // destroy method deletes a record from the pizzas table and adds it to either completed orders  table or droped orders table
      public function destroy($id) {
          $pizza = Pizza::findOrFail($id);  //isolate the record to delete from the Pizza model
          $droppedPizza = new Dropped_orders();
                    $droppedPizza-> name = $pizza-> name;
                    $droppedPizza-> email = $pizza-> email;
                    $droppedPizza->phone = $pizza-> phone;
                    $droppedPizza-> type = $pizza-> type;
                    $droppedPizza-> address = $pizza-> address;
                    $droppedPizza-> size = $pizza-> size;
                    $droppedPizza-> toppings = $pizza-> toppings;

          $completedPizza = new Completed_orders();
                $completedPizza-> name = $pizza-> name;
                $completedPizza-> email = $pizza-> email;
                $completedPizza->phone = $pizza-> phone;
                $completedPizza-> type = $pizza-> type;
                $completedPizza-> address = $pizza-> address;
                $completedPizza-> size = $pizza-> size;
                $completedPizza-> toppings = $pizza-> toppings;
          // delete record from the pizzas table
          $pizza->delete();
          if(request('stamp') == 'Complete_order') {
                // save record into completed orders table
                $completedPizza-> save();
                
                \Mail::to('ahmnk.uura@gmail.com')-> send(new order_completed);
             return redirect('/all_orders')-> with('success','Order completed successfuly!');    
           }
          if(request('stamp') == 'Drop_order') {
                // save record into deleted pizzas table
                 $droppedPizza-> save();
              return redirect('/all_orders')-> with('error','Order deleted successfuly!');
                }
         
           
   }
}
