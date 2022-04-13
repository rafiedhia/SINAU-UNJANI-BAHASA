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
 * Strings for component 'backup', language 'id', version '4.0'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'Proses pencadangan selesai';
$string['asyncbackupcompletebutton'] = 'Lanjutkan';
$string['asyncbackupcompletedetail'] = 'Proses pencadangan berhasil diselesaikan. <br/> Anda dapat mengakses cadangan di <a href="{$a}"> halaman pemulihan. </a>';
$string['asyncbackuperror'] = 'Proses pencadangan gagal';
$string['asyncbackuperrordetail'] = 'Proses pencadangan gagal. Silakan kontak administrator sistem.';
$string['asyncbackuppending'] = 'Proses pencadangan ditangguhkan';
$string['asyncbackupprocessing'] = 'Pencadangan sedang berlangsung';
$string['asyncbadexecution'] = 'Eksekusi pengontrol cadangan yang buruk. Ini adalah {$a} dan seharusnya 2.';
$string['asynccheckprogress'] = 'Anda dapat memeriksa kemajuannya kapan saja di <a href="{$a}"> Laman pemulihan </a>.';
$string['asyncemailenable'] = 'Aktifkan pesan notifikasi';
$string['asyncemailenabledetail'] = 'Jika diaktifkan, pengguna akan menerima pesan saat pencadangan atau pemulihan asinkron selesai.';
$string['asyncgeneralsettings'] = 'Pencadangan/pemulihan asinkron';
$string['asyncmessagebody'] = 'Pesan';
$string['asyncmessagebodydefault'] = 'Hai {user_firstname}, <br/> {operation} Anda (ID: {backupid}) berhasil diselesaikan. <br/> <br/> Anda dapat mengaksesnya di sini: {link}.';
$string['asyncmessagebodydetail'] = 'Pesan yang akan dikirim ketika pencadangan atau pemulihan asinkron selesai.';
$string['asyncmessagesubject'] = 'Subjek';
$string['asyncmessagesubjectdefault'] = 'Moodle {operation} berhasil diselesaikan';
$string['asyncmessagesubjectdetail'] = 'Subjek pesan';
$string['asyncnowait'] = 'Anda tidak perlu menunggu di sini, karena prosesnya akan berlangsung di latar belakang.';
$string['asyncprocesspending'] = 'Proses ditangguhkan';
$string['asyncrestorecomplete'] = 'Proses pemulihan selesai';
$string['asyncrestorecompletebutton'] = 'Lanjutkan';
$string['asyncrestorecompletedetail'] = 'Proses pemulihan berhasil diselesaikan. Mengeklik lanjutkan akan membawa Anda ke <a href="{$a}"> kursus untuk item yang dipulihkan. </a>';
$string['asyncrestoreerror'] = 'Proses pemulihan gagal';
$string['asyncrestoreerrordetail'] = 'Proses pemulihan gagal. Silakan hubungi administrator sistem Anda.';
$string['asyncrestoreinprogress'] = 'Pemulihan sedang berlangsung';
$string['asyncrestoreinprogress_help'] = 'Pemulihan kursus asinkron yang sedang berlangsung ditampilkan di sini.';
$string['asyncrestorepending'] = 'Proses pemulihan tertunda';
$string['asyncrestoreprocessing'] = 'Pemulihan sedang berlangsung';
$string['asyncreturn'] = 'Kembali ke kursus';
$string['autoactivedescription'] = 'Pilih apakah akan melakukan pencadangan otomatis atau tidak. Jika manual dipilih, cadangan otomatis hanya dimungkinkan melalui skrip CLI cadangan otomatis. Ini dapat dilakukan secara manual pada baris perintah atau melalui cron.';
$string['autoactivedisabled'] = 'Dinonaktifkan';
$string['autoactiveenabled'] = 'Diaktifkan';
$string['autoactivemanual'] = 'Manual';
$string['automatedbackupschedule'] = 'Jadwal';
$string['automatedbackupschedulehelp'] = 'Pilih hari dalam seminggu untuk melakukan pencadangan otomatis.';
$string['automatedbackupsinactive'] = 'Pencadangan otomatis tidak diaktifkan oleh admin situs';
$string['automatedbackupstatus'] = 'Status jadwal pencadangan';
$string['automateddeletedays'] = 'Hapus pencadangan yang lebih lama dari';
$string['automatedmaxkept'] = 'Jumlah cadangan maksimum yang tetap disimpan';
$string['automatedmaxkepthelp'] = 'Ini menentukan jumlah maksimum cadangan otomatis terbaru yang akan disimpan untuk setiap kursus. Cadangan yang lebih lama akan dihapus secara otomatis.';
$string['automatedminkept'] = 'Jumlah minimum cadangan yang tetap disimpan';
$string['automatedminkepthelp'] = 'Jika cadangan yang lebih lama dari jumlah hari tertentu dihapus, dapat terjadi kursus yang tidak aktif berakhir tanpa cadangan. Untuk mencegah hal ini, jumlah minimum cadangan yang disimpan harus ditentukan.';
$string['automatedsettings'] = 'Setelan pencadangan otomatis';
$string['automatedsetup'] = 'Setel pencadangan otomatis';
$string['automatedstorage'] = 'Penyimpanan pencadangan otomatis';
$string['automatedstoragehelp'] = 'Pilih lokasi penyimpanan cadangan yang Anda inginkan saat dibuat secara otomatis.';
$string['backupactivity'] = 'Aktivitas pencadangan: {$a}';
$string['backupcourse'] = 'Cadangkan kursus: {$a}';
$string['backupcoursedetails'] = 'Detail kursus';
$string['backupcoursesection'] = 'Bagian: {$a}';
$string['backupcoursesections'] = 'Topik kursus';
$string['backupdate'] = 'Tanggal diambil';
$string['backupdetails'] = 'Detail pencadangan';
$string['backupdetailsnonstandardinfo'] = 'Berkas yang dipilih bukan file cadangan Moodle standar. Proses pemulihan akan mencoba mengubah berkas cadangan ke dalam format standar dan kemudian mengembalikannya.';
$string['backupformat'] = 'Format';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Format tidak diketahui';
$string['backuplog'] = 'Informasi dan peringatan teknis';
$string['backupmode'] = 'Mode';
$string['backupmode10'] = 'Umum';
$string['backupmode20'] = 'Impor';
$string['backupmode30'] = 'Hub';
$string['backupmode40'] = 'Situs sama';
$string['backupmode50'] = 'Diotomatiskan';
$string['backupmode60'] = 'Dikonversikan';
$string['backupmode70'] = 'Asinkron';
$string['backupsection'] = 'Cadangkan topik kursus: {$a}';
$string['backupsettings'] = 'Setelan pencadangan';
$string['backupsitedetails'] = 'Detail situs';
$string['backupstage16action'] = 'Lanjutkan';
$string['backupstage1action'] = 'Selanjutnya';
$string['backupstage2action'] = 'Selanjutnya';
$string['backupstage4action'] = 'Lakukan pencadangan';
$string['backupstage8action'] = 'Lanjutkan';
$string['backuptype'] = 'Tipe';
$string['backuptypeactivity'] = 'Aktivitas';
$string['backuptypecourse'] = 'Kursus';
$string['backuptypesection'] = 'Bagian';
$string['backupversion'] = 'Versi cadangan';
$string['cannotfindassignablerole'] = 'Peran {$a} dalam berkas cadangan tidak dapat dipetakan ke peran apa pun yang diizinkan untuk Anda tetapkan.';
$string['choosefilefromactivitybackup'] = 'Area pencadangan aktivitas';
$string['choosefilefromactivitybackup_help'] = 'Aktivitas pencadangan dibuat menggunakan setelan bawaan tersimpan di sini.';
$string['choosefilefromautomatedbackup'] = 'Pencadangan Otomatis';
$string['choosefilefromautomatedbackup_help'] = 'Berisi cadangan yang dibuat secara otomatis.';
$string['choosefilefromcoursebackup'] = 'Area cadangan kursus';
$string['choosefilefromcoursebackup_help'] = 'Cadangan kursus dibuat menggunakan setelan bawaan tersimpan di sini.';
$string['choosefilefromuserbackup'] = 'Area pribadi pencadangan pengguna';
$string['choosefilefromuserbackup_help'] = 'Berkas cadangan dengan informasi pengguna yang dianonimkan disimpan di sini.';
$string['config_keep_groups_and_groupings'] = 'Secara bawaan, pertahankan grup dan pengelompokan saat ini.';
$string['config_keep_roles_and_enrolments'] = 'Secara bawaan, pertahankan peran dan pendaftaran saat ini.';
$string['config_overwrite_conf'] = 'Memungkinkan pengguna untuk menimpa konfigurasi kursus saat ini';
$string['config_overwrite_course_fullname'] = 'Secara bawaan timpa nama lengkap kursus dengan nama dari berkas cadangan. Ini membutuhkan "Timpa konfigurasi kursus" untuk diperiksa dan pengguna saat ini memiliki kemampuan untuk mengubah nama lengkap kursus (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'Secara bawaan, timpa nama singkat kursus dengan nama yang ada di berkas cadangan. Ini membutuhkan "Timpa konfigurasi kursus" untuk diperiksa dan pengguna saat ini memiliki kemampuan untuk mengubah nama singkat kursus (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'Secara bawaan, timpa tanggal mulai kursus dengan tanggal dari berkas cadangan. Ini memerlukan "Timpa konfigurasi kursus" untuk dicentang dan pengguna saat ini memiliki kemampuan untuk memutar tanggal kursus saat pemulihan (moodle/restore: rolldates)';
$string['configgeneralactivities'] = 'Setel bawaan untuk menyertakan aktivitas dalam cadangan.';
$string['configgeneralanonymize'] = 'JIka diaktifkan semua informasi yang berkaitan dengan pengguna akan dibuat anonim secara bawaan.';
$string['configgeneralbadges'] = 'Setel bawaan untuk menyertakan lencana dalam cadangan.';
$string['configgeneralblocks'] = 'Setel bawaan untuk menyertakan blok dalam cadangan.';
$string['configgeneralcalendarevents'] = 'Setel bawaan untuk menyertakan acara kalender dalam cadangan.';
$string['configgeneralcomments'] = 'Setel bawaan untuk menyertakan komentar dalam cadangan.';
$string['configgeneralcompetencies'] = 'Setel bawaan untuk menyertakan kompetensi dalam cadangan.';
$string['configgeneralcontentbankcontent'] = 'Setel bawaan untuk menyertakan isi bank konten dalam cadangan.';
$string['configgeneralfiles'] = 'Setel bawaan untuk menyertakan berkas dalam cadangan. Harap diperhatikan: Menonaktifkan setelan ini akan menghasilkan cadangan yang hanya menyertakan referensi ke berkas. Ini bukan masalah jika cadangan dipulihkan di situs yang sama dan berkas belum dihapus sesuai dengan setelan \'Bersihkan berkas kumpulan sampah\' (filescleanupperiod).';
$string['configgeneralfilters'] = 'Setel bawaan untuk menyertakan filter dalam cadangan.';
$string['configgeneralgroups'] = 'Setel bawaan untuk menyertakan grup dan pengelompokan dalam cadangan.';
$string['configgeneralhistories'] = 'Setel bawaan untuk menyertakan riwayat pengguna dalam cadangan.';
$string['configgenerallogs'] = 'Jika log yang diaktifkan akan dimasukkan dalam cadangan secara bawaan.';
$string['configgeneralpermissions'] = 'Jika diaktifkan, izin peran akan diimpor. Ini dapat menggantikan izin yang ada untuk pengguna terdaftar.';
$string['configgeneralquestionbank'] = 'Jika diaktifkan, bank soal akan disertakan dalam cadangan secara default. PERHATIKAN: Menonaktifkan setelan ini akan menonaktifkan cadangan aktivitas yang menggunakan bank soal, seperti kuis.';
$string['configgeneralroleassignments'] = 'Jika diaktifkan secara bawaan, penugasan peran juga akan dicadangkan.';
$string['configgeneralusers'] = 'Setel bawaan apakah akan memasukkan pengguna atau tidak dalam pencadangan.';
$string['configgeneraluserscompletion'] = 'Jika diaktifkan, informasi penyelesaian pengguna akan disertakan dalam cadangan secara bawaan.';
$string['configlegacyfiles'] = 'Setel bawaan untuk menyertakan berkas kursus lama dalam cadangan. Berkas kursus lama berasal dari versi Moodle sebelum 2.0.';
$string['configloglifetime'] = 'Ini menentukan lama waktu Anda ingin menyimpan informasi log cadangan. Log yang lebih tua dari usia ini secara otomatis dihapus. Disarankan untuk menjaga nilai ini kecil, karena informasi yang dicatat dapat sangat besar.';
$string['configrestoreactivities'] = 'Setel bawaan untuk memulihkan aktivitas.';
$string['configrestorebadges'] = 'Setel bawaan untuk memulihkan lencana.';
$string['configrestoreblocks'] = 'Setel bawaan untuk memulihkan blok.';
$string['configrestorecalendarevents'] = 'Setel bawaan untuk memulihkan acara kalender.';
$string['configrestorecomments'] = 'Setel bawaan untuk memulihkan komentar.';
$string['configrestorecompetencies'] = 'Setel bawaan untuk memulihkan kompetensi.';
$string['configrestorecontentbankcontent'] = 'Setel bawaan untuk memulihkan konten bank konten.';
$string['configrestoreenrolments'] = 'Setel bawaan untuk memulihkan metode pendaftaran.';
$string['configrestorefilters'] = 'Setel bawaan untuk memulihkan filter.';
$string['configrestoregroups'] = 'Setel bawaan untuk memulihkan grup dan pengelompokan jika disertakan dalam cadangan.';
$string['configrestorehistories'] = 'Setel bawaan untuk memulihkan riwayat pengguna jika itu termasuk dalam cadangan.';
$string['configrestorelogs'] = 'Jika diaktifkan, log akan dipulihkan secara bawaan jika disertakan dalam cadangan.';
$string['configrestorepermissions'] = 'Jika diaktifkan, izin peran akan dipulihkan. Ini dapat mengesampingkan izin yang ada untuk pengguna terdaftar.';
$string['configrestoreroleassignments'] = 'Jika diaktifkan secara bawaan, tugas peran akan dipulihkan jika disertakan dalam cadangan.';
$string['configrestoreusers'] = 'Setel bawaan apakah akan memulihkan pengguna jika mereka disertakan dalam cadangan.';
$string['configrestoreuserscompletion'] = 'Jika diaktifkan, informasi penyelesaian pengguna akan dipulihkan secara bawaan jika disertakan dalam cadangan.';
$string['confirmcancel'] = 'Batalkan pencadangan';
$string['confirmcancelimport'] = 'Batalkan impor';
$string['confirmcancelno'] = 'Jangan batalkan';
$string['confirmcancelquestion'] = 'Apakah Anda yakin ingin membatalkan? Setiap informasi yang Anda masukkan akan hilang.';
$string['confirmcancelrestore'] = 'Batalkan pemulihan';
$string['confirmcancelyes'] = 'Batalkan pencadangan';
$string['confirmnewcoursecontinue'] = 'Peringatan kursus baru';
$string['confirmnewcoursecontinuequestion'] = 'Kursus sementara (tersembunyi) akan dibuat oleh proses pemulihan kursus. Untuk membatalkan pemulihan klik batal. Jangan tutup peramban saat memulihkan.';
$string['copiesinprogress'] = 'Salinan kursus ini sedang dalam proses. <a href="{$a}"> Lihat salinan yang sedang diproses. </a>';
$string['copycoursedesc'] = 'Kursus ini akan digandakan dan dimasukkan ke dalam kategori kursus yang dipilih.';
$string['copycourseheading'] = 'Salin kursus';
$string['copycoursetitle'] = 'Salin kursus: {$a}';
$string['copydest'] = 'Destinasi';
$string['copyfieldnotfound'] = 'Ruas wajib tidak ditemukan';
$string['copyformfail'] = 'Pengajuan AJAX formulir salinan kursus telah gagal.';
$string['copyingcourse'] = 'Penyalinan kursus sedang berlangsung';
$string['copyingcourseshortname'] = 'meyalin';
$string['copyop'] = 'Operasi sekarang';
$string['copyprogressheading'] = 'Penyalinan kursus sedang berlangsung';
$string['copyprogressheading_help'] = 'Tabel ini menunjukkan status semua salinan kursus Anda yang belum selesai.';
$string['copyprogresstitle'] = 'Penyalinan kursus sedang berlangsung';
$string['copyreturn'] = 'Salin dan kembali';
$string['copysource'] = 'Sumber';
$string['copyview'] = 'Salin dan lihat';
$string['coursecategory'] = 'Kategori kursus akan dipulihkan ke';
$string['courseid'] = 'ID Orisinal';
$string['coursesettings'] = 'Setelan kursus';
$string['coursetitle'] = 'Judul';
$string['currentstage1'] = 'Setelan awal';
$string['currentstage16'] = 'Selesai';
$string['currentstage2'] = 'Skema setelan';
$string['currentstage4'] = 'Konfirmasi dan ulasan';
$string['currentstage8'] = 'Lakukan pencadangan';
$string['enableasyncbackup'] = 'Aktifkan pencadangan asinkron';
$string['enableasyncbackup_help'] = 'Jika diaktifkan, semua operasi pencadangan dan pemulihan akan dilakukan secara asinkron. Ini tidak mempengaruhi impor dan ekspor. Pencadangan dan pemulihan asinkron memungkinkan pengguna melakukan operasi lain saat pencadangan atau pemulihan sedang berlangsung.';
$string['enterasearch'] = 'Masukkan pencarian';
$string['error_block_for_module_not_found'] = 'Ditemukan model blok yatim piatu (id: {$a->bid}) untuk modul kursus (id: {$a->mid}). Blok ini tidak akan dicadangkan';
$string['error_course_module_not_found'] = 'Modul kursus yatim piatu (id: {$a}) ditemukan. Modul ini tidak akan dicadangkan.';
$string['errorcopyingbackupfile'] = 'Gagal menyalin berkas cadangan ke folder sementara sebelum memulihkan.';
$string['errorfilenamemustbezip'] = 'Nama file yang Anda masukkan harus berupa file ZIP dan memiliki ekstensi .mbz';
$string['errorfilenamerequired'] = 'Anda harus memasukkan nama berkas yang valid untuk cadangan ini';
$string['errorfilenametoolong'] = 'Panjang nama berkas harus kurang dari 255 karakter.';
$string['errorinvalidformat'] = 'Format cadangan tidak diketahui';
$string['errorinvalidformatinfo'] = 'Berkas yang dipilih bukan berkas cadangan Moodle yang valid dan tidak dapat dipulihkan.';
$string['errorminbackup20version'] = 'Berkas cadangan ini telah dibuat dengan satu versi pengembangan cadangan Moodle
 ({$a->backup}). Minimum yang dibutuhkan adalah {$a->min}. Tidak dapat dipulihkan.';
$string['errorrestorefrontpagebackup'] = 'Anda hanya dapat memulihkan cadangan beranda situs di beranda situs';
$string['executionsuccess'] = 'Berkas cadangan berhasil dibuat.';
$string['extractingbackupfileto'] = 'Mengekstrak berkas cadangan ke: {$a}';
$string['failed'] = 'Pencadangan gagal';
$string['filealiasesrestorefailures'] = 'Alias memulihkan kegagalan';
$string['filealiasesrestorefailures_help'] = 'Alias adalah tautan simbolis ke berkas lain, termasuk yang disimpan di repositori eksternal. Dalam beberapa kasus, Moodle tidak dapat memulihkannya - misalnya saat memulihkan cadangan di situs lain atau saat berkas yang dirujuk tidak ada. Rincian lebih lanjut dan alasan sebenarnya dari kegagalan dapat ditemukan di berkas log pemulihan.';
$string['filealiasesrestorefailuresinfo'] = 'Beberapa alias yang disertakan dalam berkas cadangan tidak dapat dipulihkan. Daftar berikut berisi lokasi yang diharapkan dan berkas sumber yang mereka rujuk di situs asli.';
$string['filename'] = 'Nama berkas';
$string['filereferencesincluded'] = 'Referensi berkas ke konten eksternal disertakan dalam berkas cadangan. Ini tidak akan berfungsi jika cadangan dipulihkan di situs lain.';
$string['filereferencesnotsamesite'] = 'Berkas cadangan berasal dari situs yang berbeda, sehingga referensi berkas tidak dapat dipulihkan.';
$string['filereferencessamesite'] = 'Berkas cadangan dari situs ini, sehingga referensi berkas dapat dipulihkan.';
$string['generalactivities'] = 'Sertakan aktivitas dan sumber';
$string['generalanonymize'] = 'Informasi anonim';
$string['generalbackdefaults'] = 'Setelan pencadangan bawaan';
$string['generalbadges'] = 'Sertakan lencana';
$string['generalblocks'] = 'Sertakan blok';
$string['generalcalendarevents'] = 'Termasuk acara kalender';
$string['generalcomments'] = 'Sertakan komentar';
$string['generalcompetencies'] = 'Sertakan kompetensi';
$string['generalcontentbankcontent'] = 'Sertakan isi bank konten';
$string['generalenrolments'] = 'Sertakan metode pendaftaran';
$string['generalfiles'] = 'Sertakan berkas';
$string['generalfilters'] = 'Sertakan filter';
$string['generalgradehistories'] = 'Sertakan riwayat';
$string['generalgroups'] = 'Sertakan grup dan pengelompokan';
$string['generalhistories'] = 'Sertakan riwayat';
$string['generallegacyfiles'] = 'Sertakan  berkas kursus lawas';
$string['generallogs'] = 'Sertakan log';
$string['generalpermissions'] = 'Sertakan penyampingan izin';
$string['generalquestionbank'] = 'Sertakan bank soal';
$string['generalrestoredefaults'] = 'Setelan bawaan pemulihan umum';
$string['generalrestoresettings'] = 'Setelan bawaan pemulihan umum';
$string['generalroleassignments'] = 'Sertakan penetapan peran';
$string['generalsettings'] = 'Setelan pencadangan umum';
$string['generalusers'] = 'Sertakan';
$string['generaluserscompletion'] = 'Sertakan informasi ketercapaian pengguna';
$string['hidetypes'] = 'Sembunyikan opsi tipe';
$string['importbackupstage16action'] = 'Lanjutkan';
$string['importbackupstage1action'] = 'Selanjutnya';
$string['importbackupstage2action'] = 'Selanjutnya';
$string['importbackupstage4action'] = 'Lakukan impor';
$string['importbackupstage8action'] = 'Lanjutkan';
$string['importcurrentstage0'] = 'Pilihan kursus';
$string['importcurrentstage1'] = 'Setelan awal';
$string['importcurrentstage16'] = 'Selesai';
$string['importcurrentstage2'] = 'Skema setelan';
$string['importcurrentstage4'] = 'Konfirmasi dan ulasan';
$string['importcurrentstage8'] = 'Lakukan impor';
$string['importfile'] = 'Impor berkas cadangan';
$string['importgeneralduplicateadminallowed'] = 'Izinkan resolusi konflik admin';
$string['importgeneralduplicateadminallowed_desc'] = 'Jika situs memiliki akun dengan nama pengguna \'admin\', maka upaya untuk memulihkan file cadangan yang berisi akun dengan nama pengguna \'admin\' dapat menyebabkan konflik. Jika pengaturan ini diaktifkan, konflik akan diselesaikan dengan mengubah nama pengguna di file cadangan menjadi \'admin_xyz\'.';
$string['importgeneralmaxresults'] = 'Jumlah maksimum kursus terdaftar untuk diimpor';
$string['importgeneralmaxresults_desc'] = 'Mengontrol jumlah kursus yang terdaftar ketika melakukan langkah pertama proses impor';
$string['importgeneralsettings'] = 'Setelan Impor bawaan';
$string['importrootsettings'] = 'Setelan impor';
$string['importsettings'] = 'Setelan impor umum';
$string['importsuccess'] = 'Impor selesai. Klik lanjutkan untuk kembali ke kursus.';
$string['includeactivities'] = 'Sertakan:';
$string['includeditems'] = 'Sertakan item:';
$string['includefilereferences'] = 'Referensi berkas ke konten eksternal';
$string['includesection'] = 'Bagian {$a}';
$string['includeuserinfo'] = 'Data pengguna';
$string['inprogress'] = 'Pencadangan sedang berlangsung';
$string['jumptofinalstep'] = 'Lompat ke langkah terakhir';
$string['keep'] = 'Simpan';
$string['keptroles'] = 'Sertakan pendaftaran peran';
$string['keptroles_help'] = 'Pengguna dengan peran yang dipilih akan didaftarkan ke kursus baru. Tidak ada data pengguna yang akan disalin kecuali \'Sertakan data pengguna\' diaktifkan.';
$string['locked'] = 'Terkunci';
$string['lockedbyconfig'] = 'Setelan terkunci sesuai setelan pencadangan bawaan';
$string['lockedbyhierarchy'] = 'Terkunci menurut dependensi';
$string['lockedbypermission'] = 'Anda tidak memiliki izin yang memadai untuk mengubah setelan ini';
$string['loglifetime'] = 'Simpan log untuk';
$string['managefiles'] = 'Kelola berkas cadangan';
$string['mergerestoredefaults'] = 'Kembalikan ke setelan bawaan saat menggabungkan ke kursus lain';
$string['missingfilesinpool'] = 'Beberapa berkas tidak dapat disimpan selama pencadangan, sehingga tidak mungkin untuk memulihkannya.';
$string['module'] = 'Modul';
$string['moodleversion'] = 'Versi Moodle';
$string['morecoursesearchresults'] = 'Ditemukan lebih dari {$a} kursus, menampilkan {$a} hasil  pertama';
$string['moreresults'] = 'Ada terlalu banyak hasil, masukkan pencarian yang lebih spesifik.';
$string['nomatchingcourses'] = 'Tidak ada kursus yang ditampilkan';
$string['norestoreoptions'] = 'Tidak ada kategori atau kursus yang tersedia dapat Anda pulihkan.';
$string['originalwwwroot'] = 'URL cadangan';
$string['overwrite'] = 'Timpa';
$string['pendingasyncdeletedetail'] = 'Kursus ini memiliki cadangan asinkron yang tertunda. <br/> Kursus tidak dapat dihapus sampai pencadangan ini selesai.';
$string['pendingasyncdetail'] = 'Pencadangan asinkron hanya memungkinkan pengguna untuk memiliki satu cadangan yang tertunda untuk sumber pada satu waktu. <br/> Beberapa cadangan asinkron dari sumber daya yang sama tidak dapat diantrekan, karena hal ini kemungkinan akan menghasilkan beberapa cadangan dengan konten yang sama.';
$string['pendingasyncedit'] = 'Ada cadangan asinkron yang tertunda untuk kursus ini. Harap jangan mengedit kursus ini sampai pencadangan selesai.';
$string['pendingasyncerror'] = 'Pencadangan tertunda untuk sumber ini';
$string['preparingdata'] = 'Menyiapkan data';
$string['preparingui'] = 'Bersiap untuk menampilkan halaman';
$string['previousstage'] = 'Sebelumnya';
$string['privacy:metadata:backup:detailsofarchive'] = 'Arsip dapat berisi banyak data pengguna yang terkait pada kursus, seperti nilai, pendaftaran dan data aktivitas.';
$string['privacy:metadata:backup:externalpurpose'] = 'Tujuan arsip ini adalah untuk menyimpan informasi yang terkait dengan kursus, dimana nantinya cadangan akan dipulihkan di masa yang akan datang.';
$string['privacy:metadata:backup_controllers'] = 'Daftar operasi pencadangan';
$string['privacy:metadata:backup_controllers:itemid'] = 'ID Kursus';
$string['privacy:metadata:backup_controllers:operation'] = 'Operasi yang dilakukan, mis. pemulihan.';
$string['privacy:metadata:backup_controllers:timecreated'] = 'Waktu ketika aksi itu dibuat';
$string['privacy:metadata:backup_controllers:timemodified'] = 'Waktu ketika aksi itu diubah';
$string['privacy:metadata:backup_controllers:type'] = 'Jenis barang yang sedang dioperasi, mis. aktivitas.';
$string['qcategory2coursefallback'] = 'Kategori pertanyaan "{$a->name}", originally at system/course category context in backup file, will be created at course context by restore';
$string['qcategorycannotberestored'] = 'Kategori pertanyaan "{$a->name}" tidak dapat dibuat pada proses pemulihan kursus';
$string['question2coursefallback'] = 'Kategori pertanyaan "{$a->name}", aslinya pada konteks kategori sistem / kursus dalam berkas cadangan, akan dibuat pada konteks kursus dengan pemulihan';
$string['questionegorycannotberestored'] = 'Pertanyaan "{$a->name}" tidak dapat dibuat pada proses pemulihan kursus';
$string['recyclebin_desc'] = 'Perhatikan bahwa setelan ini juga akan digunakan untuk tempat sampah.';
$string['replacerestoredefaults'] = 'Pulihkan bawaan saat memulihkan ke kursus lain dengan menghapus konten';
$string['restoreactivity'] = 'Pulihkan aktivitas';
$string['restorecourse'] = 'Pulihkan kursus';
$string['restorecoursesettings'] = 'Setelan kursus';
$string['restoredcourseid'] = 'ID kursus yang dipulihkan: {$a}';
$string['restoreexecutionsuccess'] = 'Cadangan kursus berhasil dipulihkan, klik tombol Lanjutkan akan membawa Anda ke halaman kursus yang telah dipulihkan.';
$string['restorefileweremissing'] = 'Beberapa berkas tidak dapat dipulihkan karena tidak ada dalam cadangan.';
$string['restorenewcoursefullname'] = 'Nama kursus baru';
$string['restorenewcourseshortname'] = 'Nama singkat kursus baru';
$string['restorenewcoursestartdate'] = 'Tanggal mulai baru';
$string['restorerolemappings'] = 'Pulihkan pemetaan peran';
$string['restorerootsettings'] = 'Pulihkan setelan';
$string['restoresection'] = 'Pulihkan bagian';
$string['restorestage1'] = 'Konfirmasi';
$string['restorestage16'] = 'Ulasan';
$string['restorestage16action'] = 'Lakukan pemulihan';
$string['restorestage1action'] = 'Selanjutnya';
$string['restorestage2'] = 'Destinasi';
$string['restorestage2action'] = 'Selanjutnya';
$string['restorestage32'] = 'Proses';
$string['restorestage32action'] = 'Lanjutkan';
$string['restorestage4'] = 'Setelan';
$string['restorestage4action'] = 'Selanjutnya';
$string['restorestage64'] = 'Selesai';
$string['restorestage64action'] = 'Lanjutkan';
$string['restorestage8'] = 'Skema';
$string['restorestage8action'] = 'Selanjutnya';
$string['restoretarget'] = 'Pulihkan target';
$string['restoretocourse'] = 'Pulihkan cadangan ke kursus:';
$string['restoretocurrentcourse'] = 'Pulihkan ke kursus ini';
$string['restoretocurrentcourseadding'] = 'Gabungkan cadangan kursus pada kursus ini';
$string['restoretocurrentcoursedeleting'] = 'Hapus konten dari kursus ini kemudian pulihkan cadangan';
$string['restoretoexistingcourse'] = 'Pulihkan ke dalam kursus yang tersedia';
$string['restoretoexistingcourseadding'] = 'Gabungkan cadangan kursus pada kursus yang telah ada';
$string['restoretoexistingcoursedeleting'] = 'Hapus konten dari kursus yang ada, kemudian pulihkan cadangan';
$string['restoretonewcourse'] = 'Pulihkan cadangan sebagai kursus baru';
$string['restoringcourse'] = 'Pemulihan kursus sedang berlangsung';
$string['restoringcourseshortname'] = 'memulihkan';
$string['rootenrolmanual'] = 'Pulihkan menjadi Pendaftaran manual';
$string['rootsettingactivities'] = 'Sertakan aktivitas dan sumber';
$string['rootsettinganonymize'] = 'Informasi pengguna anonim';
$string['rootsettingbadges'] = 'Sertakan lencana';
$string['rootsettingblocks'] = 'Sertakan blok';
$string['rootsettingcalendarevents'] = 'Sertakan acara kalender';
$string['rootsettingcomments'] = 'Sertakan komentar';
$string['rootsettingcompetencies'] = 'Sertakan kompetensi';
$string['rootsettingcontentbankcontent'] = 'Sertakan isi bank konten';
$string['rootsettingcustomfield'] = 'Sertakan ruas tersuai';
$string['rootsettingenrolments'] = 'Sertakan metode pendaftaran';
$string['rootsettingenrolments_always'] = 'Ya, selalu';
$string['rootsettingenrolments_never'] = 'Tidak, pulihkan pengguna ke Pendaftaran manual';
$string['rootsettingenrolments_withusers'] = 'Ya, tapi hanya jika menyertakan pengguna';
$string['rootsettingfiles'] = 'Sertakan berkas';
$string['rootsettingfilters'] = 'Sertakan filter';
$string['rootsettinggradehistories'] = 'Sertakan riwayat penilaian';
$string['rootsettinggroups'] = 'Sertakan grup dan pengelompokan';
$string['rootsettingimscc1'] = 'Konversikan ke IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Konversikan ke IMS Common Cartridge 1.1';
$string['rootsettinglegacyfiles'] = 'Sertakan  berkas kursus lawas';
$string['rootsettinglogs'] = 'Sertakan log kursus';
$string['rootsettingpermissions'] = 'Sertakan penyampingan perizinan';
$string['rootsettingquestionbank'] = 'Sertakan bank soal';
$string['rootsettingroleassignments'] = 'Sertakan penetapan peran pengguna';
$string['rootsettings'] = 'Setelan pencadangan';
$string['rootsettingusers'] = 'Sertakan siswa terdaftar';
$string['rootsettinguserscompletion'] = 'Sertakan detail penyelesaian pengguna';
$string['samesitenotification'] = 'Cadangan ini dibuat hanya dengan referensi ke berkas, bukan berkas itu sendiri. Memulihkan hanya akan berfungsi di situs ini.';
$string['sectionactivities'] = 'Aktivitas';
$string['sectioninc'] = 'Sertakan dalam cadangan (tidak ada informasi pengguna)';
$string['sectionincanduser'] = 'Sertakan dalam cadangan bersama dengan informasi pengguna';
$string['selectacategory'] = 'PIlih kategori';
$string['selectacourse'] = 'Pilih kursus';
$string['setting_course_fullname'] = 'Nama kursus';
$string['setting_course_shortname'] = 'Nama singkat kursus';
$string['setting_course_startdate'] = 'Tanggal mulai kursus';
$string['setting_keep_groups_and_groupings'] = 'Pertahankan grup dan pengelompokan saat ini';
$string['setting_keep_roles_and_enrolments'] = 'Tetap gunakan peran dan pendaftaran sekarang';
$string['setting_overwrite_conf'] = 'Timpa konfigurasi kursus';
$string['setting_overwrite_course_fullname'] = 'Timpa nama lengkap kursus';
$string['setting_overwrite_course_shortname'] = 'Timpa nama singkat kursus';
$string['setting_overwrite_course_startdate'] = 'Timpa tanggal mulai kursus';
$string['showtypes'] = 'Tampilkan tipe opsi';
$string['sitecourseformatwarning'] = 'Ini adalah cadangan beranda situs, perhatikan bahwa mereka hanya dapat dipulihkan di beranda situs';
$string['skiphidden'] = 'Abaikan kursus tersembunyi';
$string['skiphiddenhelp'] = 'Pilih apakah akan melewatkan kursus tersembunyi atau tidak';
$string['skipmodifdays'] = 'Lewati kursus tidak diubah sejak';
$string['skipmodifdayshelp'] = 'Pilih untuk melewatkan kursus yang belum diubah sejak beberapa hari';
$string['skipmodifprev'] = 'Lewati kursus tidak diubah sejak pencadangan sebelumnya';
$string['skipmodifprevhelp'] = 'Pilih apakah akan melewati kursus yang belum diubah sejak pencadangan otomatis terakhir. Ini membutuhkan log untuk diaktifkan.';
$string['status'] = 'Status';
$string['storagecourseandexternal'] = 'Area berkas cadangan kursus dan direktori yang ditentukan';
$string['storagecourseonly'] = 'Area berkas cadangan kursus';
$string['storageexternalonly'] = 'Menentukan direktori untuk pencadangan otomatis';
$string['successful'] = 'Pencadangan berhasil';
$string['successfulcopy'] = 'Penyalinan berhasil';
$string['successfulrestore'] = 'Pemulihan berhasil';
$string['timetaken'] = 'Membutuhkan waktu';
$string['title'] = 'Judul';
$string['totalcategorysearchresults'] = 'Total kategori: {$a}';
$string['totalcoursesearchresults'] = 'Total kursus: {$a}';
$string['undefinedrolemapping'] = 'Pemetaan peran tidak ditentukan untuk pola dasar \'{$a}\'.';
$string['unnamedsection'] = 'Bagian belum bernama';
$string['userdata'] = 'Sertakan data pengguna';
$string['userdata_help'] = 'Jika diaktifkan, data seperti kiriman forum, pengiriman tugas, dll. Akan disalin ke kursus baru untuk setiap pengguna dengan peran yang dipilih di \'Sertakan pendaftaran peran\'.';
$string['userinfo'] = 'Info Pengguna';
