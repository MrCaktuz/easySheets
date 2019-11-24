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

    'accepted' => 'Vous devez accepter :attribute.',
    'active_url' => ":attribute n'est pas un email valide.",
    'after' => ':attribute doit être une date après :date.',
    'after_or_equal' => ':attribute doit être une date après ou égale à :date.',
    'alpha' => ':attribute ne peut contenir que des lettres.',
    'alpha_dash' => ':attribute ne peut contenir que des lettres, nombres, tirets et underscores.',
    'alpha_num' => ':attribute ne peut contenir que des lettres, nombres.',
    'array' => ':attribute doit être un tableau.',
    'before' => ':attribute doit être une date avant :date.',
    'before_or_equal' => ':attribute doit être une date avant ou égale à :date.',
    'between' => [
        'numeric' => ':attribute doit être entre :min et :max.',
        'file' => ':attribute doit être entre :min et :max kilobytes.',
        'string' => ':attribute doit être entre :min et :max caractères.',
        'array' => ':attribute doit contenir :min et :max éléments.',
    ],
    'boolean' => ':attribute doit être vrai ou faux.',
    'confirmed' => ':attribute confirmation ne correspond pas.',
    'date' => ":attribute c'est pas une date valide.",
    'date_equals' => ':attribute doit être une date égale à :date.',
    'date_format' => ":attribute n'a pas le bon format :format.",
    'different' => ':attribute et :other doivent être différent.',
    'digits' => ':attribute doit être :digits chiffres.',
    'digits_between' => ':attribute doit être entre :min et :max chiffres.',
    'dimensions' => ":attribute n'a pas les bonne dimensions.",
    'distinct' => ':attribute a une valeur en double.',
    'email' => ':attribute doit être une adresse email valide.',
    'ends_with' => ':attribute doit se finir pas une des valeurs suivantes: :values',
    'exists' => ':attribute selectionné est invalide.',
    'file' => ':attribute doit être un fichier.',
    'filled' => ':attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => ':attribute doit être plus grand que :value.',
        'file' => ':attribute doit être plus grand que :value kilobytes.',
        'string' => ':attribute doit être plus grand que :value caractères.',
        'array' => ':attribute doit avoir plus de :value éléments.',
    ],
    'gte' => [
        'numeric' => ':attribute doit être plus grand ou égale à :value.',
        'file' => ':attribute doit être plus grand ou égale à :value kilobytes.',
        'string' => ':attribute doit être plus grand ou égale à :value caractères.',
        'array' => ':attribute doit avoir :value éléments ou plus.',
    ],
    'image' => ':attribute doit être une image.',
    'in' => ':attribute sélectionné est invalide.',
    'in_array' => ":attribute n'existe pas dans :other.",
    'integer' => ':attribute doit être un entier.',
    'ip' => ':attribute doit être une adresse IP valide.',
    'ipv4' => ':attribute doit être une adresse IPv4 valide.',
    'ipv6' => ':attribute doit être une adresse IPv6 valide.',
    'json' => ':attribute doit être un JSON valide.',
    'lt' => [
        'numeric' => ':attribute doit être moins que :value.',
        'file' => ':attribute doit être moins que :value kilobytes.',
        'string' => ':attribute doit être moins que :value caractères.',
        'array' => ':attribute doit contenir moins de :value éléments.',
    ],
    'lte' => [
        'numeric' => ':attribute doit être :value maximum.',
        'file' => ':attribute doit être :value kilobytes maximum.',
        'string' => ':attribute doit être :value caractères maximum.',
        'array' => ':attribute ne doit pas contenir plus de :value éléments.',
    ],
    'max' => [
        'numeric' => ':attribute ne doit pas être plus grand que :max.',
        'file' => ':attribute ne doit pas être plus grand que :max kilobytes.',
        'string' => ':attribute ne doit pas être plus grand que :max caractères.',
        'array' => ':attribute ne doit pas contenir plus de :max éléments.',
    ],
    'mimes' => ':attribute doit être un fichier de type: :values.',
    'mimetypes' => ':attribute doit être un fichier de type: :values.',
    'min' => [
        'numeric' => ':attribute doit être au moins :min.',
        'file' => ':attribute doit être au moins :min kilobytes.',
        'string' => ':attribute doit être au moins :min caractères.',
        'array' => ':attribute doit contenir :min éléments minimum.',
    ],
    'not_in' => ':attribute sélectionné est invalide.',
    'not_regex' => ':attribute format est invalide.',
    'numeric' => ':attribute doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => ':attribute doit être présent.',
    'regex' => ':attribute format est invalide.',
    'required' => ':attribute est requis.',
    'required_if' => ':attribute est requis quand :other est égale à :value.',
    'required_unless' => ':attribute est requis sauf si :other est égale à :values.',
    'required_with' => ':attribute est requis quand :values est présent.',
    'required_with_all' => ':attribute est requis quand :values sont présents.',
    'required_without' => ":attribute est requis quand :values n'est pas présent.",
    'required_without_all' => ':attribute est requis quand un de :values sont présents.',
    'same' => ':attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => ':attribute doit être :size.',
        'file' => ':attribute doit être :size kilobytes.',
        'string' => ':attribute doit être :size caractères.',
        'array' => ':attribute doit contenir :size éléments.',
    ],
    'starts_with' => ':attribute doit commencer par un des suivants: :values',
    'string' => ':attribute doit être une chaine de caractères.',
    'timezone' => ':attribute doit être une zone valide.',
    'unique' => ':attribute à déjà été pris.',
    'uploaded' => ":attribute n'a pas réussi à télécharger.",
    'url' => ':attribute format est invalide.',
    'uuid' => ':attribute doit être un UUID valide.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
