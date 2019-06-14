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

namespace Phalcon\Test\Integration\Forms\Form;

use IntegrationTester;
use Phalcon\Forms\Form;

class GetUserOptionsCest
{
    /**
     * Tests Phalcon\Forms\Form :: getUserOptions()
     *
     * @author Sid Roberts <https://github.com/SidRoberts>
     * @since  2019-05-23
     */
    public function formsFormGetUserOptions(IntegrationTester $I)
    {
        $I->wantToTest('Forms\Form - getUserOptions()');

        $userOptions = [
            'some' => 'value',
        ];

        $form = new Form(null, $userOptions);

        $I->assertEquals(
            $userOptions,
            $form->getUserOptions()
        );
    }
}
