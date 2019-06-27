<?php

use App\Steelcatalogs;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Steelcatalogs::class, function (ModelConfiguration $model) {

    $model->setTitle('Каталог Метал');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('numb')->setLabel('Номер п/п'),
            AdminColumn::text('name')->setLabel('Имя'),
            AdminColumn::text('created_at')->setLabel('Дата создания'),
            AdminColumn::text('updated_at')->setLabel('Дата изменения'),
        ]);
        return $display;
    });

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $tabs = AdminDisplay::tabbed([
            'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('name', 'Заголовок')->required(),
                AdminFormElement::textarea('text', 'Описание (перенос строки через <br>)')->required(),
                AdminFormElement::wysiwyg('table', 'Таблица')->required(),
                AdminFormElement::text('price', 'Цена')->required(),
                AdminFormElement::text('item1', 'Примечание 1')->required(),
                AdminFormElement::text('item2', 'Примечание 2')->required(),
            ]),
            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('nameUkr', 'Заголовок')->required(),
                AdminFormElement::textarea('textUkr', 'Опис (перенос строки через <br>)')->required(),
                AdminFormElement::wysiwyg('tableUkr', 'Таблиця')->required(),
                AdminFormElement::text('priceUkr', 'Ціна')->required(),
                AdminFormElement::text('item1Ukr', 'Примітка 1')->required(),
                AdminFormElement::text('item2Ukr', 'Примітка 2')->required(),
            ]),
        ]);

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () use ($tabs) {
                    return [
                        $tabs
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::text('numb', 'Номер п/п в формате ХХ')->required(),
                        AdminFormElement::text('link', 'Ссылка на прайс')->required(),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::image('image', 'Фото')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Steelcatalogs::class, 6)
    ->setIcon('fa fa-table');