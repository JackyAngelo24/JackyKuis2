<?php

namespace App\Http\Controllers;
use PDF;

use Illuminate\Http\Request;
use App\Models\daftarProduk;
use App\Models\informasiPelanggan;
use App\Models\informasiPerusahaan;
use App\Models\invoice;

class InvoiceController extends Controller
{
    //
    public function cetak_pdf() {
        $daftarProduk = daftarProduk::all();
        $informasiPelanggan = informasiPelanggan::all();
        $informasiPerusahaan = informasiPerusahaan::all();
        $invoice = invoice::all();

        $pdf = PDF::loadview('invoice', ['invoice'=>$invoice, 'informasiPelanggan'=>$informasiPelanggan, 'informasiPerusahaan'=>$informasiPerusahaan, 'daftarProduk'=>$daftarProduk]);
        return $pdf->download('invoice-clowtie-pdf');
    }
}
