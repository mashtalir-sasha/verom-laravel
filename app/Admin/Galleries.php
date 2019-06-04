<?php

use App\Galleries;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Galleries::class, function (ModelConfiguration $model) {

    $model->disableCreating();
    $model->disableDeleting();

    $model->setTitle('Галереии');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
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
                        AdminFormElement::images('images', 'Фото'),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Galleries::class, 3)
    ->setIcon('fa fa-file-image-o');