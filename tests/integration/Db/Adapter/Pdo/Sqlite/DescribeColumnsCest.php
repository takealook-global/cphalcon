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

namespace Phalcon\Test\Integration\Db\Adapter\Pdo\Sqlite;

use IntegrationTester;
use Phalcon\Db\Column;
use Phalcon\Test\Fixtures\Traits\DiTrait;

class DescribeColumnsCest
{
    use DiTrait;

    public function _before(IntegrationTester $I)
    {
        $this->newDi();
        $this->setDiModelsManager();
        $this->setDiModelsMetadata();
        $this->setDiSqlite();
    }

    /**
     * Tests Phalcon\Db\Adapter\Pdo\Sqlite :: describeColumns()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function dbAdapterPdoSqliteDescribeColumns(IntegrationTester $I)
    {
        $I->wantToTest('Db\Adapter\Pdo\Sqlite - describeColumns()');

        $connection = $this->getService('db');

        $expectedDescribe = $this->getExpectedColumnsSqlite();

        $I->assertEquals(
            $expectedDescribe,
            $connection->describeColumns('personas')
        );

        $I->assertEquals(
            $expectedDescribe,
            $connection->describeColumns('personas', 'main')
        );
    }

    private function getExpectedColumnsSqlite(): array
    {
        return [
            0  => Column::__set_state([
                'columnName'    => 'cedula',
                'type'          => 5,
                'isNumeric'     => false,
                'size'          => 15,
                'scale'         => 0,
                'default'       => null,
                'unsigned'      => false,
                'notNull'       => true,
                'autoIncrement' => false,
                'primary'       => true,
                'first'         => true,
                'after'         => null,
                'bindType'      => 2,
            ]),
            1  => Column::__set_state([
                'columnName'    => 'tipo_documento_id',
                'type'          => 0,
                'isNumeric'     => true,
                'size'          => 3,
                'scale'         => 0,
                'default'       => null,
                'unsigned'      => false,
                'notNull'       => true,
                'autoIncrement' => false,
                'first'         => false,
                'after'         => 'cedula',
                'bindType'      => 1,
            ]),
            2  => Column::__set_state([
                'columnName'    => 'nombres',
                'type'          => 2,
                'isNumeric'     => false,
                'size'          => 100,
                'scale'         => 0,
                'default'       => '',
                'unsigned'      => false,
                'notNull'       => true,
                'autoIncrement' => false,
                'first'         => false,
                'after'         => 'tipo_documento_id',
                'bindType'      => 2,
            ]),
            3  => Column::__set_state([
                'columnName'    => 'telefono',
                'type'          => 2,
                'isNumeric'     => false,
                'size'          => 20,
                'scale'         => 0,
                'default'       => null,
                'unsigned'      => false,
                'notNull'       => false,
                'autoIncrement' => false,
                'first'         => false,
                'after'         => 'nombres',
                'bindType'      => 2,
            ]),
            4  => Column::__set_state([
                'columnName'    => 'direccion',
                'type'          => 2,
                'isNumeric'     => false,
                'size'          => 100,
                'scale'         => 0,
                'default'       => null,
                'unsigned'      => false,
                'notNull'       => false,
                'autoIncrement' => false,
                'first'         => false,
                'after'         => 'telefono',
                'bindType'      => 2,
            ]),
            5  => Column::__set_state([
                'columnName'    => 'email',
                'type'          => 2,
                'isNumeric'     => false,
                'size'          => 50,
                'scale'         => 0,
                'default'       => null,
                'unsigned'      => false,
                'notNull'       => false,
                'autoIncrement' => false,
                'first'         => false,
                'after'         => 'direccion',
                'bindType'      => 2,
            ]),
            6  => Column::__set_state([
                'columnName'    => 'fecha_nacimiento',
                'type'          => 1,
                'isNumeric'     => false,
                'size'          => 0,
                'scale'         => 0,
                'default'       => '1970-01-01',
                'unsigned'      => false,
                'notNull'       => false,
                'autoIncrement' => false,
                'first'         => false,
                'after'         => 'email',
                'bindType'      => 2,
            ]),
            7  => Column::__set_state([
                'columnName'    => 'ciudad_id',
                'type'          => 0,
                'isNumeric'     => true,
                'size'          => 10,
                'scale'         => 0,
                'default'       => '0',
                'unsigned'      => false,
                'notNull'       => false,
                'autoIncrement' => false,
                'first'         => false,
                'after'         => 'fecha_nacimiento',
                'bindType'      => 1,
            ]),
            8  => Column::__set_state([
                'columnName'    => 'creado_at',
                'type'          => 1,
                'isNumeric'     => false,
                'size'          => 0,
                'scale'         => 0,
                'default'       => null,
                'unsigned'      => false,
                'notNull'       => false,
                'autoIncrement' => false,
                'first'         => false,
                'after'         => 'ciudad_id',
                'bindType'      => 2,
            ]),
            9  => Column::__set_state([
                'columnName'    => 'cupo',
                'type'          => 3,
                'isNumeric'     => true,
                'size'          => 16,
                'scale'         => 2,
                'default'       => null,
                'unsigned'      => false,
                'notNull'       => true,
                'autoIncrement' => false,
                'first'         => false,
                'after'         => 'creado_at',
                'bindType'      => 32,
            ]),
            10 => Column::__set_state([
                'columnName'    => 'estado',
                'type'          => 5,
                'isNumeric'     => false,
                'size'          => 1,
                'scale'         => 0,
                'default'       => null,
                'unsigned'      => false,
                'notNull'       => true,
                'autoIncrement' => false,
                'first'         => false,
                'after'         => 'cupo',
                'bindType'      => 2,
            ]),
        ];
    }
}
