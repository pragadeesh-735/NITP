<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DonateBooksDetailsFixture
 */
class DonateBooksDetailsFixture extends TestFixture
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
                'upload_book' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'is_active' => 1,
                'created_by' => 'Lorem ipsum dolor sit amet',
                'created_date' => '2024-08-02 06:38:17',
                'modified_by' => 'Lorem ipsum dolor sit amet',
                'modified_date' => '2024-08-02 06:38:17',
            ],
        ];
        parent::init();
    }
}
