<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbValoresExamenesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbValoresExamenesTable Test Case
 */
class TbValoresExamenesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbValoresExamenesTable
     */
    public $TbValoresExamenes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_valores_examenes',
        'app.tb_examenes',
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
        $config = TableRegistry::exists('TbValoresExamenes') ? [] : ['className' => 'App\Model\Table\TbValoresExamenesTable'];
        $this->TbValoresExamenes = TableRegistry::get('TbValoresExamenes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbValoresExamenes);

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
