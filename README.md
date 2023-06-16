# citradisi-backend
 Capstone Project

# docs API
url: http://34.101.111.210

Register <br/>
 `POST: {{url}}/api/v1/auth/register` <br/>
body: 
```json
{
    "name": "Nama",
    "email": "email@domain.com",
    "password": "xxxxxxxx"
}
```

response berhasil: <br/>
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "User Created Successfully"
    },
    "data": {
        "name": "Nama",
        "email": "email@domain.com",
        "updated_at": "2023-06-10T04:16:55.000000Z",
        "created_at": "2023-06-10T04:16:55.000000Z",
        "id": 11
    },
    "token": "7|3h5wEzqbWRrviuuiHCSWEC5RxO5sgeeKEPuTuj78"
}
```

response error: <br/>
```json
{
    "meta": {
        "code": 401,
        "status": "error",
        "message": "Validation error"
    },
    "data": {
        "name": [
            "The name field is required."
        ],
        "email": [
            "The email field is required."
        ],
        "password": [
            "The password field is required."
        ]
    }
}
```


Login <br/>
 POST: {{url}}/api/v1/auth/login <br/>
body:
```json
{
    "email": "email@domain.com",
    "password": "password"
}
```

response: <br/>
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Login Success"
    },
    "data": {
        "id": 1,
        "name": "Arlana",
        "email": "aria@gmail.com",
        "email_verified_at": "2023-06-08T07:53:54.000000Z",
        "role": "admin",
        "created_at": "2023-06-08T07:53:54.000000Z",
        "updated_at": "2023-06-08T07:53:54.000000Z"
    },
    "token": "4|b97zLQ8hNVBu0PvoHbMBMZUDXodUpXbF9ciYAk66"
}
```


Auth Status
 POST: {{url}}/api/v1/auth/status <br/>
 Include Bearer Token

response:
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Already Logged"
    },
    "data": {
        "id": 1,
        "name": "Arlana",
        "email": "aria@gmail.com",
        "email_verified_at": "2023-06-08T07:53:54.000000Z",
        "role": "admin",
        "created_at": "2023-06-08T07:53:54.000000Z",
        "updated_at": "2023-06-08T07:53:54.000000Z"
    },
    "token": "1|Hj3n1HkU4v4xmlQffuukg1GEDvOnZ0BItKEvTurc"
}
```

Get All Food
 GET: {{url}}/api/v1/food <br/>

response:
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "List All Foods"
    },
    "data": [
        {
            "id": 1,
            "food_name": "Asinan Jakarta",
            "food_slug": "asinan-jakarta",
            "food_image": "image/Asinan-jakarta.jpg",
            "food_material_id": "buah-buahan segar (seperti nanas, jambu air, kedondong), tauge, kerupuk, bumbu asinan, air asam, gula, garam",
            "food_make_id": "Mencampur buah-buahan dengan bumbu asinan, air asam, gula, dan garam, lalu ditambahkan tauge dan kerupuk sebagai pelengkap.",
            "food_material_en": "fresh fruits (such as pineapple, guava, kedondong), bean sprouts, crackers, pickling spices, sour water, sugar, salt",
            "food_make_en": "Mix fruits with pickling spices, tamarind water, sugar, and salt, then add bean sprouts and crackers as a complement.",
            "created_at": "2023-06-08T07:53:54.000000Z",
            "updated_at": "2023-06-08T07:53:54.000000Z"
        },
        {
            "id": 2,
            "food_name": "Ayam Betutu",
            "food_slug": "ayam-betutu",
            "food_image": "image/Ayam-betutu.jpg",
            "food_material_id": "ayam, bumbu betutu (seperti bawang merah, bawang putih, kemiri, cabai, jahe, kunyit, terasi, kencur), daun pisang, daun kemangi",
            "food_make_id": "Ayam dibumbui dengan bumbu betutu yang dihaluskan, kemudian dibungkus dengan daun pisang, lalu dipanggang atau direbus sampai matang.",
            "food_material_en": "chicken, betutu seasoning (such as shallots, garlic, candlenut, chili, ginger, turmeric, shrimp paste, galangal), banana leaves, basil leaves",
            "food_make_en": "The chicken is seasoned with mashed betutu spices, then wrapped in banana leaves, then grilled or boiled until cooked.",
            "created_at": "2023-06-08T07:53:54.000000Z",
            "updated_at": "2023-06-08T07:53:54.000000Z"
        }
    ],
    "token": null
}
```

