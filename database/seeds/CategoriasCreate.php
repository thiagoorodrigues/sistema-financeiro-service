<?php

use Phinx\Seed\AbstractSeed;
use core\traits\UuidTrait;

class CategoriasCreate extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Empréstimos",
                "Tipo" => 1
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Investimentos",
                "Tipo" => 1
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Outras receitas",
                "Tipo" => 1
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Salário",
                "Tipo" => 1
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Alimentação",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Assinaturas e serviços",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Bares e restaurantes",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Casa",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Compras",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Cuidados pessoais",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Dívidas e empréstimos",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Educação",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Família e filhos",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Impostos e Taxas",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Investimentos",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Lazer e hobbies",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Mercado",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Outros",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Pets",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Presentes e doações",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Roupas",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Saúde",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Trabalho",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Transporte",
                "Tipo" => 2
            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Viagem",
                "Tipo" => 2
            ],
        ];

        $query = $this->table('Categorias');
        $query->insert($data)->save();
    }
}
