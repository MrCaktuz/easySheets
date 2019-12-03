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

    'accepted' => 'Vous devez accepter ce champ.',
    'active_url' => "Ce champ n'est pas un email valide.",
    'after' => 'Ce champ doit être une date après :date.',
    'after_or_equal' => 'Ce champ doit être une date après ou égale à :date.',
    'alpha' => 'Ce champ ne peut contenir que des lettres.',
    'alpha_dash' => 'Ce champ ne peut contenir que des lettres, nombres, tirets et underscores.',
    'alpha_num' => 'Ce champ ne peut contenir que des lettres, nombres.',
    'array' => 'Ce champ doit être un tableau.',
    'before' => 'Ce champ doit être une date avant :date.',
    'before_or_equal' => 'Ce champ doit être une date avant ou égale à :date.',
    'between' => [
        'numeric' => 'Ce champ doit être entre :min et :max.',
        'file' => 'Ce champ doit être entre :min et :max kilobytes.',
        'string' => 'Ce champ doit être entre :min et :max caractères.',
        'array' => 'Ce champ doit contenir :min et :max éléments.',
    ],
    'boolean' => 'Ce champ doit être vrai ou faux.',
    'confirmed' => 'La confirmation ne correspond pas.',
    'date' => "Ce champ c'est pas une date valide.",
    'date_equals' => 'Ce champ doit être une date égale à :date.',
    'date_format' => "Ce champ n'a pas le bon format :format.",
    'different' => 'Ce champ et :other doivent être différent.',
    'digits' => 'Ce champ doit être :digits chiffres.',
    'digits_between' => 'Ce champ doit être entre :min et :max chiffres.',
    'dimensions' => "Ce champ n'a pas les bonne dimensions.",
    'distinct' => 'Ce champ a une valeur en double.',
    'email' => 'Ce champ doit être une adresse email valide.',
    'ends_with' => 'Ce champ doit se finir pas une des valeurs suivantes: :values',
    'exists' => 'Ce champ selectionné est invalide.',
    'file' => 'Ce champ doit être un fichier.',
    'filled' => 'Ce champ doit avoir une valeur.',
    'gt' => [
        'numeric' => 'Ce champ doit être plus grand que :value.',
        'file' => 'Ce champ doit être plus grand que :value kilobytes.',
        'string' => 'Ce champ doit être plus grand que :value caractères.',
        'array' => 'Ce champ doit avoir plus de :value éléments.',
    ],
    'gte' => [
        'numeric' => 'Ce champ doit être plus grand ou égale à :value.',
        'file' => 'Ce champ doit être plus grand ou égale à :value kilobytes.',
        'string' => 'Ce champ doit être plus grand ou égale à :value caractères.',
        'array' => 'Ce champ doit avoir :value éléments ou plus.',
    ],
    'image' => 'Ce champ doit être une image.',
    'in' => 'Ce champ sélectionné est invalide.',
    'in_array' => "Ce champ n'existe pas dans :other.",
    'integer' => 'Ce champ doit être un entier.',
    'ip' => 'Ce champ doit être une adresse IP valide.',
    'ipv4' => 'Ce champ doit être une adresse IPv4 valide.',
    'ipv6' => 'Ce champ doit être une adresse IPv6 valide.',
    'json' => 'Ce champ doit être un JSON valide.',
    'lt' => [
        'numeric' => 'Ce champ doit être moins que :value.',
        'file' => 'Ce champ doit être moins que :value kilobytes.',
        'string' => 'Ce champ doit être moins que :value caractères.',
        'array' => 'Ce champ doit contenir moins de :value éléments.',
    ],
    'lte' => [
        'numeric' => 'Ce champ doit être :value maximum.',
        'file' => 'Ce champ doit être :value kilobytes maximum.',
        'string' => 'Ce champ doit être :value caractères maximum.',
        'array' => 'Ce champ ne doit pas contenir plus de :value éléments.',
    ],
    'max' => [
        'numeric' => 'Ce champ ne doit pas être plus grand que :max.',
        'file' => 'Ce champ ne doit pas être plus grand que :max kilobytes.',
        'string' => 'Ce champ ne doit pas être plus grand que :max caractères.',
        'array' => 'Ce champ ne doit pas contenir plus de :max éléments.',
    ],
    'mimes' => 'Ce champ doit être un fichier de type: :values.',
    'mimetypes' => 'Ce champ doit être un fichier de type: :values.',
    'min' => [
        'numeric' => 'Ce champ doit être au moins :min.',
        'file' => 'Ce champ doit être au moins :min kilobytes.',
        'string' => 'Ce champ doit être au moins :min caractères.',
        'array' => 'Ce champ doit contenir :min éléments minimum.',
    ],
    'not_in' => 'Ce champ sélectionné est invalide.',
    'not_regex' => 'Ce champ format est invalide.',
    'numeric' => 'Ce champ doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Ce champ doit être présent.',
    'regex' => 'Ce champ format est invalide.',
    'required' => 'Ce champ est requis.',
    'required_if' => 'Ce champ est requis quand :other est égale à :value.',
    'required_unless' => 'Ce champ est requis sauf si :other est égale à :values.',
    'required_with' => 'Ce champ est requis quand :values est présent.',
    'required_with_all' => 'Ce champ est requis quand :values sont présents.',
    'required_without' => "Ce champ est requis quand :values n'est pas présent.",
    'required_without_all' => 'Ce champ est requis quand un de :values sont présents.',
    'same' => 'Ce champ et :other doivent correspondre.',
    'size' => [
        'numeric' => 'Ce champ doit être :size.',
        'file' => 'Ce champ doit être :size kilobytes.',
        'string' => 'Ce champ doit être :size caractères.',
        'array' => 'Ce champ doit contenir :size éléments.',
    ],
    'starts_with' => 'Ce champ doit commencer par un des suivants: :values',
    'string' => 'Ce champ doit être une chaine de caractères.',
    'timezone' => 'Ce champ doit être une zone valide.',
    'unique' => 'Ce champ à déjà été pris.',
    'uploaded' => "Ce champ n'a pas réussi à télécharger.",
    'url' => 'Ce champ format est invalide.',
    'uuid' => 'Ce champ doit être un UUID valide.',

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
