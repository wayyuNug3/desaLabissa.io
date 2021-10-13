let token           = document.querySelector("[name='_token']")
let formatSurat     = document.querySelector(".formatSurat")

document.addEventListener('click', async function(e){
    if(e.target.id == "t_cetak")
    {
        let dataPemohon = await pemohon()
        if(dataPemohon.validator() == false)
        {
            dataPemohon.invalidFeedback()
            return false
        }
        let dataSurat   = await surat()
        storePenduduk(token.value, dataPemohon)
        let responseStoreSKD = await storeSKD(token.value, dataSurat)
        settingPemohonKedalamFormatSurat(dataPemohon)
        settingAparatKedalamFormatSurat(dataSurat)
        cetakSurat()
        
        munculkanAlert(responseStoreSKD)
        
    }
})