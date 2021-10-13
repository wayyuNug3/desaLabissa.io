const tandaTangan = (pejabat) => {
    if(pejabat != 'Supratman, S.ag')
    {
        let colTandaTangan = 
        `
        <span>Labissa, 02 - 01 - 2021</span><br>
        <span class="font-weight-bold">An. Kepala Desa</span> <br>
        <span class="font-weight-bold">Sekertaris Desa</span>
        <br>
        <br>
        <br>
        <br>
        <span id="aparat_id" class="font-weight-bold">${pejabat}</span>
        `;

        return colTandaTangan;

    }else{
        let colTandaTangan = 
        `
        <span>Labissa, 02 - 01 - 2021</span><br>
        <span class="font-weight-bold">Kepala Desa</span>
        <br>
        <br>
        <br>
        <br>
        <span id="aparat_id" class="font-weight-bold">${pejabat}</span>
        `;

        return colTandaTangan;
    }
} 

const formatSku = (pemohon, surat) =>
{
    // console.log(pemohon)
    let format = `
                <div class="printArea">
                <div style="color: #000" class="container-fluid">
                    <div class="row">
                        <div class="col">
                        <div class="row pr-5 mr-2">
                            <div class="col-2 text-right">
                                <img src="/img/logo.jpg" alt="" width="115rem">
                            </div>
                            <div class="col pr-5 mr-5">
                                <h1 class="text-center font-weight-bold">
                                    PEMERINTAH KABUPATEN BONE <br>
                                    KECAMATAN AJANGALE <br>
                                    DESA LABISSA <br>
                                </h1>
                            </div>
                        </div>

                        <hr>

                            <div class="row mb-2 text-center">
                                <div class="col">
                                    <h2><u>SURAT KETERANGAN USAHA</u></h2>
                                    <p class="h3" >Nomor :  <span id="noSurat">${surat.noSurat}</span></p>
                                </div>
                            </div>

                            <div class="row text-justify">
                                <div class="col">
                                    <p class="h3">&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini, Kepala Desa Labissa Kecamatan Ajangale Kabupaten Bone, Menerangkan dengan sebenar-benarnya bahwa :</p>
                                </div>
                            </div>


                            <div class="h3 my-3">
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
                                    <p class="h3">Oknum tersebut diatas benar-benar memiliki usaha :</p>
                                </div>
                            </div>


                            <div class="h3 my-3">
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
                                    <p class="h3">Demikian Surat Keterangan Usaha ini kami buat untuk dipergunakan sebagaimana mestinya.</p>
                                </div>
                            </div>


                        <div class="row">
                            <div class="col-6">

                            </div>
                            <div class="col h3 my-3 text-center">
                                <span>Labissa, </span><br>
                                <span id="atasNama" class="font-weight-bold">an. </span><span class="font-weight-bold">Kepala Desa</span>
                                <br>
                                <br>
                                <br>
                                <br>
                                <span id="aparat_id" class="font-weight-bold"></span>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
    `;

    return format
}

const formatSkd = (pemohon, surat) => 
{
    let format = 
    `
        <div class="printArea formatSurat">
                <div style="color: #000" class="container-fluid">
                    <div class="row">
                        <div class="col">
                        <div class="row pr-5 mr-2">
                            <div class="col-2 text-right">
                                <img src="/img/logo.jpg" alt="" width="115rem">
                            </div>
                            <div class="col pr-5 mr-5">
                                <h1 class="text-center font-weight-bold">
                                    PEMERINTAH KABUPATEN BONE <br>
                                    KECAMATAN AJANGALE <br>
                                    DESA LABISSA <br>
                                </h1>
                            </div>
                        </div>

                        <hr>

                            <div class="row mb-2 text-center">
                                <div class="col">
                                    <h2><u>SURAT KETERANGAN USAHA</u></h2>
                                    <p class="h3" >Nomor :  <span id="noSurat">${surat.noSurat}</span></p>
                                </div>
                            </div>

                            <div class="row text-justify">
                                <div class="col">
                                    <p class="h3">&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini, Kepala Desa Labissa Kecamatan Ajangale Kabupaten Bone, Menerangkan dengan sebenar-benarnya bahwa :</p>
                                </div>
                            </div>


                            <div class="h3 my-3">
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



                            <div class="row text-justify my-3">
                                <div class="col">
                                    <p class="h3">&nbsp;&nbsp;&nbsp;&nbsp;Oknum tersebut namanya di atas adalah benar warga Desa Labissa dan bertempat tinggal di Dusun Kampung Baru Desa Labissa Kecamatan Ajangale Kabupaten Bone.</p>
                                </div>
                            </div>

                            <div class="row text-justify">
                                <div class="col">
                                    <p class="h3">&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat untuk dipergunakan sebagaimana mestinya, dan apabila dikemudian hari terdapat kekeliruan/ kesalahan akan diadakan perbaikan.</p>
                                </div>
                            </div>


                        <div class="row">
                            <div class="col-6">

                            </div>
                            <div class="col h3 my-3 text-center mengetahui">
                            ${tandaTangan(surat.pejabat)}
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
    `;
    return format;
}

