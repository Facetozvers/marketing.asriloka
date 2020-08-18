@extends('layouts.header')
@section('title', 'Knowledge Base')
@section('navbar-title', 'Knowledge Base')
@section('panel')
    <div class="panel-header panel-header-sm">
    </div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title">Knowledge Base</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h3><span style="font-weight:bold"># </span>Definisi</h3>

                <h6 style="font-weight:bold">PRIMARY LISTING</h6>
                    <p style="text-indent:3%;text-align:justify">Properti atau project dari Developer; bisa sudah ready stock; bisa pula masih indent; bisa ribuan unit, bisa pula hanya beberapa unit</p>
                    <p style="text-indent:3%;text-align:justify">Untuk MOU dengan Developer wajib ditandatangani oleh Direktur Utama PT. BAF</p>
                
                <h6 style="font-weight:bold">SECONDARY LISTING</h6>
                    <p style="text-indent:3%;text-align:justify">Properti yang bukan milik developer, melainkan perorangan; bisa masih baru 100% belum pernah dihuni; bisa pula sudah sedang dihuni; bisa berupa rumah, ruko, apartemen, villa, tanah, gudang, pabrik, hotel, SPBU, rumah sakit, sekolah, pertambangan, perkebunan, dll</p>
                    <p style="text-indent:3%;text-align:justify">Syarat listingan bisa ditampilkan di website asriloka.com, sudah divalidasi oleh Dir. Marketing / Kepala Cabang dan PT. BAF sudah menerima form listing asli yang sudah ditandatangani oleh si pemilik asset yang namanya tertera di SHM, SHGB, Girik diatas materai Rp. 6000,- dari Pelisting</p>
                
                <h6 style="font-weight:bold">Kewajiban Marketing</h6>
                    <p style="text-indent:3%;text-align:justify">Setiap Marketing PT. BAF wajib mendaftarkan semua listing nya ke PT. BAF untuk bisa di Upload di web asriloka.com dan dapat dipasarkan oleh semua Marketing PT. BAF</p>
               
                <h6 style="font-weight:bold">PJP</h6>
                    <p style="text-indent:3%;text-align:justify">Penanggung Jawab Primary (Project Marketing Manager, yang menangani primary project developer)</p>
               
                <h6 style="font-weight:bold">APJP</h6>
                    <p style="text-indent:3%;text-align:justify">Asisten PJP</p>

                <h6 style="font-weight:bold">NUP</h6>
                    <p style="text-indent:3%;text-align:justify">Nomor Urut Pemesanan, biasanya dilakukan oleh Developer yang akan me-launching projectnya, dan diperkirakan laris, sehingga kelak yang punya NUP diprioritaskan untuk boleh memilih unit terlebih dahulu; dibandingkan pembeli yang tidak punya NUP</p>
                
                <h6 style="font-weight:bold">BF</h6>
                    <p style="text-indent:3%;text-align:justify">Booking Fee adalah semacam “tanda jadi” (besarannya tergantung kesepakatan, bisa hanya beberapa puluh/ratus juta), yang mengikat pihak Penjual maupun Pembeli selama tenggat waktu tertentu (biasanya 1-2 minggu). Selama masa BF, maka properti tsb di block oleh Penjual untuk Pembeli. Karena itu, jika tidak jadi (batal) maka BF biasanya hangus; karena Penjual sudah dirugikan, tidak boleh menjual kepihak lain selama masa BF. Beda dengan NUP, yang bersifat “tidak mengikat” kedua pihak: Bisa tidak jadi membeli; sehingga uang NUP bisa dikembalikan 100%</p>
                
                <h6 style="font-weight:bold">DP</h6>
                    <p style="text-indent:3%;text-align:justify">Down Payment pengertiannya adalah “tanda jadi, atau uang muka”, sudah lebih serius dan pasti dibandingkan BF; yang besarannya antara 10%-50% tergantung kesepakatan dengan Penjual. Jika menggunakan KPR, maka DP berkisar antara 20%-40%. DP bisa hangus bisa tidak, tergantung kesepakatan kedua pihak</p>
                
                <h6 style="font-weight:bold">CO-SELLING</h6>
                    <p style="text-indent:3%;text-align:justify">Bekerjasama antar Member dalam melayani pembeli dan penjualan. Misal: Member “A” punya Buyer, tapi tidak bisa melayaninya meninjau lokasi, atau menutup transaksi; maka Member “A” boleh menghubungi Member PT. BAF manapun (anggap Member “B”) untuk melayani Buyer nya agar terjadi transaksi (membeli). Jika terjadi transaksi, maka Nama Penjual yang masuk Sistem PT. BAF adalah Member yang menjual (bukan yang punya Buyer). Selling Fee DIBAGI DUA, Member yang punya Buyer 50% nya dan Member “B” yang melakukan aktivitas penjualan 50% nya</p>
                
                <h6 style="font-weight:bold">CO-LISTING</h6>
                    <p style="text-indent:3%;text-align:justify">Bekerjasama antar Member dalam hal melisting properti. Misal: Member “A” mempunyai listingan secondary didaerah Jakarta Barat, padahal ia domisili di Bekasi. Daripada jauh jauh harus menemani Member yang bawa Buyer (yang belum tentu jadi membeli) dan menguras waktu serta tenaga; maka bisa bekerjasama dengan Member “B” yang domisili didekat listingan tsb; agar jika ada Member yang membawa Buyer, bisa ditemani dan dilayani oleh Member Co-Listing tsb. Jika terjadi transaksi, maka Listing Fee DIBAGI DUA antara Member “A” dengan Member “B”</p>
                
                <h6 style="font-weight:bold">CO-BROKING</h6>
                    <p style="text-indent:3%;text-align:justify">Bekerjasama dengan Agen Properti diluar PT. BAF, apakah itu perusahaan property broker ataupun broker independen (broker tradisional). PT. BAF TIDAK BERSEDIA CO-BROKING SELLING</p>
                
                <h6 style="font-weight:bold">CO-BROKING LISTING</h6>
                    <p style="text-indent:3%;text-align:justify">(artinya: pihak PT. BAF punya Buyer, dan Broker lain punya listingan) diperbolehkan jika terpaksa (misalnya: Buyer PT. BAF hanya mau membeli properti yang dilisting secara eksklusif oleh broker lain), atau Broker non PT. BAF tsb sebagai “Kuasa Jual” atau langsung dikuasakan oleh Pemilik Properti yang tidak mau berhubungan dengan Broker lain; dan atau jika PT. BAF tidak punya akses kepada Pemilik properti tsb</p>
                
                <h3><span style="font-weight:bold"># </span>Kegiatan Terlarang</h3>

                <h6 style="font-weight:bold">Secret Selling</h6>
                    <p style="text-indent:3%;text-align:justify">Transaksi produk properti yang bekerjasama dengan PT. BAF yang dilakukan oleh agen PT. BAF tapi tidak melaporkannya ke perusahaan. </p>
                
                <h6 style="font-weight:bold">Wanprestasi</h6>
                    <p style="text-indent:3%;text-align:justify">Wanprestasi (breach of contract) adalah tidak dilaksanakannya prestasi atau kewajiban sebagaimana mestinya yang dibebankan oleh kontrak terhadap pihak-pihak tertentu seperti yang disebutkan dalam kontrak yang bersangkutan. Tindakan wanprestasi membawa konsekuensi terhadap timbulnya hak pihak yang dirugikan untuk menuntut pihak yang melakukan wanprestasi untuk memberikan ganti rugi sehingga oleh hukum diharapkan agar tidak ada satu pihak pun yang dirugikan karena wanprestasi tersebut.</p>
                
                <h6 style="font-weight:bold">Tidak Menampilkan link sumber listing PT. BAF</h6>
                    <p style="text-indent:3%;text-align:justify">Untuk marketing yang membuat web atau blog sendiri, wajib mencantumkan link sumber listingan PT. BAF dari asriloka.com untuk produk PT. BAF yang ditampilkan. Disarankan mengambil link dari button share yang berisi kode agen yang melakukan share, sehingga agen mendapatkan keuntungan nomor teleponnya menjadi kontak yang dihubungi oleh pembeli.</p>
                
                <h6 style="font-weight:bold">Memberikan informasi privat properti sebelum survei</h6>
                    <p style="text-indent:3%;text-align:justify">Informasi privat seperti alamat lengkap, kontak pemilik, nama perumahan yang bisa membuat pembeli melakukan transaksi sendiri dengan pemilik dilarang diberitahukan ke pembeli sebelum survei besama dengan marketing</p>
                
                <h4><span style="font-weight:bold"># </span>Petunjuk Keagenan Property Penjualan Pemula (Basic Selling)</h4>

                <h6 style="font-weight:bold">Aktif dalam merespon pembeli</h6>
                    <p style="text-indent:3%;text-align:justify">Promosi yang telah disebarkan melalui media sosial harus diawasi. Oleh karena itu disarankan agen selalu terkoneksi internet dan meluangkan waktu untuk membuka media sosial setiap beberapa jam. Jika agen merespon terlalu lama beresiko membuat pembeli mengalihkan ke produk yang lain. Agen juga harus merespon dengan cara yang santun untuk menjaga relasi dengan pembeli.</p>
                    <p style="text-indent:3%;text-align:justify">Pentingnya dalam merespon pembeli adalah meyakinkannya untuk mau membeli produk dengan tetap menjaga agar tidak membuka nama lengkap produk (perumahan) atau lokasi rincinya. Dengan demikian pembeli diwajibkan mengikuti survei bersama dengan agen untuk mengetahui lokasinya. Perlu waspada, ada agen atau broker lain yang berpotensi untuk menyamar sebagai pembeli.</p>
                    <p style="text-indent:3%;text-align:justify">Untuk selling dasar agen bisa ditemani agen lain yang lebih berpengalaman. Teknis pelaksanaan survei disepakati antara agen dengan pembeli. Salah satu poin yang berpengaruh terhadap ketertarikan pembeli adalah bagaimana agen menjelaskan spesifikasi bangunan serta keunggulan lainnya. Hal-hal yang mungkin ditanyakan adalah lokasi, spesifikasi bangunan, cara pembayaran, booking dengan biayanya, total biaya sampai akad, biaya-biaya tambahan, harga produk serta fasilitas yang diberikan. Oleh karena itu, PT. BAF mengadakan kegiatan Agent Gathering sebagai sarana komunikasi produk dari pengembang.</p>
                
                <h6 style="font-weight:bold">Survey dengan pembeli ke Lokasi</h6>
                    <p style="text-indent:3%;text-align:justify">Marketing membantu pembeli untuk melakukan survei sesuai teknis yang telah disepakati. Di lokasi, pembeli melihat bangunan yang ditawarkan ditemani Marketing ikut menjelaskan rinciannya. Dalam proses ini marketing harus sudah mengetahui lokasi lebih dulu terutama lokasi yang dijual juga letak kantor pemasarannya (jika ada). Tujuan survei adalah untuk meyakinkan pembeli dengan produk yang dijual sehingga mau membooking pembelian produk tersebut. Diharapkan juga pembeli sudah menyiapkan pembayaran DP untuk booking produk. Biasanya persyaratan yang perlu disiapkan untuk membooking adalah :<br>
                        <br>1. Fotocopy KTP<br>
                        2. Fotocopy KK<br>
                        3. Tanda tangan SPR<br>
                        4. Biaya Booking<br>
                    </p>
                    <p style="text-indent:3%;text-align:justify">Setelah selesai tahap ini, agen dinyatakan berhasil melakukan proses closing terhadap produk yang telah dibooking. Silakan lakukan pelaporan ke PT. BAFmelalui menu "Lapor Closing" dengan mengisi data yang diperlukan untuk langsung divalidasi datanya dan foto kwitansi closingnya agar lebih cepat. Jika kesulitan, silakan secara manual melakukan pelaporan melalui  cabang masing-masing (proses manual lebih lambat). Jangan lupa lanjutkan proses penjualan hingga akad terlaksana</p>
                
                <h6 style="font-weight:bold">Melengkapi Persyaratan Akad</h6>
                    <p style="text-indent:3%;text-align:justify">Setelah pembeli melakukan booking terhadap produk yang diinginkan, agen wajib menginformasikan proses selanjutnya agar akad bisa terlaksana dengan Bank untuk proses KPR. Ada beberapa item biaya yang perlu disiapkan oleh pembeli yang besarnya tergantung produk yang dibeli. Umumnya formasi biaya untuk akad KPR adalah (masing-masing di copy tiga lembar):<br>
                        <br>1. KTP dan Kartu Keluarga
                        <br>2. NPWP
                        <br>3. Buku Nikah
                        <br>4. Slip Gaji
                        <br>5. Surat Keterangan Bekerja (bagi pegawai)
                        <br>6. Rekening koran tabungan 3 bulan terakhir</p>
                    <p style="text-indent:3%;text-align:justify">Sedangkan dari sisi developer atau penjual rumah juga perlu disiapkan:<br>
                        <br>1. Salinan sertifikat tanah
                        <br>2. Salinan izin mendirikan bangunan (IMB)
                        <br>3. Salinan surat tanda jadi dari developer/penjual rumah yang menyatakan setuju menjual rumah tersebut</p>
                    <p style="text-indent:3%;text-align:justify">Ini adalah tahap terakhir jika bank menyetujui maka tugas marketing telah selesai. Kami menyarankan marketing tetap menjaga hubungan baik dengan pembeli dan menyimpan database (nomor telepon) nya agar tetap bisa membuka peluang bisnis lainnya.</p>
                
                <h6 style="font-weight:bold">Petunjuk Melaporkan transaksi closing</h6>
                    <p style="text-indent:3%;text-align:justify">Pelaporan transaksi yang terlaksana dengan pembeli wajib dilakukan oleh marketing yang menjual produk properti. Beberapa hal yang harus diperhatikan dalam pengisian data :<br>
                        <br>1. Nama Produk (wajib)
                        <br>2. Nomor Rumah/Blok (wajib)
                        <br>3. Nama Pembeli (wajib)
                        <br>4. Nomor telepon pembeli (wajib)
                        <br>5. Harga produk yang disepakati (wajib)
                        <br>6. Foto kwitansi closing (wajib)</p>

                <h6 style="font-weight:bold">SOP Pencairan</h6>
                    <p style="text-align:justify">
                    1. Sudah lapor closing melalui Upload Bukti Closing oleh Peselling<br>
                    2. Pelisting sudah Upload Bukti Akad berupa Foto Akad di Notaris<br>
                    3. Pelisting sudah Upload Bukti Transfer Fee dari Rekening Developer maupun pemilik asset Primary maupun Secondary ke Rekening PT. BAF (Pelisting maupun Peselling dilarang menerima dana pembayaran apapun baik itu Booking, DP, maupun segala dana yang berhubungan dengan transaksi antara pemilik asset / Developer dengan Konsumen / Buyer)<br>
                    4. Pencairan maksimal 14 hari kerja oleh Bagian Keuangan setelah dilakukan validasi atas dana fee yang masuk ke rekening PT. BAF berdasarkan bukti transfer yang di upload pelisting atas pembayaran fee dari Developer maupun pemilik aset<br>
                    </p>
                
            </div>
        </div>
    </div>
</div>
@endsection