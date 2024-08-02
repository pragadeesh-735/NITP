<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CardApplicationDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CardApplicationDetailsTable Test Case
 */
class CardApplicationDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CardApplicationDetailsTable
     */
    protected $CardApplicationDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CardApplicationDetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CardApplicationDetails') ? [] : ['className' => CardApplicationDetailsTable::class];
        $this->CardApplicationDetails = $this->getTableLocator()->get('CardApplicationDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CardApplicationDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CardApplicationDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
