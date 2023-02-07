<?php

namespace App\Admin\Controllers;

use App\Admin\Extensions\NestedFormCustom;
use App\Http\Controllers\Controller;
use App\Models\Slide;
use App\Models\SlideTranslation;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SlideController extends Controller
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Slides';


    /**
     * Get content title.
     *
     * @return string
     */
    protected function title()
    {
        return $this->title;
    }

    /**
     * Index interface.
     *
     * @param Content $content
     *
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->title($this->title())
            ->description($this->description['index'] ?? __('List'))
            ->body($this->grid());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Slide());

        $grid->model()->orderBy('id', 'desc');

        $grid->column('id', 'ID')->sortable();
        $grid->column('name', __('Name'))->display(function () {
            return $this->translation?->name;
        });
        $grid->column('description', __('Description'))->display(function () {
            return $this->translation?->description;
        });
        $grid->column('order', __('Order'))->sortable();
        $grid->column('status', __('Status'))->display(function ($value) {
            return $value == 1 ? __('Active') : __('Inactive');
        });
        $grid->column('image', __('Image'))->display(function ($image) {
            if (empty($image)) {
                return __('No Image Found');
            }
            return sprintf("<img src='%s' height='100px'>", asset('storage') . DIRECTORY_SEPARATOR . $image);
        });
        $grid->column('created_at', __('Created at'))->sortable();

        $grid->actions(function ($actions) {
            $actions->disableView();
        });
        $grid->disableExport();
        $grid->disableRowSelector();

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
        $show = new Show(Slide::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('status', __('Status'));
        $show->field('order', __('Order'));
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
        $form = new Form(new Slide());

        $form->hasManyTranslated('translations', function (NestedFormCustom $form) {
            $form->hidden('locale')->rules('required');
            $form->text('name', __('Name'))->rules('required');
            $form->textarea('description', __('Description'))->rules('required');
            $form->textarea('short_description', __('Short Description'))->rules('required');
        });
        $form->image('image', 'Image')
            ->options([
                'minSize' => [
                    'width' => '1920',
                    'height' => '750'
                ],
            ])->rules('required');
        $form->number('order', __('Order'));
        $form->switch('status', __('Status'))->states([
            'on'  => ['value' => 1],
            'off' => ['value' => 0]
        ]);

        $form->tools(function (Form\Tools $tools) {
            $tools->disableView();
        });

        $form->footer(function ($footer) {
            $footer->disableViewCheck();
        });

        return $form;
    }

    /**
     * Create interface.
     *
     * @param Content $content
     *
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->title($this->title())
            ->description($this->description['create'] ?? __('Create'))
            ->body($this->form());
    }

    public function edit($id, Content $content)
    {
        return $content
            ->title($this->title())
            ->description($this->description['edit'] ?? __('Edit'))
            ->body($this->form()->edit($id));
    }

    public function store(Request $request)
    {
        if($this->form()->validationMessages($request->all())) {
            admin_toastr(__('Please complete all required fields'), 'error');

            throw new \Exception(__('Please complete all required fields'));
        }

        if($request->image) {
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('storage'), $imageName);
        }

        DB::transaction(function () use ($request, $imageName) {
            $translations = $request->get('translations');

            if($request->get('status') ===  'on') {
                $status = 1;
            }  else {
                $status = 0;
            }

            $id = Slide::query()->create([
                'status' => $status,
                'order' => $request->get('order'),
                'image' => $imageName
            ])->id;

            foreach ($translations as $translation) {
                SlideTranslation::query()->create([
                    'slide_id' => $id,
                    'locale' => $translation['locale'],
                    'name' => $translation['name'],
                    'description' => $translation['description'],
                    'short_description' => $translation['short_description']
                ]);
            }
        });
        admin_toastr('Success');

        return redirect()->route('admin.slides.index');

    }

    public function update(int $id, Request $request)
    {
        if($this->form()->validationMessages($request->all())) {
            admin_toastr(__('Please complete all required fields'), 'error');

            throw new \Exception(__('Please complete all required fields'));
        }

        if($request->file('image')) {
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('storage'), $imageName);
        } else {
            $slide = Slide::query()->whereId($id)->first();

            $imageName = $slide->image;
        }

        try {
            DB::transaction(function () use ($request, $id, $imageName) {
                $translations = $request->get('translations');

                if($request->get('status') ===  'on') {
                    $status = 1;
                }  else {
                    $status = 0;
                }

                Slide::query()->whereId($id)->update([
                    'status' => $status,
                    'order' => $request->get('order'),
                    'image' => $imageName
                ]);

                foreach ($translations as $translation) {
                    $slideId = SlideTranslation::query()
                        ->where('slide_id', $id)
                        ->where('locale', $translation['locale'])
                        ->update([
                            'slide_id' => $id,
                            'locale' => $translation['locale'],
                            'name' => $translation['name'],
                            'description' => $translation['description'],
                            'short_description' => $translation['short_description']
                        ]);

                    if(!$slideId) {
                        SlideTranslation::query()->create([
                            'slide_id' => $id,
                            'locale' => $translation['locale'],
                            'name' => $translation['name'],
                            'description' => $translation['description'],
                            'short_description' => $translation['short_description']
                        ]);
                    }
                }
            });

            admin_toastr('Success');

            return redirect()->route('admin.slides.index');
        } catch (\Throwable $e) {
            admin_error('Error', $e->getMessage());

            return redirect()->route('admin.slides.index');
        }
    }

    public function show($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header(__('Slide'));
            $content->description(__('Detail'));

            $content->body(Admin::show(Slide::findOrFail($id), function (Show $show) {
                $show->field('id', 'ID');
                $show->field('created_at');
                $show->field('updated_at');
            }));
        });
    }

    public function destroy(string $ids)
    {
        try {
            $idsArr = array_map('intval', explode(',', $ids));

            Slide::destroy($idsArr);

            return response()->json([
                'message' => 'success'
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }
}
