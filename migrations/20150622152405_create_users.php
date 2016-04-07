<?php

use Phinx\Migration\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change()
    {

        // create the table
        $user = $this->table('user'); 
        $user->addColumn('email', 'string', array('limit' => 100))
              ->addColumn('password', 'string', array('limit' => 255))
              ->addColumn('first_name', 'string', array('null' => true, 'limit' => 30))
              ->addColumn('last_name', 'string', array('null' => true, 'limit' => 30))
              ->addColumn('phone', 'string', array('null' => true, 'limit'=>25))
              ->addColumn('is_admin', 'integer', array('length'=>1, 'default'=>0))
              ->addColumn('created_at', 'integer')
              ->addColumn('updated_at', 'integer', array('null' => true))
              ->addIndex(array('email'), array('unique' => true))
              ->save();

    }
}
