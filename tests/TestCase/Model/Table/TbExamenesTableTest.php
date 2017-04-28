<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbExamenesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbExamenesTable Test Case
 */
class TbExamenesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbExamenesTable
     */
    public $TbExamenes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('TbExamenes') ? [] : ['className' => 'App\Model\Table\TbExamenesTable'];
        $this->TbExamenes = TableRegistry::get('TbExamenes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbExamenes);

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
