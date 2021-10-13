let templateList = function(jumlahAnggota, kepalaKeluarga, anggota)
{
    let template = `
    
    <h1 class="text-center">${jumlahAnggota}</h1>
    <h5 class="text-center">Anggota</h5>
        <div>
            <p>Kepala Keluarga</p>
            <ul class="list-group mb-3">
                <li class="list-group-item">${kepalaKeluarga.nama}</li>
            </ul>
            <p>Anggota</p>
            <ul class="list-group">
           ${anggota.map( a => `
            <li class="list-group-item">${a.nama}</li>
           `).join("")}
            </ul>
        </div>

    `;

    return template
}

function setModalJudul(judul)
{
    let modalJudul          = document.querySelector('#modalKKLabel')
    modalJudul.innerHTML    = judul
}

function setFormStore(action)
{
    let formKK = document.querySelector('.formKartuKeluarga')
    formKK.setAttribute('action', action)
    console.log(formKK)
    let method = formKK.querySelector('[name="_method"]')
    if(method)
    {
        method.remove()
    }
}

function setValueInputan(target = "",method)
{
    if(method == 'store')
    {
        let nokk    = document.querySelector('#nokk')
        nokk.value  = ""
    }else{
        let nomorKartuKeluarga   = target.parentElement.parentElement.querySelector('[name="nokk"]')
        nokk.value      = nomorKartuKeluarga.innerHTML
    }
}

function setMethod()
{
    let formKartuKeluarga = document.querySelector('.formKartuKeluarga')
    let input = document.createElement('input')
    input.setAttribute('type', 'hidden')
    input.setAttribute('name', '_method')
    input.value = "put"
    formKartuKeluarga.appendChild(input)
}

function mintaAnggotaKeServer(nokk)
{
    let fetchData = fetch(`kartuKeluarga/${nokk}`)
                        .then(response => response.json())
                        .then(data => {
                            return data;
                        })

    return fetchData;
}

function updateUiListAnggota(data)
{
    let listAnggota = document.querySelector('.listAnggota')
    listAnggota.innerHTML = templateList(data.jumlahAnggota, data.kepalaKeluarga, data.anggota)
}