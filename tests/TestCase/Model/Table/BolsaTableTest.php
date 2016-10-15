<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BolsaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BolsaTable Test Case
 */
class BolsaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BolsaTable
     */
    public $Bolsa;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bolsa',
        'app.cupones',
        'app.sucursales',
        'app.empresas',
        'app.usuarios',
        'app.tokens',
        'app.categorias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Bolsa') ? [] : ['className' => 'App\Model\Table\BolsaTable'];
        $this->Bolsa = TableRegistry::get('Bolsa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bolsa);

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
