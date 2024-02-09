<?php
declare(strict_types=1);

namespace TagPlugin\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tags Model
 *
 * @method \TagPlugin\Model\Entity\Tag newEmptyEntity()
 * @method \TagPlugin\Model\Entity\Tag newEntity(array $data, array $options = [])
 * @method array<\TagPlugin\Model\Entity\Tag> newEntities(array $data, array $options = [])
 * @method \TagPlugin\Model\Entity\Tag get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \TagPlugin\Model\Entity\Tag findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \TagPlugin\Model\Entity\Tag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\TagPlugin\Model\Entity\Tag> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \TagPlugin\Model\Entity\Tag|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \TagPlugin\Model\Entity\Tag saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\TagPlugin\Model\Entity\Tag>|\Cake\Datasource\ResultSetInterface<\TagPlugin\Model\Entity\Tag>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\TagPlugin\Model\Entity\Tag>|\Cake\Datasource\ResultSetInterface<\TagPlugin\Model\Entity\Tag> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\TagPlugin\Model\Entity\Tag>|\Cake\Datasource\ResultSetInterface<\TagPlugin\Model\Entity\Tag>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\TagPlugin\Model\Entity\Tag>|\Cake\Datasource\ResultSetInterface<\TagPlugin\Model\Entity\Tag> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TagsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tags');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Posts', [
            'foreignKey' => 'tag_id',
            'targetForeignKey' => 'post_id',
            'joinTable' => 'posts_tags',
            'className' => 'TagPlugin.Posts',
        ]);
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        return $validator;
    }
}
