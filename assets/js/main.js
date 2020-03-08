
function myFunction () {
      let x = document.getElementById("myLinks");
      let y = document.getElementById("icon");
      if (x.style.display === "block") {
            x.style.display = "none";
            y.innerHTML = '<i class="fa fa-bars"></i>';

      } else {
            x.style.display = "block";
            y.innerHTML = '<i class="fa fa-times" aria-hidden="true"></i>';
      };

}


$(document).ready(function () {

      $('.reviews-content').slick({
            dots: true,
            infinite: true,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: false
      });
      $('.questions__right').hide();
      $('.hideContent').click(function () {
            $(this).parents('.questions__right').hide();
            $(this).parents('.questions__right').siblings().children().removeClass('active');
            $(this).parents('.questions__right').siblings().find('.plusMinus').empty().append('<i class="fa fa-plus" aria-hidden="true"></i>');


      });

      $('.question__wrap').click(function () {

            $(this).parent().siblings().show();

      });

      $('.question__content').hide();

      $('.question__wrap').click(function () {
            $(this).addClass('active').siblings().removeClass('active');
            $(this).children('.plusMinus').empty().append('<i class="fa fa-minus" aria-hidden="true"></i>');
            $(this).siblings().children('.plusMinus').empty().append('<i class="fa fa-plus" aria-hidden="true"></i>');
            $('.question__content').eq($(this).index()).show(300).siblings().hide(300);

      })

      new WOW().init();



      $(".submit").on("click", function (e) {
            e.preventDefault();
            $.ajax({

                  url: '/wp-admin/admin-ajax.php?action=sendform',
                  data: {
                        name: $("#name").val(),
                        message: $("#message").val(),
                        email: $("#email").val(),
                        phone: $("#phone").val()
                  }
            }).done(function (response) {
                  $(".result").html(response);
            });
      });
});


function openWindow () {
      document.getElementById("message").style.display = "block";
      document.getElementById("sendMessage").style.display = "none";
}
function closeWindow () {
      document.getElementById("message").style.display = "none";
      document.getElementById("sendMessage").style.display = "block";
}


let lat = 40.745368;
let lng = -74.024118;
let zoom = 11;
let mymap = L.map('mapID').setView([lat, lng], zoom);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibXlrb2xhMTMiLCJhIjoiY2szdTQxdXduMDY4YTNsazR1ZTgxYWk3dCJ9.lBdOcRcQFNcPM1c-A7zQHg', {

      id: 'mapbox/navigation-preview-day-v4',
      accessToken: 'pk.eyJ1IjoibXlrb2xhMTMiLCJhIjoiY2szdTQxdXduMDY4YTNsazR1ZTgxYWk3dCJ9.lBdOcRcQFNcPM1c-A7zQHg'
}).addTo(mymap);

// let myIcon = L.icon({
//       iconUrl: './images/marker.png',
//       iconSize: [106, 106],
//       //iconAnchor: [22, 94],
//       //popupAnchor: [96, 65]
// });
// let marker = L.marker([40.67871, -73.90318], {
//       icon: myIcon
// }).addTo(mymap);





let popup = L.popup();


function onMapClick (e) {
      popup
            .setLatLng(e.latlng)
            .setContent(e.latlng.toString())
            .openOn(mymap);



}

mymap.on('click', onMapClick);