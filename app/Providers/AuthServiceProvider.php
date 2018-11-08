<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        /*
         * 開発者のみ：許可ロール値が「１」のユーザのみ
         * 管理者以上：ロール値が「１〜５」のユーザのみ
         * 一般ユーザ以上：ロール値が「１〜１０」のユーザ（全ユーザ）
         */
        //開発者のみ許可
        Gate::define('system-only', function ($user) {
            return($user->role == 1);
        });
        //管理者以上（管理者＆システム管理者）に許可
        Gate::define('admin-higher', function ($user) {
            return ($user->role > 0 && $user->role <= 5);
        });
        //一般ユーザ以上（つまり全権限）に許可
        Gate::define('user-higher', function ($user) {
            return ($user->role > 0 && $user->role <= 10);
        });
    }
}
