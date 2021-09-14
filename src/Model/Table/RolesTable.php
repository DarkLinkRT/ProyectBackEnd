<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CoGroups Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 * @property \App\Model\Table\CoMenusTable&\Cake\ORM\Association\BelongsToMany $CoMenus
 * @property \App\Model\Table\CoPermissionsTable&\Cake\ORM\Association\BelongsToMany $CoPermissions
 *
 * @method \App\Model\Entity\CoGroup newEmptyEntity()
 * @method \App\Model\Entity\CoGroup newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CoGroup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CoGroup get($primaryKey, $options = [])
 * @method \App\Model\Entity\CoGroup findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CoGroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CoGroup[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CoGroup|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoGroup saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoGroup[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoGroup[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoGroup[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoGroup[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RolesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('roles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Users', [
            'foreignKey' => 'role_id',
        ]);
        $this->belongsToMany('Menus', [
            'foreignKey' => 'role_id',
            'targetForeignKey' => 'menu_id',
            'joinTable' => 'roles_menus',
        ]);
        $this->belongsToMany('Permissions', [
            'foreignKey' => 'role_id',
            'targetForeignKey' => 'permission_id',
            'joinTable' => 'roles_permissions',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->uuid('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('page')
            ->maxLength('page', 100)
            ->allowEmptyString('page');

        $validator
            ->boolean('active')
            ->notEmptyString('active');

        $validator
            ->boolean('deleted')
            ->notEmptyString('deleted');

        return $validator;
    }
}
