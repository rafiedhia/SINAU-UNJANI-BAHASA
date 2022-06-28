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
 * Strings for component 'question', language 'id', version '4.0'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Aksi';
$string['addanotherhint'] = 'Tambahkan petunjuk lain';
$string['addcategory'] = 'Tambahkan kategori';
$string['addmorechoiceblanks'] = 'Klik untuk tambahkan {no} pilihan jawaban';
$string['adminreport'] = 'Laporkan tentang kemungkinan masalah dalam basis data soal Anda.';
$string['advancedsearchoptions'] = 'Opsi pencarian';
$string['alltries'] = 'Semua upaya';
$string['answer'] = 'Jawaban';
$string['answers'] = 'Jawaban';
$string['answersaved'] = 'Jawaban tersimpan';
$string['attemptfinished'] = 'Selesai dikerjakan';
$string['attemptfinishedsubmitting'] = 'Telah selesai mengirimkan:';
$string['attemptoptions'] = 'Opsi upaya';
$string['availableq'] = 'Tersedia';
$string['badbase'] = 'Dasar buruk sebelum **: {$a}**';
$string['behaviour'] = 'Perilaku';
$string['behaviourbeingused'] = 'Perilaku yang digunakan: {$a}';
$string['broken'] = 'Ini adalah "tautan rusak" yang merujuk pada berkas yang tidak ada.';
$string['byandon'] = 'oleh <em>{$a->user}</em> pada <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Tidak dapat menyalin berkas cadangan';
$string['cannotcreate'] = 'Tidak dapat membuat masukan pada tabel question_attempts';
$string['cannotcreatepath'] = 'Tidak dapat membuat jalur: {$a}';
$string['cannotdeletebehaviourinuse'] = 'Anda tidak dapat menghapus perilaku \'{$a}\' karena soal sedang dikerjakan.';
$string['cannotdeletecate'] = 'Anda tidak dapat menghapus kategori tersebut. Ia adalah kategori bawaan untuk konteks ini.';
$string['cannotdeleteneededbehaviour'] = 'Tidak dapat menghapus perilaku soal \'{$a}\'. Ada perilaku lain yang bergantung padanya.';
$string['cannotdeleteqtypeinuse'] = 'Anda tidak dapat menghapus tipe soal \'{$a}\'. Terdapat soal dari tipe ini pada Bank Soal.';
$string['cannotdeleteqtypeneeded'] = 'Anda tidak dapat menghapus tipe soal \'{$a}\'. Ada tipe soal lain yang bergantung padanya.';
$string['cannotdeletetopcat'] = 'Kategori puncak tidak dapat dihapus.';
$string['cannotedittopcat'] = 'Kategori puncak tidak dapat diedit.';
$string['cannotenable'] = 'Tipe soal {$a} tidak dapat dibuat secara langsung.';
$string['cannotenablebehaviour'] = 'perilaku soal {$a} tidak dapat digunakan secara langsung. Hanya untuk penggunaan internal saja.';
$string['cannotfindcate'] = 'Tidak dapat menemukan rekaman kategori';
$string['cannotfindquestionfile'] = 'Tidak dapat menemukan berkas data soal pada zip';
$string['cannotgetdsfordependent'] = 'Tidak bisa mendapatkan paket data tertentu untuk paket data soal yang bergantung! (question: {$a->id}, datasetitem: {$a->item})';
$string['cannotgetdsforquestion'] = 'Tidak bisa mendapatkan paket data tertentu untuk soal perhitungan! (question: {$a})';
$string['cannothidequestion'] = 'Tidak dapat menyembunyikan soal';
$string['cannotimportformat'] = 'Maaf, mengimpor format ini belum diimplementasikan!';
$string['cannotinsertquestion'] = 'Tidak dapat memasukkan soal baru!';
$string['cannotinsertquestioncatecontext'] = 'Tidak dapat memasukkan kategori soal baru {$a->cat} contextid ilegal{$a->ctx}';
$string['cannotloadquestion'] = 'Tidak dapat memuat soal';
$string['cannotmovequestion'] = 'Anda tidak dapat menggunakan naskah ini untuk memindahkan soal yang memiliki berkas terkait dengannya dari area yang berbeda.';
$string['cannotopenforwriting'] = 'Tidak dapat dibuka untuk ditulis: {$a}';
$string['cannotpreview'] = 'Anda tidak dapat melakukan pratinjau pada soal berikut ini!';
$string['cannotread'] = 'Tidak dapat membaca berkas impor (atau berkas kosong)';
$string['cannotretrieveqcat'] = 'Tidak dapat mengambil kategori soal';
$string['cannotunhidequestion'] = 'Gagal membuka soal.';
$string['cannotunzip'] = 'Tidak dapat membuka berkas zip.';
$string['cannotwriteto'] = 'Tidak dapat menulis soal terekspor ke {$a}';
$string['categories'] = 'Kategori';
$string['category'] = 'Kategori';
$string['categorycurrent'] = 'Kategori saat ini';
$string['categorycurrentuse'] = 'Gunakan kategori ini';
$string['categorydoesnotexist'] = 'Kategori ini tidak ada';
$string['categoryinfo'] = 'Info kategori';
$string['categorymove'] = 'Kategori \'{$a->name}\' berisi {$a->count} soal (beberapa soal tersembunyi atau dalam soal acak masih digunakan dalam kuis). Silakan memilih kategori yang lain untuk tujuannya.';
$string['categorymoveto'] = 'Simpan dalam kategori';
$string['categorynamecantbeblank'] = 'Nama kategori tidak dapat dikosongkan.';
$string['categorynamewithcount'] = '{$a->name} ({$a->questioncount})';
$string['categorynamewithidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['categorynamewithidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->questioncount})';
$string['changeoptions'] = 'Ubah opsi';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">Kategori "{$a->name}"</a> dalam kursus "{$a->coursename}" akan diubah status berbaginya dari {$a- >changfrom} menjadi {$a->changeto}.';
$string['check'] = 'Periksa';
$string['chooseqtypetoadd'] = 'Pilih jenis soal yang akan ditambahkan';
$string['clearwrongparts'] = 'Bersihkan jawaban salah';
$string['clickflag'] = 'Tandai soal';
$string['clicktoflag'] = 'Tandai soal untuk referensi mendatang';
$string['clicktounflag'] = 'Hilangkan penanda';
$string['clickunflag'] = 'Hilangkan penanda';
$string['closepreview'] = 'Tutup pratinjau';
$string['combinedfeedback'] = 'Kumpulan umpan balik';
$string['comment'] = 'Komentar';
$string['commented'] = 'Dikomentari: {$a}';
$string['commentormark'] = 'Beri komentar atau edit nilai';
$string['comments'] = 'Komentar';
$string['commentx'] = 'Komentar: {$a}';
$string['complete'] = 'Selesai';
$string['contexterror'] = 'Anda seharusnya tidak sampai di sini jika Anda tidak memindahkan kategori ke konteks lain.';
$string['copy'] = 'Salin dari {$a} dan ubah tautan.';
$string['correct'] = 'Benar';
$string['correctfeedback'] = 'Untuk setiap jawaban yang benar';
$string['correctfeedbackdefault'] = 'Jawaban Anda benar.';
$string['created'] = 'Dibuat';
$string['createdby'] = 'Dibuat oleh';
$string['createdmodifiedheader'] = 'Dibuat / terakhir disimpan';
$string['createnewquestion'] = 'Buat soal baru ...';
$string['cwrqpfs'] = 'Soal yang dipilih secara acak dari subkategori';
$string['cwrqpfsinfo'] = '<p> Selama peningkatan versi ke Moodle 1.9 kami akan memisahkan kategori soal ke dalam konteks yang berbeda. Beberapa kategori soal dan soal di situs Anda harus diubah status berbaginya. Ini diperlukan dalam kasus yang jarang terjadi di mana satu atau lebih soal \'acak\' dalam kuis diatur untuk memilih dari campuran kategori bersama dan tidak dibagikan (seperti yang terjadi di situs ini). Ini terjadi ketika soal \'acak\' diatur untuk memilih dari subkategori dan satu atau lebih subkategori memiliki status berbagi yang berbeda dengan kategori induk tempat soal acak dibuat. </p> <p> Kategori soal berikut, dari mana soal \'acak\' dalam kategori induk memilih soal, status berbaginya akan diubah ke status berbagi yang sama dengan kategori dengan soal \'acak\' pada saat meningkatkan versi ke Moodle 1.9. Kategori berikut akan mengalami perubahan status berbaginya. Soal yang terpengaruh akan terus berfungsi di semua kuis yang ada sampai Anda menghapusnya dari kuis ini. </p>';
$string['cwrqpfsnoprob'] = 'Tidak ada kategori soal pada situs Anda yang terpengaruh dengan permasalahan \'Soal acak yang mengambil soal dari subkategori\'.';
$string['decimalplacesingrades'] = 'Digit desimal';
$string['defaultfor'] = 'Setelan bawaan untuk {$a}';
$string['defaultinfofor'] = 'Kategori bawaan untuk soal yang dibagikan pada konteks \'{$a}\'.';
$string['defaultmark'] = 'Poin bawaan';
$string['defaultmarkmustbepositive'] = 'Poin bawaan harus positif';
$string['deletecoursecategorywithquestions'] = 'Ada soal pada bank soal berhubungan dengan kategori kursus ini. Apabila Anda melanjutkan, maka akan terhapus. Anda mungkin ingin memindahkannya dulu dengan menggunakan antarmuka bank soal.';
$string['deletequestioncheck'] = 'Apakah anda benar-benar yakin untuk menghapus \'{$a}\'?';
$string['deletequestionscheck'] = 'Apakah anda benar-benar yakin untuk menghapus soal berikut?';
$string['deletingbehaviour'] = 'Menghapus perilaku soal \'{$a}';
$string['deletingqtype'] = 'Menghapus tipe soal \'{$a}\'';
$string['didnotmatchanyanswer'] = '[Jawaban salah]';
$string['disabled'] = 'Dinonaktifkan';
$string['displayoptions'] = 'Opsi tampilan';
$string['disterror'] = 'Distribusi {$a} menyebabkan masalah';
$string['donothing'] = 'Jangan salin atau pindahkan berkas atau mengubah tautan.';
$string['editcategories'] = 'Edit kategori';
$string['editcategories_help'] = 'Daripada menyimpan semuanya dalam satu daftar besar, soal dapat disusun kedalam kategori dan subkategori.

