<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Badge;
use App\Models\Order;
use App\Models\Course;
use App\Models\Product;
use App\Models\Category;
use App\Models\Enrollment;
//use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function index()
    {
        $data['courses'] = Course::all();
        $data['products'] = Product::all();
        $data['orders'] = Order::all();
        $data['students'] = Enrollment::all();



        return view("pages.admin.dashboard")->with($data);
    }


    public function homePage()
    {
        $cart = Cart::find(1);
        $user = User::find(1);
        //        dd($user->cart);
        //        dd(auth()->user()->cart);

        //        dd(auth()->user()->cart->items);


        $data['categories'] = Category::all();
        $data['swiperCards'] = Course::inRandomOrder()->take(3)->get();
        $data['courses'] = Course::inRandomOrder()->take(6)->get();
        $data['products'] = Product::inRandomOrder()->take(6)->get();
        return view("pages.user.index")->with($data);
    }

    public function cartPage()
    {
        $data['cart'] = auth()->user()->cart;
        return view("pages.user.cart")->with($data);
    }


    public function addToCart(Product $product)
    {
        if (auth()->check()) {
            $user = auth()->user();
            $productToAdd = $product;
            if ($user->cart) {
                foreach ($user->cart->items as $item) {
                    if ($item->product_id == $productToAdd->id) {
                        Alert::warning("Warning", "Item is already sitting in the cart");
                        return redirect()->back();
                    }
                }
                $user->cart->items()->create([
                    "product_id" => $productToAdd->id,
                    "quantity" => 1,
                    "individual_price" => $productToAdd->discount_price,
                ]);
            } else {
                //                $user->cart()->create();
                $newCart = Cart::create([
                    "user_id" => $user->id,
                ]);
                $newCart->items()->create([
                    "product_id" => $productToAdd->id,
                    "quantity" => 1,
                    "individual_price" => $productToAdd->discount_price,
                ]);
            }

            Alert::success("success", "Item has been added to cart");
            return redirect()->back();
        } else {
            return redirect()->route("login");
        }
    }


    public function password_change(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "current_password" => ["required"],
            "new_password" => ["required", 'digits:6'],
            "confirm_password" => ["required", 'digits:6'],
        ]);

        // return "validated";
        $current_password = Hash::make($request->current_password);
        if ($request->new_password !== $request->confirm_password) {
            Alert::warning("Password does not match", "try again with matching password and confirm password");
            return redirect()->back();
        }
        $newPassword = Hash::make($request->new_password);
        Auth::user()->update([
            'password' => $newPassword,
        ]);
        Auth::logout();
        Alert::warning("Password changed Successfully", "Login with the New password");
        return redirect()->back();


        // if(auth()->user()->password == hash_m)
    }

    public function contact()
    {
        return view("pages.user.contact");
    }

    public function about()
    {
        return view("pages.user.about");
    }


    public function checkout()
    {
        $data['cart'] = auth()->user()->cart;
        return view('pages.user.checkout')->with($data);
    }

    public function account()
    {
        if (auth()->user()->role != 1) {
            abort(403, "Cannot Access student resources if not a student");
        }
        $data['user'] = auth()->user();
        $data['orders'] = $data['user']->order;
        $data['classes'] = $data['user']->enrolled_in_class;
        return view('pages.user.account')->with($data);
    }

    public function single_student(User $user)
    {
        $data['student'] = $user;
        $data['enrollment'] = $user->enrollment;
        return view('pages.admin.students.student_detail')->with($data);
    }

    public function invoice(Order $order)
    {
        $data["order"] = $order;
        $pdf = PDF::loadView("pages.user.ecommerce.ecom_invoice", compact("order"))->setOptions(['defaultFont' => 'sans-serif']);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream();
        //        return $pdf->download('invoice_' . $order->id . '.pdf');

        //        return view("pages.user.ecommerce.ecom_invoice")->with($data);
    }


    public function all_students()
    {
        $data['students'] = User::Where("role", 1)->orderBy('created_at', 'asc')->get();
        return view("pages.admin.students.students_all")->with($data);
    }




    public function student_transform(User $user)
    {
        $student = $user;
        $student->update([
            "role" => 2,
        ]);
        Alert::success("Teacher Created", "$user->name has been promoted to Teacher Role , now can login ");
        return redirect()->back();
    }



    public function student_class(Badge $badge)
    {
        $data['badge'] = $badge;
        return view("pages.user.courses.class")->with($data);
    }



    public function contact_store (Request $request){
        dd($request->all());
    }
}
