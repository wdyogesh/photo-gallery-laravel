<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'component.form.text', ['name', 'value'=>null, 'attributes'=> []]);
        Form::component('bsTextArea', 'component.form.textarea', ['name', 'value'=>null, 'attributes'=> []]);
        Form::component('bsSelect', 'component.form.select', ['name', 'value'=>null, 'attributes'=> []]);
        Form::component('bsSubmit', 'component.form.submit', ['name', 'value'=>null, 'attributes'=> []]);
        Form::component('bsHidden', 'component.form.hidden', ['name', 'value'=>null, 'attributes'=> []]);
        Form::component('bsFile', 'component.form.file', ['name', 'value'=>null, 'attributes'=> []]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
