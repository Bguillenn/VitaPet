
//el codigo anychhart.. es para inicializarlo apenas se abre la pagina
//yo lo desactive para que funcione con un boton ve si quieres cambiarlo
//anychart.onDocumentReady(function () {
    // Creacion de los datos
function draw2(){
    var data = [
      {name: "", children: [
        {name: "Dogs", children: [
          {name: "Cerro Colorado",children: [
              {name:"Deworming: 500 dogs", children:[
                {name:"Cost (Soles): 1500 "},
                {name:"Gain (Soles): 3000"},
              ]},
              {name:"Washes: 900 dogs", children:[
                {name:"Cost (Soles): 1500 "},
                {name:"Gain (Soles): 3000"},
              ]},
              {name:"Operations: 200 dogs", children:[
                {name:"Cost (Soles): 1500 "},
                {name:"Gain (Soles): 3000"},
              ]},

          ]},
          {name: "Alto Selva Alegre"},
          {name: "Paucarpata"},
          {name: "Cercado"},
        ]},

        {name: "Cats", children: [
          {name: "Cerro Colorado"},
          {name: "Alto Selva Alegre"},
          {name: "Paucarpata"},
          {name: "Cercado"},
        ]},

        {name: "Birds",children: [
          {name: "Cerro Colorado"},
          {name: "Alto Selva Alegre"},
          {name: "Paucarpata"},
          {name: "Cercado"},
        ]},


        {name: "Others",children:[
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