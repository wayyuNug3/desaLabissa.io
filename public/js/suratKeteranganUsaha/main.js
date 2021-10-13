

document.addEventListener('click', async function(e){
    if(e.target.id == 'tCariPenduduk')
    {
        setJudulModal('Pilih pemohon')
        let keyword     = ambilValueInputCariPenduduk()
        let penduduk    = await mintaKeServerDataBerdasarkanInputan(keyword)
        isiModalBodyDenganTableDaftarPenduduk(penduduk)
    }
    if(e.target.id == 'tPilihPemohon')
    {
        let penduduk    = await mintaKeServerDataBerdasarkanId(e.target.dataset.id)
        isiInputanPemohon(penduduk)
        setPemohonDidalamSurat(penduduk)
        closeModal()
        setIdPendudukYangAdaDiColDua()
    }

    if(e.target.id == "t_cetak"){
        let fungsi = e.target.dataset.fungsi
        setDataSuratDidalamSurat()
        if(fungsi == "post")
        {
            let responFungsi = await storeSuratKeDataBase()
            tampilkanAlert(responFungsi)
            let success = document.querySelector('#success')
            success.removeAttribute('hidden', '')
            setTimeout(() => {
                success.setAttribute('hidden', '')
            }, 3000);
            success.innerHTML = responFungsi.message.success
        }else{
            let responFungsi = await updateSuratKeDataBase()
            tampilkanAlert(responFungsi)
            tampilkanAlert(responFungsi)
            let success = document.querySelector('#success')
            success.removeAttribute('hidden', '')
            setTimeout(() => {
                success.setAttribute('hidden', '')
            }, 3000);
            success.innerHTML = responFungsi.message.success
        }
    }

    if(e.target.id == 't_editSKU')
    {
        let pemohonSurat     = await mintaKeServerDataBerdasarkanId(e.target.dataset.pemohon)
        let idSurat          = await mintaKeTabelSkuById(e.target.dataset.id)
        setPemohonDidalamSurat(pemohonSurat)
        isiInputanPemohon(pemohonSurat)
        setIdPendudukYangAdaDiColDua()
        isiInputanSurat(idSurat)
        setFungsiTombolCetak()
        
    }

    if(e.target.id == "t_detailSKU")
    {
        let pemohon     = await mintaKeServerDataBerdasarkanId(e.target.dataset.pemohon)
        let surat     = await mintaKeTabelSkuById(e.target.dataset.surat)

        setJudulModal('Detail Surat')
        setIsiModalDenganPreviewSurat(pemohon, surat)
    }
    
})