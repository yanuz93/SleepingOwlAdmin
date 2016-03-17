<?php

return [
    '404'      => 'Сторінка не знайдена.',
    'auth'     => [
        'title'            => 'Авторизація',
        'username'         => 'Логін',
        'password'         => 'Пароль',
        'login'            => 'Увійти',
        'logout'           => 'Вийти',
        'wrong - username' => 'Не вірний логін',
        'wrong - password' => 'або пароль',
    ],
    'ckeditor' => [
        'upload'        => [
            'success' => 'Файл був успішно завантажений: \\n - Розмір: :size кб \\n - ширина / висота: :width x :height',
            'error'   => [
                'common'              => 'Появилась помилка при спробі загрузити файл.',
                'wrong_extension'     => 'Файл ":file" має не вырний тип.',
                'filesize_limit'      => 'Максимальний розмір файлу: :size кб.',
                'imagesize_max_limit' => 'Ширина x Висота = :width x :height \\n Максимальний розмір зображеня повинен бути: :maxwidth x :maxheight',
                'imagesize_min_limit' => 'Ширина x Висота = :width x :height \\n Мінімальний розмір зображеня повинен бути: :minwidth x :minheight',
            ],
        ],
        'image_browser' => [
            'title'    => 'Вставка зображеня с сервера',
            'subtitle' => 'Виберіт зображеня для вставки',
        ],
    ],
    'table'    => [
        'new-entry'        => 'Новий запис',
        'edit'             => 'Редагувати',
        'restore'          => 'Востановити',
        'delete'           => 'Видалити',
        'delete - confirm' => 'Ви впевнені що хочете видалити цей запис ? ',
        'delete - error'   => 'Неможливо видалити цей запис.Потрібно спочатку видалити всі связані записи.',
        'moveUp'           => 'Підвинути вверх',
        'moveDown'         => 'Підвинути вниз',
        'error'            => 'В процесі обробки вашого запросу з\'явилась помилка',
        'filter'           => 'Показати подобні записи',
        'filter -goto'     => 'Перейти',
        'save'             => 'Сохранити',
        'cancel'           => 'Скасувати',
        'download'         => 'Завантажити',
        'all'              => 'Все',
        'processing'       => ' < i class="fa fa-5x fa-circle-o-notch fa-spin" ></i > ',
        'loadingRecords'   => 'Підождіть...',
        'lengthMenu'       => 'Відображати _MENU_ записів',
        'zeroRecords'      => 'Не найдено підходящих записів.',
        'info'             => 'Записи починаючи з _START_ до _END_ з _TOTAL_',
        'infoEmpty'        => 'Записи починаючи з 0 по 0 з 0',
        'infoFiltered'     => '(відфільтровано з _MAX_ записів)',
        'infoThousands'    => '',
        'infoPostFix'      => '',
        'search'           => 'Пошук: ',
        'emptyTable'       => 'Немає записів',
        'paginate'         => [
            'first'    => 'Перша',
            'previous' => ' & larr;',
            'next'     => ' & rarr;',
            'last'     => 'Остання',
        ],
    ],
    'editable' => [
        'checkbox' => [
            'checked'   => 'Да',
            'unchecked' => 'Нет',
        ],
    ],
    'select'   => [
        'nothing'     => 'Нічого не вибрано',
        'selected'    => 'вибрано',
        'placeholder' => 'Виберіть зі списку',
    ],
    'image'    => [
        'browse'         => 'Вибір зображеня',
        'browseMultiple' => 'Вибір зображеня',
        'remove'         => 'Видалити',
    ],
    'file'     => [
        'browse' => 'Вибір файлу',
        'remove' => 'Видалити',
    ],
];
