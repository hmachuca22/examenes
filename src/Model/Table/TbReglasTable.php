<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbReglas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $TbTiposExamenes
 *
 * @method \App\Model\Entity\TbRegla get($primaryKey, $options = [])
 * @method \App\Model\Entity\TbRegla newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TbRegla[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TbRegla|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TbRegla patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TbRegla[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TbRegla findOrCreate($search, callable $callback = null, $options = [])
 */
class TbReglasTable extends Table
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

        $this->setTable('tb_reglas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('TbTiposExamenes', [
            'foreignKey' => 'tb_tipos_examenes_id',
            'joinType' => 'INNER'
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
            ->numeric('valor_inferior')
            ->requirePresence('valor_inferior', 'create')
            ->notEmpty('valor_inferior');

        $validator
            ->numeric('valor_superior')
            ->requirePresence('valor_superior', 'create')
            ->notEmpty('valor_superior');

        $validator
            ->requirePresence('diagnostico1', 'create')
            ->notEmpty('diagnostico1');

        $validator
            ->requirePresence('diagnostico2', 'create')
            ->notEmpty('diagnostico2');

        $validator
            ->requirePresence('diagnostico3', 'create')
            ->notEmpty('diagnostico3');

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
        $rules->add($rules->existsIn(['tb_tipos_examenes_id'], 'TbTiposExamenes'));

        return $rules;
    }
}
