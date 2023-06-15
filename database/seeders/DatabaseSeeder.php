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
        User::factory()->create([
            'name' => 'Aria Maulana',
            'email' => 'aria@gmail.com',
            'role' => 'admin',
        ]);
        Food::factory()->create([
            'food_name' => 'Asinan Jakarta',
            'food_slug' => 'asinan-jakarta',
            'food_image' => 'image/Asinan-jakarta.jpg',
            'food_material_id' => 'buah-buahan segar (seperti nanas, jambu air, kedondong), tauge, kerupuk, bumbu asinan, air asam, gula, garam',
            'food_make_id' => 'Mencampur buah-buahan dengan bumbu asinan, air asam, gula, dan garam, lalu ditambahkan tauge dan kerupuk sebagai pelengkap.',
            'food_material_en' => 'fresh fruits (such as pineapple, guava, kedondong), bean sprouts, crackers, pickling spices, sour water, sugar, salt',
            'food_make_en' => 'Mix fruits with pickling spices, tamarind water, sugar, and salt, then add bean sprouts and crackers as a complement.'
        ]);


        Food::factory()->create([
            'food_name' => 'Ayam Betutu',
            'food_slug' => 'ayam-betutu',
            'food_image' => 'image/Ayam-betutu.jpg',
            'food_material_id' => 'ayam, bumbu betutu (seperti bawang merah, bawang putih, kemiri, cabai, jahe, kunyit, terasi, kencur), daun pisang, daun kemangi',
            'food_make_id' => 'Ayam dibumbui dengan bumbu betutu yang dihaluskan, kemudian dibungkus dengan daun pisang, lalu dipanggang atau direbus sampai matang.',
            'food_material_en' => 'chicken, betutu seasoning (such as shallots, garlic, candlenut, chili, ginger, turmeric, shrimp paste, galangal), banana leaves, basil leaves',
            'food_make_en' => 'The chicken is seasoned with mashed betutu spices, then wrapped in banana leaves, then grilled or boiled until cooked.'
        ]);


        Food::factory()->create([
            'food_name' => 'Ayam Bumbu Rujak',
            'food_slug' => 'ayam-bumbu-rujak',
            'food_image' => 'image/ayam-bumbu-rujak.jpg',
            'food_material_id' => 'ayam, bumbu rujak (seperti cabai, bawang merah, bawang putih, kemiri, terasi, gula, garam, air asam), minyak goreng',
            'food_make_id' => 'Ayam digoreng sampai matang, kemudian dimasak dengan bumbu rujak hingga meresap dan mengental.',
            'food_material_en' => 'chicken, spices (such as chili, shallots, garlic, candlenut, shrimp paste, sugar, salt, tamarind water), cooking oil',
            'food_make_en' => 'The chicken is fried until cooked, then cooked with rujak seasoning until it is absorbed and thickened.'
        ]);


        Food::factory()->create([
            'food_name' => 'Ayam Goreng Lengkuas',
            'food_slug' => 'ayam-goreng-lengkuas',
            'food_image' => 'image/ayam-goreng-lengkuas.jpeg',
            'food_material_id' => 'ayam, bumbu lengkuas (seperti lengkuas, bawang merah, bawang putih, cabai, kunyit, ketumbar, garam, gula), minyak goreng',
            'food_make_id' => 'Ayam dibumbui dengan bumbu lengkuas yang dihaluskan, lalu digoreng sampai matang dan berwarna kecokelatan.',
            'food_material_en' => 'chicken, galangal seasoning (such as galangal, shallots, garlic, chili, turmeric, coriander, salt, sugar), cooking oil',
            'food_make_en' => 'The chicken is seasoned with crushed galangal, then fried until cooked and browned.'
        ]);


        Food::factory()->create([
            'food_name' => 'Bika Ambon',
            'food_slug' => 'bika-ambon',
            'food_image' => 'image/bika-ambon.jpg',
            'food_material_id' => 'tepung beras, gula, ragi, santan, telur, air daun pandan',
            'food_make_id' => 'Membuat adonan dengan mencampurkan tepung beras, gula, ragi, santan, telur, dan air daun pandan, lalu mengukus adonan hingga matang.',
            'food_material_en' => 'rice flour, sugar, yeast, coconut milk, egg, pandan leaf water',
            'food_make_en' => 'Make the dough by mixing rice flour, sugar, yeast, coconut milk, eggs, and pandan leaf water, then steam the dough until cooked.'
        ]);


        Food::factory()->create([
            'food_name' => 'Bubur Manado',
            'food_slug' => 'bubur-manado',
            'food_image' => 'image/Bubur-Manado.jpg',
            'food_material_id' => 'beras, ikan tuna, cabai, daun bawang, bawang merah, bawang putih, kemiri, jahe, serai, air asam, garam, minyak goreng',
            'food_make_id' => 'Beras direbus bersama dengan ikan tuna dan bumbu-bumbu hingga menjadi bubur, kemudian disajikan dengan taburan daun bawang dan bawang goreng.',
            'food_material_en' => 'rice, tuna, chili, scallion, shallot, garlic, candlenut, ginger, lemongrass, tamarind water, salt, cooking oil',
            'food_make_en' => 'The rice is boiled together with tuna and spices until it becomes a porridge, then served topped with spring onions and fried onions.'
        ]);


        Food::factory()->create([
            'food_name' => 'Es Dawet',
            'food_slug' => 'es-dawet',
            'food_image' => 'image/es-dawet.jpg',
            'food_material_id' => 'tepung beras, air pandan, air gula merah, santan, es serut',
            'food_make_id' => 'Membuat adonan tepung beras menjadi bentuk bulat-bulat kecil, lalu merebusnya hingga matang. Selanjutnya, mencampurkan air pandan, air gula merah, santan, dan es serut untuk menjadi siraman es dawet.',
            'food_material_en' => 'rice flour, pandan water, brown sugar water, coconut milk, shaved ice',
            'food_make_en' => 'Make rice flour dough into small rounds, then boil them until cooked. Next, mix pandan water, brown sugar water, coconut milk, and shaved ice to make the ice dawet.'
        ]);


        Food::factory()->create([
            'food_name' => 'Gado Gado',
            'food_slug' => 'gado-gado',
            'food_image' => 'image/gado-gado.jpg',
            'food_material_id' => 'sayuran segar (kubis, taoge, wortel), tahu, tempe, telur, lontong, kerupuk, bumbu kacang (kacang tanah, bawang putih, cabai, gula, garam, air asam), bawang merah goreng',
            'food_make_id' => 'Rebus sayuran, telur, dan lontong. Goreng tahu dan tempe. Sajikan sayuran, tahu, tempe, telur, dan lontong dalam satu piring, siram dengan bumbu kacang, taburi bawang merah goreng, dan tambahkan kerupuk.',
            'food_material_en' => 'fresh vegetables (cabbage, bean sprouts, carrots), tofu, tempeh, eggs, rice cake, crackers, peanut seasoning (peanuts, garlic, chili, sugar, salt, tamarind water), fried onions',
            'food_make_en' => 'Boil vegetables, eggs and rice cake. Fry the tofu and tempeh. Serve the vegetables, tofu, tempeh, egg, and lontong in one plate, pour peanut sauce, sprinkle with fried shallots, and add crackers.'
        ]);


        Food::factory()->create([
            'food_name' => 'Gudeg',
            'food_slug' => 'gudeg',
            'food_image' => 'image/gudeg.jpg',
            'food_material_id' => 'nangka muda, daging ayam, santan, daun salam, serai, gula merah, kelapa parut, telur rebus',
            'food_make_id' => 'Memasak nangka muda dengan santan, daun salam, serai, gula merah, dan rempah-rempah hingga empuk dan bumbu meresap. Sajikan dengan nasi dan pelengkap seperti telur rebus.',
            'food_material_en' => 'young jackfruit, chicken meat, coconut milk, bay leaves, lemongrass, brown sugar, grated coconut, boiled eggs',
            'food_make_en' => 'Cook young jackfruit with coconut milk, bay leaves, lemongrass, brown sugar, and spices until tender and flavorful. Serve with rice and side dishes such as boiled eggs.'
        ]);


        Food::factory()->create([
            'food_name' => 'Gulai Ikan Mas',
            'food_slug' => 'gulai-ikan-mas',
            'food_image' => 'image/gule-ikan-mas.jpg',
            'food_material_id' => 'ikan mas, bumbu gulai (bawang merah, bawang putih, cabai, kunyit, jahe, lengkuas, serai, santan), daun jeruk, daun salam, garam',
            'food_make_id' => 'Merebus ikan mas dengan bumbu gulai hingga ikan matang dan bumbu meresap. Tambahkan daun jeruk, daun salam, dan garam sesuai selera.',
            'food_material_en' => 'carp, gulai spices (shallots, garlic, chili, turmeric, ginger, galangal, lemongrass, coconut milk), lime leaves, bay leaves, salt.',
            'food_make_en' => 'Simmer the carp with the curry spices until the fish is cooked and the spices are absorbed. Add lime leaves, bay leaves, and salt to taste.'
        ]);


        Food::factory()->create([
            'food_name' => 'Kerak Telor',
            'food_slug' => 'kerak-telor',
            'food_image' => 'image/kerak-telor.jpg',
            'food_material_id' => 'beras ketan, telur ayam, ebi (udang kering), kelapa parut sangrai, bawang merah goreng',
            'food_make_id' => 'Membuat adonan dari beras ketan dan telur, kemudian menggorengnya dengan menggunakan wajan datar. Setelah itu, ditambahkan ebi dan kelapa parut sangrai di atasnya. Kerak telor siap disajikan dengan taburan bawang merah goreng.',
            'food_material_en' => 'glutinous rice, chicken egg, ebi (dried shrimp), roasted grated coconut, fried shallots',
            'food_make_en' => 'Make a batter from glutinous rice and eggs, then fry it using a flat pan. After that, ebi and roasted grated coconut are added on top. Kerak telor is ready to be served with a sprinkle of fried shallots.'
        ]);


        Food::factory()->create([
            'food_name' => 'Klappertart',
            'food_slug' => 'klappertart',
            'food_image' => 'image/klapertart.jpg',
            'food_material_id' => 'kelapa parut, susu kental manis, gula, telur, tepung terigu, mentega, vanili, kismis',
            'food_make_id' => 'Mencampurkan kelapa parut, susu kental manis, gula, telur, tepung terigu, mentega, dan vanili untuk membuat adonan klappertart. Adonan kemudian dipanggang dalam oven hingga matang. Setelah itu, ditaburi dengan kismis sebagai hiasan.',
            'food_material_en' => 'grated coconut, sweetened condensed milk, sugar, eggs, flour, butter, vanilla, raisins',
            'food_make_en' => 'Mix grated coconut, condensed milk, sugar, eggs, flour, butter, and vanilla to make klappertart dough. The dough is then baked in the oven until cooked. After that, it is sprinkled with raisins as decoration.'
        ]);


        Food::factory()->create([
            'food_name' => 'Laksa Bogor',
            'food_slug' => 'laksa-bogor',
            'food_image' => 'image/laksa-bogor.jpg',
            'food_material_id' => 'mie laksa, kuah kaldu ayam, tauge, daun bawang, irisan daging ayam/sapi, irisan telur rebus, emping goreng, bawang merah goreng, sambal',
            'food_make_id' => 'Merebus mie laksa dan menyajikannya dalam mangkuk. Tambahkan kuah kaldu ayam, tauge, daun bawang, daging ayam/sapi, telur rebus, emping goreng, bawang merah goreng, dan sambal sesuai selera.',
            'food_material_en' => 'laksa noodles, chicken broth, bean sprouts, green onions, sliced chicken/cow meat, sliced boiled eggs, fried chips, fried shallots, chili sauce',
            'food_make_en' => 'Boil the laksa noodles and serve in a bowl. Add chicken broth, bean sprouts, spring onions, chicken/beef meat, boiled egg, fried chips, fried shallots, and sambal to taste.'
        ]);


        Food::factory()->create([
            'food_name' => 'Mie Aceh',
            'food_slug' => 'mie-aceh',
            'food_image' => 'image/mie-aceh.jpeg',
            'food_material_id' => 'mie telur, daging sapi/ayam, bawang merah, bawang putih, cabai, rempah-rempah, minyak, daun bawang, tomat, seledri, air, garam',
            'food_make_id' => 'Membuat bumbu dengan menumis bawang merah, bawang putih, cabai, dan rempah-rempah. Kemudian ditambahkan daging sapi/ayam yang sudah dipotong-potong. Setelah daging matang, tambahkan air, garam, daun bawang, dan seledri. Rebus hingga mendidih dan sajikan dengan mie telur.',
            'food_material_en' => 'egg noodles, beef/chicken, shallots, garlic, chili, spices, oil, scallions, tomatoes, celery, water, salt',
            'food_make_en' => 'Make the seasoning by sautéing shallots, garlic, chili, and spices. Then add the beef/chicken that has been cut into pieces. Once the meat is cooked, add water, salt, spring onions, and celery. Bring to a boil and serve with egg noodles.'
        ]);


        Food::factory()->create([
            'food_name' => 'Nasi Goreng Kampung',
            'food_slug' => 'nasi-goreng-kampung',
            'food_image' => 'image/nasi-goreng-kampung.jpg',
            'food_material_id' => 'nasi, daging ayam atau sapi, udang, telur, bawang merah, bawang putih, cabai merah, kecap manis, kecap asin, garam, minyak sayur',
            'food_make_id' => 'Tumis bawang merah, bawang putih, dan cabai merah dalam minyak sayur. Tambahkan daging ayam atau sapi yang telah dipotong kecil-kecil dan udang. Setelah matang, tambahkan nasi, kecap manis, kecap asin, dan garam. Aduk rata hingga bumbu meresap dan nasi terasa aromatik.',
            'food_material_en' => 'rice, chicken or beef, shrimp, eggs, shallots, garlic, red chili, sweet soy sauce, soy sauce, salt, vegetable oil',
            'food_make_en' => 'Sauté shallots, garlic and red chili in vegetable oil. Add chicken or beef that has been cut into small pieces and shrimp. Once cooked, add rice, sweet soy sauce, soy sauce, and salt. Stir well until the spices are absorbed and the rice is aromatic.'
        ]);

        Food::factory()->create([
            'food_name' => 'Pempek Palembang',
            'food_slug' => 'pempek-palembang',
            'food_image' => 'image/pempek-palembang.jpg',
            'food_material_id' => 'ikan tenggiri, tepung sagu, telur, air, garam, merica, bawang putih, gula, cuka, air kapur sirih',
            'food_make_id' => 'Haluskan ikan tenggiri dan campurkan dengan tepung sagu, telur, air, garam, merica, dan bawang putih yang dihaluskan. Bentuk adonan menjadi pempek dan rebus dalam air mendidih hingga matang. Sajikan pempek dengan cuko (saus) yang terbuat dari gula, garam, air, cuka, dan air kapur sirih.',
            'food_material_en' => 'mackerel, sago flour, egg, water, salt, pepper, garlic, sugar, vinegar, whiting water',
            'food_make_en' => 'Puree the mackerel and mix with sago flour, egg, water, salt, pepper and crushed garlic. Shape the mixture into pempek and boil in boiling water until cooked. Serve the pempek with cuko (sauce) made from sugar, salt, water, vinegar and whiting water.'
        ]);

        Food::factory()->create([
            'food_name' => 'Rawon',
            'food_slug' => 'rawon',
            'food_image' => 'image/Rawon.jpg',
            'food_material_id' => 'daging sapi, bawang putih, bawang merah, keluak, serai, lengkuas, daun salam, cabai, kluwek, air asam, garam, minyak',
            'food_make_id' => 'Tumis bawang putih, bawang merah, serai, lengkuas, dan daun salam dalam minyak hingga harum. Masukkan daging sapi dan air, lalu tambahkan keluak yang sudah dihaluskan. Rebus hingga daging empuk dan kuah mengental. Sajikan rawon dengan nasi, tauge, daun bawang, dan bawang goreng.',
            'food_material_en' => 'beef, garlic, shallots, keluak, lemongrass, galangal, bay leaves, chili, kluwek, tamarind water, salt, oil',
            'food_make_en' => 'Sauté garlic, shallots, lemongrass, galangal and bay leaves in oil until fragrant. Add the beef and water, then add the mashed keluak. Simmer until the meat is tender and the sauce thickens. Serve rawon with rice, bean sprouts, spring onions, and fried onions.'
        ]);

        Food::factory()->create([
            'food_name' => 'Rendang',
            'food_slug' => 'rendang',
            'food_image' => 'image/rendang.jpg',
            'food_material_id' => 'daging sapi, bawang merah, bawang putih, cabai merah, cabai keriting, serai, daun jeruk, daun kunyit, santan, gula merah, garam',
            'food_make_id' => 'Tumis bawang merah, bawang putih, cabai merah, cabai keriting, serai, daun jeruk, dan daun kunyit hingga harum. Masukkan daging sapi dan santan, lalu masak dengan api kecil hingga daging empuk dan bumbu meresap. Tambahkan gula merah dan garam secukupnya.',
            'food_material_en' => 'beef, shallots, garlic, red chili, curly chili, lemongrass, lime leaves, turmeric leaves, coconut milk, brown sugar, salt',
            'food_make_en' => 'Sauté shallots, garlic, red chili, curly chili, lemongrass, lime leaves, and turmeric leaves until fragrant. Add beef and coconut milk, and cook over low heat until beef is tender and spices are absorbed. Add brown sugar and salt to taste.'
        ]);

        Food::factory()->create([
            'food_name' => 'Rujak Cingur',
            'food_slug' => 'rujak-cingur',
            'food_image' => 'image/rujak-cingur.jpg',
            'food_material_id' => 'cingur (hidung sapi yang direbus), tahu, telur, mentimun, kedondong, nanas, bengkoang, lontong, petis, gula merah, air asam, cabai rawit, garam',
            'food_make_id' => 'Potong-potong cingur, tahu, telur, mentimun, kedondong, nanas, dan bengkoang sesuai selera. Rebus lontong. Campurkan petis, gula merah, air asam, cabai rawit, dan garam untuk membuat bumbu rujak. Tambahkan semua bahan dan sajikan rujak dengan bumbu yang telah dibuat.',
            'food_material_en' => "cingur (boiled cow's nose), tofu, egg, cucumber, kedondong, pineapple, bengkoang, lontong, petis, brown sugar, tamarind water, cayenne pepper, salt",
            'food_make_en' => 'Cut the cingur, tofu, egg, cucumber, kedondong, pineapple, and bengkoang into desired pieces. Boil the rice cake. Combine petis, brown sugar, tamarind water, cayenne pepper, and salt to make the salad seasoning. Add all the ingredients and serve the salad with the seasoning that has been made.'
        ]);

        Food::factory()->create([
            'food_name' => 'Sate',
            'food_slug' => 'sate',
            'food_image' => 'image/sate.jpg',
            'food_material_id' => 'daging ayam, bumbu marinasi (bawang putih, kecap manis, kecap asin, garam, merica), tusuk sate, minyak untuk menggoreng',
            'food_make_id' => 'Potong daging ayam menjadi dadu kecil. Marinasi daging ayam dengan bawang putih, kecap manis, kecap asin, garam, dan merica selama beberapa jam. Tusuk daging ayam pada tusuk sate. Panaskan minyak dalam wajan dan goreng sate ayam hingga matang dan berwarna kecokelatan. Sajikan dengan bumbu kacang atau saus sate.',
            'food_material_en' => 'chicken meat, marinade (garlic, sweet soy sauce, soy sauce, salt, pepper), skewers, oil for frying',
            'food_make_en' => 'Cut the chicken meat into small cubes. Marinate the chicken meat with garlic, sweet soy sauce, soy sauce, salt, and pepper for a few hours. Skewer the chicken meat on skewers. Heat oil in a wok and fry the chicken skewers until cooked and browned. Serve with peanut sauce or satay sauce.'
        ]);

        Food::factory()->create([
            'food_name' => 'Soto',
            'food_slug' => 'soto',
            'food_image' => 'image/soto.jpg',
            'food_material_id' => 'daging ayam/sapi, kaldu ayam/sapi, bawang putih, bawang merah, serai, daun jeruk, daun salam, daun bawang, tauge, kentang, telur rebus, soun, air jeruk nipis, garam, merica',
            'food_make_id' => 'Rebus daging ayam/sapi bersama dengan bawang putih, bawang merah, serai, daun jeruk, daun salam, dan garam hingga daging empuk. Ambil daging, suwir-suwir, dan sisihkan. Saring kaldu, tambahkan garam dan merica sesuai selera. Rebus kembali kaldu bersama tauge, kentang, dan soun. Sajikan soto dengan daging suwir, telur rebus, daun bawang, dan perasan air jeruk nipis.',
            'food_material_en' => 'chicken/beef meat, chicken/beef broth, garlic, shallots, lemongrass, lime leaves, bay leaves, spring onions, bean sprouts, potatoes, boiled eggs, rice noodles, lime juice, salt, pepper',
            'food_make_en' => 'Boil the chicken/cow meat along with garlic, shallots, lemongrass, lime leaves, bay leaves, and salt until the meat is tender. Take the meat, shred it, and set aside. Strain the broth, add salt and pepper to taste. Boil the broth again with bean sprouts, potatoes, and rice noodles. Serve soto with shredded meat, boiled egg, spring onion, and a squeeze of lime juice.'
        ]);

        Food::factory()->create([
            'food_name' => 'Sup Korno',
            'food_slug' => 'sup-korno',
            'food_image' => 'image/sup-konro.jpg',
            'food_material_id' => 'daging korno (seperti tulang iga atau daging sapi lainnya), wortel, kentang, bawang bombay, bawang putih, daun bawang, daun seledri, kaldu ayam/sapi, garam, merica',
            'food_make_id' => 'Rebus daging korno dalam air hingga empuk. Tambahkan wortel, kentang, bawang bombay, bawang putih, daun bawang, dan daun seledri. Masak hingga sayuran matang. Bumbui dengan garam dan merica sesuai selera. Sajikan sup korno hangat.',
            'food_material_en' => 'corned beef (such as ribs or other beef), carrots, potatoes, onions, garlic, scallions, celery leaves, chicken/beef stock, salt, pepper',
            'food_make_en' => 'Boil the corned beef in water until tender. Add carrots, potatoes, onions, garlic, leeks, and celery leaves. Cook until the vegetables are done. Season with salt and pepper to taste. Serve the corno soup warm.'
        ]);

        Food::factory()->create([
            'food_name' => 'Tahu Telur',
            'food_slug' => 'tahu-telur',
            'food_image' => 'image/tahu-telur.jpg',
            'food_material_id' => 'tahu, telur, tepung terigu, air, daun bawang, bawang merah, bawang putih, petis, kecap manis, garam, minyak untuk menggoreng',
            'food_make_id' => 'Haluskan tahu dan campurkan dengan tepung terigu, telur, air, daun bawang, bawang merah, bawang putih, saus tiram, kecap manis, dan garam. Panaskan minyak dalam wajan. Ambil adonan tahu telur, lalu goreng dalam minyak panas hingga matang dan berwarna kecokelatan. Tiriskan dan sajikan tahu telur dengan saus atau sambal pilihan.',
            'food_material_en' => 'tofu, eggs, flour, water, scallions, shallots, garlic, sweet soy sauce, salt, oil for frying',
            'food_make_en' => 'Puree the tofu and mix it with flour, egg, water, scallions, shallots, garlic, oyster sauce, soy sauce, and salt. Heat oil in a wok. Take the egg tofu mixture, then fry it in the hot oil until cooked and browned. Drain and serve the egg tofu with your choice of sauce or sambal.'
        ]);

    }
}
