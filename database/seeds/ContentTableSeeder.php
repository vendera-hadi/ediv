<?php

use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('contents')->insert([
        [
            'key' => 'company.title',
            'value' => 'Aktivitas R&D'
        ],
        [
            'key' => 'company.description',
            'value' => '<p>Sejak didirikan pada tahun 1974, PT. Meiji Indonesia terus melanjutkan penelitian dan pengembangan produk-produk berkualitas demi memenuhi kebutuhan pasar domestik Indonesia serta pasar luar negeri seperti Jepang, Singapura, Thailand, dan lain-lain. Kegiatan penelitian dan pengembangan yang kami lakukan tidak hanya berfokus pada produk antibiotik, namun kami juga melakukan penelitian dan pengembangan terhadap berbagai macam produk, baik produk ethical, OTC (Over The Counter), skin care, maupun suplemen kesehatan. Dalam mengembangkan sebuah produk, kami selalu mengedepankan aspek keamanan, kualitas, dan khasiat. Kami juga terus-menerus mencari “Nilai Baru” dalam pengembangan produk baru dan terus berinovasi terhadap produk yang telah beredar untuk memenuhi kebutuhan konsumen.<br><br>
Penelitian dan pengembangan produk di PT. Meiji Indonesia didukung oleh tenaga profesional yang memiliki banyak pengalaman dan kompetensi yang unggul dalam bidangnya serta dilengkapi dengan fasilitas terbaru yang telah memenuhi standar internasional. Produk-produk hasil penelitian dan pengembangan tenaga profesional kami telah dipasarkan dan diterima dengan baik oleh pasar farmasi Indonesia.</p>'
        ],
        [
            'key' => 'contact.address',
            'value' => 'PT. Meiji Indonesia<br>Jl. Prof.Dr.Soepomo No.40, Menteng Dalam,<br>Tebet Jakarta Selatan'
        ],
        [
            'key' => 'contact.phone',
            'value' => '(62-21) 384 5584'
        ],
        [
            'key' => 'contact.fax',
            'value' => '(62-21) 345 7650'
        ],
        [
            'key' => 'contact.email',
            'value' => 'otc@meiji.co.id'
        ]
      ]);
    }
}
