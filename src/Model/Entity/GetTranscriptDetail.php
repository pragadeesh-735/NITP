<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GetTranscriptDetail Entity
 *
 * @property int $id
 * @property string|null $alumni_name
 * @property string|null $alumni_registration_number
 * @property int|null $application_reason
 * @property string|null $upload_reciept
 * @property int $is_active
 * @property string|null $created_by
 * @property \Cake\I18n\FrozenTime|null $created_date
 * @property string|null $modified_by
 * @property \Cake\I18n\FrozenTime|null $modified_date
 */
class GetTranscriptDetail extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'alumni_name' => true,
        'alumni_registration_number' => true,
        'application_reason' => true,
        'upload_reciept' => true,
        'is_active' => true,
        'created_by' => true,
        'created_date' => true,
        'modified_by' => true,
        'modified_date' => true,
    ];
}
