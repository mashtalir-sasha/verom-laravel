<?php

use App\Jbicatalogs;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Jbicatalogs::class, function (ModelConfiguration $model) {

    $model->setTitle('Каталог ЖБИ');
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
            ]),
            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('nameUkr', 'Заголовок')->required(),
                AdminFormElement::textarea('textUkr', 'Опис (перенос строки через <br>)')->required(),
                AdminFormElement::wysiwyg('tableUkr', 'Таблиця')->required(),
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
                        AdminFormElement::image('image', 'Фото')->required(),
                        AdminFormElement::text('numb', 'Номер п/п в формате ХХ')->required(),
                        AdminFormElement::text('price', 'Ссылка на прайс')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Jbicatalogs::class, 5)
    ->setIcon('fa fa-database');