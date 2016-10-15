<?php

use Phinx\Migration\AbstractMigration;

class CreateSucursalesTable extends AbstractMigration
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
      $table = $this->table('sucursales');
      $table->addColumn('titulo', 'string', array('limit' => 100))
            ->addColumn('direccion', 'string', array('limit' => 100))
            ->addColumn('descripcion', 'text')
            ->addColumn('lat', 'string')
            ->addColumn('lng', 'string')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

      $keyEmpresa = $this->table('sucursales');
      $keyEmpresa->addColumn('empresa_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('empresa_id', 'empresas', 'id', array('delete' => 'CASCADE', 'update' => 'CASCADE'))
                 ->update();

      $keyCiudad = $this->table('sucursales');
      $keyCiudad->addColumn('ciudad_id', 'integer', array('signed' => 'disable'))
                ->addForeignKey('ciudad_id', 'ciudades', 'id', array('delete' => 'CASCADE', 'update' => 'CASCADE'))
                ->update();
    }
}
