<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbTiposExamenes Model
 *
 * @method \App\Model\Entity\TbTiposExamene get($primaryKey, $options = [])
 * @method \App\Model\Entity\TbTiposExamene newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TbTiposExamene[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TbTiposExamene|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TbTiposExamene patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TbTiposExamene[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TbTiposExamene findOrCreate($search, callable $callback = null, $options = [])
 */
class TbTiposExamenesTable extends Table
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

        $this->setTable('tb_tipos_examenes');
        $this->setDisplayField('descripcion');
        $this->setPrimaryKey('id');
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
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->integer('cantidad_variables')
            ->requirePresence('cantidad_variables', 'create')
            ->notEmpty('cantidad_variables');

        $validator
            ->requirePresence('parametros', 'create')
            ->notEmpty('parametros');

        return $validator;
    }
}
