<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\CkedtiroHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\CkedtiroHelper Test Case
 */
class CkedtiroHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\CkedtiroHelper
     */
    protected $Ckedtiro;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->Ckedtiro = new CkedtiroHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ckedtiro);

        parent::tearDown();
    }
}
