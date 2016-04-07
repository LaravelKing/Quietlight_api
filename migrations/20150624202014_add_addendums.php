<?php

use Phinx\Migration\AbstractMigration;

class AddAddendums extends AbstractMigration
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
        $addendum = $this->table('addendum'); 
        $addendum->addColumn('summary_id', 'integer')
              ->addColumn('description', 'string', array('length'=>2048, 'null'=>true))
              ->addColumn('file', 'string', array('length'=>2048, 'null'=>true))
              
              ->addColumn('created_at', 'integer')
              ->addColumn('created_by', 'integer', array('null' => true))
              ->addColumn('updated_at', 'integer', array('null' => true))
              ->addColumn('updated_by', 'integer', array('null' => true))
              ->addForeignKey('summary_id', 'summary', 'id', array('delete'=>"CASCADE"))
              ->addForeignKey('created_by', 'user', 'id', array('delete'=>"SET NULL"))
              ->addForeignKey('updated_by', 'user', 'id', array('delete'=>"SET NULL"))
              ->save();
    }
}
