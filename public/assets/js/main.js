// $(document).ready(function () {
//     $("#table").DataTable({
//         fixedHeader: true,
//         responsive: true,
//         scrollX:        true,
//         // scrollCollapse: true,
//         paging:         true,
//         fixedHeader:           {
//             header: true,
//             footer: true
//         }
//     });
// });

// get Satuan Harga 

$(document).ready(function(){

    $(document).on('change', '#selectTelur', function() {

        var harga_id=$(this).val();

        // console.log(harga_id)

        $.ajax({
            type: 'get',
            url: '/detail-transaksi/hargaPerTelur/'+harga_id,
            success: function(data){
                $('#hargaPerTelur').val(data.harga)
            },
            error: function(){
                
            }
        });
    })

})

// end get satuan 

// filter page 
$(document).ready(function(){
    $(document).on('change', '#paginationFilter', function() {

        var paginationFilter=$(this).val();

        // console.log(paginationFilter)

        $.ajax({
            type: 'get',
            url: '/transaksi',
            data: {'p': paginationFilter},
            success: function(e){
                
                
            },
            error: function(){
                
            }
        });

 
    })
})
// end filter page 

// tooltip bootstrap 

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

// end tooltip

// total in add pemesanan 

$('#jmlhTelur').on('keyup', function() {
    let hargaInput = $('#hargaPerTelur').val()
    // let totalHarga = $('#total_harga').val()
    let calcJmlhHarga = $(this).val() * hargaInput;
    $('#total_harga').val(calcJmlhHarga)
})

// end total 

// loader 

$(document).ready(function () {
    // Show the loader when the page is first loaded
    $(".loader").show();
  
    // Hide the loader after a delay (3 seconds in this example)
    setTimeout(function () {
      $(".loader").hide();
    }, 500);
  });
  
  // Show the loader when the window is reloaded
//   $(window).on("beforeunload", function () {
//     $(".loader").show();
//   });
  
  //end loader 

// live search bootstrap 

$(document).ready(function(){
    $("#liveSearch").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#tableSearch tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });

// end live search 

// sidebars
document.addEventListener("DOMContentLoaded", function (event) {
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId);

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener("click", () => {
                // show navbar
                nav.classList.toggle("showNav");
                // change icon
                toggle.classList.toggle("bx-x");
                // add padding to body
                bodypd.classList.toggle("body-pd");
                // add padding to header
                headerpd.classList.toggle("body-pd");
            });
        }
    };

    showNavbar("header-toggle", "nav-bar", "body-pd", "header");

    // Your code to run since DOM is loaded and ready
});

// end sidebar

// Rupiah Convert Input 

var rupiah = document.getElementById("rupiah");
var rupiahCalc = document.getElementById("jumlahBayar");

rupiah.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah.value = formatRupiah(this.value, "");

});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^.\d]/g, "").toString(),
      split = number_string.split(","),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
     if (ribuan) {
    separator = sisa ? "," : "";
    rupiah += separator + ribuan.join(",");
    }

    rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
    return prefix == undefined ? rupiah : rupiah ? "" + rupiah : "";
}

rupiah.addEventListener("keyup", function() {
    rupiahCalc.value = rupiah.value;
    rupiahCalc.value = rupiahCalc.value.replace(/,/g, "");
});

// End Rupiah Convert Input 

// jumlah kembalian

$('#rupiah').on('keyup', function() {
    let hargaTotaldetail = $('#totalAllDetail').val()
    let jumlahBayar = $('#jumlahBayar').val()
    let calcJmlhKembali = jumlahBayar - hargaTotaldetail;

    $('#kembalianBayar').val(calcJmlhKembali)
})

// end jumlah kembalian



// login

// End Login
