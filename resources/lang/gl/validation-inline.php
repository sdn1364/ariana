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
    'accepted'             => 'Este campo debe ser aceptado.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'Este non é un URL válido.',
    'after'                => 'Esta debe ser unha data despois de :date.',
    'after_or_equal'       => 'Esta debe ser unha data despois de que ou igual a :date.',
    'alpha'                => 'Este campo só pode conter letras.',
    'alpha_dash'           => 'Este campo só pode conter letras, números, trazos e guións baixos.',
    'alpha_num'            => 'Este campo só pode conter letras e números.',
    'array'                => 'Este campo debe ser un array.',
    'attached'             => 'Neste campo xa está conectado.',
    'before'               => 'Esta debe ser unha data antes de :date.',
    'before_or_equal'      => 'Esta debe ser unha data antes ou igual a :date.',
    'between'              => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'              => 'Este campo debe ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmación non se corresponde.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Esta non é unha válida a data.',
    'date_equals'          => 'Esta debe ser unha data igual a :date.',
    'date_format'          => 'Este non coincide co formato :format.',
    'declined'             => 'This value must be declined.',
    'declined_if'          => 'This value must be declined when :other is :value.',
    'different'            => 'Este valor debe ser diferente de :other.',
    'digits'               => 'Este debe ser :digits díxitos.',
    'digits_between'       => 'Este debe ser entre :min e :max díxitos.',
    'dimensions'           => 'Esta imaxe ten válido dimensións.',
    'distinct'             => 'Neste campo ten un dobre valor.',
    'email'                => 'Este debe ser un enderezo de correo electrónico válido.',
    'ends_with'            => 'Este debe acabar con un dos seguintes: :values instrucións.',
    'exists'               => 'O valor seleccionado é válido.',
    'file'                 => 'O contido debe ser un arquivo.',
    'filled'               => 'Este campo debe ter un valor.',
    'gt'                   => [
        'array'   => 'The content must have more than :value items.',
        'file'    => 'The file size must be greater than :value kilobytes.',
        'numeric' => 'The value must be greater than :value.',
        'string'  => 'The string must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'The content must have :value items or more.',
        'file'    => 'The file size must be greater than or equal :value kilobytes.',
        'numeric' => 'The value must be greater than or equal :value.',
        'string'  => 'The string must be greater than or equal :value characters.',
    ],
    'image'                => 'Esta debe ser unha imaxe.',
    'in'                   => 'O valor seleccionado é válido.',
    'in_array'             => 'Este valor non existe en :other.',
    'integer'              => 'Este debe ser un número enteiro.',
    'ip'                   => 'Este debe ser un enderezo IP válido.',
    'ipv4'                 => 'Este debe ser un válido enderezo IPv4.',
    'ipv6'                 => 'Este debe ser un válido enderezo IPv6.',
    'json'                 => 'Este debe ser un válido JSON cadea.',
    'lt'                   => [
        'array'   => 'The content must have less than :value items.',
        'file'    => 'The file size must be less than :value kilobytes.',
        'numeric' => 'The value must be less than :value.',
        'string'  => 'The string must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'The content must not have more than :value items.',
        'file'    => 'The file size must be less than or equal :value kilobytes.',
        'numeric' => 'The value must be less than or equal :value.',
        'string'  => 'The string must be less than or equal :value characters.',
    ],
    'max'                  => [
        'array'   => 'The content may not have more than :max items.',
        'file'    => 'The file size may not be greater than :max kilobytes.',
        'numeric' => 'The value may not be greater than :max.',
        'string'  => 'The string may not be greater than :max characters.',
    ],
    'mimes'                => 'Este debe ser un arquivo de tipo: :values.',
    'mimetypes'            => 'Este debe ser un arquivo de tipo: :values.',
    'min'                  => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'O valor debe ser un múltiplo de :value',
    'not_in'               => 'O valor seleccionado é válido.',
    'not_regex'            => 'Este formato é válido.',
    'numeric'              => 'Este debe ser un número.',
    'password'             => 'O contrasinal é incorrecto.',
    'present'              => 'Este campo debe estar presente.',
    'prohibited'           => 'Este campo está prohibida.',
    'prohibited_if'        => 'Este campo está prohibida cando :other é :value.',
    'prohibited_unless'    => 'Este campo está prohibido, a menos que :other é en :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Este formato é válido.',
    'relatable'            => 'Este campo pode non ser asociado a este recurso.',
    'required'             => 'Este campo é obrigatorio.',
    'required_if'          => 'Este campo é obrigatorio cando :other é :value.',
    'required_unless'      => 'Este campo é obrigatorio, salvo que :other é en :values.',
    'required_with'        => 'Este campo é obrigatorio cando :values está presente.',
    'required_with_all'    => 'Este campo é obrigatorio cando :values están presentes.',
    'required_without'     => 'Este campo é obrigatorio cando :values non está presente.',
    'required_without_all' => 'Este campo é obrigatorio cando ningún dos :values están presentes.',
    'same'                 => 'O valor de este campo debe corresponder a un de :other.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with'          => 'Este debe comezar con un dos seguintes: :values.',
    'string'               => 'Esta debe ser unha cadea.',
    'timezone'             => 'Este debe ser un válido zona.',
    'unique'               => 'Isto xa foron tomadas.',
    'uploaded'             => 'Este non puido subir.',
    'url'                  => 'Este formato é válido.',
    'uuid'                 => 'Este debe ser un válido UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
