<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    /**
     * function actionTitle
     *
     * @param string ...$except
     * @return ?string
     */
    public static function actionTitle(string ...$except): ?string
    {
        $except = $except ?? ['Closure'];
        $action = request()->route()->getActionMethod() ?? null;

        if (!$action || !is_string($action)) {
            return null;
        }

        return !in_array($action, $except) ? __("action_title.{$action}") : null;
    }
}
