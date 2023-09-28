@extends('layouts.app')
@push('meta')
    <title>JavaScript</title>
@endpush
@section('content')
    @include('components.form')
@endsection
@push('js')
    <script>
        addEventListener("DOMContentLoaded", (event) => {
            document.getElementById("update").addEventListener('click', async function() {
                const button =  document.getElementById("update")
                const spans = Array.from(button.querySelectorAll("span"))
                const spinner = document.getElementById("spinner")
                button.classList.add("pointer-events-none")
                spans.map(span => span.classList.toggle("hidden"))
                spinner.classList.remove("hidden")
                fetch('http://localhost/api/users/store')
                    .then(function(response) {
                        return response.json()
                    })
                    .then(function(data) {
                        document.getElementById("all").innerText = data["all"]
                        document.getElementById("added").innerText = data["added"]
                        document.getElementById("updated").innerText = data["updated"]
                    })
                    .then(function () {
                        button.classList.remove("pointer-events-none")
                        spans.map(span => span.classList.toggle("hidden"))
                        spinner.classList.add("hidden")
                    })
            })
        })
    </script>
@endpush
