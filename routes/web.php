<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminCheck;
use App\Http\Middleware\UserCheck;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homePage'])->name("home");
Route::get("/contact", [HomeController::class, 'contact'])->name("contact");
Route::get("/about", [HomeController::class, 'about'])->name("about");
Route::get("/cart", [HomeController::class, 'cartPage'])->name("cart");
Route::get("/cart/add/{product:slug}", [HomeController::class, 'addToCart'])->name("addtocart");

Route::get('/courses', [CourseController::class, 'all_courses'])->name("courses");
Route::get('/course/{course:slug}', [CourseController::class, 'course_detail'])->name("course.detail");

Route::get("/products", [ProductController::class, 'all_products'])->name("products");
Route::get("/product/{product:slug}", [ProductController::class, 'product_detail'])->name("product.detail");

Route::post("/review/{product}/store", [ProductReviewsController::class, 'store'])->name("user.product.review");
Route::middleware(['auth', UserCheck::class])->group(function () {
    Route::get('/checkout', [HomeController::class, 'checkout'])->name("checkout");
    Route::post('/checkout/save', [CheckoutController::class, 'checkout_save'])->name("checkout.save");
    Route::get('checkout/process', [CheckoutController::class, 'createCheckoutSession'])->name('checkout.create');
    Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
    Route::get('checkout/cancel', [CheckoutController::class, 'cancel'])->name('checkout.cancel');


    Route::get('/account', [HomeController::class, "account"])->name("account");
    Route::get('/invoice/{order}/generate', [HomeController::class, "invoice"])->name("invoice.generate");
    Route::get("/terms-and-conditions", function () {
    })->name("terms_and_condition");


    Route::get("/course/{course:slug}/buy", [EnrollmentController::class, 'index'])->name("course.enrollment.buy");
    Route::post("/course/{course:slug}/checkout", [EnrollmentController::class, 'checkoutButton'])->name("course.enrollment.checkout");
    Route::get("/course/checkout/success", [EnrollmentController::class, 'course_success'])->name("subscription.success");
    Route::get("/course/checkout/failed", function () {
        return response()->json([
            "staus" => "failed",
        ]);
    })->name("subscription.cancel");

    Route::get("/class/{badge}/view",[HomeController::class,"student_class"])->name("student.class");

    # Password change 
    Route::post("/password/change",[HomeController::class,"password_change"])->name("password.change");
});

//Route::get("/test", function () {
//    $cartItems = \App\Models\CartItem::all();
//    dd($cartItems);
//});

//Route::get('/course/1', function () {
//    return view('pages.user.course_detail');
//});


/**
 * ===============================================================================
 *  Admin
 * ===============================================================================
 */


require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/teacher.php';