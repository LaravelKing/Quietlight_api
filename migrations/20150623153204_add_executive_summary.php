<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;


class AddExecutiveSummary extends AbstractMigration
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
        $executivesummary = $this->table('executive_summary'); 
        $executivesummary->addColumn('summary_id', 'integer')
              ->addColumn('summary', 'text', array('limit'=>MysqlAdapter::TEXT_LONG,'null'=>true))
              ->addColumn('benefits', 'text', array('limit'=>MysqlAdapter::TEXT_LONG,'null'=>true))

              ->addColumn('total_revenue', 'string', array('length'=>2048, 'null'=>true))
              ->addColumn('discretionary_earnings', 'string', array('length'=>2048, 'null'=>true))
              ->addColumn('gross_profit', 'string', array('length'=>2048, 'null'=>true))
              ->addColumn('asking_price', 'string', array('length'=>2048, 'null'=>true))
              ->addColumn('inventory', 'string', array('length'=>2048, 'null'=>true))
              ->addColumn('inventory_included', 'integer', array('length'=>2, 'default'=>0))
              ->addColumn('show_multiple', 'integer', array('length'=>2, 'default'=>0))
              ->addColumn('inventory_footnote', 'string', array('length'=>2048, 'null'=>true))
              

              ->addColumn('created_at', 'integer')
              ->addColumn('updated_at', 'integer', array('null' => true))
              ->addColumn('updated_by', 'integer', array('null' => true))
              ->addForeignKey('summary_id', 'summary', 'id', array('delete'=>"CASCADE"))
              ->addForeignKey('updated_by', 'user', 'id', array('delete'=>"SET NULL"))
              ->save();
    }
}
