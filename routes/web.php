<?php

use App\Http\Controllers\AdminPanel\AdminController;
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
use App\Http\Controllers\SocialPublisherPanel\ScPublisherController;
use App\Http\Controllers\UserPanel\UserController;
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

Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

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
});

/*
|--------------------------------------------------------------------------
|               User roles and permission routes, middlewares
|--------------------------------------------------------------------------
|
|
*/
Route::middleware(['auth', 'superadmin'])->prefix('superadmin')->group(function () {
    Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');

    Route::post('/roles/user', [RoleController::class, 'storeUser'])->name('roles.storeUser');
    Route::post('/permissions', [RoleController::class, 'storePermission'])->name('permissions.store');
    Route::get('/permissions', [RoleController::class, 'showPermissions'])->name('permissions.show');
    Route::post('/roles/{roleId}/assign-permissions', [RoleController::class, 'assignPermission'])->name('roles.assignPermissions');
    Route::post('/roles/{roleId}/revoke-permissions', [RoleController::class, 'revokePermission'])->name('roles.revokePermissions');
    Route::get('/roles/{role}/assign-permissions', [RoleController::class, 'assignPermissionsForm'])->name('roles.assignPermissionsForm');
    Route::get('/roles', [RoleController::class, 'show'])->name('roles.show');
});

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
    Route::get('publisher/dashboard', [PublisherController::class, 'index'])->name('publisher.dashboard');
    //Add Publisher Details
    Route::get('publisher/create-publisher', [PublisherController::class, 'create'])->name('publisher.create');
    //Store Publishe Details
    Route::post('publisher/add-publisher', [PublisherController::class, 'store'])->name('publisher.store');
    //Show Publishe Details
    // Route::get('/publisher/edit/id', [PublisherController::class, 'edit'])->name('publisher.edit');
    // Route to edit publisher details
    Route::get('publisher/edit/{id}', [PublisherController::class, 'edit'])->name('publisher.edit');
    //Edit Publishe Details
   // Route::get('publisher/{id}/edit', [PublisherController::class, 'edit'])->name('publisher.edit');
    //Store Publisher Updated Details
    Route::put('publisher/edit/{id}', [PublisherController::class, 'update'])->name('publisher.edit');
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
    Route::get('socialpublisher/facebook/create', [ScPublisherFacebookController::class, 'create'])->name('scp_facebook.create');
    Route::post('socialpublisher/facebook/store', [ScPublisherFacebookController::class, 'store'])->name('scp_facebook.store');


                                     // Social Publisher Facebook Page Routes
    Route::get('socialpublisher/facebookpage/create', [FacebookPageController::class, 'create'])->name('scp_facebookpage.create');
    Route::post('socialpublisher/facebookpage/store', [FacebookPageController::class, 'store'])->name('scp_facebookpage.store');


                                     // Social Publisher Facebook Group Routes
    Route::get('socialpublisher/facebookgroup/create', [FacebookGroupController::class, 'create'])->name('scp_facebookgroup.create');
    Route::post('socialpublisher/facebookgroup/store', [FacebookGroupController::class, 'store'])->name('scp_facebookgroup.store');


      /*
    |--------------------------------------------------------------------------
                             Social Publisher Twitter routes
    |--------------------------------------------------------------------------
    |
    |
    */
    Route::get('socialpublisher/x/create', [ScPublisherTwitterController::class, 'create'])->name('scp_x.create');
    Route::post('socialpublisher/x/store', [ScPublisherTwitterController::class, 'store'])->name('scp_x.store');




                            // Social Publisher Facebook Group Routes
    Route::get('socialpublisher/x/community/create', [XCommunityController::class, 'create'])->name('scp_xcommunity.create');
    Route::post('socialpublisher/x/community/store', [XCommunityController::class, 'store'])->name('scp_xcommunity.store');




      /*
    |--------------------------------------------------------------------------
                            Social Publisher Instagram routes
    |--------------------------------------------------------------------------
    |
    |
    */

    Route::get('socialpublisher/instagram/create', [ScPublisherInstagramController::class, 'create'])->name('scp_instagram.create');
    Route::post('socialpublisher/instagram/store', [ScPublisherInstagramController::class, 'store'])->name('scp_instagram.store');



                           // Social Publisher Facebook Group Routes
     Route::get('socialpublisher/instagramgroup/create', [InstagramGroupController::class, 'create'])->name('scp_instagramgroup.create');
     Route::post('socialpublisher/instagramgroup/store', [InstagramGroupController::class, 'store'])->name('scp_instagramgroup.store');






      /*
    |--------------------------------------------------------------------------
                             Social Publisher Telegram routes
    |--------------------------------------------------------------------------
    |
    |
    */

    Route::get('socialpublisher/telegram/create', [ScPublisherTelegramController::class, 'create'])->name('scp_telegram.create');
    Route::post('socialpublisher/telegram/store', [ScPublisherTelegramController::class, 'store'])->name('scp_telegram.store');


                            // Social Publisher Facebook Group Routes
     Route::get('socialpublisher/telegramgroup/create', [TelegramGroupController::class, 'create'])->name('scp_telegramgroup.create');
     Route::post('socialpublisher/telegramgroup/store', [TelegramGroupController::class, 'store'])->name('scp_telegramgroup.store');




      /*
    |--------------------------------------------------------------------------
                            Social Publisher Whatsapp routes
    |--------------------------------------------------------------------------
    |
    |
    */

                                    // Social Publisher Whatsapp Group Routes
    Route::get('socialpublisher/whatsapp/create', [ScPublisherWhatsappController::class, 'create'])->name('scp_whatsapp.create');
    Route::post('socialpublisher/whatsapp/store', [ScPublisherWhatsappController::class, 'store'])->name('scp_whatsapp.store');





                                  // Social Publisher Whatsapp Channel Routes
    Route::get('socialpublisher/whatsappchannel/create', [WhatsappChannelController::class, 'create'])->name('scp_whatsappchannel.create');
    Route::post('socialpublisher/whatsappchannel/store', [WhatsappChannelController::class, 'store'])->name('scp_whatsappchannel.store');


                                      // Social Publisher Whatsapp Community Routes
    Route::get('socialpublisher/whatsappcommunity/create', [WhatsappCommunityController::class, 'create'])->name('scp_whatsappchannel.create');
    Route::post('socialpublisher/whatsappcommunity/store', [WhatsappCommunityController::class, 'store'])->name('scp_whatsappchannel.store');
    /*
    |--------------------------------------------------------------------------
                        Social Publisher Tiktok routes
    |--------------------------------------------------------------------------
    |
    |
    */


    Route::get('socialpublisher/tiktok/create', [ScPublisherTiktokController::class, 'create'])->name('scp_tiktok.create');
    Route::post('socialpublisher/tiktok/store', [ScPublisherTiktokController::class, 'store'])->name('scp_tiktok.store');



                     // Social Publisher Whatsapp Community Routes
 Route::get('socialpublisher/tiktokgroup/create', [TiktokGroupController::class, 'create'])->name('scp_tiktokgroup.create');
Route::post('socialpublisher/tiktokgroup/store', [TiktokGroupController::class, 'store'])->name('scp_tiktokgroup.store');




    /*
    |--------------------------------------------------------------------------
                        Social Publisher Youtube routes
    |--------------------------------------------------------------------------
    |
    |
    */


    Route::get('socialpublisher/youtube/create', [ScPublisherYoutubeController::class, 'create'])->name('scp_youtube.create');
    Route::post('socialpublisher/youtube/store', [ScPublisherYoutubeController::class, 'store'])->name('scp_youtube.store');
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
