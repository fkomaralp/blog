<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists, this
    | is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities this is cool
    | feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        'before' => function($theme)
        {
            $theme->setTitle('Title example');
            $theme->setAuthor('Jonh Doe');
        },

        'asset' => function($asset)
        {
            $asset->themePath()->add([
                //css
                ['style-fontawesome-all', '../themes/magala/assets/css/fontawesome.all.min.css'],
                ['style-fontawesome', '../themes/magala/assets/css/fontawesome.min.css'],
                ['style-plugins', '../themes/magala/assets/css/plugins.css'],
                ['style', '../themes/magala/assets/css/style.css'],
                //js
                ['script-jquery', '../themes/magala/assets/js/jquery.min.js'],
                ['script-bootstrap', '../themes/magala/assets/js/bootstrap.min.js'],
                ['script-popper', '../themes/magala/assets/js/popper.min.js'],
                ['script-owl', '../themes/magala/assets/js/owl.carousel.min.js'],
                ['script-masonary', '../themes/magala/assets/js/masonary.min.js'],
                ['script-breaking', '../themes/magala/assets/js/breaking-news-ticker.min.js'],
                ['script-trackpad', '../themes/magala/assets/js/jquery.trackpad-scroll-emulator.min.js'],
                ['script-ResizeSensor', '../themes/magala/assets/js/ResizeSensor.min.js'],
                ['script-theia', '../themes/magala/assets/js/theia-sticky-sidebar.min.js'],
                ['script-plugins', '../themes/magala/assets/js/plugins.js'],
                ['script-main', '../themes/magala/assets/js/main.js'],
            ]);

            // You may use elixir to concat styles and scripts.
            /*
            $asset->themePath()->add([
                                        ['styles', 'dist/css/styles.css'],
                                        ['scripts', 'dist/js/scripts.js']
                                     ]);
            */

            // Or you may use this event to set up your assets.
            /*
            $asset->themePath()->add('core', 'core.js');
            $asset->add([
                            ['jquery', 'vendor/jquery/jquery.min.js'],
                            ['jquery-ui', 'vendor/jqueryui/jquery-ui.min.js', ['jquery']]
                        ]);
            */
        },


        'beforeRenderTheme' => function($theme)
        {
            // To render partial composer
            /*
            $theme->partialComposer('header', function($view){
                $view->with('auth', Auth::user());
            });
            */

        },

        'beforeRenderLayout' => array(

            'mobile' => function($theme)
            {
                // $theme->asset()->themePath()->add('ipad', 'css/layouts/ipad.css');
            }

        )

    )

);
