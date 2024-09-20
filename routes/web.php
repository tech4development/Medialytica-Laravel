<?php

use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\Advertisers\AdvertiserAuthController;
use App\Http\Controllers\EditorPanel\EditorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublisherPanel\PublisherController;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\SocialPublisherPanel\Groups\FacebookPageController;
use App\Http\Controllers\SocialPublisherPanel\Groups\FacebookGroupController;
use App\Http\Controllers\SocialPublisherPanel\Groups\InstagramGroupController;
use App\Http\Controllers\SocialPublisherPanel\Groups\TelegramGroupController;
use App\Http\Controllers\SocialPublisherPanel\Groups\TiktokGroupController;
use App\Http\Controllers\SocialPublisherPanel\Groups\WhatsappChannelController;
use App\Http\Controllers\SocialPublisherPanel\Groups\WhatsappCommunityController;
use App\Http\Controllers\SocialPublisherPanel\Groups\XCommunityController;
use App\Http\Controllers\SuperAdminPanel\SuperadminController;
use App\Http\Controllers\SocialPublisherPanel\SocialPublisherController;
use App\Http\Controllers\SocialPublisherPanel\ScPublisherFacebookController;
use App\Http\Controllers\SocialPublisherPanel\ScPublisherTiktokController;
use App\Http\Controllers\SocialPublisherPanel\ScPublisherTelegramController;
use App\Http\Controllers\SocialPublisherPanel\ScPublisherInstagramController;
use App\Http\Controllers\SocialPublisherPanel\ScPublisherTwitterController;
use App\Http\Controllers\SocialPublisherPanel\ScPublisherYoutubeController;
use App\Http\Controllers\SocialPublisherPanel\ScPublisherWhatsappController;
use App\Http\Controllers\UserPanel\UserController;
use App\Http\Controllers\Orders\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Orders\CheckoutController;
use App\Http\Controllers\Orders\CartController;
use App\Http\Controllers\Orders\PayPalController;
use App\Http\Controllers\Advertisers\RedirectController;
use App\Http\Controllers\Orders\InvoiceController;
use App\Http\Controllers\SocialLogin\GoogleAuthController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| Google Routes,Auth and Middlewares
|--------------------------------------------------------------------------
|
|
*/

Route::get('/auth/google',[ GoogleAuthController::class, 'redirect'])->name('google-auth');

Route::get('/auth/google/call-back',[ GoogleAuthController::class, 'callbackGoogle'])->name('google-callback');


// Route::get('/', [PublisherController::class, 'viewAll']);

Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



/*
|--------------------------------------------------------------------------
| Dashboard Routes,Auth and Middlewares
|--------------------------------------------------------------------------
|
|
*/
//Role Controller
// Routes for managing roles and permissions
// Route::middleware('superadmin')->group(function () {


// });

