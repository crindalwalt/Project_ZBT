<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnrollmentRequest;
use App\Http\Requests\UpdateEnrollmentRequest;
use App\Jobs\CancelSubscription;
use App\Models\Course;
use App\Models\Enrollment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Stripe\Customer;
use Stripe\Stripe;
use RealRashid\SweetAlert\Facades\Alert;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $course)
    {
        $data["course"] = $course;
        return view("pages.user.courses.course_checkout")->with($data);
    }


    public function checkoutButton(Request $request, Course $course)
    {
        $user = auth()->user();
        if (!$user->stripe_id) {
            $user->createAsStripeCustomer();
        }
//        $paymentMethod = $request->paymentMethod;
//
//        $user->createOrGetStripeCustomer();
//        $user->updateDefaultPaymentMethod($paymentMethod);
//        $user->newSubscription('default', 'plan_id')->create($paymentMethod);
//        return response()->json(['status' => 'success']);


        // Create the subscription
//        $subscription = $user->newSubscription('default', 'price_1POHcjCfbf5mW58WMuHFEUuo')->create();

        // Define the end date (e.g., 3 months from now)

        // Create a subscription schedule to cancel after 3 months
//        $schedule = SubscriptionSchedule::create([
//            'customer' => $user->stripe_id,
//            'start_date' => 'now',
//            'phases' => [
//                [
//                    'items' => [
//                        [
//                            'price' => 'price_1Hh1uUInSoP4eX9l8bG1x3YZ', // Your price ID
//                            'quantity' => 1,
//                        ],
//                    ],
//                    'end_date' => $endDate,
//                ],
//            ],
//            'end_behavior' => 'cancel',
//        ]);
//        $trialEnds = now()->addMonth(3);

        $stripeSession = $user->newSubscription('default', $course->price_id)// Replace with your actual price ID from Stripe
        ->checkout([
            'success_url' => route('subscription.success', ["id" => $course->id]),
            'cancel_url' => route('subscription.cancel'),
        ]);
        $endDate = Carbon::now()->addMonths(3);
        CancelSubscription::dispatch($user->id)->delay($endDate);
        return redirect($stripeSession->url);

    }


    public function course_success(Request $request)
    {
        $course = Course::find($request->id);
        $expire_date = Carbon::now()->addMonths(intval($course->months));

        Enrollment::create([
            "course_id" => $course->id,
            "user_id" => auth()->user()->id,
            "payment_status" => "success",
            "expire_date" => $expire_date,
            "enrollment_status" => "active"
        ]);
        $course->students()->create([
            "user_id" => auth()->user()->id,
            "status" => "active",
        ]);

        Alert::success("Enrollment Success", "Your student dashboard will list all of your classes and enrollment");
        return redirect()->route("account");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEnrollmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnrollmentRequest $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
}
