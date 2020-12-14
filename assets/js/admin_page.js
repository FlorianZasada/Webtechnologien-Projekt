$(function() {
  var open = false;

  //Event um das Klicken auf dem Select zu erkennne und die Daten aufzurfrischen
  $('#inputState').click(function(event) {
    open = !open;
    console.log(open)
    if(open)
      $.get('admin/userLastNames', function(lastnames) {
        lastnames = JSON.parse(lastnames);
        $('#inputState').empty().append($('<option></option>').text('Auswählen...'));

        for(var i = 0; i < lastnames.length; i++)
          $('#inputState').append($('<option></option>').text(lastnames[i].lastname).val(lastnames[i].lastname));
      });
    });

    //Event um direkt den ausgewählten User in die Tabelle zu laden
    $('#inputState').change(function(event) {
      $.post('admin/userByLastName', {lastname: $(this).val()}, function(data) {
        data = JSON.parse(data);
        var tableRow = $('tbody > tr');
        tableRow.empty();

        for(var field in data)
          tableRow.append($(field === 'id' ? '<th></th>' : '<td></td>').text(data[field]));
      });
    });
});

//"Normale" JavaScript Variante
/*var open = false;
var input = document.getElementById('inputState');

input.addEventListener("click", event => {
  open = !open;
  var el = event.target;
  var options = [];

  for(var i = 1; i < el.options.length; i++)
    options.push(el.options[i].innerHTML);
  
  if(open)
    ajaxRequest('GET', 'admin/userLastNames', '', function() {
      if(this.readyState === 4 && this.status === 200) {
        var lastnames = JSON.parse(this.responseText);
        for(var i = 0; i < lastnames.length; i++) {
          if(!options.includes(lastnames[i].lastname)) {
            var newElement = document.createElement('option');
            newElement.innerHTML = lastnames[i].lastname;
            el.appendChild(newElement);
          }
        }
      }
    });
});

function ajaxRequest(method, url, params, callback = () => {throw new Error('Bitte callback Funktion mitgeben')}) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = callback;
  xhttp.open(method, url + params, true);
  xhttp.send();
}*/