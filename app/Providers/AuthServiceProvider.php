<?php

namespace App\Providers;

use Illuminate\Support\HtmlString;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->greeting("Hallo, $notifiable->name")
                ->subject('Bestätige deine E-Mail Adresse')
                ->line('Um deine Anmeldung abzuschließen, bestätige bitte deine E-Mail Adresse indem du auf den Button klickst:')
                ->action('Jetzt bestätigen', $url)
                ->salutation(new HtmlString('Liebe Grüße,<br>Dein branchenkalender'));

    });
    }
}
