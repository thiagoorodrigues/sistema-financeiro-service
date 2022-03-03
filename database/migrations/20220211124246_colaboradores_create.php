<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ColaboradoresCreate extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('Colaboradores', ['id' => false, 'primary_key' => 'Id', 'collation' => 'utf8_unicode_ci']);
        $table
            ->addColumn('Id', 'uuid')
            ->addColumn('Nome', 'string', ['limit' => 100])
            ->addColumn('Sobrenome', 'string', ['limit' => 100])
            ->addColumn('Email', 'string', ['limit' => 100])
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
        $this->table('Colaboradores')->drop()->save();
    }
}
