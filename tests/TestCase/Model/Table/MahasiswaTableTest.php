<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MahasiswaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MahasiswaTable Test Case
 */
class MahasiswaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MahasiswaTable
     */
    protected $Mahasiswa;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Mahasiswa',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Mahasiswa') ? [] : ['className' => MahasiswaTable::class];
        $this->Mahasiswa = $this->getTableLocator()->get('Mahasiswa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Mahasiswa);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
