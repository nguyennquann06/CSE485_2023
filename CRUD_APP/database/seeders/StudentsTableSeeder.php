<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'course' => $faker->country,
            ]);
        }
    }
}

// 1. Dữ Liệu Cơ Bản
// $faker->name(); // Tạo tên ngẫu nhiên.
// $faker->firstName(); // Tạo tên riêng.
// $faker->lastName(); // Tạo họ.
// $faker->title(); // Tạo danh xưng (ví dụ: Mr., Mrs.).
// $faker->userName(); // Tạo tên người dùng.
// $faker->password(); // Tạo mật khẩu ngẫu nhiên.


// 2. Địa Chỉ
// $faker->address(); // Tạo địa chỉ đầy đủ.
// $faker->city(); // Tạo tên thành phố.
// $faker->state(); // Tạo tên tiểu bang (Mỹ).
// $faker->country(); // Tạo tên quốc gia.
// $faker->postcode(); // Tạo mã bưu điện.
// $faker->streetAddress(); // Tạo địa chỉ đường phố.

// 3. Liên Hệ
// $faker->phoneNumber(); // Tạo số điện thoại ngẫu nhiên.
// $faker->email(); // Tạo địa chỉ email ngẫu nhiên.
// $faker->safeEmail(); // Tạo email với tên miền an toàn.
// $faker->freeEmail(); // Tạo email với tên miền phổ biến như gmail.com, yahoo.com.
// $faker->companyEmail(); // Tạo email công ty.


// 4. Công Ty
// $faker->company(); // Tạo tên công ty.
// $faker->jobTitle(); // Tạo tên chức vụ.
// $faker->catchPhrase(); // Tạo slogan công ty.


// 5. Văn Bản
// $faker->text($maxNbChars = 200); // Tạo đoạn văn bản ngẫu nhiên với số ký tự tối đa được chỉ định.
// $faker->sentence($nbWords = 6); // Tạo câu ngẫu nhiên với số lượng từ chỉ định.
// $faker->paragraph($nbSentences = 3); // Tạo đoạn văn với số lượng câu chỉ định.
// $faker->word(); // Tạo từ ngẫu nhiên.
// $faker->words($nb = 3, $asText = false); // Tạo mảng từ ngẫu nhiên hoặc một chuỗi từ (khi $asText là true).


// 6. Số và Giá Trị Tiền Tệ
// $faker->randomDigit(); // Tạo chữ số ngẫu nhiên từ 0 đến 9.
// $faker->randomDigitNotNull(); // Tạo chữ số ngẫu nhiên từ 1 đến 9.
// $faker->randomNumber($nbDigits = NULL, $strict = false); // Tạo số ngẫu nhiên với số lượng chữ số chỉ định.
// $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL); // Tạo số thực ngẫu nhiên.
// $faker->numberBetween($min = 1000, $max = 9000); // Tạo số nguyên trong khoảng $min và $max.
// $faker->biasedNumberBetween($min = 1000, $max = 9000, $function = 'sqrt'); // Tạo số nguyên với sự thiên vị theo hàm chỉ định.
// $faker->currencyCode(); // Tạo mã tiền tệ (ví dụ: USD, EUR).


// 7. Ngày và Giờ
// $faker->date($format = 'Y-m-d', $max = 'now'); // Tạo ngày giả ngẫu nhiên.
// $faker->time($format = 'H:i:s', $max = 'now'); // Tạo giờ ngẫu nhiên.
// $faker->dateTime($max = 'now', $timezone = null); // Tạo đối tượng DateTime ngẫu nhiên.
// $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'); // Tạo đối tượng DateTime trong khoảng thời gian chỉ định.
// $faker->iso8601($max = 'now'); // Tạo định dạng ngày giờ ISO 8601


// 8. Internet
// $faker->url(); // Tạo URL ngẫu nhiên.
// $faker->ipv4(); // Tạo địa chỉ IPv4.
// $faker->ipv6(); // Tạo địa chỉ IPv6.
// $faker->domainName(); // Tạo tên miền ngẫu nhiên.
// $faker->slug(); // Tạo chuỗi URL slug ngẫu nhiên.


// 9. Thanh Toán
// $faker->creditCardNumber(); // Tạo số thẻ tín dụng.
// $faker->creditCardType(); // Tạo loại thẻ tín dụng (Visa, MasterCard).
// $faker->creditCardExpiration(); // Tạo ngày hết hạn thẻ tín dụng.


// 10. Khác
// $faker->uuid(); // Tạo UUID ngẫu nhiên.
// $faker->boolean($chanceOfGettingTrue = 50); // Tạo giá trị true hoặc false.
// $faker->mimeType(); // Tạo MIME type.
// $faker->fileExtension(); // Tạo phần mở rộng file ngẫu nhiên (ví dụ: pdf, jpg).
// $faker->colorName(); // Tạo tên màu ngẫu nhiên (ví dụ: red, blue).
// $faker->hexColor(); // Tạo mã màu HEX.
// $faker->rgbColor(); // Tạo mã màu RGB.
