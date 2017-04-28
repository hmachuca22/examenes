<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbResultadoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbResultadoTable Test Case
 */
class TbResultadoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbResultadoTable
     */
    public $TbResultado;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_resultado'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbResultado') ? [] : ['className' => 'App\Model\Table\TbResultadoTable'];
        $this->TbResultado = TableRegistry::get('TbResultado', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbResultado);

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
