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
// chart js

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

// total in add pemesanan 

$('#jmlhTelur').on('keyup', function(){
    let hargaInput = $('#hargaPerTelur').val()
    // let totalHarga = $('#total_harga').val()
    let calcJmlhHarga = $(this).val() * hargaInput;
    $('#total_harga').val(calcJmlhHarga)
})

// end total 

// function password_show_hide() {
//     var x = document.getElementById("inputPassword");
//     var show_eye = document.getElementById("showEye");
//     var hide_eye = document.getElementById("hideEye");
//     hide_eye.classList.remove("d-none");
//     if (x.type === "password") {
//       x.type = "text";
//       show_eye.style.display = "block";
//       hide_eye.style.display = "none";
//     } else {
//       x.type = "password";
//       show_eye.style.display = "none";
//       hide_eye.style.display = "block";
//     }
//   }

// end login 

// dropify

// $(document).ready(function() {
//     $('.dropify').dropify({
//         messages: {
//             'default': '',
//             'replace': '',
//             'remove':  'X',
//             'error':   'Upload Failed'
//         }
//     });
// });

// End dropify 

// const ctx = document.getElementById("myChart");
// const plugin = {
//   id: 'customCanvasBackgroundColor',
//   beforeDraw: (chart, args, options) => {
//     const {ctx} = chart;
//     ctx.save();
//     ctx.globalCompositeOperation = 'destination-over';
//     ctx.fillStyle = options.color || '#fff';
//     ctx.fillRect(0, 0, chart.width, chart.height);
//     ctx.restore();
//   }
// };

// new Chart(ctx, {
//     type: "bar",
//     data: {
//         labels: ["2018", "2019", "2020", "2021", "2022", "2023"],
//         datasets: [
//             {
//                 label: "Total",
//                 data: [563, 497, 548, 611, 571, 640],
//                 borderWidth: 1,
//             },
//         ],
//     },
//     options: {

//         scales: {
//             y: {
//                 beginAtZero: true,
//             },
//         },
//         plugins: {
//           customCanvasBackgroundColor: {
//             color: 'white',
//           }
//         },
//     },
//     plugins: [plugin],
// });

// end chart js

// swiper js

// const swiper = new Swiper(".swiper", {
//     direction: "horizontal",
//     spaceBetween: 50,
//     breakpoints: {
//         767: {
//             slidesPerView: 1,
//         },
//         1024: {
//             slidesPerView: 2,
//             spaceBetween: 30,
//         },
//     },
// });

// end swiper js

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

// end sidebasr

// Rupiah Convert Input 

var rupiah = document.getElementById("total_harga");
var rupiahCalc = document.getElementById("rupiahCalc");
var jmlhTelur = document.getElementById("jmlhTelur");

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

// login

// End Login
