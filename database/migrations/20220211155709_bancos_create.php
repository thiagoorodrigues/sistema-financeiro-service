<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class BancosCreate extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('Bancos', ['id' => false, 'primary_key' => 'Id', 'collation' => 'utf8_unicode_ci']);
        $table
            ->addColumn('Id', 'uuid')
            ->addColumn('Nome', 'string', ['limit' => 100])
            ->addColumn('Codigo', 'string', ['limit' => 10])
            ->addColumn('Ativo', 'boolean', ['default' => true])
            ->addColumn('DataCadastro', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('DataAlteracao', 'timestamp', ['null' => true])
            ->save();
    }

    public function down()
    {
        $this->table('Bancos')->drop()->save();
    }
}
