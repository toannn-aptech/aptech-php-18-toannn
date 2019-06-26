function loadDoc() {
  var xhttp = new XMLHttpRequest(); //class
  xhttp.onreadystatechange = function () {
    console.log(this.readyState);
    if (this.readyState == 4 && this.status == 200) {
      console.log(JSON.parse(this.responseText));

      var data = JSON.parse(this.responseText);

      //Tao table:
      function create(nameOfElement) {
        return document.createElement(nameOfElement);
      }

      var table = create('table');
      var thead = create('thead');
      table.appendChild(thead);

      var trow = create('tr');
      thead.appendChild(trow);

      var arrayTitle = ['ID', 'Name', 'Email', 'Password'];

      for (var i = 0; i < arrayTitle.length; i++) {
        var th = create('th');
        var thContent = document.createTextNode(arrayTitle[i]);
        th.appendChild(thContent);
        trow.appendChild(th);
      }

      var tbody = create('tbody');
      table.appendChild(tbody);

      for (var j = 0; j < data.users.length; j++) {
        var trow = create('tr');
        tbody.appendChild(trow);
        var arrayContent = [data.users[j].id, data.users[j].name, data.users[j].email, data.users[j].password];
        for (var i = 0; i < arrayContent.length; i++) {
          var td = create('td');
          var tdContentId = document.createTextNode(arrayContent[i]);
          td.appendChild(tdContentId);
          trow.appendChild(td);
        }
      }
      //Xoa du lieu trong div, Them table vao div
      document.getElementById("demo").innerHTML = '';
      document.getElementById("demo").appendChild(table);
    }
  };

  xhttp.open("GET", "https://namcoi.com/projects/users-crud-laravel/public/api/users", true);

  xhttp.send();
}