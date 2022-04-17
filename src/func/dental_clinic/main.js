let pages = {
  login: "page_login",
  main_page: "page_main",
  dashboard: "page_dashboard",
  incoming_appointment: "page_incoming_appointment",
  laboratory_result: "page_laboratory_result",
  appointment: "page_appointment",
  update_account: "page_createAcc",
  admin_overview: "page_overview",
  admin_history: "page_history",
  admin_registered_patient: "page_registered_patient",
  admin_appointment: "page_admin_appointment",
  admin_prices: "page_prices",
  admin_packages: "page_packages",
  admin_sms: "page_sms"
};
let search_function_config = {
  tbl_service_prices: "txt_admin_search_prices",
  tbl_appointment_history: "txt_search_appointment_history",
  tbl_packages: "txt_admin_search_package",
  tbl_registered_patient: "txt_registered_patient"
};

const weekday = [
  "Sunday",
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
];

let selected_services = [];
var access_level = $("#txt_user_access").val();
let selected_package = '';

// $(".services_btn").on("click", function () {
//   console.log(selected_services)
//   var title = "";
//   title = $(this).attr("attr-name");
//   title = title.toUpperCase();

//   $.ajax({
//     type: "GET",
//     url:
//       "src/database/dental_clinic/func/user/read_service.php?category=" +
//       $(this).attr("attr-name"),
//     success: function (data) {
//       var temp = Math.round(JSON.parse(data).length / 2);
//       var count = 0;
//       var output = '<div class="col-xl-6 col-12  text-muted ">';
//       $.each(JSON.parse(data), function (key, val) {
//         if (count == temp) {
//           output += "</div>";
//           output += '<div class="col-xl-6 col-12  text-muted ">';
//         }

//         if (selected_services.indexOf(val.id + "") !== -1) {
//           output +=
//             `
//                       <div class="custom-control custom-checkbox">
//                           <input type="checkbox" class="custom-control-input chk_service" value="` +
//             val.id +
//             `" checked id="srv_` +
//             count +
//             `">
//                           <label class="custom-control-label" for="srv_` +
//             count +
//             `" style="font-size:9pt;"> ` +
//             val.service +
//             `</label>
//                       </div>
//                   `;
//         } else {
//           output +=
//             `
//                           <div class="custom-control custom-checkbox">
//                               <input type="checkbox" class="custom-control-input chk_service" value="` +
//             val.id +
//             `" id="srv_` +
//             count +
//             `">
//                               <label class="custom-control-label" for="srv_` +
//             count +
//             `" style="font-size:9pt;"> ` +
//             val.service +
//             `</label>
//                           </div>
//                       `;
//         }

//         count = count + 1;
//       });

//       output += "</div>";

//       $("#div_md_services").empty();
//       $("#div_md_services").append(output);

//       $("#md_services").modal("show");

//       $("#txt_md_service_title").text(title);

//       $(".chk_service").unbind("click");
//       $(".chk_service").on("click", function (key, val) {
//         var val = $(this).val();
//         if ($(this).prop("checked")) {
//           if (!selected_services.includes($(this).val())) {
//             selected_services.push($(this).val());
//           }
//         } else {
//           selected_services = $.grep(selected_services, function (value) {
//             return value != val;
//           });
//         }
//       });
//     },
//   });
// });


$('.btn_logout').on('click', function () {
  $.post("src/database/dental_clinic/func/logout.php").done(function () {
    location.reload();
  });
})

$('.btn_view_update_account').on('click', function () {
  load_user_account_details()

})

$("#btn_login").on("click", function () {
  if ($('#txt_username').val() && $('#txt_password').val()) {
    $.ajax({
      type: "POST",
      url: "src/database/dental_clinic/func/login.php",
      data: {
        username: $("#txt_username").val(),
        password: $("#txt_password").val(),
      },
      success: function (data) {

        if (data == 0) {
          show_msg("Invalid Username / Password", 2);
          $('#test_sidebar_user').addClass('d-none')

        } else {
          var data = JSON.parse(data)

          if (data[0].user_access == "admin") {
            location.reload()
          }
          else {
            location.reload()
            change_page("dashboard");
          }
          show_msg("Login Successful", 1);

          if ($('#txt_user_access').val() == "user") {
            $('#test_sidebar_user').removeClass('d-none')
          }

        }
      },
    });
  }
  else {
    show_msg("Invalid Username / Password", 2);
  }
});

$('#update_acc_bdate').on('change', function () {
  var age = calculate_age($(this).val());
  if (age > 5 && age < 65) {
    $('#update_acc_age').val(age)
  }
  else {
    show_msg("Invalid Birthdate", 2)
  }
})


$('#btn_update_account').on('click', function () {

  if ($('#update_acc_fname').val() && $('#txt_user_id').val() && $('#update_acc_province').val() && $('#update_acc_city').val() && $('#update_acc_age').val() && $('#update_acc_brgy').val() && $('#update_acc_street').val() && $('#update_acc_house').val() && $('#update_acc_bdate').val() && $('#update_acc_lname').val() && $('#update_acc_bdate').val()) {
    var data = {
      f_name: $('#update_acc_fname').val(),
      m_name: $('#update_acc_mname').val(),
      l_name: $('#update_acc_lname').val(),
      bdate: $('#update_acc_bdate').val(),
      gender: $('input[name="update_acc_gender[]"]:checked').val(),
      house_no: $('#update_acc_house').val(),
      street: $('#update_acc_street').val(),
      brgy: $('#update_acc_brgy').val(),
      age: $('#update_acc_age').val(),
      city: $('#update_acc_city').val(),
      province: $('#update_acc_province').val(),
      user_id: $('#txt_user_id').val(),
      age: $('#update_acc_age').val(),
      bdate: $('#update_acc_bdate').val(),
      contact_no: $('#update_acc_contact').val(),
      uid: $('#update_acc_username').val(),
      pass: $('#update_acc_password').val(),
      email: $('#update_acc_email').val(),
    }

    $.post("src/database/dental_clinic/func/user/update_user_account.php", data, function () {
      show_msg("Account Updated Successfully.", 1)
      $('#md_account_information').modal('hide')
    })

  }
  else {
    show_msg("Please fill-in required fields.", 2)
  }

})

$('#btn_submit').on('click', function (e) {
  e.preventDefault();

  if ($('#txt_sign_up_uid').val() && $('#txt_sign_up_pass').val() && $('#txt_sign_up_email').val()) {
    var data = {
      uid: $('#txt_sign_up_uid').val(),
      pass: $('#txt_sign_up_pass').val(),
      email: $('#txt_sign_up_email').val()
    }
    $.post("src/database/dental_clinic/func/user/add_user_account.php", data, function () {
      show_msg("Sign-up Successful!", 1)
    })
  } else {
    show_msg("Please fill-in required fields!", 2)
  }


})

