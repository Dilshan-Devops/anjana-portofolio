<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Orders;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function order()
    {
        return view('order');
    }

    public function portofolio() {
        return view('portofolio');
    }
    public function adminOrders() {
        $orders = Orders::paginate(5);
        return view('admin.orders' , ['orders' => $orders]);
    }
    public function adminContact() {
        $contactReqs = ContactUs::paginate(5);
        return view('admin.contact' , ['contacts' => $contactReqs]);
    }
    
    public function createOrder(Request $req)
    {

        //serverside validations
        $req->validate([
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'design' => 'required',
            'project' => 'required',
            'due_date' => 'required',
            'color1' => 'required',
            'color2' => 'required',
            'color3' => 'required'
        ]);

        //create order
        Orders::create([
            'fname' => $req->fname,
            'lname' => $req->lname,
            'phone' => $req->phone,
            'email' => $req->email,
            'design' => $req->design,
            'project' => $req->project,
            'due_date' => $req->due_date,
            'color1' => $req->color1,
            'color2' => $req->color2,
            'color3' => $req->color3
        ]);

        return redirect(route('home'))->with('success', 'Your order has been saved');
    }

    public function createContact(Request $req)
    {
        //serverside validations
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        //create contact
       ContactUs::create([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'subject' => $req->subject,
            'message' => $req->message,
        ]);

        return redirect(route('home'))->with('success', 'Our team will contact you soon ');
    }
}
