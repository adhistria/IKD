function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("datarent").style.display= "block";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
String.prototype.allReplace = function(obj) {
    var retStr = this;
    for (var x in obj) {
        retStr = retStr.replace(new RegExp(x, 'g'), obj[x]);
    }
    return retStr;
};

$('table').on('click','tbody tr', function (evt) {
    var $cell=$(evt.target).closest('td');
    if($cell.index() > 0){
        var $row = $(this).closest('tr');
        var rowID = $row.attr('data-id');
        console.log('rowId');
        console.log(rowID);
        var nopol = $row.find('.priority-1').text();
        var type = $row.find('.priority-2').text();
        var namaPemilik = $row.find('.priority-3').text();
        var namaPenyewa = $row.find('.priority-4').text();
        var thnPembuatan = $row.find('.priority-5').text();
        var thRegistrasi = $row.find('.priority-6').text();
        var noSPK =  ($row.find('.priority-7').text().allReplace({"-":""})).trim();
        var periodePemakaianKlien = $row.find('.priority-8').text();
        var periodePemilikMobil= $row.find('.priority-9').text();
        var sopir = $row.find('.priority-10').text().allReplace({"-":""}).trim();
        // var gaji = parseInt($row.find('.priority-11').text().allReplace({"Rp.":"",",":"","-":""}).trim()) ;
        var gaji = ($row.find('.priority-11').text().trim().allReplace({"Rp.":"",",":"","-":""}));
        if(gaji){
            gaji = parseInt(gaji);
        }else{
            gaji = "";
        }
        var hargaPenyewa = parseInt($row.find('.priority-12').text().allReplace({"Rp.":"",",":""})) ;
        var hargaKePemilik = parseInt($row.find('.priority-13').text().allReplace({"Rp.":"",",":""}));
        var gajiDriver = ($row.find('.priority-14').text().allReplace({"Rp.":"",",":"","-":""})).tr;
        if(gajiDriver){
            gajiDriver = parseInt(gajiDriver);
        }else{
            gajiDriver = "";
        }
        var feePihakKe3 = ($row.find('.priority-15').text().allReplace({"Rp.":"",",":"","-":""})).trim();
        if(feePihakKe3){
            parseInt(feePihakKe3);
        }else{
            feePihakKe3 = 0;
        }
        console.log(feePihakKe3);
        $('#modaltitle').val("Data ");
        $('#id').val(rowID);
        $('#noPolisi').val(nopol);
        $('#type').val(type);
        $('#namaPemilik').val(namaPemilik);
        $('#namaPenyewa').val(namaPenyewa);
        $('#thnPembuatan').val(thnPembuatan);
        $('#thRegistrasi').val(thRegistrasi);
        $('#noSPK').val(noSPK);
        $('#periodePemakaianKlien').val(periodePemakaianKlien);
        $('#periodePemilikMobil').val(periodePemilikMobil);
        $('#sopir').val(sopir);
        $('#gaji').val(gaji);
        $('#hargaPenyewa').val(hargaPenyewa);
        $('#hargaKePemilik').val(hargaKePemilik);
        $('#gajiDriver').val(gajiDriver);
        $("#feePihakKe3").val(feePihakKe3);
        $('#orderModal').modal('show');
    }
});
$("#thnPembuatan").datepicker( {
    autoclose: true,
    format: " yyyy", // Notice the Extra space at the beginning
    viewMode: "years",
    orientation: "auto bottom",
    minViewMode: "years"
});
$("#thRegistrasi").datepicker( {
    autoclose: true,
    format: " yyyy", // Notice the Extra space at the beginning
    viewMode: "years",
    orientation: "auto bottom",
    minViewMode: "years"
});
$("#datarent").DataTable({
    responsive : true
});

webshims.setOptions('forms-ext', {
    replaceUI: 'auto',
    types: 'number',
    "widgets": {
        "calculateWidth": false
    }
    // "inlinePicker": false,
    // extendNative: true,



});
webshims.polyfill('forms forms-ext');
// $(":input[type=number]").bind("keydown", function (event) {
//     event.preventDefault();
// });
$(document).ready(function() {
    $("input[type=number]").on("focus", function() {
        $(this).on("keydown", function(event) {
            if (event.keyCode === 38 || event.keyCode === 40) {
                event.preventDefault();
            }
        });
    });

});
// $(':input[type=number]').on('mousewheel', function(e){
//     $(this).blur();
// });