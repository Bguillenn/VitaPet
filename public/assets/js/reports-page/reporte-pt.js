
//el codigo anychhart.. es para inicializarlo apenas se abre la pagina
//yo lo desactive para que funcione con un boton ve si quieres cambiarlo
//anychart.onDocumentReady(function () {
    // Creacion de los datos
function draw3(){
    var data = [
      {name: "", children: [
        {name: "Cães", children: [
          {name: "Cerro Colorado",children: [
              {name:"Desparasitação: 500 cães", children:[
                {name:"Custo (Soles): 1500"},
                {name:"Ganho (Soles): 3000"},
              ]},
              {name:"Lava: 900 cães", children:[
                {name:"Custo (Soles): 1500"},
                {name:"Ganho (Soles): 3000"},
              ]},
              {name:"Operaciones: 200 perros", children:[
                {name:"Custo (Soles): 1500"},
                {name:"Ganho (Soles): 3000"},
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

        {name: "Pássaros",children: [
          {name: "Cerro Colorado"},
          {name: "Alto Selva Alegre"},
          {name: "Paucarpata"},
          {name: "Cercado"},
        ]},


        {name: "Outros",children:[
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
    chart.container("container");
    // Lo dibujamos
    chart.draw();
     var elboton = document.getElementById('boton');
     elboton.style.visibility = 'hidden';

};