<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbTiposExamenesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbTiposExamenesTable Test Case
 */
class TbTiposExamenesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbTiposExamenesTable
     */
    public $TbTiposExamenes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('TbTiposExamenes') ? [] : ['className' => 'App\Model\Table\TbTiposExamenesTable'];
        $this->TbTiposExamenes = TableRegistry::get('TbTiposExamenes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbTiposExamenes);

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
}
