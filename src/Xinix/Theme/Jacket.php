<?php

namespace Xinix\Theme;

use Bono\Theme\Theme;
use ROH\Util\Inflector;
use KrisanAlfa\Theme\BladeTheme;
use KrisanAlfa\Blade\BladeView;

class Jacket extends BladeTheme
{

    public function __construct(array $options = array())
    {
        // call parent constructor
        parent::__construct($options);

        // set blade-theme module dir as one of base directory
        $directory = explode(DIRECTORY_SEPARATOR.'src', __DIR__);
        $directory = reset($directory);

        // TODO adding to priority 4, should be 5
        $this->addBaseDirectory($directory, 4);

        $this->resolveAssetPath('vendor/naked2-theme');

        $app = \App::getInstance();

        $app->hook('controller.delete.success', function () use ($app) {
            $app->redirect(f('controller.url'));
        });
    }

    // public function getView()
    // {
    //     if (is_null($this->view)) {
    //         if (!is_dir($this->options['cachePath'])) {
    //             mkdir($this->options['cachePath'], 0755, true);
    //         }

    //         $this->options['viewPaths'] = $this->arrayFlatten($this->baseDirectories);

    //         $this->view = new BladeView($this->options);
    //     }

    //     return $this->view;
    // }
}
