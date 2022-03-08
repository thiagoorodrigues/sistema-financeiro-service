<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CategoriasClientesAddCampoClientesId extends AbstractMigration
{
    public function up()
    {
        $this->table('CategoriasClientes')
            ->addColumn('ClientesId', 'uuid')
            ->addForeignKey('ClientesId', 'Clientes', 'Id', array('delete' => 'NO_ACTION', 'update' => 'NO_ACTION'))
            ->update();
    }

    public function down()
    {
        $this->table('EmailsEnviados')
            ->dropForeignKey('ClientesId')
            ->removeColumn('ClientesId')
            ->update();
    }
}
