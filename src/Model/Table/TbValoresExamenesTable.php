<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbValoresExamenes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $TbExamenes
 *
 * @method \App\Model\Entity\TbValoresExamene get($primaryKey, $options = [])
 * @method \App\Model\Entity\TbValoresExamene newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TbValoresExamene[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TbValoresExamene|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TbValoresExamene patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TbValoresExamene[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TbValoresExamene findOrCreate($search, callable $callback = null, $options = [])
 */
class TbValoresExamenesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tb_valores_examenes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('TbExamenes', [
            'foreignKey' => 'tb_examenes_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('valor')
            ->requirePresence('valor', 'create')
            ->notEmpty('valor');

        $validator
            ->requirePresence('parametro', 'create')
            ->notEmpty('parametro');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['tb_examenes_id'], 'TbExamenes'));

        return $rules;
    }
}
