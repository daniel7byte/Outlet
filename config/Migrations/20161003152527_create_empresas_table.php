<?php

use Phinx\Migration\AbstractMigration;

class CreateEmpresasTable extends AbstractMigration
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
      $table = $this->table('empresas');
      $table->addColumn('nit', 'string', array('limit' => 100))
            ->addColumn('razonSocial', 'string', array('limit' => 100))
            ->addColumn('razonComercial', 'string', array('limit' => 100))
            ->addColumn('descripcion', 'text')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addIndex('nit', array('unique' => true))
            ->create();

      $keyUsuario = $this->table('empresas');
      $keyUsuario->addColumn('usuario_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('usuario_id', 'usuarios', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();

      $keyCategoria = $this->table('empresas');
      $keyCategoria->addColumn('categoria_id', 'integer', array('signed' => 'disable'))
                   ->addForeignKey('categoria_id', 'categorias', 'id', array('delete' => 'NO_ACTION', 'update' => 'NO_ACTION'))
                   ->update();
    }
}