Food Search
 POST: {{url}}/api/v1/food <br/>

body: 
```json
{
    "search": "ayam"
}
```

response:
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Result for ayam"
    },
    "data": [
        {
            "id": 2,
            "food_name": "Ayam Betutu",
            "food_slug": "ayam-betutu",
            "food_image": "image/Ayam-betutu.jpg",
            "food_material_id": "ayam, bumbu betutu (seperti bawang merah, bawang putih, kemiri, cabai, jahe, kunyit, terasi, kencur), daun pisang, daun kemangi",
            "food_make_id": "Ayam dibumbui dengan bumbu betutu yang dihaluskan, kemudian dibungkus dengan daun pisang, lalu dipanggang atau direbus sampai matang.",
            "food_material_en": "chicken, betutu seasoning (such as shallots, garlic, candlenut, chili, ginger, turmeric, shrimp paste, galangal), banana leaves, basil leaves",
            "food_make_en": "The chicken is seasoned with mashed betutu spices, then wrapped in banana leaves, then grilled or boiled until cooked.",
            "created_at": "2023-06-08T07:53:54.000000Z",
            "updated_at": "2023-06-08T07:53:54.000000Z"
        },
        {
            "id": 3,
            "food_name": "Ayam Bumbu Rujak",
            "food_slug": "ayam-bumbu-rujak",
            "food_image": "image/ayam-bumbu-rujak.jpg",
            "food_material_id": "ayam, bumbu rujak (seperti cabai, bawang merah, bawang putih, kemiri, terasi, gula, garam, air asam), minyak goreng",
            "food_make_id": "Ayam digoreng sampai matang, kemudian dimasak dengan bumbu rujak hingga meresap dan mengental.",
            "food_material_en": "chicken, spices (such as chili, shallots, garlic, candlenut, shrimp paste, sugar, salt, tamarind water), cooking oil",
            "food_make_en": "The chicken is fried until cooked, then cooked with rujak seasoning until it is absorbed and thickened.",
            "created_at": "2023-06-08T07:53:54.000000Z",
            "updated_at": "2023-06-08T07:53:54.000000Z"
        }
    ],
    "token": null
}
```


Food Detail
 GET: {{url}}/api/v1/food/asinan-jakarta <br/>
 asinan-jakarta --> food_slug
 Include Bearer Token

response:
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Succesfully get Asinan Jakarta food data"
    },
    "data": {
        "id": 1,
        "food_name": "Asinan Jakarta",
        "food_slug": "asinan-jakarta",
        "food_image": "image/Asinan-jakarta.jpg",
        "food_material_id": "buah-buahan segar (seperti nanas, jambu air, kedondong), tauge, kerupuk, bumbu asinan, air asam, gula, garam",
        "food_make_id": "Mencampur buah-buahan dengan bumbu asinan, air asam, gula, dan garam, lalu ditambahkan tauge dan kerupuk sebagai pelengkap.",
        "food_material_en": "fresh fruits (such as pineapple, guava, kedondong), bean sprouts, crackers, pickling spices, sour water, sugar, salt",
        "food_make_en": "Mix fruits with pickling spices, tamarind water, sugar, and salt, then add bean sprouts and crackers as a complement.",
        "created_at": "2023-06-08T07:53:54.000000Z",
        "updated_at": "2023-06-08T07:53:54.000000Z",
        "loves_count": 0,
        "user_love_status": null
    },
    "token": null
}
```

Food Scan Image <br/>
 POST: {{url}}/api/v1/food/scan <br/>
 Include Bearer Token

body: 
```json
{
    "scan_food_image": (image file)
}
```


