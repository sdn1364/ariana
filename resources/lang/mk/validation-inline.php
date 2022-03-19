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
    'accepted'             => 'Ова поле мора да биде прифатено.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'Ова не е валидна URL-адреса.',
    'after'                => 'Ова мора да биде датум после :date.',
    'after_or_equal'       => 'Ова мора да биде датум кој е после или еднаков на :date.',
    'alpha'                => 'Ова поле може да содржи само букви.',
    'alpha_dash'           => 'Ова поле може да содржи само букви, бројки, долна црта и тире.',
    'alpha_num'            => 'Ова поле може да содржи само букви и бројки.',
    'array'                => 'Ова поле мора да биде низа.',
    'attached'             => 'Ова поле е веќе прикачен.',
    'before'               => 'Ова поле мора да биде датум пред :date.',
    'before_or_equal'      => 'Ова поле мора да биде датум пред или еднаков на :date.',
    'between'              => [
        'array'   => 'Ова поле мора да има помеѓу :min и :max број на елементи.',
        'file'    => 'Оваа датотека мора да биде помеѓу :min и :max килобајти.',
        'numeric' => 'Овој број мора да биде помеѓу :min и :max.',
        'string'  => 'Овој текст мора да биде со должина помеѓу :min и :max број на карактери.',
    ],
    'boolean'              => 'Ова поле мора да има вредност вистинито (true) или невистинито (false).',
    'confirmed'            => 'Ова поле не е потврдено.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Ова не е валиден датум.',
    'date_equals'          => 'Ова мора да биде датум еднаков на :date.',
    'date_format'          => 'Oва не одговара на форматот :format.',
    'declined'             => 'This value must be declined.',
    'declined_if'          => 'This value must be declined when :other is :value.',
    'different'            => 'Оваа вредност мора да биде различна од :other.',
    'digits'               => 'Ова мора да содржи :digits цифри.',
    'digits_between'       => 'Ова мора да има помеѓу :min и :max цифри.',
    'dimensions'           => 'Оваа слика има невалидни димензии.',
    'distinct'             => 'Ова поле има дупликат вредност.',
    'email'                => 'Ова мора да биде валидна e-mail адреса.',
    'ends_with'            => 'Ова мора да завршува со една од следните вредности: :values.',
    'exists'               => 'Избраната вредност не е валидна.',
    'file'                 => 'Содржината мора да биде датотека.',
    'filled'               => 'Ова поле мора да има вредност.',
    'gt'                   => [
        'array'   => 'Ова поле мора да има повеќе од :value елементи.',
        'file'    => 'Оваа датотека мора да биде поголема од :value килобајти.',
        'numeric' => 'Овој број мора да биде поголем од :value.',
        'string'  => 'Овој текст мора да има биде со должина поголема од :value карактери.',
    ],
    'gte'                  => [
        'array'   => 'Ова поле мора да има :value елементи или повеќе.',
        'file'    => 'Оваа датотека мора да биде поголема или еднаква на :value килобајти.',
        'numeric' => 'Овој број мора да биде поголем или еднаков на :value.',
        'string'  => 'Овој текст мора да биде со должина поголема или еднаква на :value карактери.',
    ],
    'image'                => 'Ова мора да биде слика.',
    'in'                   => 'Избраната вредност не е валидна.',
    'in_array'             => 'Оваа вредност не постои во :other.',
    'integer'              => 'Ова мора да биде цел број.',
    'ip'                   => 'Ова мора да биде валидна IP адреса.',
    'ipv4'                 => 'Ова мора да биде валидна IPv4 адреса.',
    'ipv6'                 => 'Ова мора да биде валидна IPv6 адреса.',
    'json'                 => 'Ова мора да биде валиден JSON објект.',
    'lt'                   => [
        'array'   => 'Ова поле мора да има помалку од :value елементи.',
        'file'    => 'Оваа датотека мора да биде помала од :value килобајти.',
        'numeric' => 'Овој број мора да биде помал од :value.',
        'string'  => 'Овој текст мора да биде со должина помала од :value карактери.',
    ],
    'lte'                  => [
        'array'   => 'Ова поле мора да има :value елементи или помалку.',
        'file'    => 'Оваа датотека мора да биде помала или еднаква на :value килобајти.',
        'numeric' => 'Овој број мора да биде помал или еднаков на :value.',
        'string'  => 'Овој текст мора да биде со должина помала или еднаква на :value карактери.',
    ],
    'max'                  => [
        'array'   => 'Ова поле не може да има повеќе од :max елементи.',
        'file'    => 'Оваа датотека не може да биде поголема од :max килобајти.',
        'numeric' => 'Овој број не може да биде поголем од :max.',
        'string'  => 'Овој текст не може да биде со должина поголема од :max карактери.',
    ],
    'mimes'                => 'Ова мора да биди датотека од тип: :values.',
    'mimetypes'            => 'Ова мора да биди датотека од тип: :values.',
    'min'                  => [
        'array'   => 'Ова поле мора да има најмалку :min елементи.',
        'file'    => 'Оваа датотека мора да биде најмалку :min килобајти.',
        'numeric' => 'Овој број мора да биде најмалку :min.',
        'string'  => 'Овој текст мора да биде со должина најмалку од :min карактери.',
    ],
    'multiple_of'          => 'Оваа вредност мора да биде повеќекратна вредност од :value',
    'not_in'               => 'Избраната вредност не е валидна.',
    'not_regex'            => 'Овој формат не е валиден.',
    'numeric'              => 'Ова мора да биде број.',
    'password'             => 'Лозинката не е точна.',
    'present'              => 'Ова поле мора да биде присутно.',
    'prohibited'           => 'Ова поле е забрането.',
    'prohibited_if'        => 'Ова поле е забрането кога :other е :value.',
    'prohibited_unless'    => 'Ова поле е забранета освен ако не :other е во :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Овој формат не е валиден.',
    'relatable'            => 'Ова поле може да не биде поврзана со овој ресурс.',
    'required'             => 'Ова поле е задолжително.',
    'required_if'          => 'Ова поле е задолжително кога :other е :value.',
    'required_unless'      => 'Ова поле е задолжително освен кога :other е во :values.',
    'required_with'        => 'Ова поле е задолжително кога :values постои.',
    'required_with_all'    => 'Ова поле е задолжително кога :values постојат.',
    'required_without'     => 'Ова поле е задолжително кога не се присутни :values.',
    'required_without_all' => 'Ова поле е задолжително кога ниту една вредност од следните: :values се присутни.',
    'same'                 => 'Вредноста на ова поле мора да одговара на вредностна од :other.',
    'size'                 => [
        'array'   => 'Ова поле мора да има :size елементи.',
        'file'    => 'Оваа датотека мора да биде :size килобајти.',
        'numeric' => 'Овој број мора да биде :size.',
        'string'  => 'Овој текст мора да биде со должина од :size карактери.',
    ],
    'starts_with'          => 'Ова поле мора да започнува со една од следните вредности: :values.',
    'string'               => 'Ова поле мора да биде текст.',
    'timezone'             => 'Ова поле мора да биде валидна временска зона.',
    'unique'               => 'Внесената вредност веќе постои.',
    'uploaded'             => 'Грешка при прикачување.',
    'url'                  => 'Овој формат не е валиден.',
    'uuid'                 => 'Ова поле мора да биде валиден УУИД.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
