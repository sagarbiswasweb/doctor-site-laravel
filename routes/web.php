<?php

use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\EmailController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\MessageController;
use App\Http\Controllers\backend\ScheduleController;
use App\Http\Controllers\backend\VideoController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\ProcedureController;
use App\Http\Controllers\backend\TreatmentController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\frontend\VideoController as FrontendVideoController;
use App\Models\Visitor;
use Illuminate\Support\Facades\Route;



// ========= FRONTEND ROUTES =========
Route::get('/', [FrontendHomeController::class, 'index'])->name('frontend.home');
Route::post('/send-message', [FrontendHomeController::class, 'storeMessage'])->name('message.store');
Route::get('/health-videos', [FrontendVideoController::class, 'index'])->name('frontend.video');



// ========= BACKEND ROUTES =========
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('backend.home');

    // for message 
    Route::get('/admin/messages', [MessageController::class, 'index'])->name('message.index');
    Route::get('/admin/messages/{id}', [MessageController::class, 'viewMessage'])->name('message.view');
    Route::delete('/admin/messages/delete/{id}', [MessageController::class, 'deleteMessage'])->name('message.delete');
    Route::post('/message/bulk-delete',[MessageController::class,'bulkDelete'])->name('message.bulk.delete');
    Route::get('/messages/unread', [MessageController::class, 'unread'])->name('messages.unread');
    Route::post('/messages/mark-read', [MessageController::class, 'markRead'])->name('messages.markRead');
    Route::get('/messages/unread-count',[MessageController::class,'unreadCount'])->name('messages.unreadCount');

    // for schedule management
    Route::get('/admin/schedules', [ScheduleController::class, 'index'])->name('schedule.index');
    Route::get('/admin/schedules/view/{id}', [ScheduleController::class, 'view'])->name('schedule.view');
    Route::get('/admin/schedules/edit/{id}', [ScheduleController::class, 'edit'])->name('schedule.edit');
    Route::get('/admin/schedules/create', [ScheduleController::class, 'create'])->name('schedule.create');
    Route::post('/admin/schedules/store', [ScheduleController::class, 'store'])->name('schedule.store');
    Route::put('/admin/schedules/update/{id}', [ScheduleController::class, 'update'])->name('schedule.update');
    Route::delete('/admin/schedules/delete/{id}', [ScheduleController::class, 'delete'])->name('schedule.delete');

    // for about management
    Route::get('/admin/about/create', [AboutController::class, 'create'])->name('about.create');
    Route::post('/admin/about/store', [AboutController::class, 'store'])->name('about.store');
    Route::get('/admin/about/show', [AboutController::class, 'show'])->name('about.show');
    Route::get('/admin/about/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('/admin/about/update', [AboutController::class, 'update'])->name('about.update');
    Route::delete('/admin/about/delete', [AboutController::class, 'delete'])->name('about.delete');

    // for treatment management
    Route::get('/admin/treatments/create', [TreatmentController::class, 'create'])->name('treatment.create');
    Route::post('/admin/treatments/store', [TreatmentController::class, 'store'])->name('treatment.store');
    Route::get('/admin/treatments', [TreatmentController::class, 'index'])->name('treatment.index');
    Route::get('/admin/treatments/edit/{id}', [TreatmentController::class, 'edit'])->name('treatment.edit');
    Route::put('/admin/treatments/update/{id}', [TreatmentController::class, 'update'])->name('treatment.update');
    Route::delete('/admin/treatments/delete/{id}', [TreatmentController::class, 'delete'])->name('treatment.delete');

    // for procedure management
    Route::get('/admin/procedures/create', [ProcedureController::class, 'create'])->name('procedure.create');
    Route::post('/admin/procedures/store', [ProcedureController::class, 'store'])->name('procedure.store');
    Route::get('/admin/procedures', [ProcedureController::class, 'index'])->name('procedure.index');
    Route::get('/admin/procedures/view/{id}', [ProcedureController::class, 'view'])->name('procedure.view');
    Route::get('/admin/procedures/edit/{id}', [ProcedureController::class, 'edit'])->name('procedure.edit');
    Route::put('/admin/procedures/update/{id}', [ProcedureController::class, 'update'])->name('procedure.update');
    Route::delete('/admin/procedures/delete/{id}', [ProcedureController::class, 'delete'])->name('procedure.delete');
    
    // for video 
    Route::get('/admin/videos', [VideoController::class, 'index'])->name('video.index');
    Route::get('/admin/videos/add', [VideoController::class, 'add'])->name('video.add');
    Route::post('/admin/videos/store', [VideoController::class, 'store'])->name('videos.store');
    Route::get('/admin/videos/view/{id}', [VideoController::class, 'view'])->name('video.view');
    Route::get('/admin/videos/edit/{id}', [VideoController::class, 'edit'])->name('video.edit');
    Route::put('/admin/videos/update/{id}', [VideoController::class, 'update'])->name('videos.update');
    Route::delete('/admin/videos/delete/{id}', [VideoController::class, 'delete'])->name('videos.delete');

    // for emaill management
    Route::get('/admin/email/inbox', [EmailController::class, 'inbox'])->name('email.inbox');
    Route::get('/admin/email/sent', [EmailController::class, 'sent'])->name('email.sent');
    Route::get('/admin/email/compose', [EmailController::class, 'compose'])->name('email.compose');
    Route::get('/admin/email/read/{id}', [EmailController::class, 'read'])->name('email.read');
    Route::get('/admin/email/read/imap/{uid}', [EmailController::class, 'readImap'])->name('email.read.imap');
    Route::get('/admin/email/attachment/{uid}/{partNumber}', [EmailController::class, 'downloadAttachment'])->name('email.attachment.download');
    Route::post('/send-email', [EmailController::class, 'send'])->name('send.email');
    Route::post('/email/mark-read',[EmailController::class,'markRead'])->name('email.mark.read');
    Route::post('/email/delete',[EmailController::class,'deleteMail'])->name('email.delete');
     
});



