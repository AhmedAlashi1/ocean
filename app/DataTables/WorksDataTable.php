<?php

namespace App\DataTables;

use App\Models\Work;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class WorksDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($work) {
                $name = app()->getLocale() === 'ar' ? $work->title_ar : $work->title_en;
                return view('dashboard.works.actions',
                    ['id' => $work->id,
                        'routeEdit'=>'work.edit',
                        'routeDelete'=>'work.destroy' ,
                        'routeDisplayImages' => 'work.show' ,
                        'name' => $name]);
            })
            ->addColumn('status', function ($work) {
                return view('dashboard.works.status', [
                    'work' => $work ,
                    'type'=>'status' ,
                    'route'=>'update-work-status']);
            })
            ->addColumn('is_contact_us', function ($work) {
                return view('dashboard.works.status',
                    ['work' => $work ,
                        'type'=>'contact_us' ,
                        'route'=>'update-work-contactUs']);
            })
            ->addColumn('created_at', function ($work) {
                return $work->created_at->format('Y-m-d H:i');
            })
            ->addColumn('service_name', function ($work) {
                $name = app()->getLocale() === 'ar' ? $work->service->name_ar : $work->service->name_en;
                return $name;
            })
            ->rawColumns(['action'])
            ->filterColumn('created_at', function ($query, $keyword) {
                $query->where(function ($query) use ($keyword) {
                    $query->where('created_at', 'like', '%' . $keyword . '%');
                });
            })
            ->filterColumn('service', function ($query, $keyword) {
                $query->whereHas('service', function ($query) use ($keyword) {
                    $query->where(App::getLocale() === 'ar' ? 'name_ar' : 'name_en', 'like', '%' . $keyword . '%');
                });
            })
            ->orderColumn('created_at', function ($query, $order) {
                $query->orderBy('created_at', $order);
            })
            ->orderColumn('service', function ($query, $order) {
                $column = App::getLocale() === 'ar' ? 'services.name_ar' : 'services.name_en';
                $query->orderByRaw("(SELECT $column FROM services WHERE services.id = works.service_id) $order");
            });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Work $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('datatable')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(0, 'desc' )
            ->selectStyleSingle()
            ->language([
                'search' => __('dataTable.Search'),
                'lengthMenu' => __('dataTable.Show').' _MENU_ '.__('dataTable.Entries'),
                'zeroRecords' => __('dataTable.No matching records found'),
                'info' => __('dataTable.Showing').' _START_ '.__('dataTable.to').' _END_ '.__('dataTable.of').' _TOTAL_ '.__('dataTable.entries'),
                'infoEmpty' => __('dataTable.No records available'),
                'infoFiltered' => __('dataTable.filtered from').' _MAX_ '.__('dataTable.total records'),
                'paginate' => [
                    'first' => __('dataTable.First'),
                    'last' => __('dataTable.Last'),
                    'next' => __('dataTable.Next'),
                    'previous' => __('dataTable.Previous'),
                ],
            ])
            ->lengthMenu([[5, 10, 25, 50, 100, 500], [5, 10, 25, 50, 100, 500]])// Customize the available options
            ->addTableClass('table rounded rounded-3 table-hover border');
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id')
                ->title(__('dataTable.id')), // Translate the title
            Column::make('title_' . (App::getLocale() === 'ar' ? 'ar' : 'en'))
                ->title(__('dataTable.title')) // Translate the title
                ->addClass('text-center align-middle'),
            Column::make('status')
                ->title(__('dataTable.Display')) // Translate the title
                ->addClass('text-center align-middle'),
            Column::make('is_contact_us')
                ->title(__('dataTable.is_contact_us')) // Translate the title
                ->addClass('text-center align-middle'),
            Column::make('service_name')
                ->title(__('dataTable.service_name')) // Translate the title
                ->addClass('text-center align-middle'),
            Column::make('created_at')
                ->title(__('dataTable.created_at')) // Translate the title
                ->addClass('text-center align-middle'),
            Column::computed('action')
                ->title(__('dataTable.action')) // Translate the title
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center align-middle')
                ->orderable(false)
                ->searchable(false),
        ];
    }


    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Works_' . date('YmdHis');
    }
}
