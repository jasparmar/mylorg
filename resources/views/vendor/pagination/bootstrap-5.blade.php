@if ($paginator->hasPages())

    @php
        // echo "<pre>";
        // print_r($paginator);
        // exit();
    @endphp
    <div class="row">
        <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
            <div class="dataTables_length" id="kt_ecommerce_sales_table_length">
                <label>
                    <select name="kt_ecommerce_sales_table_length" aria-controls="kt_ecommerce_sales_table"
                        class="form-select form-select-sm form-select-solid custom_table_limit_length" fdprocessedid="fzgcjl">
                        @if ($paginator->total() < 10)
                            <option value="10">10</option>
                        @endif

                        @if ($paginator->total() > 25)
                            <option value="25">25</option>
                        @endif

                        @if ($paginator->total() > 50)
                            <option value="50">50</option>
                        @endif

                        @if ($paginator->total() > 100)
                            <option value="100">100</option>
                        @endif
                    </select>
                </label>
                <label>
                    <p class="small text-muted">
                        {!! __('Showing') !!}
                        <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                        {!! __('of') !!}
                        <span class="fw-semibold">{{ $paginator->total() }}</span>
                        {!! __('results') !!}
                    </p>
                </label>
            </div>
        </div>
        <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
            <div class="dataTables_paginate paging_simple_numbers" id="kt_ecommerce_sales_table_paginate">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="paginate_button page-item previous disabled" aria-disabled="true"
                            id="kt_ecommerce_sales_table_previous" aria-label="@lang('pagination.previous')">
                            <a href="javascript:void(0)" aria-controls="kt_ecommerce_sales_table" data-page="0"
                                tabindex="0" class="page-link">
                                <i class="previous"></i>
                            </a>
                        </li>
                    @else
                        {{-- {{ $paginator->previousPageUrl() }} --}}
                        <li class="paginate_button page-item previous" aria-disabled="true"
                            id="kt_ecommerce_sales_table_previous" aria-label="@lang('pagination.previous')">
                            <a href="" aria-label="@lang('pagination.previous')" aria-controls="kt_ecommerce_sales_table"
                                data-dt-idx="0" tabindex="0" class="page-link">
                                <i class="previous"></i>
                            </a>
                        </li>
                    @endif

                    {{-- Pagination Page Link --}}

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- {{ dd($element); }} --}}
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="paginate_button page-item disabled">
                                <a href="#" aria-controls="kt_ecommerce_sales_table" tabindex="0"
                                    class="page-link">{{ $element }}</a>
                            </li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="paginate_button page-item active">
                                        <a href="javascript:void(0)" aria-controls="kt_ecommerce_sales_table"
                                            data-page="{{ $page }}" tabindex="{{ $page }}"
                                            class="page-link">{{ $page }}</a>
                                    </li>
                                @else
                                    {{-- {{ $url }} --}}
                                    <li class="paginate_button page-item">
                                        <a href="javascript:void(0)" aria-controls="kt_ecommerce_sales_table"
                                            data-page="{{ $page }}" tabindex="{{ $page }}"
                                            class="page-link">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach



                    {{-- Next Page Link --}}
                    {{-- {{ $paginator->nextPageUrl() }} --}}
                    @if ($paginator->hasMorePages())
                        <li class="paginate_button page-item next" id="kt_ecommerce_sales_table_next">
                            <a href="javascript:void(0)" aria-controls="kt_ecommerce_sales_table"
                                data-page="{{ $page + 1 }}" tabindex="0" class="page-link"
                                aria-label="@lang('pagination.next')">
                                <i class="next"></i>
                            </a>
                        </li>
                    @else
                        <li class="paginate_button page-item next disabled" id="kt_ecommerce_sales_table_next">
                            <a href="#" aria-controls="kt_ecommerce_sales_table" data-page="" tabindex="0"
                                class="page-link" aria-label="@lang('pagination.next')">
                                <i class="next"></i>
                            </a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
@endif
