<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_dataprivacy', language 'id', version '4.0'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Aktivitas dan sumber';
$string['addcategory'] = 'Tambahkan kategori';
$string['addnewdefaults'] = 'Tambahkan modul baru bawaan';
$string['addpurpose'] = 'Tambahkan tujuan';
$string['addroleoverride'] = 'Tambahkan penyampingan peran';
$string['approve'] = 'Setujui';
$string['approvedrequestsubmitted'] = 'Permintaan Anda telah dikirim dan akan segera diproses.';
$string['approverequest'] = 'Setujui permintaan';
$string['automaticdatadeletionapproval'] = 'Persetujuan permintaan penghapusan data otomatis';
$string['automaticdatadeletionapproval_desc'] = 'Jika diaktifkan, permintaan penghapusan data disetujui secara otomatis. <br/> Perhatikan bahwa persetujuan otomatis hanya akan berlaku untuk permintaan penghapusan data baru dengan setelan ini diaktifkan. Permintaan penghapusan data yang ada menunggu persetujuan masih harus disetujui secara manual oleh petugas privasi.';
$string['automaticdataexportapproval'] = 'Persetujuan Permintaan Ekspor Data Otomatis';
$string['automaticdataexportapproval_desc'] = 'Jika diaktifkan, permintaan ekspor data disetujui secara otomatis. <br/> Perhatikan bahwa persetujuan otomatis hanya akan berlaku untuk permintaan ekspor data baru dengan pengaturan ini diaktifkan. Permintaan ekspor data yang ada menunggu persetujuan masih harus disetujui secara manual oleh petugas privasi.';
$string['automaticdeletionrequests'] = 'Buat permintaan penghapusan data otomatis';
$string['automaticdeletionrequests_desc'] = 'Jika diaktifkan, permintaan penghapusan data akan dibuat secara otomatis untuk setiap akun pengguna yang dihapus secara manual.';
$string['bulkapproverequests'] = 'Setujui permintaan';
$string['bulkdenyrequests'] = 'Tolak permintaan';
$string['cachedef_contextlevel'] = 'Tujuan dan kategori tingkat konteks';
$string['cachedef_purpose'] = 'Tujuan data';
$string['cachedef_purpose_overrides'] = 'Penyampingan tujuan di alat Privasi data';
$string['cancelrequest'] = 'Batalkan permintaan';
$string['cancelrequestconfirmation'] = 'Anda yakin ingin membatalkan permintaan data ini?';
$string['cannotreset'] = 'Tidak dapat menyetel ulang permintaan ini. Hanya permintaan yang ditolak yang dapat diatur ulang.';
$string['categories'] = 'Kategori';
$string['categorieslist'] = 'Daftar kategori data';
$string['category'] = 'Kategori';
$string['category_help'] = 'Kategori di registri data menjelaskan jenis data. Kategori baru dapat ditambahkan, atau jika Mewarisi dipilih, kategori data dari konteks yang lebih tinggi akan diterapkan. Konteksnya adalah (dari rendah ke tinggi): Blok> Modul aktivitas > Kursus > Kategori Kursus > Situs.';
$string['categorycreated'] = 'Kategori dibuat';
$string['categorydefault'] = 'Kategori bawaan';
$string['categorydefault_help'] = 'Kategori bawaan adalah kategori data yang diterapkan ke setiap model baru. Jika turunan dipilih, kategori data dari konteks yang lebih tinggi akan diterapkan. Konteksnya adalah (dari rendah ke tinggi): Blok > Modul aktivitas > Kursus > Kategori kursus > Pengguna > Situs.';
$string['categoryupdated'] = 'Kategori diperbarui';
$string['close'] = 'Tutup';
$string['compliant'] = 'Sesuai';
$string['confirmapproval'] = 'Apakah Anda benar-benar ingin menyetujui permintaan data ini?';
$string['confirmbulkapproval'] = 'Anda yakin ingin menyetujui permintaan data yang dipilih secara massal?';
$string['confirmbulkdenial'] = 'Anda yakin ingin menolak permintaan data yang dipilih secara massal?';
$string['confirmcompletion'] = 'Anda yakin ingin menandai pertanyaan pengguna ini selesai?';
$string['confirmcontextdeletion'] = 'Apakah Anda benar-benar ingin mengkonfirmasi penghapusan konteks yang dipilih? Ini juga akan menghapus semua data pengguna untuk sub-konteksnya masing-masing.';
$string['confirmdenial'] = 'Apakah Anda benar-benar ingin menolak permintaan data ini?';
$string['confirmrequestresubmit'] = 'Anda yakin ingin membatalkan permintaan {$a->type} saat ini untuk {$a->username} dan mengajukan ulang kembali?';
$string['contactdataprotectionofficer'] = 'Persetujuan Permintaan Ekspor Data Otomatis';
$string['contactdataprotectionofficer_desc'] = 'Jika diaktifkan, permintaan ekpor data akan disetujui secara otomatis. Harap dicatat bahwa persetujuan tidak akan berlaku pada permintaan ekspor data baru dengan diaktifkannya setelan ini. Persetujuan tertahan permintaan ekspor data masih harus disetujui secara manual oleh petugas privasi.';
$string['contactdpoviaprivacypolicy'] = 'Silakan hubungi petugas privasi seperti yang dijelaskan dalam kebijakan privasi.';
$string['contextlevelname10'] = 'Situs';
$string['contextlevelname30'] = 'Pengguna';
$string['contextlevelname40'] = 'Kategori Mata Kuliah';
$string['contextlevelname50'] = 'Kursus';
$string['contextlevelname70'] = 'Modul Kegiatan';
$string['contextlevelname80'] = 'Blok';
$string['contextpurposecategorysaved'] = 'Tujuan dan kategori tersimpan.';
$string['createcategory'] = 'Membuat kategori data';
$string['createdeletedatarequest'] = 'Buat permintaan penghapusan data';
$string['createnewdatarequest'] = 'Membuat permintaan data baru';
$string['createpurpose'] = 'Membuat tujuan data';
$string['creationauto'] = 'Otomatis';
$string['creationmanual'] = 'Manual';
$string['datadeletion'] = 'Penghapusan data';
$string['datadeletionpagehelp'] = 'Data yang periode retensinya telah kedaluwarsa tercantum di sini. Harap tinjau dan konfirmasi penghapusan data, yang kemudian akan dijalankan oleh tugas terjadwal "Hapus konteks kedaluwarsa".';
$string['dataprivacy:downloadallrequests'] = 'Unduh data yang diekspor untuk semua orang';
$string['dataprivacy:downloadownrequest'] = 'Unduh data Anda sendiri yang diekspor';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Minta penghapusan data untuk anak di bawah umur';
$string['dataprivacy:makedatarequestsforchildren'] = 'Buat permintaan data untuk anak di bawah umur';
$string['dataprivacy:managedataregistry'] = 'Kelola registri data';
$string['dataprivacy:managedatarequests'] = 'Kelola permintaan data';
$string['dataprivacy:requestdelete'] = 'Minta penghapusan data untuk Anda sendiri';
$string['dataprivacy:requestdeleteforotheruser'] = 'Minta penghapusan data atas nama pengguna lain';
$string['dataregistry'] = 'Registri data';
$string['dataregistryinfo'] = 'Registri data memungkinkan pengaturan kategori (jenis data) dan tujuan (alasan pemrosesan data) untuk semua konten di situs - dari pengguna dan kursus hingga aktivitas dan blok. Untuk setiap tujuan, periode retensi dapat ditetapkan. Saat periode retensi telah kedaluwarsa, data akan ditandai dan dicantumkan untuk dihapus, menunggu konfirmasi admin.';
$string['datarequestcreatedforuser'] = 'Permintaan data dibuat untuk {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Dibuat secara otomatis dari tugas terjadwal (pengguna dihapus yang sudah ada).';
$string['datarequestcreatedupondelete'] = 'Dibuat secara otomatis setelah pengguna dihapus.';
$string['datarequestemailsubject'] = 'Permintaan data: {$a}';
$string['datarequests'] = 'Permintaan data';
$string['dataretentionexplanation'] = 'Ringkasan ini menunjukkan kategori dan tujuan bawaan untuk menyimpan data pengguna. Area tertentu mungkin memiliki kategori dan tujuan yang lebih spesifik daripada yang tercantum di sini.';
$string['dataretentionsummary'] = 'Ringkasan Retensi Data';
$string['datecomment'] = '[{$a->date}]: {$a->comment}';
$string['daterequested'] = 'Tanggal diminta';
$string['daterequesteddetail'] = 'Date requested:';
$string['defaultexpired'] = 'Data semua pengguna';
$string['defaultexpiredexcept'] = 'Data untuk semua pengguna, kecuali mereka yang memegang salah satu peran berikut: <br> {$a->unexpired}';
$string['defaultsinfo'] = 'Kategori dan tujuan bawaan diterapkan ke semua model baru dan yang sudah ada di mana nilai tidak ditetapkan.';
$string['defaultssaved'] = 'Setelan bawaan tersimpan';
$string['defaultswarninginfo'] = 'Peringatan: Mengubah setelan bawaan ini dapat memengaruhi periode retensi model yang ada.';
$string['defaultunexpired'] = 'Hanya data untuk pengguna yang memegang salah satu peran berikut:<br> {$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Hanya data untuk pengguna yang memegang salah satu peran berikut: <br> {$a->expired}
Kecuali mereka juga memegang salah satu peran berikut: <br> {$a->unexpired}';
$string['deletecategory'] = 'Hapus kategori';
$string['deletecategorytext'] = 'Anda yakin ingin menghapus kategori \'{$a}\'?';
$string['deletedefaults'] = 'Hapus setelan bawaan: {$a}';
$string['deletedefaultsconfirmation'] = 'Anda yakin ingin menghapus kategori dan tujuan bawaan untuk modul {$a}?';
$string['deleteexistingdeleteduserstask'] = 'Buat permintaan hapus data untuk pengguna yang sudah dihapus sebelumnya';
$string['deleteexpiredcontextstask'] = 'Hapus konteks kedaluwarsa';
$string['deleteexpireddatarequeststask'] = 'Hapus berkas ekspor permintaan data yang kedaluwarsa';
$string['deletemyaccount'] = 'Hapus akun saya';
$string['deletepurpose'] = 'Hapus tujuan';
$string['deletepurposetext'] = 'Anda yakin ingin menghapus tujuan \'{$a}\'?';
$string['deny'] = 'Tolak';
$string['denyrequest'] = 'Tolak permintaan';
$string['deprecated'] = 'Tidak digunakan lagi';
$string['deprecatedexplanation'] = 'Pengaya ini menggunakan versi lama dari salah satu antarmuka privasi dan harus diperbarui.';
$string['download'] = 'Unduh';
$string['downloadexpireduser'] = 'Unduhan sudah kedaluwarsa. Kirimkan permintaan baru jika Anda ingin mengekspor data pribadi Anda.';
$string['dporolemapping'] = 'Pemetaan peran petugas privasi';
$string['dporolemapping_desc'] = 'Petugas privasi dapat mengelola permintaan data. The capability tool/dataprivacy:managedatarequests harus diizinkan agar peran dicantumkan sebagai opsi pemetaan peran petugas privasi.';
$string['duplicaterole'] = 'Peran sudah ditentukan';
$string['editcategories'] = 'Edit kategori';
$string['editcategory'] = 'Edit kategori';
$string['editdefaults'] = 'Edit bawaan: {$a}';
$string['editmoduledefaults'] = 'Edit modul bawaan';
$string['editpurpose'] = 'Edit tujuan';
$string['editpurposes'] = 'Edit tujuan';
$string['effectiveretentionperiodcourse'] = '{$a} (setelah tanggal akhir kursus)';
$string['effectiveretentionperioduser'] = '{$a} (sejak terakhir kali pengguna mengakses situs)';
$string['emailsalutation'] = 'Hai {$a},';
$string['errorcannotrequestdeleteforother'] = 'Anda tidak memiliki izin untuk membuat permintaan penghapusan untuk pengguna ini.';
$string['errorcannotrequestdeleteforself'] = 'Anda tidak memiliki izin untuk membuat permintaan penghapusan untuk diri Anda sendiri.';
$string['errorcontactdpodisabled'] = 'Opsi untuk menghubungi petugas privasi dinonaktifkan.';
$string['errorcontexthasunexpiredchildren'] = 'Konteks "{$a}" masih memiliki subkonteks yang belum kedaluwarsa. Tidak ada konteks yang telah ditandai untuk dihapus.';
$string['errorinvalidrequestcomments'] = 'Kolom komentar hanya boleh berisi teks biasa.';
$string['errorinvalidrequestcreationmethod'] = 'Metode pembuatan permintaan tidak valid!';
$string['errorinvalidrequeststatus'] = 'Status permintaan tidak valid!';
$string['errorinvalidrequesttype'] = 'Jenis permintaan tidak valid!';
$string['errornocapabilitytorequestforothers'] = 'Pengguna {$a->requestedby} tidak memiliki kemampuan untuk membuat permintaan data atas nama pengguna {$a->userid}';
$string['errornoexpiredcontexts'] = 'Tidak ada konteks kedaluwarsa untuk diproses';
$string['errorrequestalreadyexists'] = 'Anda sudah memiliki permintaan yang sedang berlangsung.';
$string['errorrequestnotfound'] = 'Permintaan tidak ditemukan';
$string['errorrequestnotwaitingforapproval'] = 'Permintaan tersebut tidak menunggu persetujuan. Bisa jadi belum siap atau sudah diproses.';
$string['errorsendingmessagetodpo'] = 'Galat saat mencoba mengirim pesan ke {$a}.';
$string['exceptionnotificationbody'] = '<p> Pengecualian terjadi saat memanggil <b> {$a->fullmethodname} </b>. <br> Ini berarti pengaya <b> {$a->component} </b> tidak menyelesaikan pemrosesan data. Informasi pengecualian berikut dapat diteruskan ke pengembang pengaya: </p> <pre> {$a->message} <br> {$a->backtrace} </pre>';
$string['exceptionnotificationsubject'] = 'Pengecualian terjadi saat memproses data privasi';
$string['expandplugin'] = 'Luaskan dan ciutkan pengaya.';
$string['expandplugintype'] = 'Luaskan dan ciutkan tipe pengaya.';
$string['expiredretentionperiodtask'] = 'Periode retensi kedaluwarsa';
$string['expiredrolewithretention'] = '{$a->retention} (Kedaluwarsa)';
$string['expiry'] = 'Kedaluwarsa';
$string['explanationtitle'] = 'Ikon yang digunakan di halaman ini dan artinya.';
$string['external'] = 'Tambahan';
$string['externalexplanation'] = 'Pengaya tambahan dipasang di situs ini.';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Kursus beranda situs';
$string['gdpr_art_6_1_a_description'] = 'Subjek data telah memberikan persetujuan untuk pemrosesan data pribadinya untuk satu atau beberapa tujuan tertentu';
$string['gdpr_art_6_1_a_name'] = 'Persetujuan (GDPR Art. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'Pemrosesan diperlukan untuk pelaksanaan kontrak di mana subjek data menjadi pihak atau untuk mengambil langkah-langkah atas permintaan subjek data sebelum menandatangani kontrak';
$string['gdpr_art_6_1_b_name'] = 'Kontrak (GDPR Art. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = 'Pemrosesan diperlukan untuk mematuhi kewajiban hukum yang tunduk pada pengontrol';
$string['gdpr_art_6_1_c_name'] = 'Kewajiban hukum (GDPR Art 6.1(c))';
$string['gdpr_art_6_1_d_description'] = 'Pemrosesan diperlukan untuk melindungi kepentingan vital subjek data atau orang perseorangan lainnya';
$string['gdpr_art_6_1_d_name'] = 'Kepentingan vital (GDPR Art. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = 'Pemrosesan diperlukan untuk pelaksanaan tugas yang dilakukan untuk kepentingan umum atau dalam pelaksanaan kewenangan resmi yang diberikan kepada pengawas';
$string['gdpr_art_6_1_e_name'] = 'Tugas publik (GDPR Art. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = 'Pemrosesan diperlukan untuk tujuan kepentingan sah yang dikejar oleh pengontrol atau oleh pihak ketiga, kecuali jika kepentingan tersebut disampingkan oleh kepentingan atau hak dasar dan kebebasan subjek data yang memerlukan perlindungan data pribadi, khususnya di mana datanya subjek adalah anak-anak';
$string['gdpr_art_6_1_f_name'] = 'Kepentingan yang sah (GDPR Art. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = 'Subjek data telah memberikan persetujuan eksplisit untuk pemrosesan data pribadi tersebut untuk satu atau beberapa tujuan tertentu, kecuali jika undang-undang Union atau Member State mengatur bahwa larangan yang disebutkan dalam paragraf 1 GDPR Pasal 9 tidak dapat dicabut oleh subjek data';
$string['gdpr_art_9_2_a_name'] = 'Persetujuan eksplisit (GDPR Art. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'Pemrosesan diperlukan untuk tujuan melaksanakan kewajiban dan melaksanakan hak khusus dari pengontrol atau subjek data di bidang ketenagakerjaan dan jaminan sosial dan undang-undang perlindungan sosial sejauh diizinkan oleh undang-undang Uni atau Negara Anggota atau a kesepakatan bersama sesuai dengan hukum Negara Anggota yang menyediakan perlindungan yang sesuai untuk hak-hak dasar dan kepentingan subjek data';
$string['gdpr_art_9_2_b_name'] = 'Undang-undang ketenagakerjaan dan jaminan / perlindungan sosial (GDPR Art. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'Pemrosesan diperlukan untuk melindungi kepentingan vital subjek data atau orang perseorangan lainnya di mana subjek data secara fisik atau hukum tidak dapat memberikan persetujuan';
$string['gdpr_art_9_2_c_name'] = 'Perlindungan kepentingan vital (GDPR Art. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = 'Pemrosesan dilakukan dalam aktivitasnya yang sah dengan pengamanan yang sesuai oleh yayasan, asosiasi atau badan nirlaba lainnya dengan tujuan politik, filosofis, agama atau serikat pekerja dan dengan syarat bahwa pemrosesan hanya berkaitan dengan anggota atau mantan anggota badan atau orang-orang yang secara teratur berhubungan dengannya sehubungan dengan tujuannya dan bahwa data pribadi tidak diungkapkan di luar badan itu tanpa persetujuan dari subjek data';
$string['gdpr_art_9_2_d_name'] = 'Aktivitas yang sah mengenai anggota / kontak dekat yayasan, asosiasi atau badan nirlaba lainnya (GDPR Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'Pemrosesan berkaitan dengan data pribadi yang secara nyata dipublikasikan oleh subjek data';
$string['gdpr_art_9_2_e_name'] = 'Data dipublikasikan oleh subjek data (GDPR Art. 9.2(e))';
$string['gdpr_art_9_2_f_description'] = 'Pemrosesan diperlukan untuk pembentukan, pelaksanaan, atau pembelaan tuntutan hukum atau kapan pun pengadilan bertindak dalam kapasitas yudisial mereka';
$string['gdpr_art_9_2_f_name'] = 'Tuntutan hukum dan tindakan pengadilan (GDPR Art. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = 'Pemrosesan diperlukan untuk alasan kepentingan publik yang substansial, berdasarkan undang-undang Union atau Negara Anggota yang harus proporsional dengan tujuan yang dicapai, menghormati esensi hak atas perlindungan data dan menyediakan tindakan yang sesuai dan spesifik untuk melindungi hak-hak fundamental dan kepentingan subjek data';
$string['gdpr_art_9_2_g_name'] = 'Kepentingan publik substansial (GDPR Art. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = 'Pemrosesan diperlukan untuk tujuan pengobatan pencegahan atau pekerjaan, untuk penilaian kapasitas kerja karyawan, diagnosis medis, penyediaan perawatan atau perawatan kesehatan atau sosial atau pengelolaan sistem dan layanan perawatan kesehatan atau sosial berdasarkan Hukum Serikat atau Negara Anggota atau sesuai dengan kontrak dengan profesional kesehatan dan tunduk pada persyaratan dan perlindungan yang dirujuk pada paragraf 3 GDPR Pasal 9';
$string['gdpr_art_9_2_h_name'] = 'Tujuan medis (GDPR Art. 9.2 (h))';
$string['gdpr_art_9_2_i_description'] = 'Pemrosesan diperlukan untuk alasan kepentingan publik di bidang kesehatan masyarakat, seperti melindungi dari ancaman lintas batas yang serius terhadap kesehatan atau memastikan standar kualitas dan keamanan perawatan kesehatan yang tinggi dan produk obat atau peralatan medis, berdasarkan Union atau hukum Negara Anggota yang mengatur tindakan yang sesuai dan spesifik untuk melindungi hak dan kebebasan subjek data, khususnya kerahasiaan profesional.';
$string['gdpr_art_9_2_i_name'] = 'Kesehatan masyarakat (GDPR Art. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'Pemrosesan diperlukan untuk tujuan pengarsipan untuk kepentingan umum, tujuan penelitian ilmiah atau sejarah atau tujuan statistik sesuai dengan Pasal 89 (1) berdasarkan undang-undang Uni atau Negara Anggota yang harus proporsional dengan tujuan yang dikejar, menghormati esensi hak untuk perlindungan data dan menyediakan langkah-langkah yang sesuai dan spesifik untuk melindungi hak-hak dasar dan kepentingan subjek data';
$string['gdpr_art_9_2_j_name'] = 'Kepentingan publik, atau penelitian ilmiah/sejarah/statistik (GDPR Art. 9.2(j))';
$string['hide'] = 'Sembunyikan semua';
$string['httpwarning'] = 'Setiap data yang diunduh dari situs ini mungkin tidak dienkripsi. Silakan hubungi administrator sistem Anda dan minta mereka menginstal SSL di situs ini.';
$string['inherit'] = 'Mewarisi';
$string['lawfulbases'] = 'Dasar yang sah';
$string['lawfulbases_help'] = 'Pilih setidaknya satu opsi yang akan berfungsi sebagai dasar hukum untuk memproses data pribadi. Untuk detail tentang dasar hukum ini, silakan lihat <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR Art. 6.1</a>';
$string['markcomplete'] = 'Tandai selesai';
$string['markedcomplete'] = 'Permintaan Anda telah ditandai sebagai selesai oleh petugas privasi.';
$string['message'] = 'Pesan';
$string['messagelabel'] = 'Pesan:';
$string['messageprovider:contactdataprotectionofficer'] = 'Permintaan data';
$string['messageprovider:datarequestprocessingresults'] = 'Hasil pemrosesan permintaan data';
$string['messageprovider:notifyexceptions'] = 'Pemberitahuan pengecualian permintaan data';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Permintaan data pribadiku';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} anak-anak';
$string['newrequest'] = 'Permintaan baru';
$string['noactivitiestoload'] = 'Tidak ada aktivitas';
$string['noassignedroles'] = 'Tidak ada peran yang ditetapkan dalam konteks ini';
$string['noblockstoload'] = 'Tidak ada blok';
$string['nocategories'] = 'Belum ada kategori';
$string['nocoursestoload'] = 'Tidak ada aktivitas';
$string['nodatarequests'] = 'Tidak ada permintaan data';
$string['nodatarequestsmatchingfilter'] = 'Tidak ada permintaan data yang cocok dengan filter yang diberikan';
$string['noexpiredcontexts'] = 'Tingkat konteks ini tidak memiliki data yang periode retensinya telah kedaluwarsa.';
$string['nopersonaldatarequests'] = 'Anda tidak memiliki permintaan data pribadi apa pun';
$string['nopurposes'] = 'Belum ada tujuan';
$string['nosubjectaccessrequests'] = 'Tidak ada permintaan data yang perlu Anda tindak lanjuti';
$string['nosystemdefaults'] = 'Tujuan dan kategori situs belum ditentukan.';
$string['notset'] = 'Tidak disetel (gunakan nilai bawaan)';
$string['notyetexpired'] = '{$a} (belum kedaluwarsa)';
$string['overrideinstances'] = 'Setel ulang model dengan nilai tersuai';
$string['pluginname'] = 'Privasi data';
$string['pluginname_help'] = 'Pengaya privasi data';
$string['pluginregistry'] = 'Pengaya registri privasi';
$string['pluginregistrytitle'] = 'Pengaya registri kepatuhan privasi';
$string['privacy'] = 'Privasi';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Filter saat ini diterapkan ke halaman permintaan data.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Jumlah permintaan data yang lebih disukai pengguna untuk dilihat di satu halaman';
$string['privacy:metadata:request'] = 'Informasi dari permintaan data pribadi (akses subjek dan permintaan penghapusan) dibuat untuk situs ini.';
$string['privacy:metadata:request:comments'] = 'Setiap komentar pengguna yang menyertai permintaan tersebut.';
$string['privacy:metadata:request:dpocomment'] = 'Setiap komentar yang dibuat oleh petugas privasi situs terkait permintaan tersebut.';
$string['privacy:metadata:request:requestedby'] = 'ID pengguna yang membuat permintaan, jika dibuat atas nama pengguna lain.';
$string['privacy:metadata:request:timecreated'] = 'Stempel waktu yang menunjukkan kapan permintaan dibuat oleh pengguna.';
$string['privacy:metadata:request:userid'] = 'ID pengguna yang memiliki permintaan tersebut';
$string['privacyofficeronly'] = 'Hanya pengguna yang diberi peran petugas privasi ({$a}) memiliki akses ke konten ini';
$string['privacyrequestexpiry'] = 'Permintaan data kedaluwarsa';
$string['privacyrequestexpiry_desc'] = 'Waktu permintaan data yang disetujui akan tersedia untuk diunduh sebelum kedaluwarsa. Jika disetel ke nol, maka tidak ada batasan waktu.';
$string['protected'] = 'Terlindung';
$string['protectedlabel'] = 'Retensi data ini memiliki preseden hukum yang lebih tinggi atas permintaan pengguna untuk dilupakan. Data ini hanya akan dihapus setelah periode retensi berakhir.';
$string['purpose'] = 'Tujuan';
$string['purpose_help'] = 'Tujuan menjelaskan alasan pemrosesan data. Tujuan baru dapat ditambahkan, atau jika Mewarisi dipilih, tujuan dari konteks yang lebih tinggi akan diterapkan. Konteksnya adalah (dari rendah ke tinggi): Blok > Modul aktivitas > Kursus > Kategori Kursus > Pengguna > Situs.';
$string['purposecreated'] = 'Tujuan dibuat';
$string['purposedefault'] = 'Tujuan bawaan';
$string['purposedefault_help'] = 'Tujuan bawaan adalah tujuan yang diterapkan pada setiap instance baru. Jika Mewarisi dipilih, tujuan dari konteks yang lebih tinggi akan diterapkan. Konteksnya adalah (dari rendah ke tinggi): Blok> Modul aktivitas > Kursus > Kategori Kursus > Pengguna > Situs.';
$string['purposeoverview'] = 'Suatu tujuan menjelaskan tujuan penggunaan dan kebijakan penyimpanan untuk data yang disimpan. Dasar untuk menyimpan dan menyimpan data tersebut juga dijelaskan dalam tujuan.';
$string['purposes'] = 'Tujuan';
$string['purposeslist'] = 'Daftar tujuan data';
$string['purposeupdated'] = 'Tujuan diperbarui';
$string['replyto'] = 'Balas ke';
$string['requestactions'] = 'Aksi';
$string['requestapproved'] = 'Permintaan disetujui';
$string['requestby'] = 'Diminta oleh';
$string['requestbydetail'] = 'Diminta oleh';
$string['requestcomments'] = 'Komentar';
$string['requestcomments_help'] = 'Kotak ini memungkinkan Anda memasukkan detail lebih lanjut tentang permintaan data Anda.';
$string['requestcreation'] = 'Penciptaan';
$string['requestdenied'] = 'Permintaan ditolak';
$string['requestemailintro'] = 'Anda menerima permintaan data:';
$string['requestfor'] = 'Pengguna';
$string['requestmarkedcomplete'] = 'Permintaan tersebut telah ditandai selesai';
$string['requestorigin'] = 'Situs';
$string['requestsapproved'] = 'Permintaan telah disetujui';
$string['requestsdenied'] = 'Permintaan ditolak';
$string['requeststatus'] = 'Status';
$string['requestsubmitted'] = 'Permintaan Anda telah dikirim ke petugas privasi';
$string['requesttype'] = 'Jenis';
$string['requesttype_help'] = 'Pilih alasan menghubungi petugas privasi. Ketahuilah bahwa penghapusan semua data pribadi akan mengakibatkan Anda tidak dapat lagi masuk ke situs.';
$string['requesttypedelete'] = 'Hapus semua data pribadiku';
$string['requesttypedeleteshort'] = 'Hapus';
$string['requesttypeexport'] = 'Ekspor semua data pribadiku';
$string['requesttypeexportshort'] = 'Ekspor';
$string['requesttypeothers'] = 'Pertanyaan umum';
$string['requesttypeothersshort'] = 'Pesan';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Pertimbangkan kursus tanpa tanggal akhir sebagai aktif';
$string['requireallenddatesforuserdeletion_desc'] = 'Saat menghitung kedaluwarsa pengguna, beberapa faktor dipertimbangkan: * waktu masuk terakhir pengguna dibandingkan dengan periode retensi untuk pengguna; dan * apakah pengguna terdaftar secara aktif dalam kursus apa pun. Saat memeriksa pendaftaran aktif dalam suatu kursus, jika kursus tersebut tidak memiliki tanggal akhir, maka setelan ini digunakan untuk menentukan apakah kursus tersebut dianggap aktif atau tidak. Jika kursus tidak memiliki tanggal akhir, dan setelan ini diaktifkan, maka pengguna tidak dapat dihapus.';
$string['requiresattention'] = 'Membutuhkan perhatian.';
$string['requiresattentionexplanation'] = 'Pengaya ini tidak menerapkan API privasi Moodle. Jika pengaya ini menyimpan data pribadi apa pun, pengaya ini tidak akan dapat diekspor atau dihapus melalui sistem privasi Moodle.';
$string['resubmitrequest'] = 'Ajukan ulang permintaan {$a->type} untuk {$a->username}';
$string['resubmitrequestasnew'] = 'Ajukan ulang sebagai permintaan baru';
$string['resubmittedrequest'] = 'Permintaan {$a->type} yang ada untuk {$a->username} dibatalkan dan diajukan ulang';
$string['resultdeleted'] = 'Anda baru-baru ini meminta agar akun dan data pribadi Anda di {$a} agar dihapus. Proses ini telah selesai dan Anda tidak dapat lagi masuk.';
$string['resultdownloadready'] = 'Salinan data pribadi Anda dari {$a} yang baru-baru ini Anda minta sekarang tersedia untuk diunduh dari tautan berikut.';
$string['retentionperiod'] = 'Periode Retensi';
$string['retentionperiod_help'] = 'Periode retensi menentukan lamanya waktu penyimpanan data. Saat periode retensi telah kedaluwarsa, data akan ditandai dan dicantumkan untuk dihapus, menunggu konfirmasi admin.';
$string['retentionperiodnotdefined'] = 'Tidak ada periode retensi yang ditentukan';
$string['retentionperiodzero'] = 'Tidak ada periode retensi';
$string['reviewdata'] = 'Ulas data';
$string['role'] = 'Peran';
$string['role_help'] = 'Peran dimana penyampingan harus diterapkan.';
$string['roleoverride'] = 'Penyampingan peran';
$string['roleoverrideoverview'] = 'Kebijakan penyimpanan default dapat diganti untuk peran pengguna tertentu, memungkinkan Anda untuk menentukan kebijakan penyimpanan yang lebih panjang atau lebih pendek. Seorang pengguna hanya akan berakhir jika semua perannya telah berakhir.';
$string['roleoverrides'] = 'Penyampingan peran';
$string['selectbulkaction'] = 'Pilih aksi massal.';
$string['selectdatarequests'] = 'Please select data requests.';
$string['selectuserdatarequest'] = 'Pilih permintaan data {{$a->username} {$a->requesttype}.';
$string['send'] = 'Kirim';
$string['sensitivedatareasons'] = 'Alasan pemrosesan data pribadi yang sensitif';
$string['sensitivedatareasons_help'] = 'Pilih satu atau beberapa alasan yang berlaku yang mengecualikan larangan memproses data pribadi sensitif yang terkait dengan tujuan ini. Untuk informasi lebih lanjut, silakan lihat
<a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR Art. 9.2</a>';
$string['setdefaults'] = 'Setel bawaan';
$string['showdataretentionsummary'] = 'Tampilkan ringkasan retensi data';
$string['showdataretentionsummary_desc'] = 'Jika diaktifkan, tautan ke ringkasan retensi data akan ditampilkan di footer halaman dan di profil pengguna.';
$string['statusapproved'] = 'Disetujui';
$string['statusawaitingapproval'] = 'Menunggu persetujuan';
$string['statuscancelled'] = 'Dibatalkan';
$string['statuscomplete'] = 'Selesai';
$string['statusdeleted'] = 'Dihapus';
$string['statusdetail'] = 'Status:';
$string['statusexpired'] = 'Kedaluwarsa';
$string['statuspending'] = 'Ditangguhkan';
$string['statusprocessing'] = 'Sedang diproses';
$string['statusready'] = 'Unduhan siap';
$string['statusrejected'] = 'Ditolak';
$string['subjectscope'] = 'Ruang lingkup subjek';
$string['subjectscope_help'] = 'Ruang lingkup subjek mencantumkan peran yang mungkin ditugaskan dalam konteks ini.';
$string['summary'] = 'Ringkasan konfigurasi registri';
$string['systemconfignotsetwarning'] = 'Tujuan dan kategori situs belum ditentukan. Jika ini tidak ditentukan, semua data akan dihapus saat memproses permintaan penghapusan.';
$string['tobedeleted'] = 'Data yang akan dihapus';
$string['unexpiredrolewithretention'] = '{$a->retention} (belum kedaluwarsa)';
$string['user'] = 'Pengguna';
$string['userlistexplanation'] = 'Pengaya ini memiliki penyedia dasar tetapi juga harus mengimplementasikan penyedia daftar pengguna untuk dukungan penuh fungsionalitas privasi.';
$string['userlistnoncompliant'] = 'Penyedia daftar pengguna tidak ada';
$string['viewrequest'] = 'Lihat permintaan';
$string['visible'] = 'Luaskan semua';
