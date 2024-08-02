<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VolunteerInterviewDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VolunteerInterviewDetailsTable Test Case
 */
class VolunteerInterviewDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VolunteerInterviewDetailsTable
     */
    protected $VolunteerInterviewDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.VolunteerInterviewDetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('VolunteerInterviewDetails') ? [] : ['className' => VolunteerInterviewDetailsTable::class];
        $this->VolunteerInterviewDetails = $this->getTableLocator()->get('VolunteerInterviewDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->VolunteerInterviewDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VolunteerInterviewDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
