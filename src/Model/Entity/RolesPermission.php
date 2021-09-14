<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CoGroupsCoPermission Entity
 *
 * @property string $id
 * @property string $co_group_id
 * @property string $co_permission_id
 *
 * @property \App\Model\Entity\CoGroup $co_group
 * @property \App\Model\Entity\CoPermission $co_permission
 */
class CoGroupsCoPermission extends Entity
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
        'co_group_id' => true,
        'co_permission_id' => true,
        'co_group' => true,
        'co_permission' => true,
    ];
}
