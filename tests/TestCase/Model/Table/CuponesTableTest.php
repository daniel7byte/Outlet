<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CuponesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CuponesTable Test Case
 */
class CuponesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CuponesTable
     */
    public $Cupones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cupones',
        'app.sucursales',
        'app.empresas',
        'app.usuarios',
        'app.bolsa',
        'app.tokens',
        'app.categorias',
        'app.ciudades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cupones') ? [] : ['className' => 'App\Model\Table\CuponesTable'];
        $this->Cupones = TableRegistry::get('Cupones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cupones);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
