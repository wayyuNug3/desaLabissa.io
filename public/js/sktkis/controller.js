document.addEventListener('click', async function(e){
    if(e.target.classList.contains('t_cari'))
    {
        let keyword         = ambilValueInputCari(e.target)
        let data            = await mintaDataPemohonKeServer(keyword)
        updateModalJudul()
        updateModalBody(data)
    }

    if(e.target.classList.contains('t_pilihPemohon'))
    {
        let data = await mintaDataPemohonKeServeById(e.target.dataset.id)
        updateInputValue(data)
        updateFormatSurat(data)
    }

    if(e.target.id == "t_cetak")
    {
        let returnSkip =  validate()
        if(returnSkip() == false)
        {
            return false
        }
        let storeFeedback = await storeSurat(document.querySelector('[name="_token"]').value)
        setTandaTangan()
        cetakSurat()
        tampilkanAlert(storeFeedback)
    }
})