function espacoBranco(objeto) {
    let maskNome = /^[A-z]/;
    if (maskNome.test(objeto.value)) {
        return true;
    }
    alert("Preencha o campo do nome corretamente");
    return false;
}


$(document).ready(
    function(){
        $("form").submit(
            function(){
                $("form").append("<p id = 'formato'> </p>");
                let objeto = {
                    "nome" : $("#tNome").val(),
                    "Email" : $("#tEmail").val(),
                    "Cpf" : $("#tCpf").val()
                    // "nome": $('#tNome').val(),  
                };
            }
        );
    }
)

function cpf() {
    let tCpf = document.getElementById("tCpf").value, cpfNovo = "";
    for (let x = 0; x <= tCpf.length  ; x++) {
        cpfNovo += tCpf.charAt(x);
        if (x == 2 || x == 5) {
            cpfNovo += ".";
        } else if (x == 8) {
            cpfNovo += "-";
        }
    }
    document.getElementById("tCpf").value = cpfNovo;
} 


function validar() {
    let n = document.getElementById("tNome");
    let e = document.getElementById("tEmail");
    let t = document.getElementById("tCpf");
    let armazena = "";
    if (espacoBranco(n) != true) {
        armazena += false;
    } else if (espacoBranco(e) != true) {
        armazena += false;
    } else if (formatoEmail(e) != true) {
        armazena += false;
    } else if (formatoCpf(t) != true) {
        armazena += false;
    }
    return armazena;
}