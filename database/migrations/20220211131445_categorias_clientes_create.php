<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CategoriasClientesCreate extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('CategoriasClientes', ['id' => false, 'primary_key' => 'Id', 'collation' => 'utf8_unicode_ci']);
        $table
            ->addColumn('Id', 'uuid')
            ->addColumn('CategoriasId', 'uuid', ['null' => true])
            ->addColumn('Tipo', 'smallinteger', ['comment' => 100])
            ->addColumn('Nome', 'string', ['limit' => 100])
            ->addColumn('Icone', 'string', ['null' => true])
            ->addColumn('Ativo', 'boolean', ['default' => true])
            ->addColumn('DataCadastro', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('DataAlteracao', 'timestamp', ['null' => true])
            ->addForeignKey('CategoriasId', 'Categorias', 'Id', array('delete' => 'NO_ACTION', 'update' => 'NO_ACTION'))
            ->save();
    }

    public function down()
    {
        $this->table('CategoriasClientes')->drop()->save();
    }
}
