<div>
    <p>{{$informasiPerusahaan[0]->nama}}</p>
    <p>{{$informasiPerusahaan[0]->alamat}}</p>
    <a>{{$informasiPerusahaan[0]->kota}}</a><a class="ml-3">{{$informasiPerusahaan[0]->provinsi}}</a>
    <p>{{$informasiPerusahaan[0]->negara}}</p>
</div>
<div style="text-align:right">
    <p>{{$informasiPelanggan[0]->nama}}</p>
    <p>{{$informasiPelanggan[0]->alamat}}</p>
    <a>{{$informasiPelanggan[0]->kota}}</a><a class="ml-3">{{$informasiPelanggan[0]->provinsi}}</a>
    <p>{{$informasiPelanggan[0]->negara}}</p>
</div>

<div>

</div>
<h1>Invoice {{$invoice[0]->nomorInvoice}}</h1>
<p>Invoice Date: {{$invoice[0]->tanggalInvoice}}</p>
<p>Due Date: {{$invoice[0]->tanggalJatuhTempo}}</p>

<div>
    {{-- <p style="text-align:center; font-size: 48px; margin-top:36px; font-weight: bold">DATA MAHASISWA</p> --}}
    <div class="d-flex justify-content-center">
        <table style="width:70%; margin-bottom: 24px">
            <tr>
                <th>Description</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Taxes</th>
                <th>Amount</th>
            </tr>
            <tr>
                @foreach ($daftarProduk as $produk) 
                    <tr>
                        <td>{{$produk->deskripsi}}</td>
                        <td>{{$produk->kuantitas}}</td>
                        <td>{{$produk->harga}}</td>
                        <td>{{$produk->pajak}}</td>
                        <td>{{$produk->totalHarga}}</td>
                    </tr>
                @endforeach
            </tr>
        </table>
    </div>
</div>

