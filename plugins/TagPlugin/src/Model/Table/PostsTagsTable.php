<?php
declare(strict_types=1);

namespace TagPlugin\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PostsTags Model
 *
 * @property \TagPlugin\Model\Table\PostsTable&\Cake\ORM\Association\BelongsTo $Posts
 * @property \TagPlugin\Model\Table\TagsTable&\Cake\ORM\Association\BelongsTo $Tags
 *
 * @method \TagPlugin\Model\Entity\PostsTag newEmptyEntity()
 * @method \TagPlugin\Model\Entity\PostsTag newEntity(array $data, array $options = [])
 * @method array<\TagPlugin\Model\Entity\PostsTag> newEntities(array $data, array $options = [])
 * @method \TagPlugin\Model\Entity\PostsTag get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \TagPlugin\Model\Entity\PostsTag findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \TagPlugin\Model\Entity\PostsTag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\TagPlugin\Model\Entity\PostsTag> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \TagPlugin\Model\Entity\PostsTag|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \TagPlugin\Model\Entity\PostsTag saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\TagPlugin\Model\Entity\PostsTag>|\Cake\Datasource\ResultSetInterface<\TagPlugin\Model\Entity\PostsTag>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\TagPlugin\Model\Entity\PostsTag>|\Cake\Datasource\ResultSetInterface<\TagPlugin\Model\Entity\PostsTag> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\TagPlugin\Model\Entity\PostsTag>|\Cake\Datasource\ResultSetInterface<\TagPlugin\Model\Entity\PostsTag>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\TagPlugin\Model\Entity\PostsTag>|\Cake\Datasource\ResultSetInterface<\TagPlugin\Model\Entity\PostsTag> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PostsTagsTable extends Table
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

        $this->setTable('posts_tags');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Posts', [
            'foreignKey' => 'post_id',
            'className' => 'TagPlugin.Posts',
        ]);
        $this->belongsTo('Tags', [
            'foreignKey' => 'tag_id',
            'className' => 'TagPlugin.Tags',
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
            ->integer('post_id')
            ->allowEmptyString('post_id');

        $validator
            ->integer('tag_id')
            ->allowEmptyString('tag_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['post_id'], 'Posts'), ['errorField' => 'post_id']);
        $rules->add($rules->existsIn(['tag_id'], 'Tags'), ['errorField' => 'tag_id']);

        return $rules;
    }
}
