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
 * Strings for component 'course', language 'id', version '4.0'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Footer pemilih aktivitas';
$string['activitychooseractivefooter_desc'] = 'Pemilih aktivitas dapat mendukung plugin yang menambahkan item ke footer.';
$string['activitychoosercategory'] = 'Pemilih Aktivitas';
$string['activitychooserhidefooter'] = 'Tanpa footer';
$string['activitychooserrecommendations'] = 'Aktivitas yang Direkomendasikan';
$string['activitychoosersettings'] = 'Setelan Pemilih Aktivitas';
$string['activitychoosertabmode'] = 'Tab pemilih aktivitas';
$string['activitychoosertabmode_desc'] = 'Pemilih aktivitas (Activity Chooser) memungkinkan pengajar memilih aktivitas dan resources yang secara mudah ditambahkan pada kursus mereka. Setting ini menentukan tab mana yang akan ditampilkan. Perhatikan bahwa tab bertanda bintang hanya ditampilkan pada user jika terdapat lebih dari satu aktivitas bertanda bintang dan tab yang direkomendasikan hanya ditampilkan jika admin site telah menetapkan beberapa aktivitas yang direkomendasikan.';
$string['activitychoosertabmodeone'] = 'Bertanda bintang, Semua, Aktivitas, Bahan Ajar, Direkomendasikan';
$string['activitychoosertabmodethree'] = 'Bertanda bintang, Aktivitas, Bahan Ajar, Direkomendasikan';
$string['activitychoosertabmodetwo'] = 'Bertanda bintang, Semua, Direkomendasikan';
$string['activitydate:closed'] = 'Ditutup:';
$string['activitydate:closes'] = 'Tutup:';
$string['activitydate:opened'] = 'Dibuka:';
$string['activitydate:opens'] = 'Buka:';
$string['aria:coursecategory'] = 'Kategori Mata Kuliah';
$string['aria:courseimage'] = 'Gambar kursus';
$string['aria:coursename'] = 'Nama kursus';
$string['aria:courseshortname'] = 'Nama singkat kursus';
$string['aria:defaulttab'] = 'Aktivitas bawaan';
$string['aria:favourite'] = 'Kursus ditandai bintang';
$string['aria:favouritestab'] = 'Aktivitas yang bertanda bintang';
$string['aria:modulefavourite'] = 'Tandai {$a} aktivitas';
$string['aria:recommendedtab'] = 'Akitivitas yang direkomendasikan';
$string['browsecourseadminindex'] = 'Jelajahi administrasi kursus dengan indeks ini.';
$string['browsesettingindex'] = 'Jelajahi setelan dengan indeks ini.';
$string['completion_automatic:done'] = 'Selesai:';
$string['completion_automatic:failed'] = 'Gagal:';
$string['completion_automatic:todo'] = 'Lakukan:';
$string['completion_manual:aria:done'] = '{$a} ditandai selesai. Tekan untuk membatalkan.';
$string['completion_manual:aria:markdone'] = 'Tandai {$a} selesai';
$string['completion_manual:done'] = 'Selesai';
$string['completion_manual:markdone'] = 'Tandai selesai';
$string['completion_setby:auto:done'] = 'Selesai: {$a->condition} (Disetel oleh {$a->setby})';
$string['completion_setby:auto:todo'] = 'Lakukan: {$a->condition} (Disetel oleh {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} ditandai oleh {$a->setby} selesai. Tekan untuk batalkan.';
$string['completion_setby:manual:markdone'] = '{$a->activityname}  ditandai dengan {$a->setby} sebagai belum selesai. Tekan untuk menandai sebagai selesai.';
$string['completionrequirements'] = 'Persyaratan penyelesaian untuk {$a}';
$string['coursealreadyfinished'] = 'Kursus telah selesai';
$string['coursecontentnotification'] = 'Kirim notifikasi perubahan konten';
$string['coursecontentnotification_help'] = 'Centang kotak untuk memberi tahu peserta kursus tentang aktivitas atau sumber daya baru atau yang diubah ini. Hanya pengguna yang dapat mengakses aktivitas atau sumber yang akan menerima notifikasi.';
$string['coursecontentnotifnew'] = '{$a->coursename} konten baru';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> baru dalam kursus <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Ubah preferensi notifikasi Anda</a></p>';
$string['coursecontentnotifupdate'] = '{$a->coursename} perubahan konten';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> telah diubah dalam kursus <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Ubah preferensi notifikasi Anda </a></p>';
$string['coursenotyetfinished'] = 'Kursus belum selesai';
$string['coursenotyetstarted'] = 'Kursus belum dimulai';
$string['coursetoolong'] = 'Kursus terlalu lama';
$string['customfield_islocked'] = 'Terkunci';
$string['customfield_islocked_help'] = 'Jika ruas dikunci, hanya pengguna dengan kemampuan untuk mengubah ruas tersuai terkunci (secara bawaan pengguna dengan peran bawaan manajer saja) yang akan dapat mengubahnya dalam setelan kursus.';
$string['customfield_notvisible'] = 'Tak seorang pun';
$string['customfield_visibility'] = 'Terlihat untuk';
$string['customfield_visibility_help'] = 'Setelan ini menentukan siapa saja yang dapat melihat nama ruas tersuai dan isinya pada daftar kursus atau pada filter ruas tersuai yang tersedia pada Dasbor.';
$string['customfield_visibletoall'] = 'Setiap orang';
$string['customfield_visibletoteachers'] = 'Pengajar';
$string['customfieldsettings'] = 'Setelan ruas tersuai kursus umum';
$string['downloadcontent'] = 'Sertakan dalam unduhan konten kursus';
$string['downloadcontent_help'] = 'Haruskah aktivitas atau sumber ini disertakan dalam berkas zip dari konten kursus yang tersedia untuk diunduh? Berkas, Folder, Halaman, dan Label dapat diunduh sepenuhnya. Untuk semua aktivitas dan sumber lainnya, hanya nama dan deskripsi yang diunduh. Opsi ini mengharuskan unduhan konten kursus diaktifkan di setelan kursus.

