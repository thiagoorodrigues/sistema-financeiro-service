<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ClientesCreate extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('Clientes', ['id' => false, 'primary_key' => 'Id', 'collation' => 'utf8_unicode_ci']);
        $table
            ->addColumn('Id', 'uuid')
            ->addColumn('Nome', 'string', ['limit' => 100])
            ->addColumn('Sobrenome', 'string', ['limit' => 100])
            ->addColumn('Documento', 'string', ['null' => true])
            ->addColumn('Email', 'string', ['limit' => 100])
            ->addColumn('EmailVerificado', 'boolean', ['default' => false])
            ->addColumn('Senha', 'string', ['limit' => 100])
            ->addColumn('Avatar', 'string', ['null' => true])
            ->addColumn('Ativo', 'boolean', ['default' => true])
            ->addColumn('DataCadastro', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('DataAlteracao', 'timestamp', ['null' => true])
            ->addIndex(['Email'], ['unique' => true])
            ->save();
    }

    public function down()
    {
        $this->table('Clientes')->drop()->save();
    }
}
