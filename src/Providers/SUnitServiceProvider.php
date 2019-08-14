<?php


namespace FuJiangSun\SunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class SUnitServiceProvider  extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // echo '这是sjunt 服务提供者';
        // 注册组件路由
        $this->registerRoutes();
        // 指定的组件的名称，自定义的资源目录地址
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'sunit'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(),function(){
           $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }
    private function routeConfiguration()
    {
        return [
            // 定义访问路由的域名
            // 'domain' => config('telescope.domain', null),
            // 是定义路由的命名空间
            'namespace' => 'FuJiangSun\SunitLaravel\Http\Controllers',
            // 这是前缀
            'prefix' => 'sunit',
            // 这是中间件
            'middleware' => 'web',
        ];
    }

}