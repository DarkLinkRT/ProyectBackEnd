<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CoPermission Entity
 *
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $controller
 * @property string $action
 * @property bool $active
 * @property bool $deleted
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CoGroup[] $co_groups
 */
class CoPermission extends Entity
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
        'name' => true,
        'description' => true,
        'controller' => true,
        'action' => true,
        'active' => true,
        'deleted' => true,
        'created' => true,
        'modified' => true,
        'co_groups' => true,
    ];
}
