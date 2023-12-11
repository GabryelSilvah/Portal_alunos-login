
let nota1 = document.querySelector('#nota1')
let nota2 = document.querySelector('#nota2')
let nota3 = document.querySelector('#nota3')
let nota4 = document.querySelector('#nota4')


function bimestre1() {
    let input = nota1.value
    if (input == "") {
        document.querySelector('#status_preliminar').innerHTML = 'Nenhuma nota inserida no 1° bimestre'
        document.querySelector('#status_preliminar').setAttribute("class", "Amarelo");
    }
    else if (input != '' & input >= 5) {
        document.querySelector('#status_preliminar').innerHTML = 'Você está aprovado(a) no 1° bimestre';
        document.querySelector('#status_preliminar').setAttribute("class", "Verde")
    }
    else if (input != '' & input < 5) {
        document.querySelector('#status_preliminar').innerHTML = 'Você está reprovado(a) no 1° bimestre';
        document.querySelector('#status_preliminar').setAttribute("class", "Vermelho")
    }
}
function bimestre2() {
    let input = nota2.value
    if (nota1.value != '' & input == '') {
        document.querySelector('#status_preliminar2').innerHTML = 'Nenhuma nota inserida no 2° bimestre'
        document.querySelector('#status_preliminar2').setAttribute("class", "Amarelo");
    }
    else if (input != '' & input >= 5) {
        document.querySelector('#status_preliminar2').innerHTML = 'Você está aprovado(a) no 2° bimestre';
        document.querySelector('#status_preliminar2').setAttribute("class", "Verde")
    }
    else if (input != '' & input < 5) {
        document.querySelector('#status_preliminar2').innerHTML = 'Você está reprovado(a) no 2° bimestre';
        document.querySelector('#status_preliminar2').setAttribute("class", "Vermelho")
    }
    else{
        document.querySelector('#status_preliminar2').innerHTML = '';
        document.querySelector('#status_preliminar2').setAttribute("class", "Amarelo");
    }
}

function bimestre3() {
    let input = nota3.value
    if (nota2.value != '' && input == '') {
        document.querySelector('#status_preliminar3').innerHTML = 'Nenhuma nota inserida no 3° bimestre'
        document.querySelector('#status_preliminar3').setAttribute("class", "Amarelo");
    }
    else if (input != '' & input >= 5) {
        document.querySelector('#status_preliminar3').innerHTML = 'Você está aprovado(a) no 3° bimestre';
        document.querySelector('#status_preliminar3').setAttribute("class", "Verde")
    }
    else if (input != '' & input < 5) {
        document.querySelector('#status_preliminar3').innerHTML = 'Você está reprovado(a) no 3° bimestre';
        document.querySelector('#status_preliminar3').setAttribute("class", "Vermelho")
    }
    else{
        document.querySelector('#status_preliminar3').innerHTML = '';
        document.querySelector('#status_preliminar3').setAttribute("class", "Amarelo");
    }

}

function bimestre4() {
    let input = nota4.value
    if (nota3.value != '' & input == '') {
        document.querySelector('#status_preliminar4').innerHTML = 'Nenhuma nota inserida no 4° bimestre'
        document.querySelector('#status_preliminar4').setAttribute("class", "Amarelo");
    }
    else if (input != '' & input >= 5) {
        document.querySelector('#status_preliminar4').innerHTML = 'Você está aprovado(a) no 4° bimestre';
        document.querySelector('#status_preliminar4').setAttribute("class", "Verde")
    }
    else if (input != '' & input < 5) {
        document.querySelector('#status_preliminar4').innerHTML = 'Você está reprovado(a) no 4° bimestre';
        document.querySelector('#status_preliminar4').setAttribute("class", "Vermelho")
    }
    else{
        document.querySelector('#status_preliminar4').innerHTML = '';
        document.querySelector('#status_preliminar4').setAttribute("class", "Amarelo");
    }

}

function soma(a, b, c, d) {
    return Number(a) + Number(b) + Number(c) + Number(d)
}

function verificar() {
    const resultado = soma(nota1.value, nota2.value, nota3.value, nota4.value)

    document.querySelector('#status_final').innerHTML = resultado;
    console.log(resultado)


    if (nota1.value == "") {
        document.querySelector('#mensagem_final').innerHTML = 'Insira a sua nota 1° bimestre'
        document.querySelector('#mensagem_final').setAttribute("class", "Amarelo")
    }
    else if (nota2.value == "" || nota3.value == "" || nota4.value == "") {
        document.querySelector('#mensagem_final').innerHTML = 'Em andamento'
        document.querySelector('#mensagem_final').setAttribute("class", "Azul")
    }
    else if (resultado >= 20) {
        document.querySelector('#mensagem_final').innerHTML = 'Parabéns! Você está aprovado(a) no ano letivo'
        document.querySelector('#mensagem_final').setAttribute("class", "Verde")
    }
    else {
        document.querySelector('#mensagem_final').innerHTML = 'Você está reprovado(a) no ano letivo'
        document.querySelector('#mensagem_final').setAttribute("class", "Vermelho")
    }
}