response:
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Result for Scan Image"
    },
    "data": {
        "id": 17,
        "food_name": "Rawon",
        "food_slug": "rawon",
        "food_image": "image/Rawon.jpg",
        "food_material_id": "daging sapi, bawang putih, bawang merah, keluak, serai, lengkuas, daun salam, cabai, kluwek, air asam, garam, minyak",
        "food_make_id": "Tumis bawang putih, bawang merah, serai, lengkuas, dan daun salam dalam minyak hingga harum. Masukkan daging sapi dan air, lalu tambahkan keluak yang sudah dihaluskan. Rebus hingga daging empuk dan kuah mengental. Sajikan rawon dengan nasi, tauge, daun bawang, dan bawang goreng.",
        "food_material_en": "beef, garlic, shallots, keluak, lemongrass, galangal, bay leaves, chili, kluwek, tamarind water, salt, oil",
        "food_make_en": "Sauté garlic, shallots, lemongrass, galangal and bay leaves in oil until fragrant. Add the beef and water, then add the mashed keluak. Simmer until the meat is tender and the sauce thickens. Serve rawon with rice, bean sprouts, spring onions, and fried onions.",
        "created_at": "2023-06-08T07:53:54.000000Z",
        "updated_at": "2023-06-08T07:53:54.000000Z",
        "loves_count": 0,
        "user_love_status": null
    },
    "token": "9|SgaB5oMZQJbSpJcZiWqRg8x7SEy77m1KhqVccpUo"
}
```

GET Bookmark User <br/>
 GET: {{url}}/api/v1/bookmark <br/>
 Include Bearer Token


response:
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "All Bookmark User"
    },
    "data": [
        {
            "id": 1,
            "user_id": 1,
            "food_id": 1,
            "bookmark_status": 1,
            "created_at": "2023-06-10T04:48:32.000000Z",
            "updated_at": "2023-06-10T04:48:32.000000Z",
            "food": {
                "id": 1,
                "food_name": "Asinan Jakarta",
                "food_slug": "asinan-jakarta",
                "food_image": "image/Asinan-jakarta.jpg",
                "food_material_id": "buah-buahan segar (seperti nanas, jambu air, kedondong), tauge, kerupuk, bumbu asinan, air asam, gula, garam",
                "food_make_id": "Mencampur buah-buahan dengan bumbu asinan, air asam, gula, dan garam, lalu ditambahkan tauge dan kerupuk sebagai pelengkap.",
                "food_material_en": "fresh fruits (such as pineapple, guava, kedondong), bean sprouts, crackers, pickling spices, sour water, sugar, salt",
                "food_make_en": "Mix fruits with pickling spices, tamarind water, sugar, and salt, then add bean sprouts and crackers as a complement.",
                "created_at": "2023-06-08T07:53:54.000000Z",
                "updated_at": "2023-06-08T07:53:54.000000Z"
            }
        },
        {
            "id": 2,
            "user_id": 1,
            "food_id": 2,
            "bookmark_status": 1,
            "created_at": "2023-06-10T04:49:11.000000Z",
            "updated_at": "2023-06-10T04:49:11.000000Z",
            "food": {
                "id": 2,
                "food_name": "Ayam Betutu",
                "food_slug": "ayam-betutu",
                "food_image": "image/Ayam-betutu.jpg",
                "food_material_id": "ayam, bumbu betutu (seperti bawang merah, bawang putih, kemiri, cabai, jahe, kunyit, terasi, kencur), daun pisang, daun kemangi",
                "food_make_id": "Ayam dibumbui dengan bumbu betutu yang dihaluskan, kemudian dibungkus dengan daun pisang, lalu dipanggang atau direbus sampai matang.",
                "food_material_en": "chicken, betutu seasoning (such as shallots, garlic, candlenut, chili, ginger, turmeric, shrimp paste, galangal), banana leaves, basil leaves",
                "food_make_en": "The chicken is seasoned with mashed betutu spices, then wrapped in banana leaves, then grilled or boiled until cooked.",
                "created_at": "2023-06-08T07:53:54.000000Z",
                "updated_at": "2023-06-08T07:53:54.000000Z"
            }
        }
    ],
    "token": null
}
```

STORE Bookmark User <br/>
 POST: {{url}}/api/v1/bookmark <br/>
 Include Bearer Token

