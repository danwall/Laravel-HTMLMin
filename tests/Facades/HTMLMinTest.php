<?php

/*
 * This file is part of Laravel HTMLMin.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Tests\HTMLMin\Facades;

use GrahamCampbell\HTMLMin\Facades\HTMLMin as Facade;
use GrahamCampbell\HTMLMin\HTMLMin;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use GrahamCampbell\Tests\HTMLMin\AbstractTestCase;

/**
 * This is the htmlmin facade test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class HTMLMinTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'htmlmin';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Facade::class;
    }

    /**
     * Get the facade route.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return HTMLMin::class;
    }
}
