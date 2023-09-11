<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Requestforms;

class Requestform extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Requestforms';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Requestforms());

        $grid->column('id', __('Id'));
        $grid->column('fullname', __('Fullname'));
        $grid->column('contact', __('Contact'));
        $grid->column('email', __('Email'));
        $grid->column('c_address', __('C address'));
        $grid->column('car_model', __('Car model'));
        $grid->column('y_manifactured', __('Y manifactured'));
        $grid->column('service_name', __('Service name'));
        $grid->column('appointment', __('Appointment'));
        $grid->column('instructions', __('Instructions'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Requestforms::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('fullname', __('Fullname'));
        $show->field('contact', __('Contact'));
        $show->field('email', __('Email'));
        $show->field('c_address', __('C address'));
        $show->field('car_model', __('Car model'));
        $show->field('y_manifactured', __('Y manifactured'));
        $show->field('service_name', __('Service name'));
        $show->field('appointment', __('Appointment'));
        $show->field('instructions', __('Instructions'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Requestforms());

        $form->text('fullname', __('Fullname'));
        $form->number('contact', __('Contact'));
        $form->email('email', __('Email'));
        $form->text('c_address', __('C address'));
        $form->text('car_model', __('Car model'));
        $form->number('y_manifactured', __('Y manifactured'));
        $form->text('service_name', __('Service name'));
        $form->date('appointment', __('Appointment'))->default(date('Y-m-d'));
        $form->text('instructions', __('Instructions'));

        return $form;
    }
}
