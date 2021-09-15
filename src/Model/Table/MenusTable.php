<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Menus Model
 *
 * @property \App\Model\Table\MenusTable&\Cake\ORM\Association\BelongsTo $Menus
 * @property \App\Model\Table\MenusTable&\Cake\ORM\Association\HasMany $Menus
 * @property \App\Model\Table\CoGroupsTable&\Cake\ORM\Association\BelongsToMany $CoGroups
 *
 * @method \App\Model\Entity\CoMenu newEmptyEntity()
 * @method \App\Model\Entity\CoMenu newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CoMenu[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CoMenu get($primaryKey, $options = [])
 * @method \App\Model\Entity\CoMenu findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CoMenu patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CoMenu[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CoMenu|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoMenu saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoMenu[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoMenu[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoMenu[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoMenu[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MenusTable extends Table
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

        $this->setTable('menus');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->belongsTo('MenuMain', [
            'className'=>'Menus',
            'foreignKey' => 'menu_id'
        ]);
        $this->belongsToMany('Roles', [
            'foreignKey' => 'menu_id',
            'targetForeignKey' => 'role_id',
            'joinTable' => 'roles_menus',
        ]);
        $this->hasMany('ChildrenMenus', [
            'className'=>'Menus',
            'foreignKey' => 'menu_id'
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
            ->scalar('icon')
            ->maxLength('icon', 150)
            ->allowEmptyString('icon');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('href')
            ->maxLength('href', 100)
            ->allowEmptyString('href');

        $validator
            ->requirePresence('position', 'create')
            ->notEmptyString('position');

        $validator
            ->boolean('active')
            ->notEmptyString('active');

        $validator
            ->boolean('deleted')
            ->notEmptyString('deleted');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        //$rules->add($rules->existsIn(['menu_id'], 'Menus'), ['errorField' => 'menu_id']);

        return $rules;
    }
}
