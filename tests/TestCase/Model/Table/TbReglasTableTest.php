<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbReglasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbReglasTable Test Case
 */
class TbReglasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbReglasTable
     */
    public $TbReglas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_reglas',
        'app.tb_tipos_examenes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbReglas') ? [] : ['className' => 'App\Model\Table\TbReglasTable'];
        $this->TbReglas = TableRegistry::get('TbReglas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbReglas);

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
