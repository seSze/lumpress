<?php

namespace App\Http\Controllers\WpAdmin;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class DashboardController extends BaseController
{
    public function show()
    {
        $request = app('request');

        // need trail '/'
        if (!ends_with($request->getPathInfo(), '/')) {
            // make valid url
            $url = $request->getSchemeAndHttpHost().$request->getBaseUrl().$request->getPathInfo().'/';

            $qs = $request->getQueryString();
            if ($qs !== null) {
                $url .= '?'.$qs;
            }

            // redirect to valid url
            return redirect()->to($url);
        }

        $this->runAdminWithMenu('index.php');
    }
}