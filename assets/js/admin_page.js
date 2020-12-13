$(function() {
$('#inputState').click(function(event) {
    $.get('admin/userLastNames', (lastnames, status) => {
      if(status === "success") {
        lastnames = JSON.parse(lastnames);
        $('#inputState').empty().append($('<option></option>').text('Auswählen...'));
        for(let i = 0; i < lastnames.length; i++)
          $('#inputState').append($('<option></option>').text(lastnames[i].lastname).val(lastnames[i].lastname));
      }
    });
  });
});

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