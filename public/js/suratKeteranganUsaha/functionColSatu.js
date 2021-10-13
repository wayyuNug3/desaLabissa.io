
    

function setJudulModal(judul)
{
    let modalLabel          = document.querySelector('#modalLabel')
    modalLabel.innerHTML    = judul
}

function ambilValueInputCariPenduduk(){
    let keywordCariPenduduk = document.querySelector('.keywordCariPenduduk').value
    return keywordCariPenduduk;
}

const mintaKeServerDataBerdasarkanInputan = (keyword) => {
    const fetchData = fetch('/suratKeteranganUsaha/pemohon/' + keyword)
        .then(response => response.json())
        .then(data => {
            return data.penduduk
        })
    return fetchData
}

const mintaKeServerDataBerdasarkanId = (id) => {
    const fetchData = fetch('/suratKeteranganUsaha/pemohonById/' + id)
        .then(response => response.json())
        .then(data => {
            return data.penduduk
        })
    return fetchData
}


function isiModalBodyDenganTableDaftarPenduduk(penduduk){
    let modalBody = document.querySelector('#modalBody')
        modalBody.innerHTML = `
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat tanggal lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Agama</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody class="listPenduduk">
                    ${penduduk.map(p => `
                    <tr>
                        <td>${p.nik}</td>
                        <td>${p.nama}</td>
                        <td>${p.jenisKelamin}</td>
                        <td>${p.tempatLahir}, ${p.tanggalLahir}</td>
                        <td>${p.alamat}, RT-${p.rt}/RW-${p.rw}</td>
                        <td>${p.agama}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" id="tPilihPemohon" data-id="${p.id}">Pilih</button>
                        </td>
                    </tr>`).join("")}
                </tbody>
            </table>
        `;

}

function isiInputanPemohon(penduduk){
    let colSatu                 = document.querySelector('.colSatu')
    let id                      = colSatu.querySelector('#id')
    let nik                     = colSatu.querySelector('#nik')
    let nama                    = colSatu.querySelector('#nama')
    let jenisKelamin            = colSatu.querySelector('#jenisKelamin')
    let tempatDanTanggalLahir   = colSatu.querySelector('#tempatDanTanggalLahir')
    let alamat                  = colSatu.querySelector('#alamat')
    let agama                   = colSatu.querySelector('#agama')
    let pekerjaan               = colSatu.querySelector('#pekerjaan')

    id.value                    = penduduk.id
    nik.value                   = penduduk.nik
    nama.value                  = penduduk.nama
    jenisKelamin.value          = penduduk.jenisKelamin
    tempatDanTanggalLahir.value = `${penduduk.tempatLahir}, ${penduduk.tanggalLahir}`
    alamat.value                = `${penduduk.alamat}, RT-${penduduk.rt}/RW-${penduduk.rw}`
    agama.value                 = penduduk.agama
    pekerjaan.value             = penduduk.pekerjaan
}


function closeModal(){
    let closeModal = document.querySelector('#closeModal')
    closeModal.click()
}

function setPemohonDidalamSurat(penduduk){
    let printArea = document.querySelector('.printArea')
    let nik                     = printArea.querySelector('#nik')
    let nama                    = printArea.querySelector('#nama')
    let jenisKelamin            = printArea.querySelector('#jenisKelamin')
    let tempatDanTanggalLahir   = printArea.querySelector('#tempatDanTanggalLahir')
    let alamat                  = printArea.querySelector('#alamat')
    let agama                   = printArea.querySelector('#agama')
    let pekerjaan               = printArea.querySelector('#pekerjaan')

    nik.innerHTML                   = penduduk.nik
    nama.innerHTML                  = penduduk.nama
    jenisKelamin.innerHTML          = penduduk.jenisKelamin
    tempatDanTanggalLahir.innerHTML = `${penduduk.tempatLahir}, ${penduduk.tanggalLahir}`
    alamat.innerHTML                = `${penduduk.alamat}, RT-${penduduk.rt}/RW-${penduduk.rw}`
    agama.innerHTML                 = penduduk.agama
    pekerjaan.innerHTML             = penduduk.pekerjaan
}

function setIdPendudukYangAdaDiColDua()
{
    let colSatu     = document.querySelector('.colSatu')
    let colDua      = document.querySelector('.colDua')

    let idColSatu   = colSatu.querySelector('#id')
    let idColDua    = colDua.querySelector('#id')

    idColDua.value  = idColSatu.value
}


