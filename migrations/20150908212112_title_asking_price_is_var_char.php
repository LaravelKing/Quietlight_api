<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class TitleAskingPriceIsVarChar extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function up()
    {
        $this->execute("ALTER TABLE title CHANGE COLUMN asking_price asking_price VARCHAR(255);");
    }


    public function down()
    {
        $this->execute("ALTER TABLE title CHANGE COLUMN asking_price asking_price BIGINT;");
    }
}
