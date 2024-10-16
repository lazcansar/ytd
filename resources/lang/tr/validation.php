<?php

return [
    'accepted' => ':attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL olmalıdır.',
    'after' => ':attribute, :date tarihinden sonra bir tarih olmalıdır.',
    'alpha' => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash' => ':attribute sadece harfler, rakamlar, tire ve alt çizgi içerebilir.',
    'alpha_num' => ':attribute sadece harfler ve rakamlar içerebilir.',
    'array' => ':attribute bir dizi olmalıdır.',
    'before' => ':attribute, :date tarihinden önce bir tarih olmalıdır.',
    'between' => [
        'numeric' => ':attribute, :min ile :max arasında olmalıdır.',
        'file' => ':attribute, :min ile :max kilobayt arasında olmalıdır.',
        'string' => ':attribute, :min ile :max karakter arasında olmalıdır.',
        'array' => ':attribute, :min ile :max öğe arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute doğrulaması eşleşmiyor.',
    'date' => ':attribute geçerli bir tarih değil.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'required' => ':attribute alanı zorunludur.', // Alan zorunluluğu
    'min' => [
        'string' => ':attribute en az :min karakter olmalıdır.',
    ],
    'max' => [
        'string' => ':attribute en fazla :max karakter olmalıdır.',
    ],
    'unique' => ':attribute zaten alınmış.',

    'attributes' => [
        'email' => 'E-posta adresi',
        'password' => 'Şifre',
    ],
];
