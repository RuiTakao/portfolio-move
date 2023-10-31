<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateAdmins extends AbstractMigration
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
        $table = $this->table('admins');
        $table
            ->addColumn('username', 'string',[
                'null' => false
            ])
            ->addColumn('password', 'string',[
                'null' => false
            ])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}