function setDataSuratDidalamSurat()
{
    
    let colDua      = document.querySelector('.colDua')
    let printArea   = document.querySelector('.printArea')
    let noSurat     = printArea.querySelector('#noSurat')
    let jenisUsaha  = printArea.querySelector('#jenisUsaha')
    let alamatUsaha = printArea.querySelector('#alamatUsaha')
    let aparat_id   = printArea.querySelector('#aparat_id')
    let atasNama    = printArea.querySelector('#atasNama')

    noSurat.innerHTML       = colDua.querySelector('#noSurat').value
    jenisUsaha.innerHTML    = colDua.querySelector('#jenisUsaha').value
    alamatUsaha.innerHTML   = colDua.querySelector('#alamatUsaha').value
    if(colDua.querySelector('#aparat_id').value == "Supratman, S.ag"){
        atasNama.setAttribute('hidden', '')
    }else{
        atasNama.removeAttribute('hidden', '')
    }
    aparat_id.innerHTML     = colDua.querySelector('#aparat_id').value
}

function cetakSurat()
{
    let contentAsli = document.body.innerHTML
    let printArea   = document.querySelector('.printArea').innerHTML
    console.log(printArea)
    document.body.innerHTML = printArea
    window.print()
    document.body.innerHTML = contentAsli
}

function storeSuratKeDataBase()
{
    let colDua      = document.querySelector('.colDua')
    let penduduk_id = colDua.querySelector('#id')
    let noSurat     = colDua.querySelector('#noSurat')
    let jenisUsaha  = colDua.querySelector('#jenisUsaha')
    let alamatUsaha = colDua.querySelector('#alamatUsaha')
    let token       = colDua.querySelector("[name='_token']")

    const fetchStore = fetch("/suratKeteranganUsaha",
    {
        headers: {
        'Accept'        : 'application/json',
        'Content-Type'  : 'application/json',
        "X-CSRF-Token"  : token.value
        },
        method: "POST",
        body: JSON.stringify({
            penduduk_id : penduduk_id.value,
            noSurat     : noSurat.value,
            jenisUsaha  : jenisUsaha.value,
            alamatUsaha : alamatUsaha.value
        })
    })
    .then(response => response.json())
    .then(data => {
        return data;
    })

    return fetchStore;
}

function updateSuratKeDataBase()
{
    let colDua      = document.querySelector('.colDua')
    let surat_id    = colDua.querySelector('#surat_id')
    let penduduk_id = colDua.querySelector('#id')
    let noSurat     = colDua.querySelector('#noSurat')
    let jenisUsaha  = colDua.querySelector('#jenisUsaha')
    let alamatUsaha = colDua.querySelector('#alamatUsaha')
    let token       = colDua.querySelector("[name='_token']")

    const fetchStore = fetch("/suratKeteranganUsaha/" + surat_id.value ,
    {
        headers: {
        'Accept'        : 'application/json',
        'Content-Type'  : 'application/json',
        "X-CSRF-Token"  : token.value
        },
        method: "PUT",
        body: JSON.stringify({
            penduduk_id : penduduk_id.value,
            noSurat     : noSurat.value,
            jenisUsaha  : jenisUsaha.value,
            alamatUsaha : alamatUsaha.value
        })
    })
    .then(response => response.json())
    .then(data => {
        console.log(data)
        return data;
    })

    return fetchStore;
}

function tampilkanAlert(message)
{
    let colSatu     = document.querySelector('.colSatu')
    let inputCari   = colSatu.querySelector('.keywordCariPenduduk')
    let colDua      = document.querySelector('.colDua')
    let jenisUsaha  = colDua.querySelector('#jenisUsaha')
    let alamatUsaha  = colDua.querySelector('#alamatUsaha')

    if(!message.message.success)
    {
        if(message.message.penduduk_id)
        {
            inputCari.classList.add('is-invalid')
            inputCari.addEventListener('click', function(){
                inputCari.classList.remove('is-invalid')
            })
        }
        if(message.message.alamatUsaha)
        {
            alamatUsaha.classList.add('is-invalid')
            alamatUsaha.addEventListener('click', function(){
                alamatUsaha.classList.remove('is-invalid')
            })
        }
        if(message.message.jenisUsaha)
        {
            jenisUsaha.classList.add('is-invalid')
            jenisUsaha.addEventListener('click', function(){
                jenisUsaha.classList.remove('is-invalid')
            })
        }
        return false
    }
    cetakSurat()
    
    
}

function setFungsiTombolCetak(fungsi)
{
    if(fungsi == 'post')
    {
        return 'cetak'
    }

    if(fungsi == "update")
    {
        return 'update'
    }
}
