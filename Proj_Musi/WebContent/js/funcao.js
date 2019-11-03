function espacoBranco(objeto) {
    let maskNome = /^[A-z]/;
    if (maskNome.test(objeto.value)) {
        return true;
    }
    alert("Preencha o campo do nome corretamente");
    return false;
}

function formatoEmail(objeto) {
    if (objeto.value.includes("@gmail.com")) {
        return true;
    }
    alert("Formato de E-mail incompativel")
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
                let html = JSON.stringify(objeto, 0, 4);
                $("#formato").text(html);
                return false;
            }
        );
    }
)

function data() {
    let dtnasc = document.getElementById("dtnasc").value, dtNovo = "";
    for (let x = 0; x <= dtnasc.length  ; x++) {
        dtNovo += dtnasc.charAt(x);
        if (x == 1) {
            dtNovo += "/";
        } else if (x == 3){
            dtNovo += "/";
        }
    }
    document.getElementById("dtnasc").value =dtNovo;
} 

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
    let e = document.getElementById("dtnasc");
    let t = document.getElementById("tCpf");
    let c = document.getElementById("tCurso")
    let armazena = "";
    if (espacoBranco(n) != true) {
        armazena += false;
    } else if (espacoBranco(e) != true) {
        armazena += false;
    } else if (formatoEmail(t) != true) {
        armazena += false;
    } else if (formatoCpf(c) != true) {
        armazena += false;
    }
    return armazena;
}