<?php

namespace Ensphere\Gnaw\Generators\Base;

use Ensphere\Gnaw\Abs\SelectorGenerator;
use Ensphere\Gnaw\Contracts\GnawFile;
use Ensphere\Gnaw\Generators\Generator;
use Ensphere\Gnaw\Traits\Color;
use Ensphere\Gnaw\Traits\Media;

class Page extends SelectorGenerator implements Generator
{

    use Media, Color;

    /**
     * @var string
     */
    protected $route = __DIR__ . '/../../../resources/core-styles/base/';

    /**
     * @return GnawFile
     */
    public function generate(): GnawFile
    {
        $file = new GnawFile();
        $file->content( file_get_contents( "{$this->route}page.gnaw" ) );
        return $file;
    }
}
