{{-- <div class="alert alert-primary d-flex align-items-center p-5">
    <i class="ki-duotone ki-shield-tick fs-2hx text-primary me-4">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
    <div class="d-flex flex-column">
        <h4 class="mb-1 text-primary">This is an alert</h4>
        <span>
            The alert component can be used to highlight certain parts of your page for higher content
            visibility.
        </span>
    </div>
</div> --}}
@if (session()->has('success'))
    <div class="alert alert-success d-flex align-items-center p-5">
        <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
        <div class="d-flex flex-column">
            <h4 class="mb-1 text-success">Success Alert</h4>
            @foreach (session('success') as $message)
                <span>{{ $message }}</span>
            @endforeach

        </div>
    </div>
@endif
{{--
<div class="alert alert-info d-flex align-items-center p-5">
    <i class="ki-duotone ki-shield-tick fs-2hx text-info me-4">
        <span class="path1"></span><span class="path2"></span></i>
    <div class="d-flex flex-column">
        <h4 class="mb-1 text-info">This is an alert</h4>
        <span>
            The alert component can be used to highlight certain parts of your page for higher content
            visibility.
        </span>
    </div>
</div>
<div class="alert alert-warning d-flex align-items-center p-5">
    <i class="ki-duotone ki-shield-tick fs-2hx text-warning me-4">
        <span class="path1"></span><span class="path2"></span></i>
    <div class="d-flex flex-column">
        <h4 class="mb-1 text-warning">This is an alert</h4>
        <span>
            The alert component can be used to highlight certain parts of your page for higher content
            visibility.
        </span>
    </div>
</div> --}}

@if ($errors->any())
    <div class="alert alert-danger d-flex align-items-center p-5">
        <i class="ki-duotone ki-shield-cross fs-2hx text-danger me-4">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
        </i>
        <div class="d-flex flex-column">
            <h4 class="mb-1 text-danger">Error</h4>
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span>
            @endforeach
        </div>
    </div>
@endif
