<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TbTiposUsuarios Model
 *
 * @method \App\Model\Entity\TbTiposUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\TbTiposUsuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TbTiposUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TbTiposUsuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TbTiposUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TbTiposUsuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TbTiposUsuario findOrCreate($search, callable $callback = null, $options = [])
 */
class TbTiposUsuariosTable extends Table
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

        $this->setTable('tb_tipos_usuarios');
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

        return $validator;
    }
}
