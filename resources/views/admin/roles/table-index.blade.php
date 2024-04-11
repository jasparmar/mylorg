@if ($items)
    @foreach ($items as $item)
        <tr>
            <td>
                {{ $item->id }}
            </td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->guard_name }}</td>
            <td>{{ $item->created_at }}</td>
            <td class="text-end">

                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" title="Tooltip on top">
                    <i class="ki-duotone ki-switch fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </a>

                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" title="Edit Role">
                    <i class="ki-duotone ki-pencil fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </a>

                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm" title="Delete Role">
                    <i class="ki-duotone ki-trash fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                    </i>
                </a>
            </td>
        </tr>
    @endforeach
@endif
