<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VolunteerInterviewDetails Model
 *
 * @method \App\Model\Entity\VolunteerInterviewDetail newEmptyEntity()
 * @method \App\Model\Entity\VolunteerInterviewDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\VolunteerInterviewDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VolunteerInterviewDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\VolunteerInterviewDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\VolunteerInterviewDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VolunteerInterviewDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\VolunteerInterviewDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VolunteerInterviewDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VolunteerInterviewDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\VolunteerInterviewDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\VolunteerInterviewDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\VolunteerInterviewDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VolunteerInterviewDetailsTable extends Table
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

        $this->setTable('volunteer_interview_details');
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
            ->scalar('current_position')
            ->maxLength('current_position', 250)
            ->allowEmptyString('current_position');

        $validator
            ->scalar('short_bio')
            ->maxLength('short_bio', 250)
            ->allowEmptyString('short_bio');

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
