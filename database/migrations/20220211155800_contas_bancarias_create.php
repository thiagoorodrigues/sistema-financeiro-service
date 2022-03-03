<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ContasBancariasCreate extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('ContasBancarias', ['id' => false, 'primary_key' => 'Id', 'collation' => 'utf8_unicode_ci']);
        $table
            ->addColumn('Id', 'uuid')
            ->addColumn('BancosId', 'uuid')
            ->addColumn('ClientesId', 'uuid')
            ->addColumn('Nome', 'string', ['limit' => 100])
            ->addColumn('Valor', 'float', ['limit' => 10.2, 'default' => 0.00])
            ->addColumn('Tipo', 'smallinteger', ['comment' => '1 Conta Corrente, 2 Conta Poupança'])
            ->addColumn('Ativo', 'boolean', ['default' => true])
            ->addColumn('DataCadastro', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('DataAlteracao', 'timestamp', ['null' => true])
            ->addForeignKey('BancosId', 'Bancos', 'Id', array('delete' => 'NO_ACTION', 'update' => 'NO_ACTION'))
            ->addForeignKey('ClientesId', 'Clientes', 'Id', array('delete' => 'NO_ACTION', 'update' => 'NO_ACTION'))
            ->save();
    }

    public function down()
    {
        $this->table('ContasBancarias')->drop()->save();
    }
}
