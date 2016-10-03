<?php

use Phinx\Migration\AbstractMigration;

class CreateUsuariosTable extends AbstractMigration
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
      $table = $this->table('usuarios');
      $table->addColumn('nombre', 'string', array('limit' => 100))
            ->addColumn('apellido', 'string', array('limit' => 100))
            ->addColumn('telefono', 'string', array('limit' => 100))
            ->addColumn('direccion', 'string', array('limit' => 100))
            ->addColumn('correo', 'string', array('limit' => 100))
            ->addColumn('contrasenia', 'string')
            ->addColumn('plan', 'enum', array('values' => 'Gratuito, Premium'))
            ->addColumn('rol', 'enum', array('values' => 'admin, user'))
            ->addColumn('activo', 'boolean')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addIndex('correo', array('unique' => true))
            ->create();
    }
}