Setelan tidak berpengaruh pada unduhan konten aplikasi seluler untuk penggunaan luring.';
$string['downloadcourseconfirmation'] = 'Anda akan mengunduh berkas zip dari konten kursus (termasuk materi yang tidak bisa diunduh dan semua berkas berukuran lebih dari {$a}).';
$string['downloadcoursecontent'] = 'Unduh konten mata kuliah';
$string['downloadcoursecontent_help'] = 'Setelan ini menentukan apakah konten kursus dapat diunduh oleh pengguna dengan kemampuan mengunduh konten kursus (setelan bawaan untuk pengguna dengan peran siswa atau pengajar).';
$string['enabledownloadcoursecontent'] = 'Aktifkan unduh konten kursus';
$string['errorendbeforestart'] = 'Tanggal akhir ({$a}) tertulis sebelum tanggal mulai kursus.';
$string['favourite'] = 'Kursus bertanda bintang';
$string['gradetopassnotset'] = 'Kursus ini belum menetapkan nilai untuk lulus. Ini dapat disetel dalam item nilai kursus (Penyiapan Buku Nilai).';
$string['informationformodule'] = 'Informasti tentang aktivitas {$a}';
$string['module'] = 'Aktivitas';
$string['noaccesssincestartinfomessage'] = 'Hai {$a->userfirstname},
<p>Sejumlah siswa di {$a->coursename} belum pernah mengakses kursus.</p>';
$string['nocourseactivity'] = 'Tidak cukup memiliki aktivitas antara awal dan akhir kursus';
$string['nocourseendtime'] = 'Kursus tidak memiliki tanggal akhir';
$string['nocoursesections'] = 'Tidak ada bagian kursus';
$string['nocoursestudents'] = 'Tidak ada siswa';
$string['norecentaccessesinfomessage'] = 'Hai {$a->userfirstname},
<p>Sejumlah siswa di {$a->coursename} belum mengakses kursus akhir-akhir ini.</p>';
$string['noteachinginfomessage'] = 'Halo {$a->userfirstname},
<p>Kursus dengan tanggal mulai minggu depan telah teridentifikasi sebagai tak memiliki pendaftaran pengajar atau siswa. </p>';
$string['participantsnavigation'] = 'Navigasi peserta tersier.';
$string['privacy:completionpath'] = 'Penyelesaian Mata Kuliah';
$string['privacy:favouritespath'] = 'Informasi kursus yang bertanda bintang';
$string['privacy:metadata:activityfavouritessummary'] = 'Sistem kursus berisi informasi tentang item mana dari pemilih aktivitas yang telah ditandai/dibintangi oleh pengguna.';
$string['privacy:metadata:completionsummary'] = 'Kursus berisi informasi penyelesaian kursus pengguna.';
$string['privacy:metadata:favouritessummary'] = 'Kursus berisi informasi yang berkaitan dengan kursus yang dibintangi oleh pengguna.';
$string['privacy:perpage'] = 'Jumlah kursus untuk ditampilkan per halaman.';
$string['recommend'] = 'Merekomendasikan';
$string['recommendcheckbox'] = 'Merekomendasikan aktivitas: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} setelah kursus dimulai';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} sebelum kursus dimulai';
$string['searchactivitiesbyname'] = 'Pencarian aktivitas berdasarkan nama';
$string['searchresults'] = 'Hasil pencarian: {$a}';
$string['studentsatriskincourse'] = 'Siswa dalam risiko di kursus {$a}';
$string['studentsatriskinfomessage'] = 'Hai {$a->userfirstname},
<p>Siswa di kursus {$a->coursename} teridentifikasi dalam risiko.</p>';
$string['submitsearch'] = 'Kirim Pencarian';
$string['target:coursecompetencies'] = 'Siswa berisiko tidak mencapai kompetensi yang ditugaskan pada satu kursus';
$string['target:coursecompetencies_help'] = 'Target ini menggambarkan apakah seorang siswa berisiko tidak mencapai kompetensi yang ditugaskan pada suatu kursus. Target ini menganggap bahwa semua kompetensi yang diberikan pada kursus tersebut harus dicapai pada akhir kursus.';
$string['target:coursecompletion'] = 'Siswa berisiko tidak memenuhi persyaratan penyelesaian kursus';
$string['target:coursecompletion_help'] = 'Target ini menjelaskan apakah siswa dianggap berisiko tidak memenuhi ketentuan penyelesaian kursus.';
$string['target:coursedropout'] = 'Siswa dalam risiko keluar';
$string['target:coursedropout_help'] = 'Sasaran ini menggambarkan apakah siswa tersebut dianggap berisiko putus sekolah.';
$string['target:coursegradetopass'] = 'Siswa berisiko tidak mencapai nilai minimum untuk lulus kursus';
$string['target:coursegradetopass_help'] = 'Target ini menjelaskan apakah siswa berisiko tidak mencapai nilai minimum untuk lulus kursus.';
$string['target:noaccesssincecoursestart'] = 'Siswa-siswa yang belum mengakses kursus sama sekali.';
$string['target:noaccesssincecoursestart_help'] = 'Target ini menggambarkan siswa yang tidak pernah mengakses kursus tempat mereka terdaftar.';
$string['target:noaccesssincecoursestartinfo'] = 'Siswa berikut terdaftar dalam kursus yang telah dimulai, tetapi mereka belum pernah mengakses kursus tersebut.';
$string['target:norecentaccesses'] = 'Siswa yang belum mengakses kursus baru-baru ini';
$string['target:norecentaccesses_help'] = 'Target ini mengidentifikasi siswa yang belum mengakses kursus tempat mereka terdaftar dalam interval analisis yang ditetapkan (secara default sebulan terakhir).';
$string['target:norecentaccessesinfo'] = 'Siswa berikut belum mengakses kursus tempat mereka terdaftar dalam interval analisis yang ditetapkan (secara default sebulan terakhir).';
$string['target:noteachingactivity'] = 'Kursus berisiko tidak dimulai';
$string['target:noteachingactivity_help'] = 'Target ini menjelaskan tentang apakah kursus yang akan dimulai minggu depan akan memiliki aktivitas mengajar.';
$string['target:noteachingactivityinfo'] = 'Kursus berikut yang akan dimulai dalam beberapa hari mendatang berisiko tidak dimulai karena tidak memiliki pengajar atau siswa yang terdaftar.';
$string['targetlabelstudentcompetenciesno'] = 'Siswa yang cenderung mencapai kompetensi yang ditugaskan pada suatu kursus';
$string['targetlabelstudentcompetenciesyes'] = 'Siswa berisiko tidak mencapai kompetensi yang ditugaskan pada suatu kursus';
$string['targetlabelstudentcompletionno'] = 'Siswa yang mungkin memenuhi persyaratan penyelesaian kursus';
$string['targetlabelstudentcompletionyes'] = 'Siswa berisiko tidak memenuhi persyaratan penyelesaian kursus';
$string['targetlabelstudentdropoutno'] = 'Tidak dalam risiko';
$string['targetlabelstudentdropoutyes'] = 'Siswa berisiko drop out';
$string['targetlabelstudentgradetopassno'] = 'Siswa yang kemungkinan akan memenuhi nilai minimum untuk lulus kursus.';
$string['targetlabelstudentgradetopassyes'] = 'Siswa berisiko tidak memenuhi nilai minimum untuk lulus kursus.';
$string['targetlabelteachingno'] = 'Kursus yang berisiko tidak dimulai';
$string['targetlabelteachingyes'] = 'Pengguna dengan kemampuan mengajar yang memiliki akses ke kursus';
