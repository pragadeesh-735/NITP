<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DonateBooksDetails Model
 *
 * @method \App\Model\Entity\DonateBooksDetail newEmptyEntity()
 * @method \App\Model\Entity\DonateBooksDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\DonateBooksDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DonateBooksDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\DonateBooksDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\DonateBooksDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DonateBooksDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DonateBooksDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DonateBooksDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DonateBooksDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DonateBooksDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\DonateBooksDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DonateBooksDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DonateBooksDetailsTable extends Table
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

        $this->setTable('donate_books_details');
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
            ->scalar('alumni_name')
            ->maxLength('alumni_name', 250)
            ->allowEmptyString('alumni_name');

        $validator
            ->scalar('alumni_registration_number')
            ->maxLength('alumni_registration_number', 250)
            ->allowEmptyString('alumni_registration_number');

        $validator
            ->scalar('upload_book')
            ->allowEmptyString('upload_book');

        $validator
            ->integer('is_active')
            ->notEmptyString('is_active');

        $validator
            ->scalar('created_by')
            ->maxLength('created_by', 100)
            ->allowEmptyString('created_by');

        $validator
            ->dateTime('created_date')
            ->allowEmptyDateTime('created_date');

        $validator
            ->scalar('modified_by')
            ->maxLength('modified_by', 100)
            ->allowEmptyString('modified_by');

        $validator
            ->dateTime('modified_date')
            ->allowEmptyDateTime('modified_date');

        return $validator;
    }
}
