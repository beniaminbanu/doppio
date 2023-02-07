<?php

namespace App\Admin\Controllers;

use App\Models\Page;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Page';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Page());

        $grid->column('id', __('Id'));
        $grid->column('handler_controller', __('Handler controller'));
        $grid->column('handler_view', __('Handler view'));
        $grid->column('handler_action', __('Handler action'));
        $grid->column('order', __('Order'));
        $grid->column('status', __('Status'));
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
        $show = new Show(Page::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('handler_controller', __('Handler controller'));
        $show->field('handler_view', __('Handler view'));
        $show->field('handler_action', __('Handler action'));
        $show->field('order', __('Order'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Page());

        $form->text('handler_controller', __('Handler controller'));
        $form->text('handler_view', __('Handler view'));
        $form->text('handler_action', __('Handler action'));
        $form->number('order', __('Order'));
        $form->switch('status', __('Status'));

        return $form;
    }
}
