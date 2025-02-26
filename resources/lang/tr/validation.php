<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default errors messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
    'accepted'             => ':attribute kabul edilmelidir.',
    'accepted_if'          => ':attribute, :other değeri :value ise kabul edilmelidir.',
    'active_url'           => ':attribute geçerli bir URL olmalıdır.',
    'after'                => ':attribute mutlaka :date tarihinden sonra olmalıdır.',
    'after_or_equal'       => ':attribute mutlaka :date tarihinden sonra veya aynı tarihte olmalıdır.',
    'alpha'                => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash'           => ':attribute sadece harflerden, rakamlardan ve tirelerden oluşmalıdır.',
    'alpha_num'            => ':attribute sadece harflerden ve rakamlardan oluşmalıdır.',
    'array'                => ':attribute mutlaka bir dizi olmalıdır.',
    'attached'             => 'Bu :attribute zaten tanımlı.',
    'before'               => ':attribute mutlaka :date tarihinden önce olmalıdır.',
    'before_or_equal'      => ':attribute mutlaka :date tarihinden önce veya aynı tarihte olmalıdır.',
    'between'              => [
        'array'   => ':attribute mutlaka :min - :max arasında öge içermelidir.',
        'file'    => ':attribute mutlaka :min - :max kilobayt arasında olmalıdır.',
        'numeric' => ':attribute mutlaka :min - :max arasında olmalıdır.',
        'string'  => ':attribute mutlaka :min - :max karakter arasında olmalıdır.',
    ],
    'boolean'              => ':attribute sadece doğru veya yanlış olmalıdır.',
    'confirmed'            => ':attribute tekrarı eşleşmiyor.',
    'current_password'     => 'Parola hatalı.',
    'date'                 => ':attribute geçerli bir tarih değil.',
    'date_equals'          => ':attribute mutlaka :date ile aynı tarihte olmalıdır.',
    'date_format'          => ':attribute mutlaka :format biçiminde olmalıdır.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => ':attribute ile :other mutlaka birbirinden farklı olmalıdır.',
    'digits'               => ':attribute mutlaka :digits basamaklı olmalıdır.',
    'digits_between'       => ':attribute mutlaka en az :min, en fazla :max basamaklı olmalıdır.',
    'dimensions'           => ':attribute geçersiz resim boyutlarına sahip.',
    'distinct'             => ':attribute alanı yinelenen bir değere sahip.',
    'email'                => ':attribute mutlaka geçerli bir e-posta adresi olmalıdır.',
    'ends_with'            => ':attribute sadece şu değerlerden biriyle bitebilir: :values.',
    'exists'               => 'Seçili :attribute geçersiz.',
    'file'                 => ':attribute mutlaka bir dosya olmalıdır.',
    'filled'               => ':attribute mutlaka doldurulmalıdır.',
    'gt'                   => [
        'array'   => ':attribute mutlaka :value sayısından daha fazla öge içermelidir.',
        'file'    => ':attribute mutlaka :value kilobayt\'tan büyük olmalıdır.',
        'numeric' => ':attribute mutlaka :value sayısından büyük olmalıdır.',
        'string'  => ':attribute mutlaka :value karakterden uzun olmalıdır.',
    ],
    'gte'                  => [
        'array'   => ':attribute mutlaka :value veya daha fazla öge içermelidir.',
        'file'    => ':attribute mutlaka :value kilobayt\'tan büyük veya eşit olmalıdır.',
        'numeric' => ':attribute mutlaka :value sayısından büyük veya eşit olmalıdır.',
        'string'  => ':attribute mutlaka :value karakterden uzun veya eşit olmalıdır.',
    ],
    'image'                => ':attribute mutlaka bir resim olmalıdır.',
    'in'                   => 'Seçili :attribute geçersiz.',
    'in_array'             => ':attribute :other içinde mevcut değil.',
    'integer'              => ':attribute mutlaka bir tam sayı olmalıdır.',
    'ip'                   => ':attribute mutlaka geçerli bir IP adresi olmalıdır.',
    'ipv4'                 => ':attribute mutlaka geçerli bir IPv4 adresi olmalıdır.',
    'ipv6'                 => ':attribute mutlaka geçerli bir IPv6 adresi olmalıdır.',
    'json'                 => ':attribute mutlaka geçerli bir JSON içeriği olmalıdır.',
    'lt'                   => [
        'array'   => ':attribute mutlaka :value sayısından daha az öge içermelidir.',
        'file'    => ':attribute mutlaka :value kilobayt\'tan küçük olmalıdır.',
        'numeric' => ':attribute mutlaka :value sayısından küçük olmalıdır.',
        'string'  => ':attribute mutlaka :value karakterden kısa olmalıdır.',
    ],
    'lte'                  => [
        'array'   => ':attribute mutlaka :value veya daha az öge içermelidir.',
        'file'    => ':attribute mutlaka :value kilobayt\'tan küçük veya eşit olmalıdır.',
        'numeric' => ':attribute mutlaka :value sayısından küçük veya eşit olmalıdır.',
        'string'  => ':attribute mutlaka :value karakterden kısa veya eşit olmalıdır.',
    ],
    'max'                  => [
        'array'   => ':attribute en fazla :max öge içerebilir.',
        'file'    => ':attribute en fazla :max kilobayt olabilir.',
        'numeric' => ':attribute en fazla :max olabilir.',
        'string'  => ':attribute en fazla :max karakter olabilir.',
    ],
    'mimes'                => ':attribute mutlaka :values biçiminde bir dosya olmalıdır.',
    'mimetypes'            => ':attribute mutlaka :values biçiminde bir dosya olmalıdır.',
    'min'                  => [
        'array'   => ':attribute en az :min öge içerebilir.',
        'file'    => ':attribute en az :min kilobayt olabilir.',
        'numeric' => ':attribute en az :min olabilir.',
        'string'  => ':attribute en az :min karakter olabilir.',
    ],
    'multiple_of'          => ':attribute, :value\'nin katları olmalıdır',
    'not_in'               => 'Seçili :attribute geçersiz.',
    'not_regex'            => ':attribute biçimi geçersiz.',
    'numeric'              => ':attribute mutlaka bir sayı olmalıdır.',
    'password'             => 'Parola geçersiz.',
    'present'              => ':attribute mutlaka mevcut olmalıdır.',
    'prohibited'           => ':attribute alanı kısıtlanmıştır.',
    'prohibited_if'        => ':other alanının değeri :value ise :attribute alanına veri girişi yapılamaz.',
    'prohibited_unless'    => ':other alanı :value değerlerinden birisi değilse :attribute alanına veri girişi yapılamaz.',
    'prohibits'            => ':attribute alanı :other alanının mevcut olmasını yasaklar.',
    'regex'                => ':attribute biçimi geçersiz.',
    'relatable'            => 'Bu :attribute bu kaynakla ilişkili olmayabilir.',
    'required'             => ':attribute mutlaka gereklidir.',
    'required_if'          => ':attribute :other :value değerine sahip olduğunda mutlaka gereklidir.',
    'required_unless'      => ':attribute :other :values değerlerinden birine sahip olmadığında mutlaka gereklidir.',
    'required_with'        => ':attribute :values varken mutlaka gereklidir.',
    'required_with_all'    => ':attribute herhangi bir :values değeri varken mutlaka gereklidir.',
    'required_without'     => ':attribute :values yokken mutlaka gereklidir.',
    'required_without_all' => ':attribute :values değerlerinden herhangi biri yokken mutlaka gereklidir.',
    'same'                 => ':attribute ile :other aynı olmalıdır.',
    'size'                 => [
        'array'   => ':attribute mutlaka :size ögeye sahip olmalıdır.',
        'file'    => ':attribute mutlaka :size kilobayt olmalıdır.',
        'numeric' => ':attribute mutlaka :size olmalıdır.',
        'string'  => ':attribute mutlaka :size karakterli olmalıdır.',
    ],
    'starts_with'          => ':attribute sadece şu değerlerden biriyle başlayabilir: :values.',
    'string'               => ':attribute mutlaka bir metin olmalıdır.',
    'timezone'             => ':attribute mutlaka geçerli bir saat dilimi olmalıdır.',
    'unique'               => ':attribute zaten alınmış.',
    'uploaded'             => ':attribute yüklemesi başarısız.',
    'url'                  => ':attribute biçimi geçersiz.',
    'uuid'                 => ':attribute mutlaka geçerli bir UUID olmalıdır.',
    'custom'               => [
        'niteleyici-adi' => [
            'kural-adi' => 'Özel doğrulama mesajı',
        ],
    ],
];
