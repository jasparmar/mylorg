<!--begin::Javascript-->
<script>
    var hostUrl = "";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('backend/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('backend/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('backend/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('backend/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('backend/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('backend/js/custom/widgets.js') }}"></script>
<script src="{{ asset('backend/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('backend/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('backend/js/custom/utilities/modals/users-search.js') }}"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
