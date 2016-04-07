<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;


class AddQuestionAnswer extends AbstractMigration
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
        $question = $this->table('question'); 
        $question->addColumn('summary_id', 'integer')
              ->addColumn('header', 'string', array('length'=>255, 'null'=>true))
              ->addColumn('question', 'string', array('length'=>2048, 'null'=>true))
              ->addColumn('answer', 'text', array('limit'=>MysqlAdapter::TEXT_LONG,'null'=>true))
              

              ->addColumn('created_at', 'integer')
              ->addColumn('created_by', 'integer', array('null' => true))
              ->addColumn('updated_at', 'integer', array('null' => true))
              ->addColumn('updated_by', 'integer', array('null' => true))
              ->addForeignKey('summary_id', 'summary', 'id', array('delete'=>"CASCADE"))
              ->addForeignKey('updated_by', 'user', 'id', array('delete'=>"SET NULL"))
              ->addForeignKey('created_by', 'user', 'id', array('delete'=>"SET NULL"))
              ->save();
    }
}
