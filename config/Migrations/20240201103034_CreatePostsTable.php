<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePostsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('posts');
        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null' => false,
            
        ]);
        $table->addColumn('content', 'text', [
            'null' => false
        ]);
        $table->create();
    }
}