const formatSktmk = (pemohon, surat) =>
{
    let format = `
        <div style="color: #000" class="container-fluid">
            <div class="row">
                <div class="col">
                <div class="row pr-5 mr-2">
                    <div class="col-2 text-right">
                        <img src="/img/logo.jpg" alt="" width="115rem">
                    </div>
                    <div class="col pr-5 mr-5">
                        <h1 class="text-center font-weight-bold">
                            PEMERINTAH KABUPATEN BONE <br>
                            KECAMATAN AJANGALE <br>
                            DESA LABISSA <br>
                        </h1>
                    </div>
                </div>

                <hr>

                    <div class="row mb-2 text-center">
                        <div class="col">
                            <h2><u>SURAT KETERANGAN TIDAK MEMILIKI KIS</u></h2>
                            <p class="h3" >Nomor :  <span id="noSurat">${surat.noSurat}</span></p>
                        </div>
                    </div>

                    <div class="row text-justify">
                        <div class="col">
                            <p class="h3">&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini, Kepala Desa Labissa Kecamatan Ajangale Kabupaten Bone, Menerangkan dengan sebenar-benarnya bahwa :</p>
                        </div>
                    </div>


                    <div class="h3 my-3">
                    <dl class="row my-0">
                        <dt class="col-5 pl-5">Nama lengkap <span class="float-right">:</span></dt>
                        <dd class="col-7 font-weight-bold" id="nama">${pemohon.nama}</dd>
                    </dl>
                    <dl class="row my-0">
                        <dt class="col-5 pl-5">Nik <span class="float-right">:</span></dt>
                        <dd class="col-7 font-weight-bold" id="nik"></dd>
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



                    <div class="row text-justify my-3">
                        <div class="col">
                            <p class="h3">&nbsp;&nbsp;&nbsp;&nbsp;Oknum tersebut namanya di atas adalah benar warga Desa Labissa dan bertempat tinggal di Dusun Kampung Baru Desa Labissa Kecamatan Ajangale Kabupaten Bone.</p>
                        </div>
                    </div>

                    <div class="row text-justify">
                        <div class="col">
                            <p class="h3">&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat untuk dipergunakan sebagaimana mestinya, dan apabila dikemudian hari terdapat kekeliruan/ kesalahan akan diadakan perbaikan.</p>
                        </div>
                    </div>


                <div class="row">
                    <div class="col-6">

                    </div>
                    <div class="col h3 my-3 text-center mengetahui">
                    ${tandaTangan(surat.pejabat)}
                    </div>
                </div>

                </div>
            </div>
        </div>
    `;
    return format;
}

function mintaPemohon_keServer(idPemohon)
{
    let fetchData = fetch('/penduduk/mohonSurat/' + idPemohon)
                    .then(response => response.json())
                    .then(data => data)
    return fetchData;
}

function mintaSKU_keServer(idSurat)
{
    let fetchData = fetch('/suratKeteranganUsaha/getLaporan/' + idSurat)
                    .then(response => response.json())
                    .then(data => data)
    return fetchData;
}

function mintaSKD_keServer(idSurat)
{
    let fetchData = fetch('/suratKeteranganDomisili/getLaporan/' + idSurat)
                    .then(response => response.json())
                    .then(data => data)
    return fetchData;
}

function mintaSKTMK_keServer(idSurat)
{
    let fetchData = fetch('/sktkis/getLaporan/' + idSurat)
                    .then(response => response.json())
                    .then(data => data)
    return fetchData;
}