$(".btn_view_dashboard").on("click", function () {
  change_page("dashboard");
});

$(".btn_view_incoming_appointments").on("click", function () {
  load_incoming_appointments();
  change_page("incoming_appointment");
});

$(".btn_view_laboratory_result").on("click", function () {
  load_lab_results()
  change_page("laboratory_result");
});

$('#update_acc_picture').on('change', function () {
  var formData = new FormData($('#user_picture')[0]);
  $.ajax({
    url: 'src/database/dental_clinic/func/user/update_user_profile_image.php',
    data: formData,
    async: false,
    contentType: false,
    processData: false,
    cache: false,
    type: 'POST',
    success: function (data) {
      show_msg("Image uploaded successfully.", 1)
    },
  });
})


function load_incoming_appointments() {
  $.getJSON(
    "src/database/dental_clinic/func/user/read_incoming_appointments.php?user_id=" +
    $("#txt_user_id").val(),
    function (data) {
      write_incoming_appointments(data);
    }
  );
}

function write_incoming_appointments(data) {
  var tbl_output = "";
  $.each(data, function (key, val) {
    tbl_output +=
      `
                          <tr style="font-size:12pt;">
                              <td class="data-title" data-title="APPOINTMENT ID"> <small class="text-black">` +
      val.id +
      `</small></td>
                              <td class="data-title" data-title="DATE"><small class="text-black">` +
      val.date_booked +
      `</small></td>
                              <td class="data-title" data-title="TIME"><small class="text-black">` +
      val.time +
      `</small></td>
                              <td class="data-title" data-title="DETAILS">
                                  <button class="text-white px-3 btn_view_appointment"
          attr-id="` +
      val.id +
      `"
          attr-physician="` +
      val.physician +
      `"
        attr-date="` +
      val.date_booked +
      `"
        attr-day="` +
      get_day(val.date_booked) +
      `"
        attr-time="` +
      val.time +
      `"
          style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px;">View</button>
              </td>
          </tr>`;
  });

  $("#tbl_incoming_appointments tbody").empty();
  $("#tbl_incoming_appointments tbody").append(tbl_output);

  $(".btn_view_appointment").on("click", function () {
    $("#badge_view_appointment_cancelled").addClass("d-none");
    $("#badge_view_appointment_completed").addClass("d-none");
    price = 0;
    output = "";

    $("#btn_cancel_appointment").attr("attr-id", $(this).attr("attr-id"));

    $("#md_view_appointment_txt_physician").text(
      $(this).attr("attr-physician")
    );
    $("#md_view_appointment_txt_date").text($(this).attr("attr-date"));
    $("#md_view_appointment_txt_time").text($(this).attr("attr-time"));
    $("#md_view_appointment_txt_day").text($(this).attr("attr-day"));

    $.getJSON(
      "src/database/dental_clinic/func/user/read_selected_services_by_appointment_id.php?id=" +
      $(this).attr("attr-id"),
      function (data) {
        $.each(data, function (key, val) {
          output +=
            `<div class="row border-top py-2">
                        <div class="col-6 mb-0 pb-0">
                            <label class="text-black" style="font-weight: bold; font-size: 12px;">Service : </label><br>
                            <label class="text-black" style="font-weight: bold; font-size: 12px;">Amount : </label>
                        </div>
  
                        <div class="col-6 mb-0 pb-0">
                            <label class="text-black text-muted" style="font-size: 12px;">` +
            val.service +
            `</label><br>
                            <label class="text-black text-muted" style="font-size: 12px;">₱` +
            val.price +
            `</label>
                        </div>
                    </div>`;

          price = parseInt(price) + parseInt(val.price);
        });

        $("#div_view_appointment_services").empty();
        $("#div_view_appointment_services").append(output);

        output =
          `<div class="row border-top py-2">
                          <div class="col-6 mb-0 pb-0">
                              <label class="text-black" style="font-weight: bold; font-size: 12px;">Total Amount : </label>
                          </div>
  
                          <div class="col-6 mb-0 pb-0">
                              <label class="text-black text-muted" style="font-size: 12px;">₱` +
          price +
          `</label>
                          </div>
                      </div>`;

        $("#div_view_appointment_services_total").empty();
        $("#div_view_appointment_services_total").append(output);
      }
    );

    $("#md_view_appointment").modal("show");

    $("#btn_cancel_appointment").removeClass("d-none");
    $("#div_view_appointment_buttons").addClass("text-center");
    $("#div_view_appointment_buttons").removeClass("text-end");

    $("#btn_cancel_appointment").on("click", function () {
      $.post(
        "src/database/dental_clinic/func/user/update_cancel_appointment.php",
        { id: $(this).attr("attr-id") },
        function () {
          load_incoming_appointments();
        }
      );
    });
  });
}

function load_appointments() {
  $.getJSON(
    "src/database/dental_clinic/func/user/read_appointments.php?user_id=" +
    $("#txt_user_id").val(),
    function (data) {
      write_appointments(data);
    }
  );
}

