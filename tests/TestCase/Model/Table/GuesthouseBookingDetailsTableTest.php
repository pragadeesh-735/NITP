<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GuesthouseBookingDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GuesthouseBookingDetailsTable Test Case
 */
class GuesthouseBookingDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GuesthouseBookingDetailsTable
     */
    protected $GuesthouseBookingDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.GuesthouseBookingDetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('GuesthouseBookingDetails') ? [] : ['className' => GuesthouseBookingDetailsTable::class];
        $this->GuesthouseBookingDetails = $this->getTableLocator()->get('GuesthouseBookingDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->GuesthouseBookingDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GuesthouseBookingDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
