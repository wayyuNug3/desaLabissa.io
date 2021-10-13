
function ambilValueInputCari(button)
{
    let keyword = document.querySelector('.keywordCariPenduduk')
    if(keyword.value == "")
    {
        keyword.classList.add('is-invalid')
        button.dataset.target = ""
        setTimeout(() => {
            button.dataset.target = "#modal"
            keyword.classList.remove('is-invalid')
        }, 300);

        return false
    }

    return keyword.value
}

function mintaDataPemohonKeServer(keyword)
{
    let fetchData = fetch(`sktkis/pemohon/${keyword}`)
                        .then(response => response.json())
                        .then(data => {
                            return data
                        })
    return fetchData;

}

function updateModalJudul()
{
    let modalJudul          = document.querySelector('#modalLabel')
    modalJudul.innerHTML    = "Pilih Pemohon"
}

function updateModalBody(data)
{
    let template        = this.template(data)
    let modalBody       = document.querySelector('#modalBody')
    modalBody.innerHTML = template
}

function mintaDataPemohonKeServeById(id)
{
    let fetchData = fetch('sktkis/pemohonById/' + id)
        .then(response => response.json())
        .then(data => {
            return data;
        })
    return fetchData;
}

function updateInputValue(data)
{
    let inputan                             = this.inputan()
    inputan.id.value                        = data.penduduk.id
    inputan.nik.value                       = data.penduduk.nik
    inputan.nama.value                      = data.penduduk.nama
    inputan.tempatDanTanggalLahir.value     = data.penduduk.tempatLahir +", "+ data.penduduk.tanggalLahir
    inputan.jenisKelamin.value              = data.penduduk.jenisKelamin
    inputan.alamat.value                    = data.penduduk.alamat +", RT-"+ data.penduduk.rt +", RW-"+ data.penduduk.rw 
    inputan.agama.value                     = data.penduduk.agama
    inputan.pekerjaan.value                 = data.penduduk.pekerjaan
}

function updateFormatSurat(data)
{
    let sketsaSurat                                 = this.sketsaSurat()
    sketsaSurat.nik.innerHTML                       = data.penduduk.nik
    sketsaSurat.nama.innerHTML                      = data.penduduk.nama
    sketsaSurat.tempatDanTanggalLahir.innerHTML     = data.penduduk.tempatLahir +", "+ data.penduduk.tanggalLahir
    sketsaSurat.jenisKelamin.innerHTML              = data.penduduk.jenisKelamin
    sketsaSurat.alamat.innerHTML                    = data.penduduk.alamat +", RT-"+ data.penduduk.rt +", RW-"+ data.penduduk.rw 
    sketsaSurat.agama.innerHTML                     = data.penduduk.agama
    sketsaSurat.pekerjaan.innerHTML                 = data.penduduk.pekerjaan
}

function validate()
{
    let skip = this.inputan().validate()
    
    let returnFalse = () => {
        if(skip == false)
        {
            return false
        }
    }

    return returnFalse
}

function storeSurat(token)
{
    // console.log(token)
    // return false
    let fetchData = fetch('/sktkis', {
        headers : {
            'Accept'        : 'application/json',
            'Content-Type'  : 'application/json',
            'X-CSRF-Token'  : token,
        },
        method  : 'POST',
        body    : JSON.stringify({
            penduduk_id   : this.inputan().id.value,
            noSurat       : document.querySelector('#noSurat').value,
            pejabat       : document.querySelector('#pejabat').value
        })
    })
    .then(response => response.json())
    .then(data => data)

    return fetchData;
}

function setTandaTangan()
{
    let mengetahui = document.querySelector('.mengetahui')
    if(document.querySelector('#pejabat').value != 'Supratman, S.ag')
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
        <span id="aparat_id" class="font-weight-bold">${document.querySelector('#pejabat').value}</span>
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
        <span id="aparat_id" class="font-weight-bold">${document.querySelector('#pejabat').value}</span>
        `;
    }
}

function cetakSurat()
{
    const printArea = document.querySelector('.printArea')
    let mainContent = document.body.innerHTML
    document.body.innerHTML = printArea.innerHTML
    window.print()
    document.body.innerHTML = mainContent
}

function tampilkanAlert(message)
{
    const success = document.querySelector('#success')
    success.removeAttribute('hidden', '')
    success.innerHTML = message.message
}