function write_appointments(data) {
  output = "";
  $.each(data, function (key, val) {
    output +=
      `
                    <tr  style="font-size:12pt;">
                        <td class="data-title" data-title="APPOINTMENT ID"> <small class=" text-black">` +
      val.id +
      `</small></td>
                        <td class="data-title" data-title="DATE"><small class=" text-black">` +
      val.date_booked +
      `</small></td>
                        <td class="data-title" data-title="TIME"><small class=" text-black">` +
      val.time +
      `</small></td>
                        <td class="data-title" data-title="">
                            <button class=" px-3 text-white btn_appointments_view" attr-id="` +
      val.id +
      `" attr-physician="` +
      val.physician +
      `"
        attr-day ="` +
      get_day(val.date_booked) +
      `"
      attr-status ="` +
      val.status +
      `"
      attr-date="` +
      val.date_booked +
      `" attr-time="` +
      val.time +
      `"   style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px;">View</button>
                        </td>
                    </tr>
                `;
  });

  $("#tbl_appointments tbody").empty();
  $("#tbl_appointments tbody").append(output);
  $("#txt_search_appointments").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#tbl_appointments tbody tr").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });

  $(".btn_appointments_view").unbind("click");

  $(".btn_appointments_view").on("click", function () {
    $("#md_view_appointment").modal("show");
    $("#btn_cancel_appointment").addClass("d-none");
    $("#div_view_appointment_buttons").removeClass("text-center");
    $("#div_view_appointment_buttons").addClass("text-end");

    $("#md_view_appointment_txt_physician").text(
      $(this).attr("attr-physician")
    );
    $("#md_view_appointment_txt_date").text($(this).attr("attr-date"));
    $("#md_view_appointment_txt_time").text($(this).attr("attr-time"));
    $("#md_view_appointment_txt_day").text($(this).attr("attr-day"));

    $(this).attr("attr-status") == "cancelled"
      ? $("#badge_view_appointment_cancelled").removeClass("d-none")
      : $("#badge_view_appointment_cancelled").addClass("d-none");

    $(this).attr("attr-status") == "completed"
      ? $("#badge_view_appointment_completed").removeClass("d-none")
      : $("#badge_view_appointment_completed").addClass("d-none");

    $.getJSON(
      "src/database/dental_clinic/func/user/read_selected_services_by_appointment_id.php?id=" +
      $(this).attr("attr-id"),
      function (data) {
        output = "";
        price = 0;

        $.each(data, function (key, val) {
          output +=
            `<div class="row border-top py-2">
                          <div class="col-6 mb-0 pb-0">
                              <label class="text-black" style="font-weight: bold; font-size: 12px;">Service : </label><br>
                              <label class="text-black" style="font-weight: bold; font-size: 12px;">Amount : </label>
                          </div>

                          <div class="col-6 mb-0 pb-0">
                              <label class="text-black text-muted" style="font-size: 12px;">` +
            val.service +
            `</label><br>
                              <label class="text-black text-muted" style="font-size: 12px;">₱` +
            val.price +
            `</label>
                          </div>
                      </div>`;

          price = parseInt(price) + parseInt(val.price);
        });

        $("#div_view_appointment_services").empty();
        $("#div_view_appointment_services").append(output);

        output =
          `<div class="row border-top py-2">
                            <div class="col-6 mb-0 pb-0">
                                <label class="text-black" style="font-weight: bold; font-size: 12px;">Total Amount : </label>
                            </div>

                            <div class="col-6 mb-0 pb-0">
                                <label class="text-black text-muted" style="font-size: 12px;">₱` +
          price +
          `</label>
                            </div>
                        </div>`;

        $("#div_view_appointment_services_total").empty();
        $("#div_view_appointment_services_total").append(output);
      }
    );
  });
}

function load_lab_results() {
  $.getJSON(
    "src/database/dental_clinic/func/user/read_lab_results.php?id=" +
    $("#txt_user_id").val(),
    function (data) {
      write_lab_results(data);
    }
  );
}

function write_lab_results(data) {
  var output = "";
  $.each(data, function (key, val) {
    output =
      `
              <div class="text-center icon_btn">
                  <a href="download_result.php?file=` +
      val.dir +
      `" >
                  <img class="" src="src/resources/img/labResult.png" style="width: 70px;" data-bs-toggle="modal" data-bs-target="#labResult">
                  <br><span style="font-size:9pt;">` +
      val.dir.toUpperCase() +
      ` Result</span>
                  </a>
              </div>
    `;
  });

  $("#div_lab_results").empty();
  $("#div_lab_results").append(output);
}

function show_msg(msg, icon) {
  if (icon == 1) {
    $("#icon_1").removeClass("d-none");
    $("#icon_2").addClass("d-none");
  } else {
    $("#icon_1").addClass("d-none");
    $("#icon_2").removeClass("d-none");
  }
  $("#msg_body").text(msg);
  $("#md_msg_box").modal("show");
}

