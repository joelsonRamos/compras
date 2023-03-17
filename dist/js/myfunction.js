var data = new Date();
var mes = String(data.getMonth() + 1).padStart(2, '0');
var ano = data.getFullYear()
dataAtual =  mes+'/'+ano
$('#mes').text(dataAtual)

