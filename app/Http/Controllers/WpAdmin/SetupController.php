<?php

namespace App\Http\Controllers\WpAdmin;

/**
 * @author    Sebastian Szczepański
 * @copyright ably
 */
class SetupController extends BaseController
{
    /**
     */
    public function __construct()
    {
    }

    /**
     * @return \Illuminate\View\View
     */
    public function edit()
    {
//        $parsedown = new Parsedown();
//
//        $prefix = 'messages.disabled_feature.setup_config';
//
//        return view('disabled-feature', [
//            'title' => trans($prefix . '.title'),
//            'message' => trans($prefix . '.message'),
//            'body' => $parsedown->text(trans($prefix . '.body')),
//        ]);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function update()
    {
        $parsedown = new Parsedown();

        $prefix = 'messages.disabled_feature.setup_config';

        return view('disabled-feature', [
            'title' => trans($prefix . '.title'),
            'message' => trans($prefix . '.message'),
            'body' => $parsedown->text(trans($prefix . '.body')),
        ]);
    }
}