<?php

namespace App\DataTables;

use App\Models\Service;
use App\Models\SoftwareSolutionServices;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SolutionServicesDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($service) {
                $name = app()->getLocale() === 'ar' ? $service->name_ar : $service->name_en;
                return view('components.datatable.actions',
                    [
                        'routeEdit'=>'SolutionServices.edit',
                        'routeDelete'=>'SolutionServices.destroy',
                        'routeSoftwareSolutionServices' => null,
                        'id' => $service->id,
                        'name' => $name
                    ]);
            })

            ->addColumn('created_at', function ($service) {
                return $service->created_at->format('Y-m-d H:i');
            })
            ->rawColumns(['action'])
            ->filterColumn('created_at', function ($query, $keyword) {
                $query->where(function ($query) use ($keyword) {
                    $query->where('created_at', 'like', '%' . $keyword . '%');
                });
            })
            ->orderColumn('created_at', function ($query, $order) {
                $query->orderBy('created_at', $order);
            });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(SoftwareSolutionServices $model , Request $request): QueryBuilder
    {
        $id = $request->route('id');
        $query = $id ? $model->newQuery()->where('service_details_id', $id) : $model->newQuery();
        return $query->latest();
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
                ->title(__('dataTable.name')) // Translate the title
                ->addClass('text-center align-middle'),

            Column::make('desc_' . (App::getLocale() === 'ar' ? 'ar' : 'en'))
                ->title(__('dataTable.description')) // Translate the title
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
        return 'SolutionServices_' . date('YmdHis');
    }
}
