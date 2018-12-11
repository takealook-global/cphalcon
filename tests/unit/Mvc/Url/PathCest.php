<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Mvc\Url;

use UnitTester;

/**
 * Class PathCest
 *
 * @package Phalcon\Test\Unit\Mvc\Url
 */
class PathCest
{
    /**
     * Tests Phalcon\Mvc\Url :: path()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcUrlPath(UnitTester $I)
    {
        $I->wantToTest("Mvc\Url - path()");
        $I->skipTest("Need implementation");
    }
}