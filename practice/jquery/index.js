
$(document).ready(function () {

    function loadData() {

        $.ajax({
            type: "post",
            url: "php/show-table-data-ajax.php",
            success: function (data) {
                $("#student-data").html(data);
            }
        });
    }

    loadData();

    $("#hidenow").on("click", function (e) {
        $(this).hide();
    });

    $("#submit-data").on("click", function (e) {
        e.preventDefault();
        let fname = $("#first-name").val();
        let lname = $("#last-name").val();

        if (fname == '' || lname == '') {
            $("h3").html("");
            if (fname == '') {
                $("#fname-alert").html("Please type your first name.");

            } else if (lname == '') {
                $("#lname-alert").html("Please type your last name.");

            }

            if (fname != '')
                $("#fname-alert").html('');

            if (lname != '')
                $("#lname-alert").html('');

        } else {
            $.ajax({
                type: "post",
                url: "php/insert-ajax.php",
                data: { fn: fname, ln: lname },
                success: function (e) {
                    loadData();
                    $("form").trigger("reset");
                    $("h3").html("Your data submit success fully !");
                    $("#fname-alert").html('');
                    $("#lname-alert").html('');
                }
            });
        }

    });
})
