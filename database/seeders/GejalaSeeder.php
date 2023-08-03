<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    public function run()
    {
          // Data 16 gejala penyakit kucing
        $gejala = [
          [
            'nama_penyakit' => 'Kanker',
            'gejala' => 'Munculnya air liur, Bau busuk, Pendarahan dari mulut, Kesulitan makan, Bercak kulit bersisik atau merah, Keluarnya cairan yang tidak normal dari bagian tubuh manapun, Kelesuan atau perubahan perilaku lainnya, Benjolan (yang tidak selalu ganas tetapi selalu layak untuk diperikasa oleh dokter hewan',
            'penanganan' => 'Salah satu cara paling umum yang bisa dilakukan untuk mengomati penyakit kanker pada kucing adalah memberikan berbagai alternatif pengobatan seperti komenterapi, pembedahan dan radiasi untuk kanker umum maupun kanker langkah. Jika gejala semakin parah langkah terbaik adalah melakukan konsultasi dengan dokter hewan. Agar mendapatkan pemeriksaan dan penanganan yang tepat.',
          ],
          [
              'nama_penyakit' => 'Iritasi mata ',
              'gejala' => 'Mengosok mata berlebihan, Mata berair, Mata kemerahan',
              'penanganan' => 'Penyakit mata pada kucing ini umumnya mudah ditangani dengan cara membilasmata kucing dengan larutan pencuci mata hingga dia merasa cukup nyaman. Namun, jika kondisi iritasi mata tidak membaik, segera bawa kucing ke dokter hewan untuk mendapatkan pemeriksaan dan penanganan yang tepat.',
          ],
          [
            'nama_penyakit' => 'Infeksi saluran pernapasan atas (ISPA)',
            'gejala' => 'Bersin, Peyumbatan, Batuk, Tersedak, Demam, Depresi, Pernapasan mulut terbuka',
            'penanganan' => 'Jika kucing anda terinfeksi, penyakit yang dialami kucing tersebut dapat menjadi pembawa seumur hidup dan selalu menularkan infeksi ini ke kucing lain. Pemilik kucing dapat mencegah hal ini dengan menjaga kucing mereka dengan kunjungan dokter hewan dan melakukan vaksinasi setiap tahun. Karena penyakit ini hanya menular antara kucing, lakukan isolasi pada kucing bila memungkinkan dan batasi waktunya diluar rumah.',
          ],
          [
            'nama_penyakit' => 'Diabetes',
            'gejala' => 'Konsumsi air yang berlebihan, Dehidrasi, Peningkatan buang air kecil, Infeksi saluran kemih, Perilaku lesu',
            'penanganan' => 'Mencegah diabetes pada kucing bisa dilakukan dengan melakukan diet rendah karbohidrat secara teratur. Dengan mengontrol kadar gula yang masuk kedalam tubuh kucing, akan sangat membantunya untuk membuatnya agar tidak terkena panyakit diabetes.',
          ],
          [
              'nama_penyakit' => 'Cacingan',
              'gejala' => 'Perut membesar dan bagian tubuh lainya kurus, Nafsu makan berkurang, Penurunan berat badan, Bulu terasa kasar,Bulu terlihat kusam, Bulu rontok, Diare, Adanya cacing pada kotoran kucing, Muntah, Lesu,Dehidrasi, Menyeret pantat ke tanah ',
              'penanganan' => 'Salah satu cara paling umum yang bisa dilakukan untuk mengobati kucing cacingan adalah dengan memberikan obat cacing khusus kucing. Jika gejala semakin parah dan kondisi tidak membaik, segera bawa kucing ke dokter hewan untuk mendapatkan pemeriksaan dan penanganan yang tepat.',
          ],
          [
            'nama_penyakit' => 'Ulkus kornea',
            'gejala' => 'Bagian kornea mata tampak keruh, Mata kemerahan, Mata berair, Sering menyipitkan mata',
            'penanganan' => 'Kondisi ulkus kornea ringan dapat disembuhkan dengan pengobatan yang tepat menggunakan obat tetes atau salep antibiotik yang direkomendasikan oleh dokter hewan. Sementara pada ulkus kornea yang cukup dalam, perlu penanganan melalui pembedahan. Kalau tidak ditangani dengan tepat, sakit mata kucing ini bisa menyebabkan kebutaan dan kerusakan parmanen.',
          ],
          [
            'nama_penyakit' => 'Radang telinga ',
            'gejala' => 'Kemerahan pada daun telinga, Saluran telinga tertutup sebagian, Telinga membengkak, Adanya kotoran dalam saluran telinga, Sering menggelengkan kepala, Mengosok telinga berlebihan ',
            'penanganan' => 'Radang telinga dapat diobati menggunakan obat tetes yang mengandung antibiotik selama 7-14 hari. Jika radang tidak kunjung sembuh dan semakin memburuk segera bawa kucing anda ke dokter hewan agar mendapat penanganan lebih lanjut.',
          ],
          [
              'nama_penyakit' => 'Penyakit kutu ',
              'gejala' => 'Menggaruk dan menjilat tubuh berlebihan, Bulu rontok, Gelisah, Kulit merah, Muncul benjolan, Muncul bintik-bintik kecil ditubuh ',
              'penanganan' => 'Membasmi kutu sebanyak mungkin dari kucing anda dengan menyisir dan memandikan. Setelah sebagian besar kutu hilang, anda dapat mencegah infestasi kutu lebih lanjut dengan menggunakan produk pembasmi kutu.',
          ],
          [
            'nama_penyakit' => 'Keracunan ',
            'gejala' => 'Keluar air liur dengan jumlah banyak dan terus menerus, Mual muntah dan diare, Lidah dan gusi membiru, Kesulitan bernapas, Tubuh gemetar, Demam, Sensitif akan sentuhan, Kejang-kejang',
            'penanganan' => 'Bila mencurigakan ada racun yang menempel pada bulu kucing atau cakar kucing. Usahakan agar hewan tersebut tidak menjilati badannya. Atau segerah menghubungi dokter hewan untuk meminta saran mengenai cara yang tepat untuk menangani kucing yang keracunan tersebut.',
          ],
          [
            'nama_penyakit' => 'Interaksi saluran kemih',
            'gejala' => 'Buang air kecil di sekeliling rumah, Kucing kesulitan buang air kecing pada kotaknya, Mengejan dan berusaha untuk kincing tapi tidak mengeluarkan   urine, Ada darah saat buang air kecil , Sering menjilati bagian yang sakit , Terlihat lesuh dan malas makan , Muncul mau menyengat pada urine',
            'penanganan' => 'Mengubah beberapa aspek dari kebiasaan kucing untuk membantu menjaga kesehatan kemihnya. Dan melakukan program penurunan berat badan untuk kucing serta meningkatkan kegiatan pada kucing.',
          ],
          [
              'nama_penyakit' => 'Gangguan pencernaan ',
              'gejala' => 'Regurgitasi atau muntah, Bau mulut, Diare atau sembelit, Hilangnya kesulitan makan, Penurunan berat badan dan nyeri pada perut ',
              'penanganan' => 'Berikan labu dengan bentuk mirip dengan buah pir bisa diberikan untuk mengatasi gangguan pencernaan seperti sembelit atau konstipasi pada kucing, memberikan makanan seimbang pada kucing untukk mengurangi ciri-ciri kucing stres karena sakit, dan berikan air dalam jumlah yang cukup untuk mengatasi gangguan pencernaan kucing seperti susah buang air kecil.',
          ],
          [
            'nama_penyakit' => 'Penyakit ginjal ',
            'gejala' => 'Meningkatnya frekuensi buang air kecil, Dehidrasi atau kucing selalu merasakan haus dan sering minum, Penurunan nafsu makan, Masalah pencernaan',
            'penanganan' => 'Berikan nutrisi yang tepat pada kucing untuk dapat membantu mengurangi risiko penyakit ginjal, dan berikan makanan yang diformulasikan secara khusus bagi kesehatan ginjal. ',
          ],
          [
            'nama_penyakit' => 'Penyakit jamur ',
            'gejala' => 'Kulit menebal, Timbulnya lesi yang terjadi pada daerah kulit, Kurap kulit, Bulu rontok',
            'penanganan' => 'Mengunakan obat jamur yang dikombinasikan dengan obat lain seperti salep dan krim. Apabila jamur hanya menyerang beberapa bagian pada kulit kucing maka yang perlu dilakukan ialah mencukur bulu kucing pada area yang terinfeksi atau mencukur seluruh bulu kucing yang berbulu lebat atau panjang.',
          ],
          [
              'nama_penyakit' => 'Penyakit heartworm ',
              'gejala' => 'Batuk, Napas serak atau dispnea, Asma, Muntah, Penurunan berat badan, Kurang nafsu makan',
              'penanganan' => 'Mengambil sinar-x dada untuk mencari tanda-tanda penyakit jantung atau kerusahkan paru-paru dan melakukan tes darah untuk mencari masalah hati atau ginjal yang dapat menghambat kemampuan kucing untuk membersihkan infeksi dari tubuh.  ',
          ],
          [
            'nama_penyakit' => 'Penyakit diare ',
            'gejala' => 'Infeksi bakteri pada usus, Infeksi virus, Keracunan makanan, Infeksi jamur atau parasit, Perubahan pola makan, Pankreatitis Penyakit pada saluran cerna, Penyakit hati',
            'penanganan' => 'Mengatur pola makan, berikan makanan kucing dalam porsi kecil, tapi lebih sering. Dan jangan biarkan kucing sampai kelaparan atau ganti pakan dengan perlahan, berikan pakan yang mudah dicerna, berikan minuman dan larutan elektrolit, berikan obat anti diare dan pertimbangkan probiotik. ',
          ],
          [
            'nama_penyakit' => 'Flu / pilek ',
            'gejala' => 'Infeksi virus herpes, Infeksi feline calicivirus, Alergi dan iritasi hidung, Benda asing dalam hidung',
            'penanganan' => 'Berikan obat-obatan seperti antibiotik lebih bersifat mencegah infeksi sekunder yang disebabkan oleh bakteri atau memberikan obat-obatan lain biasanya bertujuan untuk mengurangi gejala flu seperti menurunkan panas, melegakan pernafasan dan menghilangkan lendir saluran pernapasan yang berlebihan. Penyakit flu yang dialami kucing juga bisa dengan sendirinya sembuh dalam waktu 2-3 minggu. Dan bisa temui dokter hewan bila gejala penyakit ini terjadi pada kucing.',
          ],
              // Tambahkan data gejala lainnya sesuai dengan kebutuhan
        ];

          // Insert data ke dalam tabel 'gejala_kucing'
        DB::table('gejala_kucing')->insert($gejala);
    }
}

