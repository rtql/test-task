@extends('layouts.app')
@push('meta')
    <title>jQuery</title>
@endpush
@section('content')
    @include('components.form')
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script>
        $("#update").click(function() {
            var button = $(this)
            var spinner =  $("#spinner")
            var spans = button.find("span")
            button.addClass("pointer-events-none")
            spinner.removeClass("hidden")
            spans.toggleClass("hidden")
            $.ajax({
                method: "get",
                url: "http://localhost/api/users/store",
                success: function(data) {
                    $("#all").text(data["all"])
                    $("#added").text(data["added"])
                    $("#updated").text(data["updated"])
                    button.removeClass("pointer-events-none")
                    spinner.addClass("hidden")
                    spans.toggleClass("hidden")
                }
            })
        })
    </script>
@endpush
