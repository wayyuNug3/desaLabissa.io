
document.addEventListener('click', async function(e){
    if(e.target.classList.contains('t_cetak'))
    {
        let surat = await checkJenisSurat(e.target.dataset.idsurat, e.target.dataset.namasurat)
        cetakSurat(surat.pemohon.pemohon, surat.surat.dataSurat, e.target.dataset.namasurat)
    }
})