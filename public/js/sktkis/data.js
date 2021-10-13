
function template(data)
{
    let templateValue = 
    `
    <table class="table table-sm">
        <thead>
            <tr>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        ${data.penduduk.map( p => `
            <tr>
            <td>${p.nik}</td>
            <td>${p.nama}</td>
            <td>${p.alamat}</td>
            <td>${p.jenisKelamin}</td>
            <td>
                <button class=" t_pilihPemohon btn btn-primary btn-sm float-right" data-id="${p.id}" data-dismiss="modal">Pilih</button>
            </td>
            </tr>`).join("")}
        </tbody>
    </table>
    `;

    return templateValue
}

function inputan()
{
    let inputArea = {
        inputCari                   : document.querySelector('.keywordCariPenduduk'),
        id                          : document.querySelector('[name="penduduk_id"]'),
        nik                         : document.querySelector('[name="nik"]'),
        nama                        : document.querySelector('[name="nama"]'),
        tempatDanTanggalLahir       : document.querySelector('[name="tempatDanTanggalLahir"]'),
        jenisKelamin                : document.querySelector('[name="jenisKelamin"]'),
        alamat                      : document.querySelector('[name="alamat"]'),
        agama                       : document.querySelector('[name="agama"]'),
        pekerjaan                   : document.querySelector('[name="pekerjaan"]'),

        validate : function(){
            
            if(this.id.value == "" || this.nik.value == "" || this.nama.value == "" || this.tempatDanTanggalLahir.value == "" || this.jenisKelamin.value == "" || this.alamat.value == "" || this.agama.value == "" || this.pekerjaan.value == "")
            {
                this.inputCari.classList.add('is-invalid')
                this.inputCari.addEventListener('click', () => {
                    this.inputCari.classList.remove('is-invalid')
                })
                return false
            }
        }
    }

    return inputArea
}

function sketsaSurat()
{
    let formatSurat = document.querySelector('.formatSurat')

    let sketsaSurat = {
        nik                         : formatSurat.querySelector('[id="nik"]'),
        nama                        : formatSurat.querySelector('[id="nama"]'),
        tempatDanTanggalLahir       : formatSurat.querySelector('[id="tempatDanTanggalLahir"]'),
        jenisKelamin                : formatSurat.querySelector('[id="jenisKelamin"]'),
        alamat                      : formatSurat.querySelector('[id="alamat"]'),
        agama                       : formatSurat.querySelector('[id="agama"]'),
        pekerjaan                   : formatSurat.querySelector('[id="pekerjaan"]'),
    }

    return sketsaSurat;
}

