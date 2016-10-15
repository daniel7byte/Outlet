<?php

use Phinx\Migration\AbstractMigration;

class CreateCuponesTable extends AbstractMigration
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
      $table = $this->table('cupones');
      $table->addColumn('titulo', 'string', array('limit' => 100))
            ->addColumn('banner', 'text')
            ->addColumn('descripcion', 'text')
            ->addColumn('ciudad', 'string', array('limit' => 100))
            ->addColumn('img1', 'text')
            ->addColumn('img2', 'text')
            ->addColumn('img3', 'text')
            ->addColumn('img4', 'text')
            ->addColumn('img5', 'text')
            ->addColumn('valor', 'string', array('limit' => 100))
            ->addColumn('descuento', 'string', array('limit' => 100))
            ->addColumn('fechaInicio', 'date')
            ->addColumn('horaInicio', 'time')
            ->addColumn('fechaTerminacion', 'date')
            ->addColumn('horaTerminacion', 'time')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

      $keySucursal = $this->table('cupones');
      $keySucursal->addColumn('sucursal_id', 'integer', array('signed' => 'disable'))
                  ->addForeignKey('sucursal_id', 'sucursales', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                  ->update();

      // $keyCategoria = $this->table('cupones');
      // $keyCategoria->addColumn('categoria_id', 'integer', array('signed' => 'disable'))
      //              ->addForeignKey('categoria_id', 'categorias', 'id', array('delete' => 'NO_ACTION', 'update' => 'NO_ACTION'))
      //              ->update();
    }
}
