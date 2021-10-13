function mintaKeTabelSkuById(id)
{
    const fetchData = fetch('/suratKeteranganUsaha/' + id + '/edit')
        .then(response => response.json())
        .then(data => {
            return data.sku
        })
    return fetchData
}

function isiInputanSurat(surat)
{
    let colDua      = document.querySelector('.colDua')
    let surat_id    = colDua.querySelector('#surat_id')
    let noSurat     = colDua.querySelector('#noSurat')
    let jenisUsaha  = colDua.querySelector('#jenisUsaha')
    let alamatUsaha = colDua.querySelector('#alamatUsaha')

    surat_id.value      =   surat.id
    noSurat.value       =   surat.noSurat
    jenisUsaha.value    =   surat.jenisUsaha
    alamatUsaha.value   =   surat.alamatUsaha

}

function setFungsiTombolCetak()
{
    let colDua      = document.querySelector('.colDua')
    let tombolCetak = colDua.querySelector('#t_cetak')
    tombolCetak.dataset.fungsi = "update"
}

function setIsiModalDenganPreviewSurat(pemohon, surat)
{
    let templateFix = templateSurat(pemohon, surat)
    let modalBody = document.querySelector('#modalBody')
    modalBody.innerHTML = templateFix;

}

function templateSurat(pemohon, surat)
{
    let templateSurat = 
    `
        <div style="color: #000" class="container-fluid">
            <div class="row">
                <div class="col">
                
                <div class="row pr-5 mr-2">
                    <div class="col-2 text-right">
                        <img src="/img/logo.jpg" alt="" width="70rem">
                    </div>
                    <div class="col pr-2 mr-5">
                        <h3 class="text-center font-weight-bold">
                            PEMERINTAH KABUPATEN BONE <br>
                            KECAMATAN AJANGALE <br>
                            DESA LABISSA <br>
                        </h3>
                    </div>
                </div>

                <hr>
                

                
                    <div class="row mb-2 text-center">
                        <div class="col">
                            <h3><u>SURAT KETERANGAN USAHA</u></h3>
                            <p class="h4" >Nomor :  <span id="noSurat">${surat.noSurat}</span></p>
                        </div>
                    </div>
                

                
                    <div class="row text-justify">
                        <div class="col">
                            <p class="h4">&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini, Kepala Desa Labissa Kecamatan Ajangale Kabupaten Bone, Menerangkan dengan sebenar-benarnya bahwa :</p>
                        </div>
                    </div>
                


                
                    <div class="h4 my-3">
                    <dl class="row my-0">
                        <dt class="col-5 pl-5">Nama lengkap <span class="float-right">:</span></dt>
                        <dd class="col-7 font-weight-bold" id="nama">${pemohon.nama}</dd>
                    </dl>
                    <dl class="row my-0">
                        <dt class="col-5 pl-5">Nik <span class="float-right">:</span></dt>
                        <dd class="col-7 font-weight-bold" id="nik">${pemohon.nik}</dd>
                    </dl>
                    <dl class="row my-0">
                        <dt class="col-5 pl-5">Jenis Kelamin <span class="float-right">:</span></dt>
                        <dd class="col-7 font-weight-bold" id="jenisKelamin">${pemohon.jenisKelamin}</dd>
                    </dl>
                    <dl class="row my-0">
                        <dt class="col-5 pl-5">Tempat Tanggal Lahir <span class="float-right">:</span></dt>
                        <dd class="col-7 font-weight-bold" id="tempatDanTanggalLahir">${pemohon.tempatLahir}, ${pemohon.tanggalLahir}</dd>
                    </dl>
                    <dl class="row my-0">
                        <dt class="col-5 pl-5">Agama <span class="float-right">:</span></dt>
                        <dd class="col-7 font-weight-bold" id="agama">${pemohon.agama}</dd>
                    </dl>
                    <dl class="row my-0">
                        <dt class="col-5 pl-5">Pekerjaan <span class="float-right">:</span></dt>
                        <dd class="col-7 font-weight-bold" id="pekerjaan">${pemohon.pekerjaan}</dd>
                    </dl>
                    <dl class="row my-0">
                        <dt class="col-5 pl-5">Alamat lengkap <span class="float-right">:</span></dt>
                        <dd class="col-7 font-weight-bold" id="alamat">${pemohon.alamat}, RT-${pemohon.rt} / RW-${pemohon.rw}</dd>
                    </dl>
                    </div>
                



                
                    <div class="row text-justify">
                        <div class="col">
                            <p class="h4">Oknum tersebut diatas benar-benar memiliki usaha :</p>
                        </div>
                    </div>
                


                
                    <div class="h4 my-3">
                        <dl class="row my-0">
                            <dt class="col-3 pl-5">Jenis <span class="float-right">:</span></dt>
                            <dd class="col-9 font-weight-bold" id="jenisUsaha">${surat.jenisUsaha}</dd>
                        </dl>
                        <dl class="row my-0">
                            <dt class="col-3 pl-5">Alamat <span class="float-right">:</span></dt>
                            <dd class="col-9 font-weight-bold" id="alamatUsaha">${surat.alamatUsaha}</dd>
                        </dl>
                    </div>
                

                
                    <div class="row text-justify">
                        <div class="col">
                            <p class="h4">Demikian Surat Keterangan Usaha ini kami buat untuk dipergunakan sebagaimana mestinya.</p>
                        </div>
                    </div>
                


                
                <div class="row">
                    <div class="col-6">

                    </div>
                    <div class="col h4 my-3 text-center">
                        <span>Labissa, 02 - 10 - 2021</span><br>
                        <span id="atasNama" class="font-weight-bold">an. </span><span class="font-weight-bold">Kepala Desa</span>
                        <br>
                        <br>
                        <br>
                        <br>
                        <span id="aparat_id" class="font-weight-bold">Supratman, S.ag</span>
                    </div>
                </div>
                

                </div>
            </div>
        </div>
    `;

    return templateSurat;
}