Setiap kategori memiliki konteks yang menentukan dimana soal pada kategori dapat digunakan:

* Konteks aktifitas - Soal hanya tersedia dalam modul aktifitas
* Konteks kursus - Soal tersedia pada seluruh modul aktifitas dalam kursus
* Konteks kategori kursus - Soal tersedia di seluruh modul aktivitas dan kursus pada kategori kursus
* Konteks sistem - Soal tersedia di seluruh kursus dan aktivitas pada situs

Kategori juga dapat digunakan pada soal acak, karena soal-soalnya akan diambil dari kategori tertentu.';
$string['editcategories_link'] = 'soal/kategori';
$string['editcategory'] = 'Edit kategori';
$string['editingcategory'] = 'Mengedit kategori';
$string['editingquestion'] = 'Mengedit soal';
$string['editquestion'] = 'Edit soal';
$string['editquestions'] = 'Edit soal';
$string['editthiscategory'] = 'Edit kategori ini';
$string['emptyxml'] = 'Galat tidak dikenali - imsmanifest.xml kosong';
$string['enabled'] = 'Diaktifkan';
$string['erroraccessingcontext'] = 'Tidak dapat mengakses konteks';
$string['errordeletingquestionsfromcategory'] = 'Galat ketika menghapus soal dari kategori {$a}.';
$string['errorduringpost'] = 'Terjadi galat ketika pasca-proses!';
$string['errorduringpre'] = 'Terjadi galat ketika pra-proses!';
$string['errorduringproc'] = 'Terjadi galat ketika proses!';
$string['errorduringregrade'] = 'Tidak dapat menilai ulang soal {$a->qid}, pergi ke status {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Galat: tidak dapat menyalin berkas {$a}.';
$string['errorfilecannotbemoved'] = 'Galat: tidak dapat memindahkan berkas {$a}.';
$string['errorfileschanged'] = 'Galat: berkas yang ditautkan dari soal telah dirubah sejak form ditampilkan';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'Soal ({$a}) muncul lebih dari sekali dengan bobot berbeda di posisi yang berbeda pada tes. Hal ini tidak didukung oleh laporan statistik saat ini dan kemungkinan akan membuat statistik untuk soal ini tidak dapat diandalkan.';
$string['errormanualgradeoutofrange'] = 'Nilai {$a->grade} tidak diantara 0 and {$a->maxgrade} untuk soal {$a->name}. Nilai dan komentar tidak disimpan.';
$string['errormovingquestions'] = 'Galat ketika memindahkan soal dengan ID {$a}.';
$string['errorpostprocess'] = 'Terjadi galat ketika pasca-proses!';
$string['errorpreprocess'] = 'Terjadi galat ketika pra-proses!';
$string['errorprocess'] = 'Terjadi galat ketika proses!';
$string['errorprocessingresponses'] = 'Terjadi galat ketika memproses respon anda ({$a}). Pilih lanjutkan untuk kembali ke halaman tadi anda berada dan coba lagi.';
$string['errorsavingcomment'] = 'Galat menyimpan komentar untuk soal {$a->name} pada basis data.';
$string['errorsavingflags'] = 'Galat menyimpan status penanda';
$string['errorupdatingattempt'] = 'Galat ketika mengupayakan pembaruan {$a->id} pada basis data.';
$string['eventquestioncategorycreated'] = 'Membuat kategori soal';
$string['eventquestioncategorydeleted'] = 'Menghapus kategori soal';
$string['eventquestioncategorymoved'] = 'Memindahkan kategori soal';
$string['eventquestioncategoryupdated'] = 'Memperbarui kategori soal';
$string['eventquestioncategoryviewed'] = 'Kategori Soal yang Dilihat';
$string['eventquestioncreated'] = 'Membuat soal';
$string['eventquestiondeleted'] = 'Menghapus soal';
$string['eventquestionmoved'] = 'Memindahkan soal';
$string['eventquestionsexported'] = 'Mengekspor soal';
$string['eventquestionsimported'] = 'Mengimpor soal';
$string['eventquestionupdated'] = 'Memperbarui soal';
$string['eventquestionviewed'] = 'Melihat soal';
$string['export'] = 'Ekspor';
$string['exportasxml'] = 'Ekspor ke format Moodle XML';
$string['exportcategory'] = 'Ekspor kategori';
$string['exportcategory_help'] = 'Setelan ini menentukan kategori dari mana pertanyaan yang diekspor akan diambil. Format impor tertentu, seperti GIFT dan Moodle XML, mengizinkan kategori dan data konteks untuk disertakan dalam berkas ekspor, memungkinkannya (secara opsional) dibuat ulang saat diimpor. Jika diperlukan, kotak centang yang sesuai harus dicentang.';
$string['exporterror'] = 'Terjadi galat ketika melakukan ekspor!';
$string['exportfilename'] = 'soal';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = 'Unduh soal dalam format XML Moodle';
$string['exportquestions'] = 'Ekspor soal ke berkas';
$string['exportquestions_help'] = 'Fungsi ini memungkinkan ekspor kategori lengkap (dan subkategori manapun) dari soal ke berkas. Perhatikan bahwa tergantung pada format berkas yang dipilih, beberapa data soal dan tipe soal tertentu mungkin tidak terekspor.';
$string['exportquestions_link'] = 'soal/ekspor';
$string['feedback'] = 'Umpan balik';
$string['filecantmovefrom'] = 'Berkas soal tidak dapat dipindahkan karena anda tidak memiliki izin untuk memindahkan berkas dari tempat yang sedang anda coba pindahkan.';
$string['filecantmoveto'] = 'Berkas soal tidak dapat dipindahkan atau disalin karena anda tidak memiliki izin untuk menambahkan berkas ke tempat yang sedang anda coba pindahkan.';
$string['fileformat'] = 'Format berkas';
$string['filesareacourse'] = 'area berkas kursus';
$string['filesareasite'] = 'area berkas situs';
$string['filestomove'] = 'Pindahkan / salin berkas ke {$a}?';
$string['fillincorrect'] = 'Isi jawaban benar';
$string['filterbytags'] = 'Filter menurut label...';
$string['firsttry'] = 'Pencobaan pertama';
$string['flagged'] = 'Ditandai';
$string['flagthisquestion'] = 'Tandai soal ini';
$string['formquestionnotinids'] = 'Formulir berisi soal yang tidak ada di soal';
$string['fractionsnomax'] = 'Salah satu jawaban harus memiliki nilai 100% sehingga dimungkinkan untuk meraih nilai sempurna untuk soal ini.';
$string['generalfeedback'] = 'Umpan balik umum';
$string['generalfeedback_help'] = 'Umpan balik umum ditampilkan pada siswa setelah mereka menyelesaikan soal. Tidak seperti umpan balik spesifik yang bergantung pada tipe soal dan respon apa yang diberikan peserta ajar, umpan balik umum yang sama akan ditunjukkan ke semua siswa. Anda dapat menggunakan umpan balik umum untuk memberikan siswa jawaban atau tautan untuk informasi lebih lanjut yang dapat mereka gunakan apabila mereka tidak mengerti mengenai soal tersebut.';
$string['getcategoryfromfile'] = 'Dapatkan kategori dari berkas';
$string['getcontextfromfile'] = 'Dapatkan konteks dari berkas';
$string['hintn'] = 'Petunjuk {no}';
$string['hintnoptions'] = 'Opsi petunjuk {no}';
$string['hinttext'] = 'Teks petunjuk';
$string['howquestionsbehave'] = 'Bagaimana soal bersikap';
$string['howquestionsbehave_help'] = 'Siswa dapat berinteraksi dengan soal dalam kuis dengan berbagai cara berbeda. Misalnya, Anda mungkin ingin siswa memasukkan jawaban untuk setiap soal dan kemudian mengirimkan seluruh kuis, sebelum ada yang dinilai atau mereka mendapatkan umpan balik. Itu akan menjadi mode \'Umpan balik yang ditangguhkan\'. Alternatifnya, Anda mungkin ingin siswa mengirimkan setiap pertanyaan sambil berjalan untuk mendapatkan umpan balik segera, dan jika mereka tidak segera menjawabnya, coba lagi untuk mendapatkan nilai yang lebih sedikit. Itu akan menjadi mode \'Interaktif dengan beberapa upaya\'. Itu mungkin dua mode perilaku yang paling umum digunakan.';
$string['howquestionsbehave_link'] = 'soal/sikap';
$string['idnumber'] = 'Nomor ID';
$string['idnumber_help'] = 'Jika digunakan, nomor ID harus unik dalam setiap kategori soal. Ini memberikan cara lain untuk mengidentifikasi soal yang terkadang berguna, tetapi biasanya dapat dibiarkan kosong.';
$string['ignorebroken'] = 'Abaikan tautan rusak';
$string['import'] = 'Impor';
$string['importcategory'] = 'Impor kategori';
$string['importcategory_help'] = 'Setelan ini menentukan kategori ke mana pertanyaan yang diimpor akan masuk. Format impor tertentu, seperti GIFT dan Moodle XML, dapat menyertakan data kategori dan konteks dalam berkas impor. Untuk menggunakan data ini, daripada kategori yang dipilih, kotak centang yang sesuai harus dicentang. Jika kategori yang ditentukan dalam berkas impor tidak ada, kategori tersebut akan dibuat.';
$string['importerror'] = 'Terjadi galat ketika proses impor';
$string['importerrorquestion'] = 'Galat ketika mengimpor soal';
$string['importfromcoursefiles'] = '... atau pilih berkas kursus untuk diimpor.';
$string['importfromupload'] = 'Pilih berkas untuk diunggah ...';
$string['importingquestions'] = 'Mengimpor {$a} soal dari berkas';
$string['importparseerror'] = 'Galat ditemukan menguraikan kalimat berkas impor. Tidak ada soal diimpor. Untuk mengimpor soal, coba lagi dengan mengatur \'Berhenti ketika galat\' ke \'Tidak';
$string['importquestions'] = 'Impor soal dari berkas';
$string['importquestions_help'] = 'Fungsi ini memungkinkan soal dari bermacam format diimpor melalui berkas teks. Perhatikan bahwa berkas harus menggunakan pengodean UTF-8';
$string['importquestions_link'] = 'soal/impor';
$string['importwrongfiletype'] = 'Tipe berkas yang anda pilih ({$a->actualtype}) tidak cocok dengan tipe yang diperlukan oleh format impor ({$a->expectedtype}).';
$string['impossiblechar'] = 'Karakter yang tidak dimungkinkan {$a} terdeteksi pada karakter tanda kurung';
$string['includesubcategories'] = 'Tampilkan juga soal dari subkategori';
$string['incorrect'] = 'Salah';
$string['incorrectfeedback'] = 'Untuk setiap jawaban salah';
$string['incorrectfeedbackdefault'] = 'Jawaban Anda salah';
$string['information'] = 'Informasi';
$string['invalidanswer'] = 'Jawaban tidak lengkap';
$string['invalidarg'] = 'Tidak ada argumen sah yang disuplai atau setelan server tidak benar';
$string['invalidcategoryidforparent'] = 'ID kategori tidak valid untuk induk!';
$string['invalidcategoryidtomove'] = 'Id kategori tidak valid untuk dipindahkan!';
$string['invalidconfirm'] = 'String konfirmasi salah';
$string['invalidcontextinhasanyquestions'] = 'Konteks yang tidak valid diteruskan ke question_context_has_any_questions.';
$string['invalidgrade'] = 'Nilai ({$a}) tidak cocok dengan opsi nilai - soal dilewati.';
$string['invalidpenalty'] = 'Penalti tidak valid';
$string['invalidwizardpage'] = 'Wisaya halaman salah atau tidak ditentukan!';
$string['lastmodifiedby'] = 'Terakhir diubah oleh';
$string['lasttry'] = 'Pencobaan terakhir';
$string['linkedfiledoesntexist'] = 'Berkas tertaut {$a} tidak ada';
$string['makechildof'] = 'Buat turunan dari \'{$a}';
$string['makecopy'] = 'Buat salinan';
$string['maketoplevelitem'] = 'Pindahkan ke level atas';
$string['manualgradeinvalidformat'] = 'Ini bukan nomor yang valid.';
$string['manualgradeoutofrange'] = 'Nilai ini di luar rentang yang sah.';
$string['manuallygraded'] = 'Dinilai secara manual {$a->mark} dengan komentar: {$a->comment}';
$string['mark'] = 'Poin';
$string['markedoutof'] = 'Poin maks';
$string['markedoutofmax'] = 'Poin maks {$a}';
$string['markoutofmax'] = 'Poin {$a->mark} dari {$a->max}';
$string['marks'] = 'Poin';
$string['matchgrades'] = 'Cocokkan nilai';
$string['matchgrades_help'] = 'Nilai yang diimpor harus cocok dengan salah satu daftar tetap nilai yang valid - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5 , 0 (juga nilai negatif). Jika tidak, ada dua opsi: * Kesalahan jika nilai tidak tercantum - Jika soal berisi nilai yang tidak ditemukan dalam daftar, kesalahan akan ditampilkan dan soal tersebut tidak akan diimpor * Nilai terdekat jika tidak tercantum - Jika nilai ditemukan bahwa tidak cocok dengan nilai dalam daftar, nilainya diubah ke nilai pencocokan terdekat dalam daftar';
$string['matchgradeserror'] = 'Galat apabila nilai tidak terdaftar';
$string['matchgradesnearest'] = 'Nilai terdekat apabila tidak terdaftar';
$string['missingcourseorcmid'] = 'Perlu memberikan courseid atau cmid ke print_question.';
$string['missingcourseorcmidtolink'] = 'Perlu memberikan courseid atau cmid ke get_question_edit_link.';
$string['missingimportantcode'] = 'Tipe soal ini tidak memiliki kode penting: {$a}.';
$string['missingoption'] = 'Soal cloze {$a} tidak memiliki opsi';
$string['modified'] = 'Terakhir disimpan';
$string['move'] = 'Pindah dari {$a} dan ubah tautan.';
$string['movecategory'] = 'Pindahkan kategori';
$string['movedquestionsandcategories'] = 'Soal dan kategori soal dipindahkan dari {$a->oldplace} ke {$a->newplace}.';
$string['movelinksonly'] = 'Ubah saja ke mana tautan mengarah, jangan pindahkan atau salin file.';
$string['moveq'] = 'Pindahkan soal';
$string['moveqtoanothercontext'] = 'Pindahkan soal ke konteks lain';
$string['moveto'] = 'Pindah ke';
$string['movingcategory'] = 'Memindahkan kategori';
$string['movingcategoryandfiles'] = 'Anda yakin ingin memindahkan kategori {$a->name} dan semua kategori turunan ke konteks untuk "{$a->contextto}"?<br /> Kami telah mendeteksi berkas {$a->urlcount} yang ditautkan dari soal di {$a->fromareaname}, apakah Anda ingin menyalin atau memindahkan ini ke {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Yakin ingin memindahkan kategori "{$a->name}" dan semua kategori turunan ke konteks untuk "{$a->contextto}"?';
$string['movingquestions'] = 'Memindahkan setiap soal dan berkas';
$string['movingquestionsandfiles'] = 'Anda yakin ingin memindahkan soal {$a->questions} ke konteks untuk <strong>"{$a->tocontext}"</strong>?<br /> Kami telah mendeteksi <strong>{$a->urlcount} berkas</strong> yang ditautkan dari soal ini di {$a->fromareaname}, apakah Anda ingin menyalin atau memindahkannya ke {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Anda yakin ingin memindahkan soal {$a->questions} ke konteks untuk <strong>"{$a->tocontext}"</strong>?<br /> Tidak ada <strong>tidak ada berkas< /strong> ditautkan dari soal ini di {$a->fromareaname}.';
$string['needtochoosecat'] = 'Anda harus memilih kategori tujuan untuk memindahkan soal ini atau tekan \'batalkan\'.';
$string['nocate'] = 'Tidak ada kategori semacam itu {$a}!';
$string['nopermissionadd'] = 'Anda tidak diizinkan menambah soal.';
$string['nopermissionmove'] = 'Anda tidak memiliki izin untuk memindahkan soal dari sini. Anda harus menyimpan soal pada kategori ini atau menyimpannya sebagai soal baru.';
$string['noprobs'] = 'Tidak ada masalah ditemukan pada basis data soal Anda.';
$string['noquestionbanks'] = 'Tidak ditemukan pengaya bank soal.';
$string['noquestions'] = 'Tidak ditemukan soal yang dapat diekspor. Pastikan Anda telah memilih kategori yang akan diekspor yang berisi soal.';
$string['noquestionsinfile'] = 'Tidak ada soal pada berkas impor';
$string['noresponse'] = '[Tidak menjawab]';
$string['notagfiltersapplied'] = 'Tidak ada filter label yang diterapkan';
$string['notanswered'] = 'Tidak dijawab';
$string['notchanged'] = 'Tidak berubah sejak upaya terakhir';
$string['notenoughanswers'] = 'Tipe soal ini membutuhkan setidaknya {$a} jawaban';
$string['notenoughdatatoeditaquestion'] = 'Tidak ada id soal, id kategori dan tipe soal yang dispesifikasikan.';
$string['notenoughdatatomovequestions'] = 'Anda harus menyediakan ID soal untuk soal yang mau anda pindahkan.';
$string['notflagged'] = 'Tidak ditandai';
$string['notgraded'] = 'Perlu Dinilai';
$string['notshown'] = 'Tidak ditampilkan';
$string['notyetanswered'] = 'Belum dijawab';
$string['notyourpreview'] = 'Pratinjau ini bukan milik Anda';
$string['novirtualquestiontype'] = 'Tidak ada tipe soal virtual untuk tipe soal {$a}';
$string['numqas'] = 'Jumlah upaya soal';
$string['numquestions'] = 'No. soal';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} tersembunyi +{$a->numdraft} draf)';
$string['options'] = 'Opsi';
$string['page-question-category'] = 'Halaman kategori soal';
$string['page-question-edit'] = 'Halaman penyunting soal';
$string['page-question-export'] = 'Halaman ekspor soal';
$string['page-question-import'] = 'Halaman impor soal';
$string['page-question-x'] = 'Setiap halaman soal';
$string['parent'] = 'Induk';
$string['parentcategory'] = 'Kategori induk';
$string['parentcategory_help'] = 'Kategori induk adalah tempat dimana kategori baru akan ditempatkan. "Atas" berarti kategori ini tidak berada di dalam kategori lainnya. Konteks kategori ditunjukkan dalam cetak tebal. Harus ada setidaknya satu kategori dalam setiap konteks.';
$string['parentcategory_link'] = 'soal/kategori';
$string['parenthesisinproperclose'] = 'Tanda kurung sebelum ** tidak ditutup dengan benar pada {$a}**';
$string['parenthesisinproperstart'] = 'Tanda kurung sebelum ** tidak dijalankan dengan benar pada {$a}**';
$string['parsingquestions'] = 'Menguraikan kalimat soal dari berkas impor.';
$string['partiallycorrect'] = 'Separuh benar';
$string['partiallycorrectfeedback'] = 'Untuk setiap jawaban separuh benar';
$string['partiallycorrectfeedbackdefault'] = 'Jawaban anda separuh benar.';
$string['penaltyfactor'] = 'Faktor penalti';
$string['penaltyfactor_help'] = 'Setelan ini menentukan fraksi skor yang diraih mana yang diambil untuk setiap jawaban salah. Hanya dapat dijalankan apabila kuis berada di mode adaptif. Faktor penalti harus bilangan angka antara 0 dan 1. Faktor penalti 1 berarti peserta ajar harus menjawab dengan benar pada jawaban pertamanya untuk mendapatkan kredit pada soal tersebut. Faktor penalti 0 berarti peserta ajar dapat mencoba sesering mungkin dan tetap dapat meraih skor penuh.';
$string['penaltyforeachincorrecttry'] = 'Penalti untuk setiap pencobaan yang salah';
$string['penaltyforeachincorrecttry_help'] = 'Ketika soal dijalankan menggunakan perilaku \'Interaktif dengan beberapa upaya\' atau \'Mode adaptif\', sehingga siswa dapat memiliki kesempatan untuk menjawab soal dengan benar, maka opsi ini mengontrol seberapa besar mereka terkena penaliti untuk setiap upaya yang salah. Penalti adalah proporsi dari total nilai soal, jadi jika soal bernilai tiga nilai, dan penaltinya adalah 0,3333333, maka siswa akan mendapat nilai 3 jika mereka menjawab soal dengan benar pada kali pertama, 2 jika mereka menjawab dengan benar pada upaya  kedua, dan 1 dari mereka melakukannya dengan benar pada upaya ketiga. Untuk beberapa soal yang terdiri dari beberapa bagian, logika penilaian ini diterapkan secara terpisah untuk setiap bagian soal. Rinciannya bergantung pada jenis soal dan dapat menjadi rumit, tetapi prinsipnya adalah memberi penghargaan kepada siswa atas pengetahuan yang telah mereka tunjukkan seadil mungkin.';
$string['permissionedit'] = 'Sunting soal ini';
$string['permissionmove'] = 'Pindahkan soal ini';
$string['permissionsaveasnew'] = 'Simpan sebagai soal baru';
$string['permissionto'] = 'Anda memiliki izin untuk :';
$string['previewquestion'] = 'Pratinjau soal: {$a}';
$string['privacy:metadata:database:question'] = 'Detail tentang soal tertentu.';
$string['privacy:metadata:database:question:createdby'] = 'Orang yang membuat soal.';
$string['privacy:metadata:database:question:generalfeedback'] = 'Umpan balik umum untuk soal ini.';
$string['privacy:metadata:database:question:modifiedby'] = 'Pengguna yang telah memperbarui soal';
$string['privacy:metadata:database:question:name'] = 'Nama soal';
$string['privacy:metadata:database:question:questiontext'] = 'Teks soal.';
$string['privacy:metadata:database:question:timecreated'] = 'Tanggal dan waktu ketika soal ini dibuat.';
$string['privacy:metadata:database:question:timemodified'] = 'Tanggal dan waktu ketika soal ini diperbarui.';
$string['privacy:metadata:database:question_attempt_step_data'] = 'Langkah-langkah upaya soal mungkin memiliki data tambahan khusus untuk langkah itu. Data disimpan dalam tabel step_data.';
$string['privacy:metadata:database:question_attempt_step_data:name'] = 'Nama item data.';
$string['privacy:metadata:database:question_attempt_step_data:value'] = 'Nilai item data.';
$string['privacy:metadata:database:question_attempt_steps'] = 'Setiap upaya soal memiliki sejumlah langkah untuk menunjukkan fase yang berbeda dari awal hingga penyelesaian hingga penandaan. Tabel ini menyimpan informasi untuk setiap langkah ini.';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = 'Nilai yang diberikan untuk upaya soal ini diskalakan ke nilai di luar 1.';
$string['privacy:metadata:database:question_attempt_steps:state'] = 'Keadaan soal ini mencoba langkah di akhir transisi langkah.';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = 'Tanggal dan waktu transisi langkah ini dimulai.';
$string['privacy:metadata:database:question_attempt_steps:userid'] = 'Pengguna yang melakukan transisi langkah.';
$string['privacy:metadata:database:question_attempts'] = 'Informasi tentang upaya pada soal tertentu.';
$string['privacy:metadata:database:question_attempts:flagged'] = 'Indikasi bahwa pengguna telah menandai soal ini dalam upaya.';
$string['privacy:metadata:database:question_attempts:responsesummary'] = 'Ringkasan jawaban soal';
$string['privacy:metadata:database:question_attempts:timemodified'] = 'Waktu saat upaya soal diperbarui.';
$string['privacy:metadata:database:question_bank_entries'] = 'Detail tentang entri bank soal tertentu.';
$string['privacy:metadata:database:question_bank_entries:ownerid'] = 'Pemilik entri bank soal.';
$string['privacy:metadata:link:qbehaviour'] = 'Subsistem soal menggunakan tipe pengaya perilaku soal.';
$string['privacy:metadata:link:qformat'] = 'Subsistem soal menggunakan jenis pengaya format soal untuk tujuan mengimpor dan mengekspor soal dalam format yang berbeda.';
$string['privacy:metadata:link:qtype'] = 'Subsistem soal berinteraksi dengan jenis pengaya jenis soal yang berisi berbagai jenis soal.';
$string['published'] = 'dibagikan';
$string['qbanknotfound'] = 'Pengaya bank soal \'{$a}\' tidak ada atau tidak dikenali.';
$string['qtypeveryshort'] = 'T';
$string['questionaffected'] = 'Soal "{$a->name}" ({$a->qtype}) berada pada kategori soal ini namun digunakan juga pada kuis "{$a->quizname}" pada kursus lain "{$a->coursename}".';
$string['questionbank'] = 'Bank soal';
$string['questionbehaviouradminsetting'] = 'Setelan perilaku soal';
$string['questionbehavioursdisabled'] = 'Perilaku soal untuk dinonaktifkan';
$string['questionbehavioursdisabledexplained'] = 'Masukkan daftar perilaku yang dipisahkan koma yang tidak ingin Anda tampilkan di menu tarik-turun.';
$string['questionbehavioursorder'] = 'Urutan perilaku soal';
$string['questionbehavioursorderexplained'] = 'Masukkan daftar perilaku yang dipisahkan koma dalam urutan yang Anda inginkan untuk muncul di menu tarik-turun.';
$string['questioncategories'] = 'Kategori soal';
$string['questioncategory'] = 'Kategori soal';
$string['questioncatsfor'] = 'Kategori soal untuk \'{$a}';
$string['questiondoesnotexist'] = 'Soal ini tidak ada';
$string['questionformtagheader'] = 'label {$a}';
$string['questionidmismatch'] = 'ID Soal tidak cocok';
$string['questionname'] = 'Nama soal';
$string['questionnamecopy'] = '{$a} (salinan)';
$string['questionno'] = 'Soal {$a}';
$string['questionpreviewdefaults'] = 'Setelan bawaan pratinjau soal';
$string['questionpreviewdefaults_desc'] = 'Setelan bawaan ini digunakan ketika pengguna pertama kali melakukan pratinjau soal pada bank soal. Ketika pratinjau soal dilakukan, preferensi pribadi mereka akan disimpan sebagai preferensi pengguna.';
$string['questions'] = 'Soal-soal';
$string['questionsaveerror'] = 'Terjadi galat ketika menyimpan soal - ({$a})';
$string['questionsinuse'] = '(* Soal yang ditandai dengan tanda bintang berarti sudah dipakai di sejumlah kuis. Soal-soal ini tidak akan dihapus dari kuis-kuis ini, namun hanya dari daftar kategori.)';
$string['questionsmovedto'] = 'Soal yang masih digunakan dipindahkan ke "{$a}" pada kategori kursus induk.';
$string['questionsrescuedfrom'] = 'Soal disimpan dari konteks {$a}.';
$string['questionsrescuedfrominfo'] = 'Soal-soal ini (yang beberapa kemungkinan tersembunyi) disimpan ketika konteks {$a} dihapus karena masih dipakai di sejumlah kuis atau aktifitas lainnya.';
$string['questiontags'] = 'Label soal';
$string['questiontext'] = 'Teks soal';
$string['questiontype'] = 'Tipe soal';
$string['questionuse'] = 'Gunakan soal pada aktivitas ini';
$string['questionvariant'] = 'Varian soal';
$string['questionx'] = 'Soal {$a}';
$string['requiresgrading'] = 'Membutuhkan penilaian';
$string['responsehistory'] = 'Riwayat jawaban';
$string['restart'] = 'Mulai lagi';
$string['restartwiththeseoptions'] = 'Mulai lagi dengan opsi ini';
$string['restoremultipletopcats'] = 'Berkas cadangan berisi lebih dari satu level puncak kategori soal untuk konteks {$a}';
$string['reviewresponse'] = 'Ulas jawaban';
$string['rightanswer'] = 'Jawaban benar';
$string['rightanswer_help'] = 'Ringkasan yang dibuat secara otomatis untuk jawaban benar. Ini dapat dibatasi, jadi Anda dapat mempertimbangkan untuk menjelaskan jawaban yang benar pada umpan balik umum untuk soal tersebut, dan menonaktifkan opsi ini.';
$string['save'] = 'Simpan';
$string['savechangesandcontinueediting'] = 'Simpan perubahan dan lanjutkan penyuntingan';
$string['saved'] = 'Disimpan: {$a}';
$string['saveflags'] = 'Simpan status penanda';
$string['selectacategory'] = 'Pilih kategori:';
$string['selectaqtypefordescription'] = 'Pilih tipe soal untuk melihat deskripsinya.';
$string['selectcategoryabove'] = 'Pilih kategori di atas';
$string['selectquestionsforbulk'] = 'Pilih soal untuk aksi massal

