<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GetTranscriptDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GetTranscriptDetailsTable Test Case
 */
class GetTranscriptDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GetTranscriptDetailsTable
     */
    protected $GetTranscriptDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.GetTranscriptDetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('GetTranscriptDetails') ? [] : ['className' => GetTranscriptDetailsTable::class];
        $this->GetTranscriptDetails = $this->getTableLocator()->get('GetTranscriptDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->GetTranscriptDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GetTranscriptDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
