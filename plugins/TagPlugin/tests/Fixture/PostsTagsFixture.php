<?php
declare(strict_types=1);

namespace TagPlugin\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PostsTagsFixture
 */
class PostsTagsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'post_id' => 1,
                'tag_id' => 1,
            ],
        ];
        parent::init();
    }
}
