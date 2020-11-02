Hari 1 | Tugas Pendalaman OOP PHP
Pada tugas atau latihan kali ini, kita akan membuat game sederhana dengan menggunakan konsep OOP pada PHP.

Pada game ini terdapat elang dan harimau. Mereka bisa saling serang. Dimana ketika elang menyerang, maka darah dari harimau akan berkurang. Begitupun sebaliknya.

Buatlah 2 class utama (Hewan dan Fight), namun kedua kelas tersebut tidak bisa diinstansiasi.

Kemudian buatlah kelas Elang dan Harimau, dimana kelas tersebut dapat menggunakan seluruh property dan method yang ada di kelas Hewan dan Fight. Dan kelas Elang dan Harimau ini dapat diinstansiai.

Adapun property yang ada di kelas Hewan adalah nama, darah dengan nilai default 50, jumlahKaki, dan keahlian.

Sedangkan property yang ada di kelas Fight adalah attackPower, defencePower.

Ketika Elang diinstansiasi, maka jumlahKaki bernilai 2, dan keahlian bernilai “terbang tinggi”, attackPower = 10 , deffencePower = 5 ;

Ketika Harimau diintansiasi, maka jumlahKaki bernilai 4, dan keahlian bernilai “lari cepat” , attackPower = 7 , deffencePower = 8 ;

Method yang ada di dalam kelas Hewan :

atraksi(), di dalam method ini akan menampilkan string nama dan keahlian. Contoh “harimau_1 sedang lari cepat” atau “elang_3 sedang terbang tinggi”.
Method yang ada di dalam kelas Fight

serang() , di dalam method ini akan menampilkan string sebagai contoh berikut. Contoh : “harimau_1 sedang menyerang elang_3” atau “elang_3 sedang menyerang harimau_2”.
diserang(), di dalam method ini akan menampilkan string sebagai contoh berikut. Contoh : “harimau_1 sedang diserang” atau “elang_3 sedang diserang”, kemudian hewan yang diserang akan berkurang darahnya dengan rumus :
“darah sekarang – attackPower penyerang / defencePower yang diserang”

Method yang ada di dalam kelas Elang dan Harimau :

getInfoHewan(), didalam method ini semua property yang ada di dalam kelas Hewan dan Fight ditampilkan , dan jenis hewan (Elang atau Harimau).