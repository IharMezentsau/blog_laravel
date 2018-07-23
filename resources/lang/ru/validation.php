<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ' :attribute должен быть принят.',
    'active_url'           => ' :attribute не верный URL.',
    'after'                => ' :attribute должен быть датой после :date.',
    'after_or_equal'       => ' :attribute должен быть датой после или эквивалентной :date.',
    'alpha'                => ' :attribute должен содержать только буквы.',
    'alpha_dash'           => ' :attribute должен содержать только буквы, числа, дефис.',
    'alpha_num'            => ' :attribute должен содержать только буквы и числа,.',
    'array'                => ' :attribute должен быть массивом.',
    'before'               => ' :attribute должен быть датой после :date.',
    'before_or_equal'      => ' :attribute должен быть датой раньше или эквивалентной :date.',
    'between'              => [
        'numeric' => ' :attribute должен быть между :min и :max.',
        'file'    => ' :attribute должен быть между :min и :max kilobytes.',
        'string'  => ' :attribute должен быть между :min и :max симболов.',
        'array'   => ' :attribute должен быть между :min и :max штук.',
    ],
    'boolean'              => ' :attribute поле должно быть true или false.',
    'confirmed'            => ' :attribute подтверждение не соответствует.',
    'date'                 => ' :attribute не верная дата.',
    'date_format'          => ' :attribute не соответствует формату :format.',
    'different'            => ' :attribute и :other должны отличаться.',
    'digits'               => ' :attribute должны быть :digits цифрами.',
    'digits_between'       => ' :attribute должен быть между :min и :max числами.',
    'dimensions'           => ' :attribute не допустимый размер изображения.',
    'distinct'             => ' :attribute поле имеет повторяющееся значение.',
    'email'                => ' :attribute должен соответствовать email.',
    'exists'               => 'Выбор :attribute не верен.',
    'file'                 => ' :attribute должен быть файлом.',
    'filled'               => ' :attribute поле должно быть заполнено.',
    'gt'                   => [
        'numeric' => ' :attribute должно быть больше чем :value.',
        'file'    => ' :attribute должно быть больше чем :value kilobytes.',
        'string'  => ' :attribute должно быть больше чем :value символов.',
        'array'   => ' :attribute должно быть больше чем :value штук.',
    ],
    'gte'                  => [
        'numeric' => ' :attribute должно быть больше чем или эквивалентно :value.',
        'file'    => ' :attribute должно быть больше чем или эквивалентно :value kilobytes.',
        'string'  => ' :attribute должно быть больше чем или эквивалентно :value символов.',
        'array'   => ' :attribute должно иметь :value штук или более.',
    ],
    'image'                => ' :attribute должен быть изображением.',
    'in'                   => ' выбранно :attribute не верно.',
    'in_array'             => ' :attribute поле не существует в :other.',
    'integer'              => ' :attribute должен быть integer.',
    'ip'                   => ' :attribute must be a valid IP address.',
    'ipv4'                 => ' :attribute must be a valid IPv4 address.',
    'ipv6'                 => ' :attribute must be a valid IPv6 address.',
    'json'                 => ' :attribute must be a valid JSON string.',
    'lt'                   => [
        'numeric' => ' :attribute должен быть меньше чем :value.',
        'file'    => ' :attribute должен быть меньше чем :value kilobytes.',
        'string'  => ' :attribute должен быть меньше чем :value символов.',
        'array'   => ' :attribute должен быть меньше чем :value штук.',
    ],
    'lte'                  => [
        'numeric' => ' :attribute должен быть меньше чем или эквивалентно :value.',
        'file'    => ' :attribute должен быть меньше чем или эквивалентно :value kilobytes.',
        'string'  => ' :attribute должен быть меньше чем или эквивалентно :value символов.',
        'array'   => ' :attribute должен быть больше чем или эквивалентно :value штук.',
    ],
    'max'                  => [
        'numeric' => ' :attribute должен быть не более чем :max.',
        'file'    => ' :attribute должен быть не более чем :max kilobytes.',
        'string'  => ' :attribute должен быть не более чем :max символов.',
        'array'   => ' :attribute должен быть не более чем :max штук.',
    ],
    'mimes'                => ' :attribute должен быть файлом type: :values.',
    'mimetypes'            => ' :attribute должен быть файлом type: :values.',
    'min'                  => [
        'numeric' => ' :attribute должен быть не менее :min.',
        'file'    => ' :attribute должен быть не менее :min kilobytes.',
        'string'  => ' :attribute должен быть не менее :min символов.',
        'array'   => ' :attribute должен быть не менее :min штук.',
    ],
    'not_in'               => 'Выбор :attribute не верен.',
    'not_regex'            => ' :attribute формат не верен.',
    'numeric'              => ' :attribute должен быть цифрой.',
    'present'              => ' :attribute поле должно присутствовать.',
    'regex'                => ' :attribute формат не верен.',
    'required'             => ' :attribute Поле, обязательное для заполнения.',
    'required_if'          => ' :attribute Поле, обязательное для заполнения, когда :other соответствует :value.',
    'required_unless'      => ' :attribute поле требуется, если :other находится в :values.',
    'required_with'        => ' :attribute Поле, обязательное для заполнения, когда :values настоящее.',
    'required_with_all'    => ' :attribute Поле, обязательное для заполнения, когда :values настоящее.',
    'required_without'     => ' :attribute Поле, обязательное для заполнения, когда :values не настоящее.',
    'required_without_all' => ' :attribute поле требуется, если ни один из :values не настоящий.',
    'same'                 => ' :attribute и :other должены соответствовать.',
    'size'                 => [
        'numeric' => ' :attribute должен быть :size.',
        'file'    => ' :attribute должен быть :size kilobytes.',
        'string'  => ' :attribute должен быть :size символов.',
        'array'   => ' :attribute должен содержать :size штук.',
    ],
    'string'               => ' :attribute должен быть строкой.',
    'timezone'             => ' :attribute должна быть действительной зоной.',
    'unique'               => ' :attribute уже был взят.',
    'uploaded'             => ' :attribute ошибка загрузки.',
    'url'                  => ' :attribute формат не верен.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
