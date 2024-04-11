@php
    $start = 1;
    $end = 10;
@endphp
@for ($i = $start; $i <= $end; $i++)
    <tr class="tr">
        @for ($si = $start; $si <= $columns; $si++)
            <td class="td">
                <div class="loader"></div>
            </td>
        @endfor
    </tr>
@endfor
