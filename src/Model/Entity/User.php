<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property string $id
 * @property string $co_group_id
 * @property string $user
 * @property string $password
 * @property string $name
 * @property string $last_name
 * @property string $mother_last_name
 * @property string $picture
 * @property string $gender_id
 * @property string|null $domicilio
 * @property string|null $cat_locality_id
 * @property \Cake\I18n\FrozenTime|null $last_access
 * @property bool $active
 * @property bool $deleted
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CoGroup $co_group
 * @property \App\Model\Entity\Gender $gender
 * @property \App\Model\Entity\CatLocality $cat_locality
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
     * @var array
     */
    protected $_accessible = [
        'role_id' => true,
        'user' => true,
        'password' => true,
        'name' => true,
        'last_name' => true,
        'mother_last_name' => true,
        'picture' => true,
        'gender_id' => true,
        'domicilio' => true,
        'active' => true,
        'deleted' => true,
        'created' => true,
        'modified' => true,
        'role' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
