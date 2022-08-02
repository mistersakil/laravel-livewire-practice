import "../css/app.css";

import $ from "jquery";
import Swal from "sweetalert2";
import toastr from "toastr";
window.$ = window.jQuery = $;
import feather from "feather-icons";

import fortawesome from "@fortawesome/fontawesome-free/js/all";

$("body").append("jquery is working");
// Swal.fire({
//     title: "Error!",
//     text: "Do you want to continue",
//     icon: "error",
//     confirmButtonText: "Cool",
// });
let options = {
    closeButton: true,
    debug: false,
    newestOnTop: true,
    progressBar: true,
    positionClass: "toast-bottom-right",
    preventDuplicates: false,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
};
toastr.success(
    "We do have the Kapua suite available.",
    "Turtle Bay Resort",
    options
);
feather.replace();
