function openpdf(valor) {
    var string = valor;
    var array = string.split("/");
    var opennef = array[0] + '/' + array[1] + '/' + array[2] + '/' + array[3] + '/' + array[4] + '/' + array[5] +
        '/' + array[6] + '/' + array[7] + '/' + 'NotasFiscais.pdf';
    // alert(array);
    // alert(array[8]);
    var myWindow = window.open(opennef, "", "width=860,height=820, right");
    var myWindow = window.open(valor, "", "width=660,height=820");
    // var myWindow = window.open( valor, "", "width=660,height=820");
    //  opennef(opennef);
}

function opennef(opennef) {
    var myWindow = window.open(opennef, "", "width=660,height=820");
}