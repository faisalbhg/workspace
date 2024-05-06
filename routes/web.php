<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Homepage;
use App\Http\Livewire\Workspaces;
use App\Http\Livewire\Locations;
use App\Http\Livewire\Payment;
use App\Http\Livewire\Thankyou;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Pricing;
use App\Http\Livewire\About;
use App\Http\Livewire\Faq;
use App\Http\Livewire\Terms;
use App\Http\Livewire\Policy;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Profile;
use App\Http\Livewire\MyBookings;
use App\Http\Livewire\MyServices;
use App\Http\Livewire\PinBallRegistration;
use App\Http\Livewire\QrCodeMaker;
use App\Http\Livewire\OrientationEvent;
use App\Http\Livewire\ResetPassword;
use App\Http\Livewire\Services;
use App\Http\Livewire\WeWorkLocations;
use App\Http\Livewire\BusinessSolutions;
use App\Http\Livewire\CoWorkingSpace;
use App\Http\Livewire\PrivateOffices;
use App\Http\Livewire\MeetingRooms;
use App\Http\Livewire\BusinessHubs;

use App\Http\Controllers\Payment as PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('index');
});
*/
Route::get('/', Homepage::class)->name('home');
Route::get('/wework', Homepage::class)->name('wework');
Route::get('workspace/{workspace_id}', Workspaces::class)->name('workspaces-details');
Route::get('location/{location_id}', Locations::class)->name('locations-details');
Route::get('locations', Locations::class)->name('locations-details');
Route::get('explore', Locations::class)->name('explore');
Route::get('coworkspace', CoWorkingSpace::class)->name('coworkspace');
Route::get('meetingroom', Locations::class)->name('explore');
Route::get('payment/{temp_session}', Payment::class)->name('Payment');
Route::get('success/{booking_number}', Thankyou::class)->name('thankyou');
Route::get('sign-in', Login::class)->name('sign-in');
Route::get('register', Register::class)->name('register');
Route::get('pricing', Pricing::class)->name('pricing');
Route::get('about', About::class)->name('about');
Route::get('faq', Faq::class)->name('faq');
Route::get('terms-condition', Terms::class)->name('terms-condition');
Route::get('privacy-policy', Policy::class)->name('privacy-policy');
Route::get('contact', Contact::class)->name('contact');
Route::post('post-payment-response',[PaymentController::class, 'payment_response']);
Route::get('services',Services::class)->name('services');
Route::get('table-tennis-championship',PinBallRegistration::class)->name('table-tennis-championship');
Route::get('wework-beyond-endless-business-solutions',OrientationEvent::class)->name('wework-beyond-endless-business-solutions');
Route::get('we-work-locations', WeWorkLocations::class)->name('we-work-locations');
Route::get('business-solutions', BusinessSolutions::class)->name('business-solutions');
Route::get('private-offices', PrivateOffices::class)->name('private-offices');
Route::get('meeting-rooms', MeetingRooms::class)->name('meeting-rooms');
Route::get('business-networking-hub', BusinessHubs::class)->name('business-networking-hub');

Route::get('qr-code',QrCodeMaker::class)->name('qr-code');
Route::get('reset-password/{token}', ResetPassword::class)->name('reset-password');


Route::group(['middleware' => 'auth'], function () {
    Route::get('my-profile', Profile::class)->name('profile');
    Route::get('my-bookings', MyBookings::class)->name('bookings');
    Route::get('my-services', MyServices::class)->name('services');
});

Route::get('/clear-all-cache',function(){
    Artisan::call('cache:clear');
    
    dd('cache clear all');
});

// Clear application cache:
Route::get('/clearall', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return 'All cleared..!';
});

