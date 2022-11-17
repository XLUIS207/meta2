$('#departamento').niceSelect('destroy');
$('#provincia').niceSelect('destroy');
$('#distrito').niceSelect('destroy');


$("#departamento").change(event => {
    $('#provincia').niceSelect('update');
    $.get(`/provincias/${event.target.value}`, (function (response) {
        $("#provincia").empty(),
        $("#distrito").empty(),
        $("#provincia").append('<option value="">Seleccionar</option></option>');
        response.forEach(element => {
            $("#provincia").append(`<option value=${element.id}>${element.descripcion}</option>`)
            console.log(element.id);
            console.log(element.descripcion);
        })
    }))
    // $('#provincia').niceSelect('update');
});

$("#provincia").change(event => {
    $.get(`/distritos/${event.target.value}`, (function (response) {
        $("#distrito").empty(),
        $("#distrito").append('<option value="">Seleccionar</option></option>'),
        response.forEach(element => {
            $("#distrito").append(`<option value=${element.id}>${element.descripcion}</option>`)
        })
    }))
});


// function selectDepartamento() {
//     var x = document.getElementById("mySelect").value;
//     document.getElementById("demo").innerHTML = "You selected: " + x;
//     $.get(`/provincias/${event.target.value}`, (function (response) {
//         $("#provincia").empty(),
//         $("#distrito").empty(),
//         $("#provincia").append('<option value="">Seleccionar</option></option>'),
//         response.forEach(element => {
//             $("#provincia").append(`<option value=${element.id}>${element.descripcion}</option>`)
//         })
//     }))
//   }
