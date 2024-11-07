<?php
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
Route::get('/email', function () {
    Mail::raw('TESTE DE EMAIL LUIS', function (Message $message) {
        $message->to('luis@localhost')
                ->subject('Bem vindo')
                ->from('rh@testinho.com');
    });
    echo "Email enviado";
});

Route::get('/admin', function() {
    $admin = User::with('detail', 'department')->find(1);
    dd($admin->toArray());
});


