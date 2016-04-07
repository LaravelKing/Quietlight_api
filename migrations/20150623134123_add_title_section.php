<?php

use Phinx\Migration\AbstractMigration;

class AddTitleSection extends AbstractMigration
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
        $title = $this->table('title'); 
        $title->addColumn('name', 'string', array('limit' => 100, 'null'=>true))
              ->addColumn('tagline', 'string', array('limit'=> 100, 'null'=>true))
              ->addColumn('asking_price', 'string', array('limit'=> 100, 'null'=>true))
              ->addColumn('advisor_id', 'integer', array('null'=>true))
              ->addColumn('summary_id', 'integer')
              ->addColumn('created_at', 'integer')
              ->addColumn('updated_at', 'integer', array('null' => true))
              ->addColumn('updated_by', 'integer', array('null' => true))
              ->addForeignKey('summary_id', 'summary', 'id', array('delete'=>"CASCADE"))
              ->addForeignKey('advisor_id', 'user', 'id', array('delete'=>"SET NULL"))
              ->addForeignKey('updated_by', 'user', 'id', array('delete'=>"SET NULL"))
              ->save();
    }
}
