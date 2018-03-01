$("#datarent").DataTable();
$('#datarent_wrapper').find('div').first().remove();
$('#datarent_wrapper').children().last().remove();
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
webshims.setOptions('forms-ext', {
    replaceUI: 'auto',
    types: 'number',
    "widgets": {
        "calculateWidth": false
    }
});
webshims.polyfill('forms forms-ext');