<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TransacoesCreate extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('Transacoes', ['id' => false, 'primary_key' => 'Id', 'collation' => 'utf8_unicode_ci']);
        $table
            ->addColumn('Id', 'uuid')
            ->addColumn('TransacoesId', 'uuid', ['null' => true])
            ->addColumn('CategoriasId', 'uuid')
            ->addColumn('ClientesId', 'uuid')
            ->addColumn('Tipo', 'smallinteger', ['comment' => '1 Receita, 2 Despesa'])
            ->addColumn('Descricao', 'string', ['limit' => 255])
            ->addColumn('DataVencimento', 'date')
            ->addColumn('DataPagamento', 'date', ['null' => true])
            ->addColumn('Pago', 'boolean', ['default' => false])
            ->addColumn('Observacao', 'text')
            ->addColumn('Valor', 'float', ['limit' => 10.2, 'default' => 0.00])
            ->addColumn('ValorPago', 'float', ['limit' => 10.2, 'default' => 0.00])
            ->addColumn('Repetir', 'boolean', ['default' => false])
            ->addColumn('TipoRepeticao', 'smallinteger', ['comment' => '1 Fixa, 2 Parcelada', 'default' => 2])
            ->addColumn('QuantidadeRepeticao', 'integer', ['null' => true])
            ->addColumn('FrequenciaRepeticao', 'integer', ['comment' => '1 Diário, 2 Semana, 3 Quinzenal , 4 Mensal, 5 Trimestral, 6 Semestral, 7 Anual', 'null' => true])
            ->addColumn('Ativo', 'boolean', ['default' => true])
            ->addColumn('DataCadastro', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('DataAlteracao', 'timestamp', ['null' => true])
            ->addForeignKey('CategoriasId', 'Categorias', 'Id', array('delete' => 'NO_ACTION', 'update' => 'NO_ACTION'))
            ->addForeignKey('TransacoesId', 'Transacoes', 'Id', array('delete' => 'NO_ACTION', 'update' => 'NO_ACTION'))
            ->addForeignKey('ClientesId', 'Clientes', 'Id', array('delete' => 'NO_ACTION', 'update' => 'NO_ACTION'))
            ->save();
    }

    public function down()
    {
        $this->table('Transacoes')->drop()->save();
    }
}