body:
```json
{
    "food_id": 3
}
```
response ketika berhasil:
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Bookmark Success"
    },
    "data": {
        "user_id": 1,
        "food_id": 3,
        "bookmark_status": true,
        "updated_at": "2023-06-10T04:51:26.000000Z",
        "created_at": "2023-06-10T04:51:26.000000Z",
        "id": 3
    },
    "token": "9|SgaB5oMZQJbSpJcZiWqRg8x7SEy77m1KhqVccpUo"
}
```

response ketika duplicate:
```json
{
    "meta": {
        "code": 400,
        "status": "error",
        "message": "Bookmark Gagal"
    },
    "data": "Data sudah berada di database bookmark"
}
```

delete Bookmark User <br/>
 POST: {{url}}/api/v1/bookmark/2 <br/>
 2 --> id dari bookmark
 Include Bearer Token


response ketika berhasil:
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Bookmark Deleted"
    },
    "data": true,
    "token": null
}
```

Most Love <br/>
 GET: {{url}}/api/v1/loves <br/>
 Include Bearer Token


response ketika berhasil:
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "All Loves User"
    },
    "data": [
        {
            "food_id": 1,
            "love_total": 1,
            "food": {
                "id": 1,
                "food_name": "Asinan Jakarta",
                "food_slug": "asinan-jakarta",
                "food_image": "image/Asinan-jakarta.jpg",
                "food_material_id": "buah-buahan segar (seperti nanas, jambu air, kedondong), tauge, kerupuk, bumbu asinan, air asam, gula, garam",
                "food_make_id": "Mencampur buah-buahan dengan bumbu asinan, air asam, gula, dan garam, lalu ditambahkan tauge dan kerupuk sebagai pelengkap.",
                "food_material_en": "fresh fruits (such as pineapple, guava, kedondong), bean sprouts, crackers, pickling spices, sour water, sugar, salt",
                "food_make_en": "Mix fruits with pickling spices, tamarind water, sugar, and salt, then add bean sprouts and crackers as a complement.",
                "created_at": "2023-06-08T07:53:54.000000Z",
                "updated_at": "2023-06-08T07:53:54.000000Z"
            }
        },
        {
            "food_id": 3,
            "love_total": 1,
            "food": {
                "id": 3,
                "food_name": "Ayam Bumbu Rujak",
                "food_slug": "ayam-bumbu-rujak",
                "food_image": "image/ayam-bumbu-rujak.jpg",
                "food_material_id": "ayam, bumbu rujak (seperti cabai, bawang merah, bawang putih, kemiri, terasi, gula, garam, air asam), minyak goreng",
                "food_make_id": "Ayam digoreng sampai matang, kemudian dimasak dengan bumbu rujak hingga meresap dan mengental.",
                "food_material_en": "chicken, spices (such as chili, shallots, garlic, candlenut, shrimp paste, sugar, salt, tamarind water), cooking oil",
                "food_make_en": "The chicken is fried until cooked, then cooked with rujak seasoning until it is absorbed and thickened.",
                "created_at": "2023-06-08T07:53:54.000000Z",
                "updated_at": "2023-06-08T07:53:54.000000Z"
            }
        }
    ],
    "token": null
}
```

STORE Love User <br/>
 POST: {{url}}/api/v1/love <br/>
 Include Bearer Token

body:
```json
{
    "food_id": 3
}
```
response ketika berhasil:
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Love Success"
    },
    "data": {
        "user_id": 1,
        "food_id": 3,
        "love_status": true,
        "updated_at": "2023-06-10T04:58:14.000000Z",
        "created_at": "2023-06-10T04:58:14.000000Z",
        "id": 2
    },
    "token": "9|SgaB5oMZQJbSpJcZiWqRg8x7SEy77m1KhqVccpUo"
}
```

response ketika duplicate:
```json
{
    "meta": {
        "code": 400,
        "status": "error",
        "message": "Love Gagal"
    },
    "data": "Data sudah berada di database love"
}
```

delete Love User <br/>
 POST: {{url}}/api/v1/love/2 <br/>
 2 --> id dari Love
 Include Bearer Token


response ketika berhasil:
```json
{
    "meta": {
        "code": 200,
        "status": "success",
        "message": "Love Deleted"
    },
    "data": true,
    "token": null
}
```




