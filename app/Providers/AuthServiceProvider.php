<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {

        Auth::viaRequest('api', function(Request $request){
            $token = $request->bearerToken();


            if(!$token) {
                return null;
            }

            $key = new Key(env('APP_KEY'), 'HS256');

            $payload = JWT::decode($token, $key);

            if ($payload) {

                return User::query()->find($payload->id);
            }
            return null;

        });
        /* $this->app['auth']->viaRequest('api', function ($request) {

            $authorization = $request->header('Authorization');

            if ($authorization) {
                $token = explode(' ', $authorization)[1];

                $key = new Key(env('APP_KEY'), 'HS256');

                $payload = JWT::decode($token, $key);

                if ($payload) {
                    $user = new User();

                    $user->id = $payload->id;

                    return $user;
                }

                return null;
            }
        }); */
    }
}
