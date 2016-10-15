<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cupones Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Sucursales
 *
 * @method \App\Model\Entity\Cupone get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cupone newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cupone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cupone|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cupone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cupone[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cupone findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CuponesTable extends Table
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

        $this->table('cupones');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sucursales', [
            'foreignKey' => 'sucursal_id',
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
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->requirePresence('banner', 'create')
            ->notEmpty('banner');

        $validator
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->requirePresence('ciudad', 'create')
            ->notEmpty('ciudad');

        $validator
            ->requirePresence('img1', 'create')
            ->notEmpty('img1');

        $validator
            ->requirePresence('img2', 'create')
            ->notEmpty('img2');

        $validator
            ->requirePresence('img3', 'create')
            ->notEmpty('img3');

        $validator
            ->requirePresence('img4', 'create')
            ->notEmpty('img4');

        $validator
            ->requirePresence('img5', 'create')
            ->notEmpty('img5');

        $validator
            ->requirePresence('valor', 'create')
            ->notEmpty('valor');

        $validator
            ->requirePresence('descuento', 'create')
            ->notEmpty('descuento');

        $validator
            ->date('fechaInicio')
            ->requirePresence('fechaInicio', 'create')
            ->notEmpty('fechaInicio');

        $validator
            ->time('horaInicio')
            ->requirePresence('horaInicio', 'create')
            ->notEmpty('horaInicio');

        $validator
            ->date('fechaTerminacion')
            ->requirePresence('fechaTerminacion', 'create')
            ->notEmpty('fechaTerminacion');

        $validator
            ->time('horaTerminacion')
            ->requirePresence('horaTerminacion', 'create')
            ->notEmpty('horaTerminacion');

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
        $rules->add($rules->existsIn(['sucursal_id'], 'Sucursales'));

        return $rules;
    }
}
