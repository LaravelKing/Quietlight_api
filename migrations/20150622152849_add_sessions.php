<?php

use Phinx\Migration\AbstractMigration;

class AddSessions extends AbstractMigration
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
        $session = $this->table('session', array('id' => false, 'primary_key' => array('id')));
        $session->addColumn('id', 'string', array('limit' => 255))
                ->addColumn('user_id', 'integer')
                ->addColumn('expires_at', 'integer')
                ->addColumn('remote_ip', 'string', array('limit' => 255))
                ->addForeignKey('user_id', 'user', 'id', array('delete'=>"CASCADE"))
                ->save();
    }
}
