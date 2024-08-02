<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CardApplicationDetails Model
 *
 * @method \App\Model\Entity\CardApplicationDetail newEmptyEntity()
 * @method \App\Model\Entity\CardApplicationDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CardApplicationDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CardApplicationDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\CardApplicationDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CardApplicationDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CardApplicationDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CardApplicationDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CardApplicationDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CardApplicationDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CardApplicationDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CardApplicationDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CardApplicationDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CardApplicationDetailsTable extends Table
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

        $this->setTable('card_application_details');
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
            ->integer('application_reason')
            ->allowEmptyString('application_reason');

        $validator
            ->scalar('upload_reciept')
            ->allowEmptyString('upload_reciept');

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
