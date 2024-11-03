<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
Route::get('/email', function () {
    Mail::raw('TESTE DE EMAIL LUIS', function (Message $message) {
        $message->to('luis@localhost') // Use um e-mail que você quer testar
                ->subject('Bem vindo')
                ->from('rh@testinho.com'); // Use um endereço de e-mail válido
    });
    echo "Email enviado";
});


