<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbResultado Model
 *
 * @method \App\Model\Entity\TbResultado get($primaryKey, $options = [])
 * @method \App\Model\Entity\TbResultado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TbResultado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TbResultado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TbResultado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TbResultado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TbResultado findOrCreate($search, callable $callback = null, $options = [])
 */
class TbResultadoTable extends Table
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

        $this->setTable('tb_resultado');
        $this->setDisplayField('id');
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
            ->requirePresence('diagnostico', 'create')
            ->notEmpty('diagnostico');

        $validator
            ->integer('id_tbexamenes')
            ->requirePresence('id_tbexamenes', 'create')
            ->notEmpty('id_tbexamenes');

        return $validator;
    }
}
