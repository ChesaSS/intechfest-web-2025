<?php

namespace App\Exports;

use App\Models\Dc;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DcExcel implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dc::          
        join('peserta', 'dc.id_peserta', '=', 'peserta.id_peserta')
        ->leftJoin('transaksi', 'dc.id_transaksi', '=', 'transaksi.id_transaksi')
        ->select('peserta.id_peserta', 'peserta.email', 'peserta.nomer_peserta', 'peserta.nama_lengkap',
        'peserta.alamat', 'peserta.nama_instansi', 'peserta.no_hp')
        ->where('dc.validasi', '=', 'Sudah Valid')
        ->get();
    }
    
    public function headings(): array
    {
        return ["ID", "Email", "Nomer Peserta", "Nama Lengkap", "Alamat", "Instansi", "No HP"];
    }
}
