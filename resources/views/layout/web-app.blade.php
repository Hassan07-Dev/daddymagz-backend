<x-web-head :title="$title" />

    <!-- header -->
    <x-web-header />

    <!-- content -->
    @yield('content')

    <!-- footer -->
    <x-web-footer />

<!-- Optional JavaScript -->
<x-web-scripts />
<script>
    function loader() {
        Swal.fire({
            html: "Loading Data",
            didOpen: () => {
                Swal.showLoading()
            },
            showConfirmButton: false,
            allowOutsideClick: false
        });
    }

    //Loader Close Function
    function closeLoader() {
        Swal.close();
    }
</script>
@yield('script')
