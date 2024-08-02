<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher; // Add this line
/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $batch
 * @property string|null $department
 * @property string $email
 * @property string|null $phone_number
 * @property string|null $social_media
 * @property string|null $current_position
 * @property string|null $livingin
 */
class User extends Entity
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
        'name' => true,
        'batch' => true,
        'department' => true,
        'email' => true,
        'password' => true,
        'phone_number' => true,
        'social_media' => true,
        'current_position' => true,
        'livingin' => true,
    ];
    protected function _setPassword(string $password): ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
