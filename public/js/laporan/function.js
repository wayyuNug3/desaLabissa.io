async function checkJenisSurat(idsurat, namaSurat)
{
    let dataSurat;
    if(namaSurat == "Surat Keterangan Usaha")
    {
        let surat   = await this.mintaSKU_keServer(idsurat)
        let pemohon = await this.mintaPemohon_keServer(surat.dataSurat.penduduk_id)
        dataSurat = {
            surat : surat,
            pemohon : pemohon
        };
    }
    if(namaSurat == "Surat Keterangan Domisili")
    {
        let surat   = await this.mintaSKD_keServer(idsurat)
        let pemohon = await this.mintaPemohon_keServer(surat.dataSurat.penduduk_id)
        dataSurat = {
            surat : surat,
            pemohon : pemohon
        };
    }
    if(namaSurat == "Surat Keterangan Tidak Memiliki KIS")
    {
        let surat   = await this.mintaSKTMK_keServer(idsurat)
        let pemohon = await this.mintaPemohon_keServer(surat.dataSurat.penduduk_id)
        dataSurat = {
            surat : surat,
            pemohon : pemohon
        };
    }
    return dataSurat
}

function cetakSurat(pemohon, surat, namaSurat)
{
    if(namaSurat == "Surat Keterangan Usaha")
    {
        let template = formatSku(pemohon, surat)
        let mainContent = document.body.innerHTML;
        document.body.innerHTML = template;
        window.print()
        document.body.innerHTML = mainContent;
    }

    if(namaSurat == "Surat Keterangan Domisili")
    {
        let template = formatSkd(pemohon, surat)
        let mainContent = document.body.innerHTML;
        document.body.innerHTML = template;
        window.print()
        document.body.innerHTML = mainContent;
    }

    if(namaSurat == "Surat Keterangan Tidak Memiliki KIS")
    {
        let template = formatSktmk(pemohon, surat)
        let mainContent = document.body.innerHTML;
        document.body.innerHTML = template;
        window.print()
        document.body.innerHTML = mainContent;
    }
}