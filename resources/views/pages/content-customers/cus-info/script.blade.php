@section('script')
<script>
    $(document).ready(function() {

        $("#formData").click(function(e) {
            e.preventDefault();
            let data = {};
            $("#DataCus").serializeArray().map(function(d) {
                data[d.name] = d.value;
            });

            $.ajax({
                url: '{{ route('customers.store') }}',
                type: 'POST',
                data: {
                    data: data,
                    pages: 'create',
                    _token: '{{ csrf_token() }}'
                },
                success: function(res) {
                    Swal.fire({
                        icon: 'success',
                        text: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    console.log(res);
                },
                error: function(err) {

                }
            })
        })
    })
</script>
@endsection