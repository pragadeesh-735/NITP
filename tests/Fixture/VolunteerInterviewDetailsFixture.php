<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VolunteerInterviewDetailsFixture
 */
class VolunteerInterviewDetailsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'alumni_name' => 'Lorem ipsum dolor sit amet',
                'alumni_registration_number' => 'Lorem ipsum dolor sit amet',
                'current_position' => 'Lorem ipsum dolor sit amet',
                'short_bio' => 'Lorem ipsum dolor sit amet',
                'is_active' => 1,
                'created_by' => 'Lorem ipsum dolor sit amet',
                'created_date' => '2024-08-01 15:47:51',
                'modified_by' => 'Lorem ipsum dolor sit amet',
                'modified_date' => '2024-08-01 15:47:51',
            ],
        ];
        parent::init();
    }
}
