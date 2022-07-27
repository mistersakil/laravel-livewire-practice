try {
    window.$ = window.jQuery = require("jquery");
    const bootstrap = require("bootstrap");
    const feather = require("feather-icons");
    feather.replace();
    window.toastr = require("toastr");
    const Swal = require("sweetalert2");
} catch (e) {}
