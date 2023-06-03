<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Food;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Arlana',
            'email' => 'aria@gmail.com',
            'role' => 'admin',
        ]);
        User::factory(7)->create();
        Food::factory()->create([
            'food_name' => 'asinan-jakarta',
            'food_slug' => 'asinan-jakarta',
            'food_image' => 'image/asinan-jakarta.jpg',
            'food_material_id' => 'buah-buahan segar (seperti nanas, jambu air, kedondong), tauge, kerupuk, bumbu asinan, air asam, gula, garam',
            'food_make_id' => 'Mencampur buah-buahan dengan bumbu asinan, air asam, gula, dan garam, lalu ditambahkan tauge dan kerupuk sebagai pelengkap.',
            'food_material_en' => 'fresh fruits (such as pineapple, guava, kedondong), bean sprouts, crackers, pickling spices, sour water, sugar, salt',
            'food_make_en' => 'Mix fruits with pickling spices, tamarind water, sugar, and salt, then add bean sprouts and crackers as a complement.'
        ]);


        Food::factory()->create([
            'food_name' => 'ayam-betutu',
            'food_slug' => 'ayam-betutu',
            'food_image' => 'image/ayam-betutu.jpg',
            'food_material_id' => 'ayam, bumbu betutu (seperti bawang merah, bawang putih, kemiri, cabai, jahe, kunyit, terasi, kencur), daun pisang, daun kemangi',
            'food_make_id' => 'Ayam dibumbui dengan bumbu betutu yang dihaluskan, kemudian dibungkus dengan daun pisang, lalu dipanggang atau direbus sampai matang.',
            'food_material_en' => 'chicken, betutu seasoning (such as shallots, garlic, candlenut, chili, ginger, turmeric, shrimp paste, galangal), banana leaves, basil leaves',
            'food_make_en' => 'The chicken is seasoned with mashed betutu spices, then wrapped in banana leaves, then grilled or boiled until cooked.'
        ]);


        Food::factory()->create([
            'food_name' => 'ayam-bumbu-rujak',
            'food_slug' => 'ayam-bumbu-rujak',
            'food_image' => 'image/ayam-bumbu-rujak.jpg',
            'food_material_id' => 'ayam, bumbu rujak (seperti cabai, bawang merah, bawang putih, kemiri, terasi, gula, garam, air asam), minyak goreng',
            'food_make_id' => 'Ayam digoreng sampai matang, kemudian dimasak dengan bumbu rujak hingga meresap dan mengental.',
            'food_material_en' => 'chicken, spices (such as chili, shallots, garlic, candlenut, shrimp paste, sugar, salt, tamarind water), cooking oil',
            'food_make_en' => 'The chicken is fried until cooked, then cooked with rujak seasoning until it is absorbed and thickened.'
        ]);


        Food::factory()->create([
            'food_name' => 'ayam-goreng-lengkuas',
            'food_slug' => 'ayam-goreng-lengkuas',
            'food_image' => 'image/ayam-goreng-lengkuas.jpg',
            'food_material_id' => 'ayam, bumbu lengkuas (seperti lengkuas, bawang merah, bawang putih, cabai, kunyit, ketumbar, garam, gula), minyak goreng',
            'food_make_id' => 'Ayam dibumbui dengan bumbu lengkuas yang dihaluskan, lalu digoreng sampai matang dan berwarna kecokelatan.',
            'food_material_en' => 'chicken, galangal seasoning (such as galangal, shallots, garlic, chili, turmeric, coriander, salt, sugar), cooking oil',
            'food_make_en' => 'The chicken is seasoned with crushed galangal, then fried until cooked and browned.'
        ]);


        Food::factory()->create([
            'food_name' => 'bika-ambon',
            'food_slug' => 'bika-ambon',
            'food_image' => 'image/bika-ambon.jpg',
            'food_material_id' => 'tepung beras, gula, ragi, santan, telur, air daun pandan',
            'food_make_id' => 'Membuat adonan dengan mencampurkan tepung beras, gula, ragi, santan, telur, dan air daun pandan, lalu mengukus adonan hingga matang.',
            'food_material_en' => 'rice flour, sugar, yeast, coconut milk, egg, pandan leaf water',
            'food_make_en' => 'Make the dough by mixing rice flour, sugar, yeast, coconut milk, eggs, and pandan leaf water, then steam the dough until cooked.'
        ]);


        Food::factory()->create([
            'food_name' => 'bubur-manado',
            'food_slug' => 'bubur-manado',
            'food_image' => 'image/bubur-manado.jpg',
            'food_material_id' => 'beras, ikan tuna, cabai, daun bawang, bawang merah, bawang putih, kemiri, jahe, serai, air asam, garam, minyak goreng',
            'food_make_id' => 'Beras direbus bersama dengan ikan tuna dan bumbu-bumbu hingga menjadi bubur, kemudian disajikan dengan taburan daun bawang dan bawang goreng.',
            'food_material_en' => 'rice, tuna, chili, scallion, shallot, garlic, candlenut, ginger, lemongrass, tamarind water, salt, cooking oil',
            'food_make_en' => 'The rice is boiled together with tuna and spices until it becomes a porridge, then served topped with spring onions and fried onions.'
        ]);


        Food::factory()->create([
            'food_name' => 'es-dawet',
            'food_slug' => 'es-dawet',
            'food_image' => 'image/es-dawet.jpg',
            'food_material_id' => 'tepung beras, air pandan, air gula merah, santan, es serut',
            'food_make_id' => 'Membuat adonan tepung beras menjadi bentuk bulat-bulat kecil, lalu merebusnya hingga matang. Selanjutnya, mencampurkan air pandan, air gula merah, santan, dan es serut untuk menjadi siraman es dawet.',
            'food_material_en' => 'rice flour, pandan water, brown sugar water, coconut milk, shaved ice',
            'food_make_en' => 'Make rice flour dough into small rounds, then boil them until cooked. Next, mix pandan water, brown sugar water, coconut milk, and shaved ice to make the ice dawet.'
        ]);


        Food::factory()->create([
            'food_name' => 'gado-gado',
            'food_slug' => 'gado-gado',
            'food_image' => 'image/gado-gado.jpg',
            'food_material_id' => 'sayuran segar (kubis, taoge, wortel), tahu, tempe, telur, lontong, kerupuk, bumbu kacang (kacang tanah, bawang putih, cabai, gula, garam, air asam), bawang merah goreng',
            'food_make_id' => 'Rebus sayuran, telur, dan lontong. Goreng tahu dan tempe. Sajikan sayuran, tahu, tempe, telur, dan lontong dalam satu piring, siram dengan bumbu kacang, taburi bawang merah goreng, dan tambahkan kerupuk.',
            'food_material_en' => 'fresh vegetables (cabbage, bean sprouts, carrots), tofu, tempeh, eggs, rice cake, crackers, peanut seasoning (peanuts, garlic, chili, sugar, salt, tamarind water), fried onions',
            'food_make_en' => 'Boil vegetables, eggs and rice cake. Fry the tofu and tempeh. Serve the vegetables, tofu, tempeh, egg, and lontong in one plate, pour peanut sauce, sprinkle with fried shallots, and add crackers.'
        ]);


        Food::factory()->create([
            'food_name' => 'gudeg',
            'food_slug' => 'gudeg',
            'food_image' => 'image/gudeg.jpg',
            'food_material_id' => 'nangka muda, daging ayam, santan, daun salam, serai, gula merah, kelapa parut, telur rebus',
            'food_make_id' => 'Memasak nangka muda dengan santan, daun salam, serai, gula merah, dan rempah-rempah hingga empuk dan bumbu meresap. Sajikan dengan nasi dan pelengkap seperti telur rebus.',
            'food_material_en' => 'young jackfruit, chicken meat, coconut milk, bay leaves, lemongrass, brown sugar, grated coconut, boiled eggs',
            'food_make_en' => 'Cook young jackfruit with coconut milk, bay leaves, lemongrass, brown sugar, and spices until tender and flavorful. Serve with rice and side dishes such as boiled eggs.'
        ]);


        Food::factory()->create([
            'food_name' => 'gulai-ikan-mas',
            'food_slug' => 'gulai-ikan-mas',
            'food_image' => 'image/gulai-ikan-mas.jpg',
            'food_material_id' => 'ikan mas, bumbu gulai (bawang merah, bawang putih, cabai, kunyit, jahe, lengkuas, serai, santan), daun jeruk, daun salam, garam',
            'food_make_id' => 'Merebus ikan mas dengan bumbu gulai hingga ikan matang dan bumbu meresap. Tambahkan daun jeruk, daun salam, dan garam sesuai selera.',
            'food_material_en' => 'carp, gulai spices (shallots, garlic, chili, turmeric, ginger, galangal, lemongrass, coconut milk), lime leaves, bay leaves, salt.',
            'food_make_en' => 'Simmer the carp with the curry spices until the fish is cooked and the spices are absorbed. Add lime leaves, bay leaves, and salt to taste.'
        ]);


        Food::factory()->create([
            'food_name' => 'kerak-telor',
            'food_slug' => 'kerak-telor',
            'food_image' => 'image/kerak-telor.jpg',
            'food_material_id' => 'beras ketan, telur ayam, ebi (udang kering), kelapa parut sangrai, bawang merah goreng',
            'food_make_id' => 'Membuat adonan dari beras ketan dan telur, kemudian menggorengnya dengan menggunakan wajan datar. Setelah itu, ditambahkan ebi dan kelapa parut sangrai di atasnya. Kerak telor siap disajikan dengan taburan bawang merah goreng.',
            'food_material_en' => 'glutinous rice, chicken egg, ebi (dried shrimp), roasted grated coconut, fried shallots',
            'food_make_en' => 'Make a batter from glutinous rice and eggs, then fry it using a flat pan. After that, ebi and roasted grated coconut are added on top. Kerak telor is ready to be served with a sprinkle of fried shallots.'
        ]);


        Food::factory()->create([
            'food_name' => 'klappertart',
            'food_slug' => 'klappertart',
            'food_image' => 'image/klappertart.jpg',
            'food_material_id' => 'kelapa parut, susu kental manis, gula, telur, tepung terigu, mentega, vanili, kismis',
            'food_make_id' => 'Mencampurkan kelapa parut, susu kental manis, gula, telur, tepung terigu, mentega, dan vanili untuk membuat adonan klappertart. Adonan kemudian dipanggang dalam oven hingga matang. Setelah itu, ditaburi dengan kismis sebagai hiasan.',
            'food_material_en' => 'grated coconut, sweetened condensed milk, sugar, eggs, flour, butter, vanilla, raisins',
            'food_make_en' => 'Mix grated coconut, condensed milk, sugar, eggs, flour, butter, and vanilla to make klappertart dough. The dough is then baked in the oven until cooked. After that, it is sprinkled with raisins as decoration.'
        ]);


        Food::factory()->create([
            'food_name' => 'laksa-bogor',
            'food_slug' => 'laksa-bogor',
            'food_image' => 'image/laksa-bogor.jpg',
            'food_material_id' => 'mie laksa, kuah kaldu ayam, tauge, daun bawang, irisan daging ayam/sapi, irisan telur rebus, emping goreng, bawang merah goreng, sambal',
            'food_make_id' => 'Merebus mie laksa dan menyajikannya dalam mangkuk. Tambahkan kuah kaldu ayam, tauge, daun bawang, daging ayam/sapi, telur rebus, emping goreng, bawang merah goreng, dan sambal sesuai selera.',
            'food_material_en' => 'laksa noodles, chicken broth, bean sprouts, green onions, sliced chicken/cow meat, sliced boiled eggs, fried chips, fried shallots, chili sauce',
            'food_make_en' => 'Boil the laksa noodles and serve in a bowl. Add chicken broth, bean sprouts, spring onions, chicken/beef meat, boiled egg, fried chips, fried shallots, and sambal to taste.'
        ]);


        Food::factory()->create([
            'food_name' => 'mie-aceh',
            'food_slug' => 'mie-aceh',
            'food_image' => 'image/mie-aceh.jpg',
            'food_material_id' => 'mie telur, daging sapi/ayam, bawang merah, bawang putih, cabai, rempah-rempah, minyak, daun bawang, tomat, seledri, air, garam',
            'food_make_id' => 'Membuat bumbu dengan menumis bawang merah, bawang putih, cabai, dan rempah-rempah. Kemudian ditambahkan daging sapi/ayam yang sudah dipotong-potong. Setelah daging matang, tambahkan air, garam, daun bawang, dan seledri. Rebus hingga mendidih dan sajikan dengan mie telur.',
            'food_material_en' => 'egg noodles, beef/chicken, shallots, garlic, chili, spices, oil, scallions, tomatoes, celery, water, salt',
            'food_make_en' => 'Make the seasoning by sautéing shallots, garlic, chili, and spices. Then add the beef/chicken that has been cut into pieces. Once the meat is cooked, add water, salt, spring onions, and celery. Bring to a boil and serve with egg noodles.'
        ]);


        Food::factory()->create([
            'food_name' => 'nasi-goreng-kampung',
            'food_slug' => 'nasi-goreng-kampung',
            'food_image' => 'image/nasi-goreng-kampung.jpg',
            'food_material_id' => 'nasi, daging ayam atau sapi, udang, telur, bawang merah, bawang putih, cabai merah, kecap manis, kecap asin, garam, minyak sayur',
            'food_make_id' => 'Tumis bawang merah, bawang putih, dan cabai merah dalam minyak sayur. Tambahkan daging ayam atau sapi yang telah dipotong kecil-kecil dan udang. Setelah matang, tambahkan nasi, kecap manis, kecap asin, dan garam. Aduk rata hingga bumbu meresap dan nasi terasa aromatik.',
            'food_material_en' => 'rice, chicken or beef, shrimp, eggs, shallots, garlic, red chili, sweet soy sauce, soy sauce, salt, vegetable oil',
            'food_make_en' => 'Sauté shallots, garlic and red chili in vegetable oil. Add chicken or beef that has been cut into small pieces and shrimp. Once cooked, add rice, sweet soy sauce, soy sauce, and salt. Stir well until the spices are absorbed and the rice is aromatic.'
        ]);

    }
}
