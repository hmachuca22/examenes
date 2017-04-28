<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbExamenes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $TbTiposExamenes
 *
 * @method \App\Model\Entity\TbExamene get($primaryKey, $options = [])
 * @method \App\Model\Entity\TbExamene newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TbExamene[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TbExamene|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TbExamene patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TbExamene[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TbExamene findOrCreate($search, callable $callback = null, $options = [])
 */
class TbExamenesTable extends Table
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

        $this->setTable('tb_examenes');
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
            ->allowEmpty('correo');

        $validator
            ->date('fecha_ingreso')
            ->requirePresence('fecha_ingreso', 'create')
            ->notEmpty('fecha_ingreso');

        $validator
            ->requirePresence('sexo', 'create')
            ->notEmpty('sexo');

        $validator
            ->integer('edad')
            ->requirePresence('edad', 'create')
            ->notEmpty('edad');

        $validator
            ->date('fecha_relizado')
            ->allowEmpty('fecha_relizado');

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
