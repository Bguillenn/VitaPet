
//el codigo anychhart.. es para inicializarlo apenas se abre la pagina
//yo lo desactive para que funcione con un boton ve si quieres cambiarlo
anychart.onDocumentReady(function () {
    // Creacion de los datos

    var data = [
      {name: "VitaPet", children: [
        {name: "Perros", children: [
          {name: "Cerro Colorado",children: [
              {name:"Desparasitación: 500 perros", children:[
                {name:"Costo (Soles) : 1500 "},
                {name:"Ganancia (Soles) : 3000 "},
              ]},
              {name:"Lavados: 900 perros", children:[
                {name:"Costo (Soles) : 1500 "},
                {name:"Ganancia (Soles) : 3000 "},
              ]},
              {name:"Operaciones: 200 perros", children:[
                {name:"Costo (Soles) : 1500 "},
                {name:"Ganancia (Soles) : 3000 "},
              ]},

          ]},
          {name: "Alto Selva Alegre"},
          {name: "Paucarpata"},
          {name: "Cercado"},
        ]},

        {name: "Gatos", children: [
          {name: "Cerro Colorado"},
          {name: "Alto Selva Alegre"},
          {name: "Paucarpata"},
          {name: "Cercado"},
        ]},

        {name: "Aves",children: [
          {name: "Cerro Colorado"},
          {name: "Alto Selva Alegre"},
          {name: "Paucarpata"},
          {name: "Cercado"},
        ]},


        {name: "Otros",children:[
          {name: "Cerro Colorado"},
          {name: "Alto Selva Alegre"},
          {name: "Paucarpata"},
          {name: "Cercado"},

        ]}
      ]}
    ];
    // creamos una variable para guardar los datos
    var chart = anychart.sunburst(data, "as-tree");
    //posicion de las letras
    chart.labels().position("circular");
    chart.background().enabled(false);
    // titulo
    chart.title().useHtml(true);
    // Elegimos el id de donde lo pondremos
    chart.container("dibujo");
    // Lo dibujamos
    chart.draw();
    //var elboton = document.getElementById('boton');
     //elboton.style.visibility = 'hidden';

});