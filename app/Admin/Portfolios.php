<?php

use App\Portfolios;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Portfolios::class, function (ModelConfiguration $model) {

    $model->setTitle('Портфолио');
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
            ]),
            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('nameUkr', 'Заголовок')->required(),
                AdminFormElement::textarea('textUkr', 'Опис (перенос строки через <br>)')->required(),
            ]),
        ]);

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () use ($tabs) {
                    return [
                        AdminFormElement::text('numb', 'Номер п/п в формате ХХ')->required(),
                        $tabs,
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::image('image', 'Фото')->required()
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Portfolios::class, 2)
    ->setIcon('fa fa-suitcase');