/*
|--------------------------------------------------------------------------
|               Superadmin routes, middlewares
|--------------------------------------------------------------------------
|
|
*/
Route::middleware('auth', 'superadmin',  'user_role:super admin')->group(function () {
    Route::get('superadmin/dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
    Route::get('/roles', [RoleController::class, 'show'])->name('roles.show');
    Route::post('/roles/user', [RoleController::class, 'storeUser'])->name('roles.storeUser');
    Route::post('/permissions', [RoleController::class, 'storePermission'])->name('permissions.store');
    Route::get('/permissions', [RoleController::class, 'showPermissions'])->name('permissions.show');
    Route::post('/roles/{roleId}/assign-permissions', [RoleController::class, 'assignPermission'])->name('roles.assignPermissions');
    Route::post('/roles/{roleId}/revoke-permissions', [RoleController::class, 'revokePermission'])->name('roles.revokePermissions');
    Route::get('roles/{role}/assign-permissions', [RoleController::class, 'assignPermissionsForm'])->name('roles.assignPermissionsForm');
    Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');
    Route::get('superadmin/orders', [OrderController::class, 'index'])->name('index');
    Route::get('superadmin/{order}/edit', [OrderController::class, 'edit'])->name('edit');
    Route::put('superadmin/{order}', [OrderController::class, 'update'])->name('update');
});

/*
|--------------------------------------------------------------------------
|               User roles and permission routes, middlewares
|--------------------------------------------------------------------------
|
|
*/
// Route::middleware(['auth', 'superadmin'])->prefix('superadmin')->group(function () {
//     Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
//     Route::post('/roles/user', [RoleController::class, 'storeUser'])->name('roles.storeUser');
//     Route::post('/permissions', [RoleController::class, 'storePermission'])->name('permissions.store');
//     Route::get('/permissions', [RoleController::class, 'showPermissions'])->name('permissions.show');
//     Route::post('/roles/{roleId}/assign-permissions', [RoleController::class, 'assignPermission'])->name('roles.assignPermissions');
//     Route::post('/roles/{roleId}/revoke-permissions', [RoleController::class, 'revokePermission'])->name('roles.revokePermissions');
//     Route::get('/roles/{role}/assign-permissions', [RoleController::class, 'assignPermissionsForm'])->name('roles.assignPermissionsForm');
//     Route::get('/roles', [RoleController::class, 'show'])->name('roles.show');
// });

/*
|--------------------------------------------------------------------------
|                       Admin routes, middlewares
|--------------------------------------------------------------------------
|
|
*/
Route::middleware('auth', 'user_role:admin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });


/*
|--------------------------------------------------------------------------
                Publisher routes, middlewares,auth etc
|--------------------------------------------------------------------------
|
|
*/
Route::middleware('auth','user_role:publisher')->group(function () {
    // Get All the Publishers
    Route::get('publisher/view', [PublisherController::class, 'viewAll']);
    Route::get('publisher/dashboard', [PublisherController::class, 'index'])->name('publisher.dashboard');
    //Add Publisher Details
    Route::get('publisher/create-publisher', [PublisherController::class, 'create'])->name('publisher.create');
    //Store Publishe Details
    Route::post('publisher/add-publisher', [PublisherController::class, 'store'])->name('publisher.store');

    Route::get('publisher/edit/{id}', [PublisherController::class, 'edit'])->name('publisher.edit');
    //Store Publisher Updated Details
    Route::put('publisher/edit/{id}', [PublisherController::class, 'update'])->name('publisher.update');
    //Store Publishe Details
    Route::delete('/publisher/{id}', [PublisherController::class, 'destroy'])->name('publisher.destroy');

    });


/*
|--------------------------------------------------------------------------
            Social Publisher routes, middlewares, auth etc.
|--------------------------------------------------------------------------
|
|
*/
Route::middleware('auth','user_role:socialpublisher')->group(function () {
    Route::get('socialpublisher/dashboard', [SocialPublisherController::class, 'index'])->name('socialpublisher.dashboard');
    //Create Social Publisher details
    Route::get('socialpublisher/create-publisher', [PublisherController::class, 'create'])->name('socialpublisher.create');
    //Store Social Publisher Details
    Route::post('socialpublisher/add-publisher', [PublisherController::class, 'store'])->name('socialpublisher.store');
    //Show Social Publisher Details
    Route::get('socialpublisher/{id}', [PublisherController::class, 'show'])->name('socialpublisher.show');
    //Edit Social Publisher Details
    Route::get('socialpublisher/{id}/edit', [PublisherController::class, 'edit'])->name('socialpublisher.edit');
    //Store Social Publisher Details
    Route::put('socialpublisher/{id}}', [PublisherController::class, 'update'])->name('socialpublisher.update');
    //Store Social Publisher Details
    Route::delete('socialpublisher/{id}}', [PublisherController::class, 'destroy'])->name('socialpublisher.destroy');
            /*
            |--------------------------------------------------------------------------
                                    Social Publisher Facebook routes
            |--------------------------------------------------------------------------
            |
            |
            */
    Route::get('/socialpublisher/facebook/create', [ScPublisherFacebookController::class, 'create'])->name('facebook.create');
    Route::post('/socialpublisher/facebook/add', [ScPublisherFacebookController::class, 'store'])->name('facebook.store');


                                     // Social Publisher Facebook Page Routes
    Route::get('socialpublisher/facebookpage/create', [FacebookPageController::class, 'create'])->name('facebookpage.create');
    Route::post('socialpublisher/facebookpage/store', [FacebookPageController::class, 'store'])->name('facebookpage.store');


                                     // Social Publisher Facebook Group Routes
    Route::get('socialpublisher/facebookgroup/create', [FacebookGroupController::class, 'create'])->name('facebookgroup.create');
    Route::post('socialpublisher/facebookgroup/store', [FacebookGroupController::class, 'store'])->name('facebookgroup.store');


      /*
    |--------------------------------------------------------------------------
                             Social Publisher Twitter routes
    |--------------------------------------------------------------------------
    |
    |
    */
    Route::get('socialpublisher/x/create', [ScPublisherTwitterController::class, 'create'])->name('x.create');
    Route::post('socialpublisher/x/store', [ScPublisherTwitterController::class, 'store'])->name('x.store');




                            // Social Publisher Facebook Group Routes
    Route::get('socialpublisher/x/community/create', [XCommunityController::class, 'create'])->name('xcommunity.create');
    Route::post('socialpublisher/x/community/store', [XCommunityController::class, 'store'])->name('xcommunity.store');




      /*
    |--------------------------------------------------------------------------
                            Social Publisher Instagram routes
    |--------------------------------------------------------------------------
    |
    |
    */

    Route::get('socialpublisher/instagram/create', [ScPublisherInstagramController::class, 'create'])->name('instagram.create');
    Route::post('socialpublisher/instagram/store', [ScPublisherInstagramController::class, 'store'])->name('instagram.store');



                           // Social Publisher Facebook Group Routes
     Route::get('socialpublisher/instagramgroup/create', [InstagramGroupController::class, 'create'])->name('instagramgroup.create');
     Route::post('socialpublisher/instagramgroup/store', [InstagramGroupController::class, 'store'])->name('instagramgroup.store');






      /*
    |--------------------------------------------------------------------------
                             Social Publisher Telegram routes
    |--------------------------------------------------------------------------
    |
    |
    */

    Route::get('socialpublisher/telegram/create', [ScPublisherTelegramController::class, 'create'])->name('telegram.create');
    Route::post('socialpublisher/telegram/store', [ScPublisherTelegramController::class, 'store'])->name('telegram.store');


                            // Social Publisher Facebook Group Routes
     Route::get('socialpublisher/telegramgroup/create', [TelegramGroupController::class, 'create'])->name('telegramgroup.create');
     Route::post('socialpublisher/telegramgroup/store', [TelegramGroupController::class, 'store'])->name('telegramgroup.store');




      /*
    |--------------------------------------------------------------------------
                            Social Publisher Whatsapp routes
    |--------------------------------------------------------------------------
    |
    |
    */

                                    // Social Publisher Whatsapp Group Routes
    Route::get('socialpublisher/whatsapp/create', [ScPublisherWhatsappController::class, 'create'])->name('whatsapp.create');
    Route::post('socialpublisher/whatsapp/store', [ScPublisherWhatsappController::class, 'store'])->name('whatsapp.store');





                                  // Social Publisher Whatsapp Channel Routes
    Route::get('socialpublisher/whatsappchannel/create', [WhatsappChannelController::class, 'create'])->name('whatsappchannel.create');
    Route::post('socialpublisher/whatsappchannel/store', [WhatsappChannelController::class, 'store'])->name('whatsappchannel.store');


                                      // Social Publisher Whatsapp Community Routes
    Route::get('socialpublisher/whatsappcommunity/create', [WhatsappCommunityController::class, 'create'])->name('whatsappcommunity.create');
    Route::post('socialpublisher/whatsappcommunity/store', [WhatsappCommunityController::class, 'store'])->name('whatsappcommunity.store');
    /*
    |--------------------------------------------------------------------------
                        Social Publisher Tiktok routes
    |--------------------------------------------------------------------------
    |
    |
    */


    Route::get('socialpublisher/tiktok/create', [ScPublisherTiktokController::class, 'create'])->name('tiktok.create');
    Route::post('socialpublisher/tiktok/store', [ScPublisherTiktokController::class, 'store'])->name('tiktok.store');



                     // Social Publisher Whatsapp Community Routes
 Route::get('socialpublisher/tiktokgroup/create', [TiktokGroupController::class, 'create'])->name('tiktokgroup.create');
Route::post('socialpublisher/tiktokgroup/store', [TiktokGroupController::class, 'store'])->name('tiktokgroup.store');




    /*
    |--------------------------------------------------------------------------
                        Social Publisher Youtube routes
    |--------------------------------------------------------------------------
    |
    |
    */


    Route::get('socialpublisher/youtube/create', [ScPublisherYoutubeController::class, 'create'])->name('youtube.create');
    Route::post('socialpublisher/youtube/store', [ScPublisherYoutubeController::class, 'store'])->name('youtube.store');
});


/*
|--------------------------------------------------------------------------
                           Editor routes, middlewares
|--------------------------------------------------------------------------
|
|
*/
Route::middleware('auth','user_role:editor')->group(function () {
    Route::get('editor/dashboard', [EditorController::class, 'index'])->name('editor.dashboard');
    });


/*
|--------------------------------------------------------------------------
                           Order Contoller
|--------------------------------------------------------------------------
|
|
*/

    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('placeOrder');



/*
|--------------------------------------------------------------------------
                    User routes, middlewares
|--------------------------------------------------------------------------
|
|
*/
Route::middleware('auth','user_role:user')->group(function () {
     Route::get('user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
        });



/*
|--------------------------------------------------------------------------
                   Advertiser Routes and Middleware
|--------------------------------------------------------------------------
|
|
*/
Route::middleware(['advertiser.auth'])->group(function () {
        // Routes that require this custom authentication logic
});

// Route::prefix('advertiser')->name('advertiser.')->group(function () {
//     // Registration Routes
//     Route::get('/register', [AdvertiserAuthController::class, 'showRegisterForm'])->name('advertiserregister');
//     Route::post('/register', [AdvertiserAuthController::class, 'register'])->name('register.submit');

//     // Login Routes
//     Route::get('/login', [AdvertiserAuthController::class, 'showLoginForm'])->name('advertiserlogin');
//     Route::post('/login', [AdvertiserAuthController::class, 'login'])->name('login.submit');

//     // Logout Route
//     Route::post('/logout', [AdvertiserAuthController::class, 'logout'])->name('logout');
// });

Route::get('/guest', [AdvertiserAuthController::class, 'showGuestPage'])->name('guest.page');
Route::get('/redirect-to-register', [AdvertiserAuthController::class, 'redirectToRegister'])->name('redirect.to.register');


/*
|--------------------------------------------------------------------------
                  Cart, Order and Checkout Routes
|--------------------------------------------------------------------------
|
|

*/
Route::middleware(['check.advertiser'])->group(function () {
// Route::post('cart/add/{publisherId}', [CartController::class, 'add'])->name('cart.add');
});


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{cartId}', [CartController::class, 'remove'])->name('cart.remove');
Route::put('/cart/update/{cartId}', [CartController::class, 'update'])->name('cart.update');
// Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('order.place');
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout.index');

Route::post('/checkout/verify', function () {
    if (!auth()->guard('advertiser')->check()) {
        // Store the intended URL to redirect after login
        session()->put('url.intended', route('checkout.index'));
        return redirect()->route('advertiserregister')->with('error', 'You must be logged in to proceed to checkout.');
    }

    return redirect()->route('checkout.index');  // Redirect to checkout if authenticated
})->name('checkout.verify');

Route::get('/thank-you/{orderId}', [OrderController::class, 'thankYou'])->name('thank_you');

/*
|--------------------------------------------------------------------------
                  Order and Checkout Routes
|--------------------------------------------------------------------------
|
|
*/




Route::get('/order/track', [OrderController::class, 'track']);
Route::post('/order/track', [OrderController::class, 'trackOrder']);
Route::post('/order/{id}/update-status', [OrderController::class, 'updateStatus'])->middleware('auth');

/*
|--------------------------------------------------------------------------
                  Paypal Checkout Routes
|--------------------------------------------------------------------------
|
|
*/

Route::post('paypal', [PayPalController::class, 'paypal'])->name('paypal');
Route::get('success', [PayPalController::class, 'success'])->name('success');
Route::get('cancel', [PayPalController::class, 'cancel'])->name('cancel');


Route::get('/check-auth', function () {
    return response()->json(['isAuthenticated' => Auth::check()]);
})->name('check.auth');




/*
|--------------------------------------------------------------------------
                  Invoice Checkout Routes
|--------------------------------------------------------------------------
|
|
*/

Route::prefix('invoice')->group(function () {
    // Route to create an invoice and display it
    Route::get('/create/{orderId}', [InvoiceController::class, 'create'])->name('invoice.create');

    // Route to display a specific invoice
    Route::get('/{invoiceId}', [InvoiceController::class, 'show'])->name('invoice.show');

    // Route to mark payment as received
    Route::post('/mark-payment-received/{invoiceId}', [InvoiceController::class, 'markPaymentReceived'])
        ->name('invoice.markPaymentReceived');

Route::get('/invoice/download/{id}', [InvoiceController::class, 'download'])->name('invoice.download');
Route::get('/invoice/email/{id}', [InvoiceController::class, 'email'])->name('invoice.email');
});
/*
|--------------------------------------------------------------------------
                400, 404 Error and 500 Error pages routes
|--------------------------------------------------------------------------
|
|
*/

// Optionally, define a route for 404 errors if you need specific handling
Route::get('/404', function () {
    
    return response()->view('errors.404', [], 404);
});

// Optionally, define a route for 500 errors if you need specific handling
Route::get('/500', function () {
    return response()->view('errors.500', [], 500);
});



require __DIR__.'/auth.php';
