<?php

namespace TestRepository/PackageOne;

class ClassOne
{

    public function __construct()
    {
    
    }
    
    public function methodOne()
    {
        printf('%s::%s has been called!', __CLASS__, __METHOD__);
    }

}
