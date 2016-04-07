<?php

use Phinx\Migration\AbstractMigration;

class AddNameToSection extends AbstractMigration
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
        $table = $this->table('summary_section');
        $table->addColumn('name', 'string', ['after'=>'table'])
              ->update();

        $this->execute("UPDATE summary_section SET name = IF(`table` = 'ExecutiveSummary', 'Executive Summary', IF(`table` = 'WebTraffic', 'Web Traffic', IF(`table` = 'Questionbox', 'Q&A', `table`)))");

    }
}
