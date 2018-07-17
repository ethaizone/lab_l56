<?php
/**
 * Created by PhpStorm.
 * User: ethaizone
 * Date: 17/7/2018 AD
 * Time: 14:57
 */

namespace App\Extend;

use Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables as Baddddddse;
use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;
use Illuminate\Contracts\Foundation\Application;

class LoadEnvironmentVariables extends Baddddddse
{
    /**
     * Bootstrap the given application.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function bootstrap(Application $app)
    {
        if ($app->configurationIsCached()) {
            return;
        }

        $this->checkForSpecificEnvironmentFile($app);

        try {
            if (strpos(url()->current(), 'lab_l56.127.0.0.1') !== false) {
                (new Dotenv($app->environmentPath(), '.env.production'))->load();
            } else {
                (new Dotenv($app->environmentPath(), $app->environmentFile()))->load();
            }
        } catch (InvalidPathException $e) {
            //
        }
    }
}