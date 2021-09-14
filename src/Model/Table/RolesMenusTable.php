<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CoGroupsCoMenus Model
 *
 * @property \App\Model\Table\CoGroupsTable&\Cake\ORM\Association\BelongsTo $CoGroups
 * @property \App\Model\Table\CoMenusTable&\Cake\ORM\Association\BelongsTo $CoMenus
 *
 * @method \App\Model\Entity\CoGroupsCoMenu newEmptyEntity()
 * @method \App\Model\Entity\CoGroupsCoMenu newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CoGroupsCoMenu[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CoGroupsCoMenu get($primaryKey, $options = [])
 * @method \App\Model\Entity\CoGroupsCoMenu findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CoGroupsCoMenu patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CoGroupsCoMenu[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CoGroupsCoMenu|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoGroupsCoMenu saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoGroupsCoMenu[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoGroupsCoMenu[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoGroupsCoMenu[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CoGroupsCoMenu[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CoGroupsCoMenusTable extends Table
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

        $this->setTable('co_groups_co_menus');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('CoGroups', [
            'foreignKey' => 'co_group_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('CoMenus', [
            'foreignKey' => 'co_menu_id',
            'joinType' => 'INNER',
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
        $rules->add($rules->existsIn(['co_group_id'], 'CoGroups'), ['errorField' => 'co_group_id']);
        $rules->add($rules->existsIn(['co_menu_id'], 'CoMenus'), ['errorField' => 'co_menu_id']);

        return $rules;
    }
}
