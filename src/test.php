<?php namespace Tukecx\Base\Test\Providers;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
class ModuleProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    	var_dump('tttttttt');exit();
    	
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
?>