<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class PlanosCreate extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('Planos', ['id' => false, 'primary_key' => 'Id', 'collation' => 'utf8_unicode_ci']);
        $table
            ->addColumn('Id', 'uuid')
            ->addColumn('Nome', 'string')
            ->addColumn('Valor', 'float', ['limit' => 10.2, 'default' => 0.00])
            ->addColumn('Descricao', 'text', ['null' => true])
            ->addColumn('Ativo', 'boolean', ['default' => true])
            ->addColumn('DataCadastro', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('DataAlteracao', 'timestamp', ['null' => true])
            ->save();
    }

    public function down()
    {
        $this->table('Planos')->drop()->save();;
    }
}
