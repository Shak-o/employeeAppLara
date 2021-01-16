@extends('layout.main')
@section('content')

    <div class="addEmployee" id="addEmployee">
    <form method="PUT" action="{{route('employees.create')}}">
        @csrf
        <input name="name" placeholder="Name" id="name">
        <input name="surname" placeholder="Surname" id="surname">
        <input name="p_id" placeholder="Personal Id" id="p_id">
        <button type="submit" id="employee-save-butt">submit</button>
    </form>
    </div>
    <div class="content" id="content">
        <div id="employeeConteiner">
            <div class="showEmployee" id="showEmployee">

            </div>
        </div>
    </div>

    <script>
        document.querySelector('html').style.setProperty('--full-width',window.innerWidth+'px');
        document.querySelector('html').style.setProperty('--full-height',window.innerHeight+'px');
        $("document").ready(function (){

            $(".btn").hover(
                function (){
                    $(this).css(
                        "background-color","#a7c2dd"
                    );
                }, function (){
                    $(this).css(
                        "background-color","#648dc4"
                    )
                }
            );

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            function showEmployees() {
                $.ajax({
                    type: "GET",
                    url: "http://localhost:8000/employees",
                    success: function (response) {
                        for(var i = 0; i !==response.length; i++){
                            $("#employeeConteiner").append(
                                '<div class="showEmployee" id ="showEmployee"> '+
                                '<div id="name" class="field">'+ response[i]["name"] +'</div>  <div id="surname" class="field">'+response[i]["surname"]+'</div> <div id="p_id" class="field">'+response[i]["p_id"]+'</div> <div id="org_id" class="field">4</div> <div id="salary" class="field">5</div> <button type="submit" >edit</button> <button type="submit">delete</button>'
                                +'</div>'
                            );
                        }

                    }

                });
            }
            $.ajax({
                type: "GET",
                url: "http://localhost:8000/employees",
                success: function (response) {
                    for(var i = 0; i !==response.length; i++){
                        $("#employeeConteiner").append(
                            '<div class="showEmployee" id ="showEmployee"> '+
                            '<div id="name" class="field">'+ response[i]["name"] +'</div>  <div id="surname" class="field">'+response[i]["surname"]+'</div> <div id="p_id" class="field">'+response[i]["p_id"]+'</div> <div id="org_id" class="field">4</div> <div id="salary" class="field">5</div> <button type="submit" >edit</button> <button type="submit">delete</button>'
                            +'</div>'
                        );
                    }

                }

            });

            $('#employee-save-butt').on('click',function (event){
                event.preventDefault();
                var name = $("#name").val();
                var surname = $("#surname").val();
                var p_id = $("#p_id").val();
                $.ajax({
                    url: '{{route("employees.store")}}',
                    type:'POST',
                    data:{
                        name:name,
                        surname:surname,
                        p_id:p_id,
                    },
                    success: function (data){
                        if (data.success){
                            $("#employeeConteiner").empty();
                            showEmployees();
                        }
                    },

                    error: function (){

                    },


                });
            });
        });
    </script>
@endsection
