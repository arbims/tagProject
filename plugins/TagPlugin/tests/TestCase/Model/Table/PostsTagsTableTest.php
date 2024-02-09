<?php
declare(strict_types=1);

namespace TagPlugin\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use TagPlugin\Model\Table\PostsTagsTable;

/**
 * TagPlugin\Model\Table\PostsTagsTable Test Case
 */
class PostsTagsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \TagPlugin\Model\Table\PostsTagsTable
     */
    protected $PostsTags;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'plugin.TagPlugin.PostsTags',
        'plugin.TagPlugin.Posts',
        'plugin.TagPlugin.Tags',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PostsTags') ? [] : ['className' => PostsTagsTable::class];
        $this->PostsTags = $this->getTableLocator()->get('PostsTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PostsTags);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \TagPlugin\Model\Table\PostsTagsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \TagPlugin\Model\Table\PostsTagsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