function setCookie(cookie) {
  document.cookie = cookie;
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function change_page(pagename) {
  $(".page").addClass("d-none");
  $("#" + pages[pagename]).removeClass("d-none");
}

function load_available_appointments() {
  $.ajax({
    type: "GET",
    url: "src/database/dental_clinic/func/user/read_available_appointments.php",
    success: function (data) {
      write_available_appointments(data);
    },
  });
}

function write_available_appointments(data) {
  output = "";
  $.each(JSON.parse(data), function (key, val) {
    output +=
      `
              <tr>
                  <td class="data-title" data-title="DATE"> <small class="h6 text-black">` +
      val.date +
      `</small></td>
                  <td class="data-title" data-title="SERVICES"><small class="h6 text-black">` +
      val.services +
      `</small></td>
                  <td class="data-title" data-title="TIME"><small class="h6 text-black">` +
      val.time +
      `</small></td>
                  <td class="data-title" data-title="SLOT"><small class="h6 text-black">` +
      val.slot +
      `</small></td>
                  <td class="data-title" data-title="ACTION">
                      <button class="text-white btn_style_1 btn_get_appointment" 
                      attr-id="` +
      val.id +
      `" 
                      attr-date="` +
      val.date +
      `"
                      attr-day="` +
      get_day(val.date) +
      `"
                      attr-time="` +
      val.time +
      `" >Get Appointment</button>
                  </td>
              </tr>`;
  });

  $("#tbl_available_appointments tbody").empty();
  $("#tbl_available_appointments tbody").append(output);

  $(".btn_get_appointment").on("click", function () {
    compile_selected_services();
    $("#md_make_appointment").modal("show");
    $("#md_make_appointment_book").attr("attr-id", $(this).attr("attr-id"));
    $("#md_make_appointment_txt_physician").text(
      $(this).attr("attr-physician")
    );
    $("#md_make_appointment_txt_date").text($(this).attr("attr-date"));
    $("#md_make_appointment_txt_day").text($(this).attr("attr-day"));
    $("#md_make_appointment_txt_time").text($(this).attr("attr-time"));
  });
}

function get_day(date) {
  const d = new Date(date);
  let day = d.getDay();
  return weekday[day];
}

function compile_selected_services() {
  var output = "";
  var price = 0;

  if (selected_services.length > 0) {
    $.getJSON(
      "src/database/dental_clinic/func/user/read_selected_services_by_id.php?id=" +
      JSON.stringify(selected_services),
      function (data) {
        $.each(data, function (key, val) {
          output +=
            `<div class="row border-top py-2">
                        <div class="col-6 mb-0 pb-0">
                            <label class="text-black" style="font-weight: bold; font-size: 12px;">Service : </label><br>
                            <label class="text-black" style="font-weight: bold; font-size: 12px;">Amount : </label>
                        </div>
        
                        <div class="col-6 mb-0 pb-0">
                            <label class="text-black text-muted" style="font-size: 12px;">` +
            val.service +
            `</label><br>
                            <label class="text-black text-muted" style="font-size: 12px;">₱` +
            val.price +
            `</label>
                        </div>
                    </div>`;

          price = parseInt(price) + parseInt(val.price);
        });

        $("#div_selected_services").empty();
        $("#div_selected_services").append(output);

        output =
          `<div class="row border-top py-2">
                            <div class="col-6 mb-0 pb-0">
                                <label class="text-black" style="font-weight: bold; font-size: 12px;">Total Amount : </label>
                            </div>
        
                            <div class="col-6 mb-0 pb-0">
                                <label class="text-black text-muted" style="font-size: 12px;">₱` +
          price +
          `</label>
                            </div>
                        </div>`;

        $("#div_selected_services_total").empty();
        $("#div_selected_services_total").append(output);
      }
    );
  } else {
    output = `<small class="text-muted m-3 my-5">Please select a service.</small>`;
    $("#div_selected_services_total").empty();
    $("#div_selected_services").empty();
    $("#div_selected_services").append(output);
  }
}

function calculate_age(dob) {
  dob = new Date(dob);
  var today = new Date();
  var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
  return age;
}

function load_user_account_details() {
  $.getJSON(
    "src/database/dental_clinic/func/user/read_user_profile.php?id=" +
    $("#txt_user_id").val(),
    function (data) {
      $.each(data, function (key, val) {
        $("#update_acc_fname").val(val.f_name);
        $("#update_acc_mname").val(val.m_name);
        $("#update_acc_lname").val(val.l_name);
        $("#update_acc_bdate").val(val.bdate);
        $("#update_acc_age").val(val.age);
        $("#update_acc_house").val(val.house_no);
        $("#update_acc_street").val(val.street);
        $("#update_acc_brgy").val(val.brgy);
        $("#update_acc_city").val(val.city);
        $("#update_acc_province").val(val.province);
        $("#update_acc_contact").val(val.contact_no);
        $("#update_acc_username").val(val.uid);
        $("#update_acc_password").val(val.pass);
        $("#update_acc_email").val(val.email);
        $("#update_acc_patient_id").val($("#txt_user_id").val());
        if (val.gender == "male") {
          $("#update_acc_gender_male").prop("checked", true);
        } else {
          $("#update_acc_gender_female").prop("checked", true);
        }
      });

      $('#md_account_information').modal('show')
    }
  );
}

function load_registered_patients() {
  $.getJSON(
    "src/database/dental_clinic/func/user/read_registered_patients.php",
    function (data) {
      write_registered_patients(data);
    }
  );
}
function write_registered_patients(data) {
  //
  var output = "";
  $.each(data, function (key, val) {
    output +=
      `
                <tr>
                    <td class="data-title" data-title="PATIENT ID"><small class="h6 text-black">` +
      val.patient_id +
      `</small></td>
                    <td class="data-title" data-title="LAST NAME"><small class="h6 text-black">` +
      val.l_name +
      `</small></td>
                    <td class="data-title" data-title="FIRST NAME"><small class="h6 text-black">` +
      val.f_name +
      `</small></td>
                    <td class="data-title" data-title="MIDDLE NAME"><small class="h6 text-black">` +
      val.m_name +
      `</small></td>
                    <td class="data-title" data-title="DETAILS">
                        <button 
                          class="text-white admin_view_patient" 
                          style="background:#80CEB8; 
                          border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 1.5rem;"
                          attr-id="` +
      val.patient_id +
      `"
                          attr-l_name="` +
      val.l_name +
      `"
                          attr-f_name="` +
      val.f_name +
      `"
                          attr-m_name="` +
      val.m_name +
      `"
                          attr-gender="` +
      val.gender +
      `"
                          attr-house_no="` +
      val.house_no +
      `"
                          attr-street="` +
      val.street +
      `"
                          attr-brgy="` +
      val.brgy +
      `"
                          attr-city="` +
      val.city +
      `"
                          attr-province="` +
      val.province +
      `"
                          attr-age="` +
      val.age +
      `"
                          attr-bdate="` +
      val.bdate +
      `"
                          attr-email="` +
      val.email +
      `"
                          attr-contact_no="` +
      val.contact_no +
      `"
                        >VIEW</button>
                    </td>
                </tr>
    `;
  });

  $("#tbl_registered_patient tbody").empty().append(output);

  $('.admin_view_patient').on('click', function () {
    $('#md_admin_view_patient').modal('show')
    $('#md_admin_view_patient_id').text($(this).attr('attr-id'))
    $('#md_admin_view_l_name').text($(this).attr('attr-l_name'))
    $('#md_admin_view_f_name').text($(this).attr('attr-f_name'))
    $('#md_admin_view_m_name').text($(this).attr('attr-m_name'))
    $('#md_admin_view_age').text($(this).attr('attr-age'))
    $('#md_admin_view_house_no').text($(this).attr('attr-house_no'))
    $('#md_admin_view_street').text($(this).attr('attr-street'))
    $('#md_admin_view_brgy').text($(this).attr('attr-brgy'))
    $('#md_admin_view_city').text($(this).attr('attr-city'))
    $('#md_admin_view_province').text($(this).attr('attr-province'))
    $('#md_admin_view_contact_no').text($(this).attr('attr-contact_no'))
    $('#md_admin_view_gender').text($(this).attr('attr-gender'))
  })

}

function load_appointment_history() {
  $.getJSON(
    "src/database/dental_clinic/func/admin/read_appointments_history.php",
    function (data) {
      write_appointment_history(data);
    }
  );
}
function write_appointment_history(data) {
  //
  var output = "";
  $.each(data.completed, function (key, val) {
    output +=
      `
              <tr>
                  <td class="data-title" data-title="APPOINTMENT ID"><small class="h6 text-black">` +
      val.id +
      `</small></td>
                  <td class="data-title" data-title="PATIENT ID"><small class="h6 text-black">` +
      val.user_id +
      `</small></td>
                  <td class="data-title" data-title="NAME"><small class="h6 text-black">` +
      val.name +
      `</small></td>
              </tr>  
    `;
  });

  $("#tbl_appointment_history tbody").empty();
  $("#tbl_appointment_history tbody").append(output);

  output = '';
  $.each(data.cancelled, function (key, val) {
    output +=
      `
              <tr>
                  <td class="data-title" data-title="APPOINTMENT ID"><small class="h6 text-black">` +
      val.id +
      `</small></td>
                  <td class="data-title" data-title="PATIENT ID"><small class="h6 text-black">` +
      val.user_id +
      `</small></td>
                  <td class="data-title" data-title="NAME"><small class="h6 text-black">` +
      val.name +
      `</small></td>
              </tr>  
    `;
  });

  $("#tbl_appointment_history_cancelled tbody").empty();
  $("#tbl_appointment_history_cancelled tbody").append(output);
}

function search_function() {
  $.each(search_function_config, function (key, val) {
    $("#" + val).on("keyup", function () {
      var value = $(this).val().toLowerCase();
      $("#" + key + " tbody tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    });
  });
}

// ADMIN

$(".btn_view_prices").on("click", function () {
  load_admin_services();
  change_page("admin_prices");
});

$(".btn_view_packages").on("click", function () {
  load_packages();
  change_page("admin_packages");
});

$(".btn_view_history").on("click", function () {
  load_appointment_history();
  change_page("admin_history");
});
$(".btn_view_sms").on("click", function () {
  load_sms_template();
  change_page("admin_sms");
});
$(".btn_view_overview").on("click", function () {
  change_page("admin_overview");
  load_admin_overview();
});

$(".btn_view_registered_patient").on("click", function () {
  load_registered_patients();
  change_page("admin_registered_patient");
});

$(".btn_view_admin_appointment").on("click", function () {
  load_for_uploading();
  change_page("admin_appointment");
});




var d = {};
function load_admin_services() {
  $.getJSON(
    "src/database/dental_clinic/func/admin/read_services.php",
    function (data) {
      write_admin_services(data);
    }
  );
}
function write_admin_services(data) {
  count = 1;
  output = "";
  output_2 = "";
  $.each(data, function (key, val) {
    output +=
      `  <tr attr-id="` +
      val.id +
      `" 
                    attr-service="` +
      val.service +
      `" 
                    attr-price="` +
      val.price +
      `"
                    attr-category="` +
      val.category +
      `"
                    attr-status="` +
      val.status +
      `">
                  <td class="data-title" data-title="SERVICE"><small class="h6 text-black">` +
      val.service +
      `</small></td>
                  <td class="data-title" data-title="PRICE"><small class="h6 text-black">₱` +
      val.price +
      `</small></td>
                </tr>
            `;

    output_2 +=
      `
          <tr class="chk_service_add_to_package" attr-id="`+ val.id + `" attr-chk="package_service_` + count + `">
            <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input chk_service" value="" id="package_service_`+ count + `">
                  <label class="custom-control-label" style="font-size:15pt;"> </label>
              </div>
            </td>
            <td>`+ val.service + `</td>
        </tr>
    
      `;

    count = count + 1
  });


  $("#tbl_service_prices tbody").empty().append(output);
  $("#tbl_package_add_services tbody").empty().append(output_2);


  $('.chk_service_add_to_package').on('click', function () {
    var checkbox = $(this);
    $.get("src/database/dental_clinic/func/admin/read_service_check_if_exists.php", { package_id: $('#btn_add_service_to_package_save').attr('attr-id'), service_id: $(this).attr('attr-id') }, function (data) {
      if (JSON.parse(data).length > 0) {
        show_msg("This service already exists ", 2)
      }
      else {
        arr_selected_services_to_add.push(checkbox.attr('attr-id'))
        $('#' + checkbox.attr('attr-chk')).prop('checked', true);
        $("#btn_add_service_to_package_save").attr('attr-package-id', checkbox.attr('attr-package-id'))
      }
    })
  })

  $("#btn_add_service_to_package_save").on('click', function () {
    $.post("src/database/dental_clinic/func/admin/add_service_to_package.php", { ids: arr_selected_services_to_add, package_id: $('#btn_add_service_to_package_save').attr('attr-id') }, function () {
      show_msg("Services added to the package successfully.", 1);
      $('#admin_package_add_services').modal('hide')
    })
  })

  $("#tbl_service_prices tbody tr").on("click", function () {
    $("#tbl_service_prices tbody tr").removeClass("bg-selected");
    d = {
      id: $(this).attr("attr-id"),
      service: $(this).attr("attr-service"),
      price: $(this).attr("attr-price"),
      status: $(this).attr("attr-status"),
      category: $(this).attr("attr-category"),
    };
    $(this).addClass("bg-selected");
  });
}

function load_sms_template() {
  $.getJSON("src/database/dental_clinic/func/admin/read_sms_templates.php", function (data) {
    write_sms_template(data)
  })
}
function write_sms_template(data) {
  var output = '';
  var count = 1;
  $.each(data, function (key, val) {
    output += `
          <tr class="">
            <td class="data-title" data-title="No" ><div class="px-2 fw-bold">`+count+`</div></td>
            <td class="data-title" data-title="PATIENT ID"><div class="px-2 text-start">`+val.sms+`</div></td>
            <td class="data-title" data-title="APPOINTMENT ID">
              <small class="h6 text-black">
                <i class="icon_btn fa-solid fa-pen-to-square"></i>
              </small>
            </td>
         
          </tr>

    `;
    count = count+1;
  })

  $('#tbl_sms tbody').empty().append(output)
}


$("#btn_admin_edit_service").on("click", function () {
  if ($.isEmptyObject(d)) {
    show_msg("No service selected", 2);
  } else {
    $("#txt_edit_service_name").val(d.service);
    $("#txt_edit_service_price").val(d.price);
    $("#txt_edit_service_status").val(d.status);
    $("#txt_edit_service_category").val(d.category);
    $("#btn_edit_service_save").attr("attr-id", d.id);
    $("#admin_edit_service").modal("show");
  }
});
$("#btn_edit_service_save").on("click", function () {
  $("#admin_edit_service").modal("hide");
  data = {
    service: $("#txt_edit_service_name").val(),
    price: $("#txt_edit_service_price").val(),
    category: $("#txt_edit_service_category").val(),
    status: $("#txt_edit_service_status").val(),
    id: $(this).attr("attr-id"),
  };
  $.post(
    "src/database/dental_clinic/func/admin/update_service.php",
    data,
    function () {
      show_msg("Service updated successfully.", 1);
      load_admin_services();
    }
  );
});
$("#btn_admin_add_service").on("click", function () {
  $("#admin_add_service").modal("show");
});
$("#btn_add_service_save").on("click", function () {
  $("#admin_add_service").modal("hide");
  data = {
    service: $("#txt_add_service_name").val(),
    price: $("#txt_add_service_price").val(),
    category: $("#txt_add_service_category").val(),
    status: $("#txt_add_service_status").val(),
  };
  $.post(
    "src/database/dental_clinic/func/admin/add_service.php",
    data,
    function () {
      show_msg("Service added successfully.", 1);
      load_admin_services();
    }
  );
});

var d_string = "";
function load_admin_overview() {
  $.getJSON(
    "src/database/dental_clinic/func/admin/read_overview_appointments.php",
    function (data) {
      write_admin_overview(data);
    }
  );
}
function write_admin_overview(data) {
  output = "";
  $.each(data, function (key, val) {
    output +=
      `  <tr>
                    <td class="data-title" data-title="ID"> <small class="h6 text-black">` +
      val.appointment_id +
      `</small></td>
                    <td class="data-title" data-title="PATIENT ID"><small class="h6 text-black">` +
      val.patient_id +
      `</small></td>
                    <td class="data-title" data-title="NAME"><small class="h6 text-black">` +
      val.patient +
      `</small></td>
                    <td class="data-title" data-title="DATE"><small class="h6 text-black">` +
      val.date +
      `</small></td>
                    <td class="data-title" data-title="TIME"><small class="h6 text-black">` +
      val.time +
      `</small></td>
                    <td class="data-title" data-title="DETAILS">
                        <button class="btn_overview_show px-3 text-white" style="background:#80CEB8; border-radius:5px; border: none; font-size: 14px;" attr-id="` +
      val.appointment_id +
      `">Show</button>
                        <button class="btn_overview_no_show px-3 text-white ms-lg-2" style="background: red; border-radius:5px; font-size: 14px;  border: none;" attr-id="` +
      val.appointment_id +
      `">No Show</button>
                    </td>
                </tr>
            `;
  });
  $("#tbl_overview tbody").empty();
  $("#tbl_overview tbody").append(output);

  $(".btn_overview_show").on("click", function () {
    $("#admin_set_appointment").modal("show");
    $("#btn_confirm_appointment_show").attr("attr-id", $(this).attr("attr-id"));
    d_string = "show";
  });
  $(".btn_overview_no_show").on("click", function () {
    $("#admin_set_appointment").modal("show");
    $("#btn_confirm_appointment_show").attr("attr-id", $(this).attr("attr-id"));
    $("#txt_overview_line").text(
      'Do you want to mark this appointment as "NO-SHOW"?'
    );
    d_string = "noshow";
  });
}
$("#btn_confirm_appointment_show").on("click", function () {
  data = {};
  if (d_string == "noshow") {
    data = {
      id: $(this).attr("attr-id"),
      status: "no-show",
    };
  } else {
    data = {
      id: $(this).attr("attr-id"),
      status: "for-uploading",
    };
  }
  $("#admin_set_appointment").modal("hide");
  $.post(
    "src/database/dental_clinic/func/admin/update_overview_appointment.php",
    data,
    function () {
      show_msg("Appointment marked successfully.", 1);
      load_admin_overview();
    }
  );
});

function load_for_uploading() {
  $.getJSON(
    "src/database/dental_clinic/func/admin/read_for_uploading.php",
    function (data) {
      write_for_uploading(data);
    }
  );
}
function write_for_uploading(data) {
  output = "";
  $.each(data, function (key, val) {
    output +=
      `   <tr>
                      <td class="data-title" data-title="APPOINTMENT ID"><small class="h6 text-black">` +
      val.appointment_id +
      `</small></td>
                      <td class="data-title" data-title="PATIENT ID"><small class="h6 text-black">` +
      val.patient_id +
      `</small></td>
                      <td class="data-title" data-title="NAME"><small class="h6 text-black">` +
      val.patient +
      `</small></td>
                      <td class="data-title" data-title="LAB RESULTS">
                          <button class="text-white btn_upload_document" attr-id="` +
      val.appointment_id +
      `" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 1.5rem;">UPLOAD</button>
                      </td>
                  </tr>
            `;
  });
  $("#tbl_for_uploading tbody").empty();
  $("#tbl_for_uploading tbody").append(output);

  $(".btn_upload_document").on("click", function () {
    $("#admin_appointment_upload").modal("show");
    $("#txt_upload_id").val($(this).attr("attr-id"));
  });
}
$("#btn_upload_document").on("click", function (e) {
  e.preventDefault();
  $("#txt_upload_file").trigger("click");
});
$("#txt_upload_file").on("change", function (e) {
  e.preventDefault();
  var form = document.getElementById("upload_form");
  var fdata = new FormData(form);
  $.ajax({
    type: "POST",
    url: "src/database/dental_clinic/func/admin/upload_document.php",
    data: fdata,
    contentType: false,
    cache: false,
    processData: false,
    success: function (result) {
      $("#admin_appointment_upload").modal("hide");
      show_msg("Document Uploaded Successfully", 1);
    },
  });
});

function load_packages() {
  $.getJSON(
    "src/database/dental_clinic/func/admin/read_packages.php",
    function (data) {
      write_packages(data);
    }
  );
}
function write_packages(data) {
  output_2 = "";
  output = "";
  $.each(data, function (key, val) {
    output +=
      ` 
                <tr
                  attr-id="` +
      val.id +
      `"
                  attr-name="` +
      val.name +
      `"
                  attr-price="` +
      val.price +
      `"
                  attr-status="` +
      val.status +
      `"
                >
                    <td class="data-title" data-title="SERVICE"><small class="h6 text-black">` +
      val.name +
      `</small></td>
                    <td class="data-title" data-title="PRICE"><small class="h6 text-black">₱ ` +
      val.price +
      `</small></td>
                    <td class="data-title" data-title="DETAILS">
                        <button class="text-white btn_view_package" attr-id="` +
      val.id +
      `" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 1.5rem;">VIEW</button>
                    </td>
                </tr>
    `;

    output_2 += `
                    <div class="col-lg-4 mb-sm-5">
                          <div class="card dentalCard" style="height:50vh;">
                              <div>
                                  <img src="src/resources/img/bottle.png" class="card-img-top" style="border-radius: 2%; width: 50% !important; height: 15rem !important;">

                              </div>
                              <div class="card-body">
                                  <span class="card-title h4 mb-2" style="letter-spacing: 3px;">`+ val.name + `</span>
                                  <br>
                                  <button data-bs-toggle="modal"  attr-id="`+ val.id + `" class="mt-2 text-white view_package_landing" style="font-weight:bold; background:#47B0A0; border-radius: 50px; width:120px; border: none; height: 35px;">Avail</button>
                              </div>
                          </div>
                      </div>
    
    `


  });


  $("#tbl_packages tbody").empty();
  $("#tbl_packages tbody").append(output);
  $('#landing_packages').empty().append(output_2)

  $("#tbl_packages tbody tr").on("click", function () {
    $("#tbl_packages tbody tr").removeClass("bg-selected");
    d = {
      id: $(this).attr("attr-id"),
      name: $(this).attr("attr-name"),
      price: $(this).attr("attr-price"),
      status: $(this).attr("attr-status"),
    };
    $(this).addClass("bg-selected");
  });

  $('.view_package_landing').on('click', function () {
    // data-bs-target="#package"

    var package_details = "<p>";
    var package_price = "";
    var id = $(this).attr('attr-id')
    $.getJSON("src/database/dental_clinic/func/user/read_package_services_landing.php?id=" + id, function (data) {
      $.each(data, function (key, val) {
        package_details += val.service + ",";
        package_price = val.price;
      })
      $('#package_details').empty().append(package_details + "</p>");
      $('#package_price').empty().append(package_details);

      $('#package').modal("show");
    })


    //
  })

  $(".btn_view_package").on("click", function () {
    $("#admin_package_view_services").modal("show");
    load_package_services($(this).attr("attr-id"));
    $("#btn_add_service_to_package_save").attr('attr-id', $(this).attr("attr-id"))

  });
}
function load_package_services(package_id) {
  $.getJSON(
    "src/database/dental_clinic/func/admin/read_services_by_package_id.php?id=" +
    package_id,
    function (data) {
      write_package_services(data);
    }
  );
}

let selected_services_to_add = {};
let arr_selected_services_to_add = [];
function write_package_services(data) {
  output = "";
  output_2 = "";
  var count = 0;

  $.each(data, function (key, val) {
    output +=
      `
      <tr>
        <td>` +
      val.service +
      `</td>
        <td>
        <button class="btn_remove_service_from_package px-3 text-white ms-lg-2" style="background: red; border-radius:5px; font-size: 14px;  border: none;"  attr-package-id="` +
      val.id +
      `">Remove</button>
        </td>
      </tr>
    `;


    count = count + 1;
  });
  $("#tbl_package_services tbody").empty().append(output);



  $(".btn_remove_service_from_package").on("click", function () {
    $.post(
      "src/database/dental_clinic/func/admin/delete_service_from_package.php",
      { id: $(this).attr("attr-package-id") },
      function () {
        show_msg("Service successfully removed from the package", 1);
        load_package_services(d_string);
        $('#admin_package_view_services').modal('hide')
      }
    );
  });




}
$("#btn_add_service_to_package").on("click", function () {
  $("#admin_package_view_services").modal("hide");
  $("#admin_package_add_services").modal("show");
  d_string = $(this).attr('attr-package-id')
  load_admin_services();
});
$("#btn_edit_package_save").on("click", function () {
  $("#admin_edit_package").modal("hide");
  data = {
    name: $("#txt_edit_package_name").val(),
    price: $("#txt_edit_package_price").val(),
    status: $("#txt_edit_package_status").val(),
    id: $(this).attr("attr-id"),
  };
  $.post(
    "src/database/dental_clinic/func/admin/update_package.php",
    data,
    function () {
      show_msg("Package updated successfully.", 1);
      load_packages();
    }
  );
});
$("#btn_admin_add_package").on("click", function () {
  $("#admin_add_package").modal("show");
});
$("#btn_add_package_save").on("click", function () {
  if ($("#txt_add_package_name").val() && $("#txt_add_package_p$ce").val())
    $("#admin_add_service").modal("hide");
  data = {
    name: $("#txt_add_package_name").val(),
    price: $("#txt_add_package_price").val(),
    status: $("#txt_add_package_status").val(),
  };
  $.post(
    "src/database/dental_clinic/func/admin/add_package.php",
    data,
    function () {
      show_msg("Package added successfully.", 1);
      load_packages();
    }
  );
});
$("#btn_admin_edit_package").on("click", function () {
  if ($.isEmptyObject(d)) {
    show_msg("No package selected", 2);
  } else {
    $("#txt_edit_package_name").val(d.name);
    $("#txt_edit_package_price").val(d.price);
    $("#txt_edit_package_status").val(d.status);
    $("#btn_edit_package_save").attr("attr-id", d.id);
    $("#admin_edit_package").modal("show");
  }
});

$('.booknowBtn').on('click', function () {
  change_page("login");
})

// END ADMIN
$(document).ready(function () {

  search_function();

  if (!$("#txt_user_access").val()) {
    $("#txt_user_access").attr('value', 'user')
    load_packages()
    change_page("main_page");
  }

  if (!$("#txt_user_id").val()) {
    change_page("main_page");
    $("#txt_user_access").val("user");

  } else {
    if (access_level == "user") {
      load_available_appointments();

      change_page("dashboard");

    } else {
      load_admin_overview();
      change_page("admin_overview");
    }
  }


});

$(".services_btn").on("click", function () {
  var title = "";
  title = $(this).attr("attr-name");
  title = title.toUpperCase();

  if (title != 'PACKAGE') {
    $.ajax({
      type: "GET",
      url:
        "src/database/dental_clinic/func/user/read_service.php?category=" +
        $(this).attr("attr-name"),
      success: function (data) {
        var temp = Math.round(JSON.parse(data).length / 2);
        var count = 0;
        var output = '<div class="col-xl-6 col-12  text-muted ">';
        $.each(JSON.parse(data), function (key, val) {
          if (count == temp) {
            output += "</div>";
            output += '<div class="col-xl-6 col-12  text-muted ">';
          }

          if (selected_services.indexOf(val.id + "") !== -1) {
            output +=
              `
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input chk_service" attr-service-type="single" value="` +
              val.id +
              `" checked id="srv_` +
              count +
              `">
                            <label class="custom-control-label" for="srv_` +
              count +
              `" style="font-size:9pt;"> ` +
              val.service +
              `</label>
                        </div>
                    `;
          } else {
            output +=
              `
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input chk_service" attr-service-type="single" value="` +
              val.id +
              `" id="srv_` +
              count +
              `">
                                <label class="custom-control-label" for="srv_` +
              count +
              `" style="font-size:9pt;"> ` +
              val.service +
              `</label>
                            </div>
                        `;
          }

          count = count + 1;
        });

        output += "</div>";

        $("#div_md_services").empty();
        $("#div_md_services").append(output);

        $("#md_services").modal("show");

        $("#txt_md_service_title").text(title);

        $(".chk_service").unbind("click");
        $(".chk_service").on("click", function (key, val) {
          var val = $(this).val();
          if ($(this).prop("checked")) {
            if (!selected_services.includes($(this).val())) {
              selected_services.push($(this).val());
            }
          } else {
            selected_services = $.grep(selected_services, function (value) {
              return value != val;
            });
          }
        });
      },
    });
  }
  else {
    $.getJSON("src/database/dental_clinic/func/user/read_packages.php", function (data) {
      var temp = Math.round(data.length / 2);
      var count = 0;
      var output = '<div class="col-xl-6 col-12  text-muted ">';
      $.each(data, function (key, val) {
        if (count == temp) {
          output += "</div>";
          output += '<div class="col-xl-6 col-12  text-muted ">';
        }

        if (selected_package == val.id) {
          output +=
            `
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input chk_service" attr-service-type="package" attr-id="`+ val.id + `" value="` +
            val.id +
            `" checked id="srv_` +
            count +
            `">
                          <label class="custom-control-label" for="srv_` +
            count +
            `" style="font-size:9pt;"> ` +
            val.name +
            `</label>
                      </div>
                  `;
        } else {
          output +=
            `
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input chk_service" attr-service-type="package" attr-id="`+ val.id + `" value="` +
            val.id +
            `" id="srv_` +
            count +
            `">
                              <label class="custom-control-label" for="srv_` +
            count +
            `" style="font-size:9pt;"> ` +
            val.name +
            `</label>
                          </div>
                      `;
        }

        count = count + 1;
      });

      output += "</div>";

      $("#div_md_services").empty();
      $("#div_md_services").append(output);
      $("#md_services").modal("show");
      $("#txt_md_service_title").text(title);

      $(".chk_service").unbind("click");
      $(".chk_service").on("click", function (key, val) {
        selected_services = [];

        var val = $(this).val();
        var el = $(this);

        if ($(this).prop("checked")) {
          $(".chk_service").prop('checked', false)
          $(this).prop("checked", true)
          selected_package = el.attr('attr-id')

          $.getJSON("src/database/dental_clinic/func/user/read_package_services.php?id=" + el.attr('attr-id'), function (data) {
            $.each(data, function (key, val) {
              selected_services.push(val.service_id);
            })
          })

        } else {
          selected_services = [];
        }

      });



    })
  }

});

$("#md_make_appointment_book").on("click", function () {
  if (selected_services.length > 0) {
    data = {
      availability_id: $(this).attr("attr-id"),
      user_id: $("#txt_user_id").val(),
      selected_services: selected_services,
    };
    $.post("src/database/dental_clinic/func/user/add_appointment.php", data).done(
      function (cb) {
        console.log('sms sent!')
        // $.post("src/database/dental_clinic/func/user/send_sms.php", {
        //   1: $('#txt_user_mobile').val(),
        //   2: 'TEST',
        //   3: 'ST-CHERO405529_H3XVJ',
        //   4: '8k%)}en7@1',
        // }).done(function () {
        //   show_msg("Appointment Successfully Booked!", 1);
        //   load_available_appointments();
        // })
      }
    );
  }
  else {
    show_msg("Please select a service", 2)
  }

});

$(".btn_logout").on("click", function () {
  $.post("src/database/dental_clinic/func/logout.php").done(function () {
    location.reload();
  });
});

$("#update_acc_bdate").on("change", function () {
  var age = calculate_age($(this).val());
  if (age > 5 && age < 65) {
    $("#update_acc_age").val(age);
  } else {
    show_msg("Invalid Birthdate", 2);
  }
});

$("#btn_update_account").on("click", function () {
  if (
    $("#update_acc_fname").val() &&
    $("#txt_user_id").val() &&
    $("#update_acc_province").val() &&
    $("#update_acc_city").val() &&
    $("#update_acc_age").val() &&
    $("#update_acc_brgy").val() &&
    $("#update_acc_street").val() &&
    $("#update_acc_house").val() &&
    $("#update_acc_bdate").val() &&
    $("#update_acc_lname").val() &&
    $("#update_acc_bdate").val()
  ) {
    var data = {
      f_name: $("#update_acc_fname").val(),
      m_name: $("#update_acc_mname").val(),
      l_name: $("#update_acc_lname").val(),
      bdate: $("#update_acc_bdate").val(),
      gender: $('input[name="update_acc_gender[]"]:checked').val(),
      house_no: $("#update_acc_house").val(),
      street: $("#update_acc_street").val(),
      brgy: $("#update_acc_brgy").val(),
      age: $("#update_acc_age").val(),
      city: $("#update_acc_city").val(),
      province: $("#update_acc_province").val(),
      user_id: $("#txt_user_id").val(),
      age: $("#update_acc_age").val(),
      bdate: $("#update_acc_bdate").val(),
      contact_no: $("#update_acc_contact").val(),
      uid: $("#update_acc_username").val(),
      pass: $("#update_acc_password").val(),
      email: $("#update_acc_email").val(),
    };

    $.post(
      "src/database/dental_clinic/func/user/update_user_account.php",
      data,
      function () {
        show_msg("Account Updated Successfully.", 1);
      }
    );
  } else {
    show_msg("Please fill-in required fields.", 2);
  }
});

$("#btn_submit").on("click", function (e) {
  e.preventDefault();

  if (
    $("#txt_sign_up_uid").val() &&
    $("#txt_sign_up_pass").val() &&
    $("#txt_sign_up_email").val()
  ) {
    var data = {
      uid: $("#txt_sign_up_uid").val(),
      pass: $("#txt_sign_up_pass").val(),
      email: $("#txt_sign_up_email").val(),
    };
    $.post(
      "src/database/dental_clinic/func/user/add_user_account.php",
      data,
      function () {
        show_msg("Sign-up Successful!", 1);
      }
    );
  } else {
    show_msg("Please fill-in required fields!", 2);
  }
});

$(".btn_view_dashboard").on("click", function () {
  change_page("dashboard");
});

$(".btn_view_incoming_appointments").on("click", function () {
  load_incoming_appointments();
  change_page("incoming_appointment");
});

$(".btn_view_laboratory_result").on("click", function () {
  load_lab_results();
  change_page("laboratory_result");
});

$("#btn_page11_back").on("click", function () {
  selected_services = [];
});

$(".btn_view_appointments").on("click", function () {
  load_appointments();
  change_page("appointment");
});

$(".btn_view_admin_appointment").on("click", function () {
  change_page("admin_appointment");
});

$(".btn_view_registeredPatient").on("click", function () {
  change_page("registeredPatient");
});



$('#sel_cancelled_appointments_sort').on('change', function () {
  var selected_data = $(this).val();
  $.getJSON("", function (data) {

  })
})