Check bulk!';
$string['settingsformultipletries'] = 'Banyak pencobaan';
$string['shareincontext'] = 'Bagikan di konteks untuk {$a}';
$string['showhidden'] = 'Tampilkan juga soal lama';
$string['showmarkandmax'] = 'Tunjukkan poin dan maks';
$string['showmaxmarkonly'] = 'Tunjukkan poin maks saja';
$string['shown'] = 'Ditampilkan';
$string['shownumpartscorrect'] = 'Tampilkan jumlah jawaban benar';
$string['shownumpartscorrectwhenfinished'] = 'Tampilkan jawaban benar setelah mengerjakan';
$string['showquestiontext'] = 'Tampilkan teks soal dalam daftar soal';
$string['specificfeedback'] = 'Umpan balik spesifik';
$string['specificfeedback_help'] = 'Umpan balik bergantung pada jawaban yang diberikan siswa';
$string['started'] = 'Dimulai';
$string['state'] = 'Status';
$string['step'] = 'Langkah';
$string['steps'] = 'Langkah';
$string['stoponerror'] = 'Hentikan ketika galat';
$string['stoponerror_help'] = 'Setelan ini menentukan apakah proses impor berhenti ketika terjadi galat, menyebabkan tidak ada soal yang diimpor, atau apakah soal yang berisi galat dan soal yang benar diimpor.';
$string['submissionoutofsequence'] = 'Akses tidak berurutan. Mohon untuk tidak mengklik tombol kembali saat mengerjakan soal kuis.';
$string['submissionoutofsequencefriendlymessage'] = 'Anda telah memasukkan data di luar urutan normal. Hal ini dapat terjadi jika Anda menggunakan tombol Kembali atau Teruskan browser Anda; tolong jangan gunakan ini selama tes. Itu juga bisa terjadi jika Anda mengklik sesuatu saat halaman sedang dimuat. Klik <strong>Lanjutkan</strong> untuk melanjutkan.';
$string['submit'] = 'KIRIM';
$string['submitandfinish'] = 'Kirim dan Selesai';
$string['submitted'] = 'Kirim: {$a}';
$string['tagarea_question'] = 'Soal';
$string['technicalinfo'] = 'Informasi teknis';
$string['technicalinfo_help'] = 'Informasi teknis ini mungkin hanya berguna untuk pengembang yang mengerjakan jenis soal baru. Mungkin juga membantu ketika mencoba mendiagnosis masalah dengan soal.';
$string['technicalinfomaxfraction'] = 'Fraksi maksimum: {$a}';
$string['technicalinfominfraction'] = 'Fraksi minimum: {$a}';
$string['technicalinfoquestionsummary'] = 'Ringkasan soal: {$a}';
$string['technicalinforesponsesummary'] = 'Ringkasan jawaban: {$a}';
$string['technicalinforightsummary'] = 'Ringkasan jawaban benar: {$a}';
$string['technicalinfostate'] = 'Status soal: {$a}';
$string['technicalinfovariant'] = 'Jenis soal: {$a}';
$string['tofilecategory'] = 'Tulis kategori ke berkas';
$string['tofilecontext'] = 'Tulis konteks ke berkas';
$string['topfor'] = 'Puncak untuk {$a}';
$string['uninstallbehaviour'] = 'Bongkar perilaku soal ini.';
$string['uninstallqtype'] = 'Bongkar tipe soal ini.';
$string['unknown'] = 'Tidak diketahui';
$string['unknownbehaviour'] = 'Perilaku tidak diketahui: {$a}.';
$string['unknownorunhandledtype'] = 'Tipe soal tidak diketahui atau tidak ditangani: {$a}';
$string['unknownquestion'] = 'Soal tidak diketahui: {$a}.';
$string['unknownquestioncatregory'] = 'Kategori soal tidak diketahui: {$a}.';
$string['unknownquestiontype'] = 'Tipe soal tidak diketahui: {$a}.';
$string['unknowntolerance'] = 'Tipe toleransi tidak diketahui {$a}';
$string['unpublished'] = 'tidak lagi dibagikan';
$string['unusedcategorydeleted'] = 'Kategori ini telah dihapus dikarenakan penghapusan kursus. Soal-soal di dalamnya tidak digunakan kembali.';
$string['updatedisplayoptions'] = 'Perbaharui opsi tampilan';
$string['upgradeproblemcategoryloop'] = 'Masalah terdeteksi saat meningkatkan kategori soal. Ada perulangan di pohon kategori. ID kategori yang terpengaruh adalah {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Tidak dapat memperbarui kategori soal {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Masalah terdeteksi saat meningkatkan kategori soal. Kategori {$a->id} mengacu pada induk {$a->parent}, yang tidak ada. Induk berubah untuk memperbaiki masalah.';
$string['whethercorrect'] = 'Apabila benar';
$string['whethercorrect_help'] = 'Ini mencakup deskripsi tekstual \'Benar\', \'Sebagian benar\' atau \'Salah\', dan setiap sorotan berwarna yang menyampaikan informasi yang sama.';
$string['whichtries'] = 'Yang mencoba';
$string['withselected'] = 'Dengan yang terpilih';
$string['wrongprefix'] = 'Namaprefix yang diformat salah {$a}';
$string['xoutofmax'] = '{$a->mark} dari {$a->max}';
$string['yougotnright'] = 'Anda telah memilih {$a->num} dengan benar.';
$string['youmustselectaqtype'] = 'Anda harus memilih tipe soal.';
$string['yourfileshoulddownload'] = 'Berkas ekspor Anda seharusnya sudah mulai mengunduh. Jika tidak, silakan <a href="{$a}">klik  di sini</a>.';
