<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DonateBooksDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DonateBooksDetailsTable Test Case
 */
class DonateBooksDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DonateBooksDetailsTable
     */
    protected $DonateBooksDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DonateBooksDetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DonateBooksDetails') ? [] : ['className' => DonateBooksDetailsTable::class];
        $this->DonateBooksDetails = $this->getTableLocator()->get('DonateBooksDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DonateBooksDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DonateBooksDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
