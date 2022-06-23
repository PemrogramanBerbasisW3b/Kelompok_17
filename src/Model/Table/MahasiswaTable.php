<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mahasiswa Model
 *
 * @method \App\Model\Entity\Mahasiswa newEmptyEntity()
 * @method \App\Model\Entity\Mahasiswa newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Mahasiswa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mahasiswa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mahasiswa findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Mahasiswa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mahasiswa[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mahasiswa|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mahasiswa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mahasiswa[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mahasiswa[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mahasiswa[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Mahasiswa[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MahasiswaTable extends Table
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

        $this->setTable('mahasiswa');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nama')
            ->maxLength('nama', 25)
            ->requirePresence('nama', 'create')
            ->notEmptyString('nama');

        $validator
            ->decimal('umur')
            ->requirePresence('umur', 'create')
            ->notEmptyString('umur');

        $validator
            ->scalar('kota')
            ->maxLength('kota', 25)
            ->requirePresence('kota', 'create')
            ->notEmptyString('kota');

        $validator
            ->dateTime('di_buat')
            ->requirePresence('di_buat', 'create')
            ->notEmptyDateTime('di_buat');

        $validator
            ->dateTime('di_update')
            ->requirePresence('di_update', 'create')
            ->notEmptyDateTime('di_update');

        return $validator;
    }
}
