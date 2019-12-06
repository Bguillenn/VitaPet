anychart.onDocumentReady(function () {
    // create column chart
    var chart = anychart.column();

    var dataSet = anychart.data.set([
['Baños(costo/ganancia)',1000, 3000],
['Desparasitacion(costo/ganancia)', 1200, 2000],
['Operaciones(costo/ganancia)', 3000, 6000],
['Medicinas(costo/ganancia)', 1000, 2500],
['Otros(costo/ganancia)', 2000, 4000]
    ]);

    // set chart title
    chart.title('Veterinaria San Juan');

    var seriesData_one = dataSet.mapAs({x: 0, value: 1});
    var seriesData_two = dataSet.mapAs({x: 0, value: 2});

    // create first series with mapped data
    var series_one = chart.column(seriesData_one);
    series_one.name('Florida');

    // set rendering settings
    series_one.rendering().point(drawer);

    var series_two = chart.column(seriesData_two);
    series_two.name('Texas');
    // set rendering settings
    series_two.rendering().point(drawer);

    // set container id for the chart and initiate chart drawing
    chart.container('dibujo').draw();
    chart.container('dibujo2').draw();
});

function drawer() {
    // if missing (not correct data), then skipping this point drawing
    if (this.missing) {
return;
    }

    // get shapes group
    var shapes = this.shapes || this.getShapesGroup(this.pointState);
    // calculate the left value of the x-axis
    var leftX = this.x - this.pointWidth / 2;
    // calculate the right value of the x-axis
    var rightX = leftX + this.pointWidth;
    // calculate the half of point width
    var rx = this.pointWidth / 2;

    shapes['path']
    // resets all 'line' operations
    .clear()
    // draw column with rounded edges
    .moveTo(leftX, this.zero)
    .lineTo(leftX, this.value + rx)
    .circularArc(leftX + rx, this.value + rx, rx, rx, 180, 180)
    .lineTo(rightX, this.zero)
    // close by connecting the last point with the first straight line
    .close();
}