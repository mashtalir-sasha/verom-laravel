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

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('numb', 'Номер п/п в формате ХХ')->required(),
                        AdminFormElement::text('name', 'Заголовок')->required(),
                        AdminFormElement::text('link', 'Ссылка на прайс')->required(),
                        AdminFormElement::textarea('text', 'Описание (перенос строки через <br>)')->required(),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::text('price', 'Цена')->required(),
                        AdminFormElement::text('item1', 'Примечание 1')->required(),
                        AdminFormElement::text('item2', 'Примечание 2')->required(),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::image('image', 'Фото')->required(),
                        AdminFormElement::wysiwyg('table', 'Таблица')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Steelcatalogs::class, 6)
    ->setIcon('fa fa-table');