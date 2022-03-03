<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TransacoesArquivosCreate extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('TransacoesArquivos', ['id' => false, 'primary_key' => 'Id', 'collation' => 'utf8_unicode_ci']);
        $table
            ->addColumn('Id', 'uuid')
            ->addColumn('TransacoesId', 'uuid', ['null' => true])
            ->addColumn('ClientesId', 'uuid', ['null' => true])
            ->addColumn('Nome', 'string', ['limit' => 100])
            ->addColumn('Arquivo', 'string', ['limit' => 255])
            ->addColumn('Observacao', 'text')
            ->addColumn('Ativo', 'boolean', ['default' => true])
            ->addColumn('DataCadastro', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('DataAlteracao', 'timestamp', ['null' => true])
            ->addForeignKey('TransacoesId', 'Transacoes', 'Id', array('delete' => 'NO_ACTION', 'update' => 'NO_ACTION'))
            ->addForeignKey('ClientesId', 'Clientes', 'Id', array('delete' => 'NO_ACTION', 'update' => 'NO_ACTION'))
            ->save();
    }

    public function down()
    {
        $this->table('TransacoesArquivos')->drop()->save();
    }
}
