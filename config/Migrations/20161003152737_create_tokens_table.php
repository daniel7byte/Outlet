<?php

use Phinx\Migration\AbstractMigration;

class CreateTokensTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
      $table = $this->table('tokens');
      $table->addColumn('titulo', 'string', array('limit' => 100))
            ->addColumn('codigo', 'string')
            ->addColumn('descripcion', 'text')
            ->addColumn('caducidad', 'datetime')
            ->addColumn('activo', 'boolean', array('default' => 0))
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

      $keyUsuario = $this->table('tokens');
      $keyUsuario->addColumn('usuario_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('usuario_id', 'usuarios', 'id', array('delete' => 'SET_NULL', 'update' => 'NO_ACTION'))
                 ->update();
    }
}
