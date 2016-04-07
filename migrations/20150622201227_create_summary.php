<?php

use Phinx\Migration\AbstractMigration;

class CreateSummary extends AbstractMigration
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
        $summary = $this->table('summary'); 
        $summary->addColumn('name', 'string', array('limit' => 100))
              ->addColumn('file', 'string', array('limit' => 255, null=>true))
              ->addColumn('created_by', 'integer', array('null'=> true))
              ->addColumn('updated_by', 'integer', array('null'=> true))
              ->addColumn('created_at', 'integer')
              ->addColumn('updated_at', 'integer', array('null' => true))
              ->addColumn('generated_at', 'integer')
              ->addColumn('generated_by', 'integer', array('null' => true))
              ->addForeignKey('created_by', 'user', 'id', array('delete'=>"SET NULL"))
              ->addForeignKey('updated_by', 'user', 'id', array('delete'=>"SET NULL"))
              ->addForeignKey('generated_by', 'user', 'id', array('delete'=>"SET NULL"))
              ->save();
    }
}
