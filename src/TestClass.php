<?php

namespace cweagans\ComposerPatchesTest;

class TestClass
{
    protected $someparam;

    public function __construct($someparam)
    {
        $this->someparam = $someparam;
    }

    public function another_method()
    {
        $this->someparam = null;
    }
}
