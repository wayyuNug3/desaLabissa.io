<div class="printArea formatSurat" hidden>
	<div style="color: #000" class="container-fluid">
		<div class="row">
			<div class="col">
			{{-- headersurat --}}
			<div class="row pr-5 mr-2">
				<div class="col-2 text-right">
					<img src="/img/logo.jpg" alt="" width="115rem">
				</div>
				<div class="col pr-5 mr-5">
					<h1 class="text-center font-weight-bold">
						PEMERINTAH KABUPATEN BONE <br>
						KECAMATAN AJANGALE <br>
						DESA LABISSA <br>
					</h1>
				</div>
			</div>

			<hr>
			{{-- endheaderSurat --}}

			{{-- namaSurat --}}
				<div class="row mb-2 text-center">
					<div class="col">
						<h2><u>SURAT KETERANGAN USAHA</u></h2>
						<p class="h3" >Nomor :  <span id="noSurat">{{ $noSurat }}</span></p>
					</div>
				</div>
			{{-- endNamaurat --}}

			{{-- pembuka --}}
				<div class="row text-justify">
					<div class="col">
						<p class="h3">&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini, Kepala Desa Labissa Kecamatan Ajangale Kabupaten Bone, Menerangkan dengan sebenar-benarnya bahwa :</p>
					</div>
				</div>
			{{-- endpembuka --}}


			{{-- pemohon --}}
				<div class="h3 my-3">
				<dl class="row my-0">
					<dt class="col-5 pl-5">Nama lengkap <span class="float-right">:</span></dt>
					<dd class="col-7 font-weight-bold" id="nama"></dd>
				</dl>
				<dl class="row my-0">
					<dt class="col-5 pl-5">Nik <span class="float-right">:</span></dt>
					<dd class="col-7 font-weight-bold" id="nik"></dd>
				</dl>
				<dl class="row my-0">
					<dt class="col-5 pl-5">Jenis Kelamin <span class="float-right">:</span></dt>
					<dd class="col-7 font-weight-bold" id="jenisKelamin"></dd>
				</dl>
				<dl class="row my-0">
					<dt class="col-5 pl-5">Tempat Tanggal Lahir <span class="float-right">:</span></dt>
					<dd class="col-7 font-weight-bold" id="tempatDanTanggalLahir"></dd>
				</dl>
				<dl class="row my-0">
					<dt class="col-5 pl-5">Agama <span class="float-right">:</span></dt>
					<dd class="col-7 font-weight-bold" id="agama"></dd>
				</dl>
				<dl class="row my-0">
					<dt class="col-5 pl-5">Pekerjaan <span class="float-right">:</span></dt>
					<dd class="col-7 font-weight-bold" id="pekerjaan"></dd>
				</dl>
				<dl class="row my-0">
					<dt class="col-5 pl-5">Alamat lengkap <span class="float-right">:</span></dt>
					<dd class="col-7 font-weight-bold" id="alamat"></dd>
				</dl>
				</div>
			{{-- endPemohon --}}



			{{-- subisi --}}
				<div class="row text-justify my-3">
					<div class="col">
						<p class="h3">&nbsp;&nbsp;&nbsp;&nbsp;Oknum tersebut namanya di atas adalah benar warga Desa Labissa dan bertempat tinggal di Dusun Kampung Baru Desa Labissa Kecamatan Ajangale Kabupaten Bone.</p>
					</div>
				</div>
			{{-- endsubisi --}}

			{{-- penutup --}}
				<div class="row text-justify">
					<div class="col">
						<p class="h3">&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat untuk dipergunakan sebagaimana mestinya, dan apabila dikemudian hari terdapat kekeliruan/ kesalahan akan diadakan perbaikan.</p>
					</div>
				</div>
			{{-- endpenutup --}}


			{{-- aparat / tandatangan --}}
			<div class="row">
				<div class="col-6">

				</div>
				<div class="col h3 my-3 text-center mengetahui">
				</div>
			</div>
			{{-- end aparat/ tanda tangan --}}

			</div>
		</div>
	</div>
</div>