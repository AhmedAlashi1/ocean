<?php

namespace App\DataTables;

use App\Models\client_satisfactions;
use App\Models\Client_Satisfcation;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ClientSatisfcationsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($client_satisfy) {
                return view('components.datatable.actions', [
                    'routeEdit' => 'client_satisfactions.edit',
                    'routeDelete' => 'client_satisfactions.destroy',
                    'id' => $client_satisfy->id,
                    'name' => App::getLocale() === 'ar' ? $client_satisfy->name_ar : $client_satisfy->name_en // Dynamic language selection
                ]);
            })
            ->addColumn('ranked', function ($client_satisfy) {
                return view('dashboard.client_satisfactions.stars', ['stars' => $client_satisfy->ranked]);
            })
            ->addColumn('image', function ($client_satisfy) {
                return view('components.datatable.image', ['photo' => $client_satisfy->image]);
            })
            ->addColumn('created_at', function ($client_satisfy) {
                return $client_satisfy->created_at->format('Y-m-d H:i');
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


    public function query(Client_Satisfcation $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Get the query source of dataTable.
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
                ->title(__('dataTable.id'))
                ->addClass('text-center align-middle'),
            Column::make('image')
                ->title(__('dataTable.image'))
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center align-middle')
                ->orderable(false)
                ->searchable(false),
            Column::make('name_' . (App::getLocale() === 'ar' ? 'ar' : 'en'))
                ->title(__('dataTable.name'))
                ->addClass('text-center align-middle'),
            Column::make('nick_name_' . (App::getLocale() === 'ar' ? 'ar' : 'en'))
                ->title(__('dataTable.nick_name'))
                ->addClass('text-center align-middle'),
            Column::make('ranked')
                ->title(__('dataTable.rank'))
                ->width('50px')
                ->addClass('text-center align-middle'),
            Column::make('content_' . (App::getLocale() === 'ar' ? 'ar' : 'en'))
                ->title(__('dataTable.content'))
                ->addClass('text-center align-middle'),
            Column::make('created_at')
                ->title(__('dataTable.created_at'))
                ->addClass('text-center align-middle'),
            Column::computed('action')
                ->title(__('dataTable.action'))
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center align-middle')
                ->orderable(false)
                ->searchable(false)
                ->width('100px'),
        ];
    }


    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'ClientSatisfcations_' . date('YmdHis');
    }
}
