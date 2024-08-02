<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GuesthouseBookingDetails Model
 *
 * @method \App\Model\Entity\GuesthouseBookingDetail newEmptyEntity()
 * @method \App\Model\Entity\GuesthouseBookingDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\GuesthouseBookingDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GuesthouseBookingDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\GuesthouseBookingDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\GuesthouseBookingDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GuesthouseBookingDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\GuesthouseBookingDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GuesthouseBookingDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GuesthouseBookingDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\GuesthouseBookingDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\GuesthouseBookingDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\GuesthouseBookingDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class GuesthouseBookingDetailsTable extends Table
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

        $this->setTable('guesthouse_booking_details');
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
            ->integer('room_type')
            ->allowEmptyString('room_type');

        $validator
            ->scalar('from_date')
            ->allowEmptyString('from_date');

        $validator
            ->scalar('to_date')
            ->allowEmptyString('to_date');

        $validator
            ->scalar('visit_reason')
            ->maxLength('visit_reason', 500)
            ->allowEmptyString('visit_reason');

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
