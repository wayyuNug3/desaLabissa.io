document.addEventListener('click', async function(e){

    if(e.target.classList.contains('t_tambahKK'))
    {
        setModalJudul('Input Kartu Keluarga')
        setFormStore('/kartuKeluarga')
        setValueInputan('store')
    }
    
    if(e.target.classList.contains('t_editKK'))
    {
        setModalJudul('Edit Kartu Keluarga')
        setFormStore(`/kartuKeluarga/${e.target.dataset.id}`)
        setMethod('put')
        setValueInputan(e.target, 'update')
    }

    if(e.target.classList.contains('t_anggota'))
    {
        let data = await mintaAnggotaKeServer(e.target.dataset.nokk)
        updateUiListAnggota(data)
    }
})