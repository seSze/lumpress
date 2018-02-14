<?php

namespace App\Http\Controllers\WpAdmin;


class SetupController
{
    /**
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $parsedown = new Parsedown();

        $prefix = 'messages.disabled_feature.setup_config';

        return view('disabled-feature', [
            'title' => trans($prefix . '.title'),
            'message' => trans($prefix . '.message'),
            'body' => $parsedown->text(trans($prefix . '.body')),
        ]);
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