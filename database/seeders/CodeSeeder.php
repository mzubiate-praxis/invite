<?php

namespace Database\Seeders;

use App\Models\Codes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $codes = [
            'XMNMZU',
            'TWCGDX',
            'SQDPVW',
            'NAJHZQ',
            'LFEHQU',
            'CYMJGZ',
            'WAHDNU',
            'BFTTXD',
            'PGMHWT',
            'PQPCFM',
            'YUCSMG',
            'KCLNVE',
            'ZRFQCS',
            'FKFNRU',
            'WMBMRF',
            'YXNRGE',
            'WJYHYM',
            'ZZFFPK',
            'LHGFLE',
            'UJDYCB',
            'VUTASE',
            'YCMUQR',
            'WPNJNE',
            'DJANNK',
            'CVVQVA',
            'UFXNQP',
            'KCWLZQ',
            'NFDSWS',
            'KYJMUU',
            'HBMUHG',
            'AXJRSH',
            'HKGASZ',
            'KGGQTY',
            'QEEGXP',
            'WKHLKS',
            'LFCUAL',
            'FYRYRY',
            'QDLJPJ',
            'RERZAU',
            'KGLCRT',
            'GDCBEL',
            'UFXBCY',
            'YVFVDE',
            'ZJRTYT',
            'NZRZAX',
            'KXQDRS',
            'SHHYEY',
            'KSCMYV',
            'HGNZRW',
            'UTZJVT',
            'EMQGRE',
            'FEXBPF',
            'URCXNE',
            'SUVFAP',
            'YBFCZC',
            'ZRRMNT',
            'QXXLNU',
            'PUAETE',
            'YLFGHZ',
            'CWPFBA',
            'MPTCJU',
            'UQSHBT',
            'TQKTVR',
            'YRWYGH',
            'VBNELD',
            'QUGQQS',
            'VFAWZV',
            'YGUARS',
            'PXFFKG',
            'SHNFSC',
            'VUJSHR',
            'ASVVBG',
            'YAJSNL',
            'XGMGBE',
            'MWWJJJ',
            'AZUAYF',
            'XTNVLF',
            'QECYHP',
            'UEBPCP',
            'XNRULM',
            'MQGWTS',
            'RNXRPL',
            'ZMHLZB',
            'RXSWDR',
            'NYUDXJ',
            'RXFXHU',
            'BDAYVL',
            'SJUCRM',
            'GEGSSD',
            'BSEFFG',
            'WTNDAY',
            'TNZJZM',
            'PXQVVD',
            'SHCBCE',
            'EXXZRN',
            'RRHUKL',
            'SYKBKW',
            'JAXNAG',
            'SKCNRY',
            'HTKDZX',
        ];
    
        foreach ($codes as $code) {
            Codes::create([
                'code' => $code,
                'in_use' => 0
            ]);
        }
    }
}
