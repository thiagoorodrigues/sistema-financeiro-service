<?php

use Phinx\Seed\AbstractSeed;

use core\traits\UuidTrait;

class BancosSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here=>
     * https=>//book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco ABC Brasil S.A.",
                "Codigo" => "246",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco ABN AMRO Real S.A.",
                "Codigo" => "356",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Alfa S.A.",
                "Codigo" => "025",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Alvorada S.A.",
                "Codigo" => "641",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Banerj S.A.",
                "Codigo" => "029",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Banestado S.A.",
                "Codigo" => "038",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Barclays S.A.",
                "Codigo" => "740",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco BBM S.A.",
                "Codigo" => "107",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Beg S.A.",
                "Codigo" => "031",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Bem S.A.",
                "Codigo" => "036",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco BM&F de Serviços de Liquidação e Custódia S.A",
                "Codigo" => "096",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco BMC S.A.",
                "Codigo" => "394",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco BMG S.A.",
                "Codigo" => "318",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco BNP Paribas Brasil S.A.",
                "Codigo" => "752",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Boavista Interatlântico S.A.",
                "Codigo" => "248",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Bradesco S.A.",
                "Codigo" => "237",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Brascan S.A.",
                "Codigo" => "225",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Cacique S.A.",
                "Codigo" => "263",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Calyon Brasil S.A.",
                "Codigo" => "222",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Cargill S.A.",
                "Codigo" => "040",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Citibank S.A.",
                "Codigo" => "745",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Comercial e de Investimento Sudameris S.A.",
                "Codigo" => "215",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Cooperativo do Brasil S.A. – BANCOOB",
                "Codigo" => "756",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Cooperativo Sicredi S.A. – BANSICREDI",
                "Codigo" => "748",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Credit Suisse (Brasil) S.A.",
                "Codigo" => "505",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Cruzeiro do Sul S.A.",
                "Codigo" => "229",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco da Amazônia S.A.",
                "Codigo" => "003",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Daycoval S.A.",
                "Codigo" => "707",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco de Pernambuco S.A. – BANDEPE",
                "Codigo" => "024",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco de Tokyo-Mitsubishi UFJ Brasil S.A.",
                "Codigo" => "456",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Dibens S.A.",
                "Codigo" => "214",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco do Brasil S.A.",
                "Codigo" => "001",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco do Estado de Santa Catarina S.A.",
                "Codigo" => "027",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco do Estado de Sergipe S.A.",
                "Codigo" => "047",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco do Estado do Pará S.A.",
                "Codigo" => "037",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco do Estado do Rio Grande do Sul S.A.",
                "Codigo" => "041",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco do Nordeste do Brasil S.A.",
                "Codigo" => "004",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Fator S.A.",
                "Codigo" => "265",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Fibra S.A.",
                "Codigo" => "224",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Finasa S.A.",
                "Codigo" => "175",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Fininvest S.A.",
                "Codigo" => "252",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco GE Capital S.A.",
                "Codigo" => "233",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Gerdau S.A.",
                "Codigo" => "734",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Guanabara S.A.",
                "Codigo" => "612",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Ibi S.A. Banco Múltiplo",
                "Codigo" => "063",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Industrial do Brasil S.A.",
                "Codigo" => "604",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Industrial e Comercial S.A.",
                "Codigo" => "320",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Indusval S.A.",
                "Codigo" => "653",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Intercap S.A.",
                "Codigo" => "630",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Investcred Unibanco S.A.",
                "Codigo" => "249",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Itaú BBA S.A.",
                "Codigo" => "176",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Itaú Holding Financeira S.A.",
                "Codigo" => "652",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Itaú S.A.",
                "Codigo" => "341",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco ItaúBank S.A",
                "Codigo" => "479",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco J. P. Morgan S.A.",
                "Codigo" => "376",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco J. Safra S.A.",
                "Codigo" => "074",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Luso Brasileiro S.A.",
                "Codigo" => "600",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Mercantil de São Paulo S.A.",
                "Codigo" => "392",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Mercantil do Brasil S.A.",
                "Codigo" => "389",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Merrill Lynch de Investimentos S.A.",
                "Codigo" => "755",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Nossa Caixa S.A.",
                "Codigo" => "151",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Opportunity S.A.",
                "Codigo" => "045",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Panamericano S.A.",
                "Codigo" => "623",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Paulista S.A.",
                "Codigo" => "611",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Pine S.A.",
                "Codigo" => "643",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Prosper S.A.",
                "Codigo" => "638",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Rabobank International Brasil S.A.",
                "Codigo" => "747",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Rendimento S.A.",
                "Codigo" => "633",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Rural Mais S.A.",
                "Codigo" => "072",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Rural S.A.",
                "Codigo" => "453",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Safra S.A.",
                "Codigo" => "422",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Santander Banespa S.A.",
                "Codigo" => "033",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Schahin S.A.",
                "Codigo" => "250",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Simples S.A.",
                "Codigo" => "749",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Société Générale Brasil S.A.",
                "Codigo" => "366",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Sofisa S.A.",
                "Codigo" => "637",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Sudameris Brasil S.A.",
                "Codigo" => "347",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Sumitomo Mitsui Brasileiro S.A.",
                "Codigo" => "464",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Triângulo S.A.",
                "Codigo" => "634",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco UBS Pactual S.A.",
                "Codigo" => "208",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco UBS S.A.",
                "Codigo" => "247",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Único S.A.",
                "Codigo" => "116",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Votorantim S.A.",
                "Codigo" => "735",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco VR S.A.",
                "Codigo" => "610",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco WestLB do Brasil S.A.",
                "Codigo" => "370",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "BANESTES S.A. Banco do Estado do Espírito Santo",
                "Codigo" => "021",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banif-Banco Internacional do Funchal (Brasil)S.A.",
                "Codigo" => "719",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Bankpar Banco Multiplo S.A.",
                "Codigo" => "204",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "BB Banco Popular do Brasil S.A.",
                "Codigo" => "067",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "BPN Brasil Banco Mútiplo S.A.",
                "Codigo" => "061",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "BRB – Banco de Brasília S.A.",
                "Codigo" => "070",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Caixa Econômica Federal",
                "Codigo" => "104",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Citibank N.A.",
                "Codigo" => "477",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Deutsche Bank S.A. – Banco Alemão",
                "Codigo" => "487",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Dresdner Bank Brasil S.A. – Banco Múltiplo",
                "Codigo" => "751",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Dresdner Bank Lateinamerika Aktiengesellschaft",
                "Codigo" => "210",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Hipercard Banco Múltiplo S.A.",
                "Codigo" => "062",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "HSBC Bank Brasil S.A. – Banco Múltiplo",
                "Codigo" => "399",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "ING Bank N.V.",
                "Codigo" => "492",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "JPMorgan Chase Bank",
                "Codigo" => "488",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Lemon Bank Banco Múltiplo S.A.",
                "Codigo" => "065",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "UNIBANCO – União de Bancos Brasileiros S.A.",
                "Codigo" => "409",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Unicard Banco Múltiplo S.A.",
                "Codigo" => "230",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Original",
                "Codigo" => "212",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Intermedium",
                "Codigo" => "077",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Interno",
                "Codigo" => "000",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Nubank",
                "Codigo" => "260",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "CONFEDERACAO NACIONAL DAS COOPERATIVAS CENTRAIS UNICREDS Ltda",
                "Codigo" => "136",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "PagBank PagSeguro Internet S.A.",
                "Codigo" => "290",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Uniprime",
                "Codigo" => "084",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Cooperativa Central de Crédito Urbano-CECRED",
                "Codigo" => "085",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Neon",
                "Codigo" => "655",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "POLO CRED",
                "Codigo" => "093",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Itaú BBA S.A.",
                "Codigo" => "184",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Stone Pagamentos S.A.",
                "Codigo" => "197",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Modal S.A.",
                "Codigo" => "746",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "C6 Bank",
                "Codigo" => "336",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco Cresol",
                "Codigo" => "133",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Banco BS2 SA",
                "Codigo" => "218",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Bank's Corp Update",
                "Codigo" => "999",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Cora Sociedade de Crédito Direto S.A.",
                "Codigo" => "403",

            ],
            [
                "Id" => UuidTrait::v4(),
                "Nome" => "Food Park",
                "Codigo" => "19",

            ]
        ];

        $query = $this->table('Bancos');
        $query->insert($data)->save();
    }
}
