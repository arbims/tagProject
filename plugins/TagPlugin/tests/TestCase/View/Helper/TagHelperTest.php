<?php
declare(strict_types=1);

namespace TagPlugin\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use TagPlugin\View\Helper\TagHelper;

/**
 * TagPlugin\View\Helper\TagHelper Test Case
 */
class TagHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \TagPlugin\View\Helper\TagHelper
     */
    protected $TagHelper;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->TagHelper = new TagHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TagHelper);

        parent::tearDown();
    }
}
