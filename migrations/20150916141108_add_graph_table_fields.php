<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class AddGraphTableFields extends AbstractMigration
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
        $table = $this->table('financialv2');
        $table->addColumn('output_template', 'string', ['after'=>'csvbody'])
              ->addColumn('graph1', 'string', ['after'=>'output_template'])
              ->addColumn('graph2', 'string', ['after'=>'graph1'])
              ->addColumn('graph1_data', 'text', ['after'=>'graph2','limit'=>MysqlAdapter::TEXT_LONG,'null'=>true])
              ->addColumn('graph2_data', 'text', ['after'=>'graph1_data','limit'=>MysqlAdapter::TEXT_LONG,'null'=>true])
              ->addColumn('table1', 'string', ['after'=>'graph2'])
              ->addColumn('table2', 'string', ['after'=>'table1'])
              ->update();
    }
}
