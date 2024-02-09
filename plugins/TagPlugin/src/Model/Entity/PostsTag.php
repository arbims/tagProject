<?php
declare(strict_types=1);

namespace TagPlugin\Model\Entity;

use Cake\ORM\Entity;

/**
 * PostsTag Entity
 *
 * @property int $id
 * @property int|null $post_id
 * @property int|null $tag_id
 *
 * @property \TagPlugin\Model\Entity\Post $post
 * @property \TagPlugin\Model\Entity\Tag $tag
 */
class PostsTag extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'post_id' => true,
        'tag_id' => true,
        'post' => true,
        'tag' => true,
    ];
}
