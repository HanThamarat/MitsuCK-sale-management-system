@section('script')
<script>
    $(document).ready(function() {
        let condition = 0;

        $("#cost").click(function() {
            condition = 0;
            $("#cost").addClass("text-white");
            $("#cost").addClass("bg-orange-500");
            $("#cost").removeClass("text-orange-500");
            $("#cost").removeClass("bg-white");

            $("#sale").addClass("text-orange-500");
            $("#sale").addClass("bg-white");
            $("#promo").addClass("text-orange-500");
            $("#promo").addClass("bg-white");
        });

        $("#sale").click(function() {
            condition = 1;
            $("#sale").addClass("text-white");
            $("#sale").addClass("bg-orange-500");
            $("#sale").removeClass("text-orange-500");
            $("#sale").removeClass("bg-white");

            $("#cost").addClass("text-orange-500");
            $("#cost").addClass("bg-white");
            $("#promo").addClass("text-orange-500");
            $("#promo").addClass("bg-white");
        });

        $("#promo").click(function() {
            condition = 2;
            $("#promo").addClass("text-white");
            $("#promo").addClass("bg-orange-500");
            $("#promo").removeClass("text-orange-500");
            $("#promo").removeClass("bg-white");

            $("#cost").addClass("text-orange-500");
            $("#cost").addClass("bg-white");
            $("#sale").addClass("text-orange-500");
            $("#sale").addClass("bg-white");
        });
    })
</script>
@endsection