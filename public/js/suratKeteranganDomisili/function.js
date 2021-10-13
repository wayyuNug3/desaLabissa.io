function pemohon()
{
    let pemohon = {
        nokk                : document.querySelector('[name="nokk"]'),
        nik                 : document.querySelector('[name="nik"]'),
        nama                : document.querySelector('[name="nama"]'),
        tempatLahir         : document.querySelector('[name="tempatLahir"]'),
        jenisKelamin        : document.querySelector('[name="jenisKelamin"]'),
        tanggalLahir        : document.querySelector('[name="tanggalLahir"]'),
        alamat              : document.querySelector('[name="alamat"]'),
        rt                  : document.querySelector('[name="rt"]'),
        rw                  : document.querySelector('[name="rw"]'),
        golonganDarah       : document.querySelector('[name="golonganDarah"]'),
        agama               : document.querySelector('[name="agama"]'),
        statusKeluarga      : document.querySelector('[name="statusKeluarga"]'),
        statusPerkawinan    : document.querySelector('[name="statusPerkawinan"]'),
        pekerjaan           : document.querySelector('[name="pekerjaan"]'),
        kewarganegaraan     : document.querySelector('[name="kewarganegaraan"]'),

        validator : function ()
        {
            if( nokk.value == "" || nik.value == "" || nama.value == "" || tempatLahir.value == "" || jenisKelamin.value == "" || tanggalLahir.value == "" || alamat.value == "" || rt.value == "" || rw.value == "" || golonganDarah.value == "" || agama.value == "" || statusKeluarga.value == "" || statusPerkawinan.value == "" || pekerjaan.value == "" || kewarganegaraan.value == "" )
            {
                return false;
            }
        },
        invalidFeedback : function ()
        {
            if(this.nokk.value == "")
            {
                this.nokk.classList.add('is-invalid')
                this.nokk.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
            if(this.nik.value == "")
            {
                this.nik.classList.add('is-invalid')
                this.nik.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
            if(this.nama.value == "")
            {
                this.nama.classList.add('is-invalid')
                this.nama.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
            if(this.tempatLahir.value == "")
            {
                this.tempatLahir.classList.add('is-invalid')
                this.tempatLahir.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
            if(this.jenisKelamin.value == "")
            {
                this.jenisKelamin.classList.add('is-invalid')
                this.jenisKelamin.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
            if(this.tanggalLahir.value == "")
            {
                this.tanggalLahir.classList.add('is-invalid')
                this.tanggalLahir.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
            if(this.alamat.value == "")
            {
                this.alamat.classList.add('is-invalid')
                this.alamat.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
            if(this.rt.value == "")
            {
                this.rt.classList.add('is-invalid')
                this.rt.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
            if(this.rw.value == "")
            {
                this.rw.classList.add('is-invalid')
                this.rw.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
            if(this.golonganDarah.value == "")
            {
                this.golonganDarah.classList.add('is-invalid')
                this.golonganDarah.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
            if(this.agama.value == "")
            {
                this.agama.classList.add('is-invalid')
                this.agama.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
            if(this.statusKeluarga.value == "")
            {
                this.statusKeluarga.classList.add('is-invalid')
                this.statusKeluarga.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
            if(this.statusPerkawinan.value == "")
            {
                this.statusPerkawinan.classList.add('is-invalid')
                this.statusPerkawinan.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
            if(this.pekerjaan.value == "")
            {
                this.pekerjaan.classList.add('is-invalid')
                this.pekerjaan.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
            if(this.kewarganegaraan.value == "")
            {
                this.kewarganegaraan.classList.add('is-invalid')
                this.kewarganegaraan.addEventListener('click', function(e){
                    e.target.classList.remove('is-invalid')
                })
            }
        }
    }
    

    return pemohon;
}

function surat()
{
    let surat = {
        noSurat     : document.querySelector('#noSurat').value,
        pejabat     : document.querySelector('#pejabat').value,
    }

    return surat;
}

function storePenduduk(token, pemohon)
{
    let fetchStore = fetch('/suratKeteranganDomisili/pemohon', {
        headers : {
            'Accept'        : 'application/json',
            'Content-Type'  : 'application/json',
            'X-CSRF-Token'  : token,
        },
        method  : 'POST',
        body    : JSON.stringify({
            nokk                : pemohon.nokk.value,
            nik                 : pemohon.nik.value,
            nama                : pemohon.nama.value,
            tempatLahir         : pemohon.tempatLahir.value,
            jenisKelamin        : pemohon.jenisKelamin.value,
            tanggalLahir        : pemohon.tanggalLahir.value,
            alamat              : pemohon.alamat.value,
            rt                  : pemohon.rt.value,
            rw                  : pemohon.rw.value,
            golonganDarah       : pemohon.golonganDarah.value,
            agama               : pemohon.agama.value,
            statusKeluarga      : pemohon.statusKeluarga.value,
            statusPerkawinan    : pemohon.statusPerkawinan.value,
            pekerjaan           : pemohon.pekerjaan.value,
            kewarganegaraan     : pemohon.kewarganegaraan.value,
        })
    })
    .then(response => response.json())
    .then(data => {
        return data
    })

    return fetchStore;
}

function storeSKD(token, surat)
{
    let fetchStore = fetch('/suratKeteranganDomisili', {
        headers : {
            'Accept'        : 'application/json',
            'Content-Type'  : 'application/json',
            'X-CSRF-Token'  : token,
        },
        method  : 'POST',
        body    : JSON.stringify({
            noSurat     : surat.noSurat,
            pejabat     : surat.pejabat,
        })
    })
    .then(response => response.json())
    .then(data => {
        return data
    })

    return fetchStore;
}

function settingPemohonKedalamFormatSurat(pemohon)
{
    let nama                    = formatSurat.querySelector('#nama')
    let nik                     = formatSurat.querySelector('#nik')
    let jenisKelamin            = formatSurat.querySelector('#jenisKelamin')
    let tempatDanTanggalLahir   = formatSurat.querySelector('#tempatDanTanggalLahir')
    let agama                   = formatSurat.querySelector('#agama')
    let pekerjaan               = formatSurat.querySelector('#pekerjaan')
    let alamat                  = formatSurat.querySelector('#alamat')

    nama.innerHTML                  = pemohon.nama.value   
    nik.innerHTML                   = pemohon.nik.value   
    jenisKelamin.innerHTML          = pemohon.jenisKelamin.value           
    tempatDanTanggalLahir.innerHTML = pemohon.tempatLahir.value +','+ pemohon.tanggalLahir.value                       
    agama.innerHTML                 = pemohon.agama.value       
    pekerjaan.innerHTML             = pemohon.pekerjaan.value           
    alamat.innerHTML                = pemohon.alamat.value +', RT-'+ pemohon.rt.value +'/RW-'+ pemohon.rw.value      
}

function settingAparatKedalamFormatSurat(surat)
{
    let mengetahui = document.querySelector('.mengetahui')
    if(surat.pejabat != 'Supratman, S.ag')
    {
        mengetahui.innerHTML = 
        `
        <span>Labissa, 02 - 01 - 2021</span><br>
        <span class="font-weight-bold">An. Kepala Desa</span> <br>
        <span class="font-weight-bold">Sekertaris Desa</span>
        <br>
        <br>
        <br>
        <br>
        <span id="aparat_id" class="font-weight-bold">${surat.pejabat}</span>
        `;

    }else{
        mengetahui.innerHTML = 
        `
        <span>Labissa, 02 - 01 - 2021</span><br>
        <span class="font-weight-bold">Kepala Desa</span>
        <br>
        <br>
        <br>
        <br>
        <span id="aparat_id" class="font-weight-bold">${surat.pejabat}</span>
        `;
    }
}

function cetakSurat()
{
    let contentAsli     = document.body.innerHTML
    let formatSurat     = document.querySelector('.formatSurat').innerHTML 
    document.body.innerHTML = formatSurat
    window.print()
    document.body.innerHTML = contentAsli
}

function munculkanAlert(res)
{
    let success = document.querySelector('#success')
    success.innerHTML = res.message.success
    success.removeAttribute('hidden', '')
    setTimeout(() => {
        success.setAttribute('hidden', '')
    }, 5000);
}