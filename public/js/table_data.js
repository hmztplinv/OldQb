$(function () {
    "use strict";

    //Data table example
    var table = $("#exportexample").DataTable({
        lengthChange: false,
        buttons: ["copy", "excel", "pdf", "colvis"],
    });
    table
        .buttons()
        .container()
        .appendTo("#exportexample_wrapper .col-md-6:eq(0)");

    //aylık şikayet başlangıç
    var table = $("#ayliksikayetozeti").DataTable({
        lengthChange: false,
        language: {
            decimal: ",",
            thousands: ".",
        },
        paging: false,
        scrollX: true,
        scrollY: "300px",
        buttons: ["copy", "excel", "pdf", "colvis"],
    });
    table
        .buttons()
        .container()
        .appendTo("#ayliksikayetozeti_wrapper .col-md-6:eq(0)");
    //aylık şikayet bitiş

    //geçen ayın başlangıç
    var table = $("#gecenayinsikayetozeti").DataTable({
        lengthChange: false,
        language: {
            decimal: ",",
            thousands: ".",
        },
        paging: false,
        scrollX: true,
        scrollY: "300px",
        buttons: ["copy", "excel", "pdf", "colvis"],
    });
    table
        .buttons()
        .container()
        .appendTo("#gecenayinsikayetozeti_wrapper .col-md-6:eq(0)");
    //geçen ayın bitiş

    //yıllık şikayet başlangıç
    var table = $("#yilliksikayetozeti").DataTable({
        lengthChange: false,
        language: {
            decimal: ",",
            thousands: ".",
        },
        paging: false,
        scrollX: true,
        scrollY: 300,
        buttons: ["copy", "excel", "pdf", "colvis"],
    });
    table
        .buttons()
        .container()
        .appendTo("#yilliksikayetozeti_wrapper .col-md-6:eq(0)");
    //yıllık şikayet bitiş

    $("#example1").DataTable({
        language: {
            searchPlaceholder: "Search...",
            sSearch: "",
            lengthMenu: "_MENU_ items/page",
        },
    });

    $("#example2").DataTable({
        responsive: true,
        language: {
            searchPlaceholder: "Search...",
            sSearch: "",
            lengthMenu: "_MENU_ items/page",
        },
    });

    $("#example2").DataTable({
        responsive: true,
        language: {
            searchPlaceholder: "Search...",
            sSearch: "",
            lengthMenu: "_MENU_ items/page",
        },
    });

    //nakit durum döviz dönüşüm başlangıç
    $("#dovizdonusum").DataTable({
        searching: false,
        paging: false,
        info: false,
    });
    //nakit durum döviz dönüşüm bitiş

    //nakit durum, hesap hareketleri, şikayet yönetimi başlangıç
    var tables = {
        allOrders: {
            lengthChange: false,
            buttons: ["copy", "excel", "pdf", "print"],
            wrapper: "#allOrders_wrapper .col-md-6:eq(0)",
            scrollX: true,
            pageLength: 10,
        },
        Orders: {
            lengthChange: false,
            buttons: ["copy", "excel", "pdf", "print"],
            wrapper: "#Orders_wrapper .col-md-6:eq(0)",
            scrollX: true,
            pageLength: 10,
        },
        Customer: {
            lengthChange: false,
            buttons: ["copy", "excel", "pdf", "print"],
            wrapper: "#Customer_wrapper .col-md-6:eq(0)",
            scrollX: true,
            pageLength: 10,
        },
        DHL: {
            lengthChange: false,
            buttons: ["copy", "excel", "pdf", "print"],
            wrapper: "#DHL_wrapper .col-md-6:eq(0)",
            scrollX: true,
            pageLength: 10,
        },
        Unexpired: {
            lengthChange: false,
            wrapper: "#Unexpired_wrapper .col-md-6:eq(0)",
            scrollX: true,
            pageLength: 5,
        },
        Production: {
            lengthChange: false,
            wrapper: "#Production_wrapper .col-md-6:eq(0)",
            scrollX: true,
            pageLength: 5,
        },
        Program: {
            lengthChange: false,
            buttons: ["copy", "excel", "pdf", "print"],
            wrapper: "#Program_wrapper .col-md-6:eq(0)",
            scrollX: true,
            pageLength: 10,
        },
    };
    //nakit durum, hesap hareketleri, şikayet yönetimi başlangıç

    // Her tablo için DataTable ve buton grubu oluştur
    for (var tableId in tables) {
        var table = $("#" + tableId).DataTable(tables[tableId]);
        table.buttons().container().appendTo(tables[tableId].wrapper);
    }

    $("#example3").DataTable({
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function (row) {
                        var data = row.data();
                        return "Details for " + data[0] + " " + data[1];
                    },
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                    tableClass: "table",
                }),
            },
        },
    });

    /*Input Datatable*/
    var table = $("#example-input").DataTable({
        columnDefs: [
            {
                targets: [1, 2, 3, 4, 5],
                render: function (data, type, row, meta) {
                    if (type === "display") {
                        var api = new $.fn.dataTable.Api(meta.settings);

                        var $el = $(
                            "input, select, textarea",
                            api.cell({ row: meta.row, column: meta.col }).node()
                        );

                        var $html = $(data).wrap("<div/>").parent();

                        if ($el.prop("tagName") === "INPUT") {
                            $("input", $html).attr("value", $el.val());
                            if ($el.prop("checked")) {
                                $("input", $html).attr("checked", "checked");
                            }
                        } else if ($el.prop("tagName") === "TEXTAREA") {
                            $("textarea", $html).html($el.val());
                        } else if ($el.prop("tagName") === "SELECT") {
                            $("option:selected", $html).removeAttr("selected");
                            $("option", $html)
                                .filter(function () {
                                    return $(this).attr("value") === $el.val();
                                })
                                .attr("selected", "selected");
                        }

                        data = $html.html();
                    }

                    return data;
                },
            },
        ],
        responsive: true,
    });
    $("#example-input tbody").on(
        "keyup change",
        ".child input, .child select, .child textarea",
        function (e) {
            var $el = $(this);
            var rowIdx = $el.closest("ul").data("dtr-index");
            var colIdx = $el.closest("li").data("dtr-index");
            var cell = table.cell({ row: rowIdx, column: colIdx }).node();
            $("input, select, textarea", cell).val($el.val());
            if ($el.is(":checked")) {
                $("input", cell).prop("checked", true);
            } else {
                $("input", cell).removeProp("checked");
            }
        }
    );

    //şikayet yönetimi multiple select options başlangıç
    $(".dhl").select2({
        placeholder: "Customer Name",
        searchInputPlaceholder: "Search",
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    $(".dhl1").select2({
        placeholder: "DHL No",
        searchInputPlaceholder: "Search",
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    $(".customer").select2({
        placeholder: "Company Name",
        searchInputPlaceholder: "Search",
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    $(".customer1").select2({
        placeholder: "Status",
        searchInputPlaceholder: "Search",
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    $(".order").select2({
        placeholder: "Product Name",
        searchInputPlaceholder: "Search",
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    $(".order1").select2({
        placeholder: "Company Name",
        searchInputPlaceholder: "Search",
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    $(".order2").select2({
        placeholder: "Status",
        searchInputPlaceholder: "Search",
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    $(".order3").select2({
        placeholder: "Company Name",
        searchInputPlaceholder: "Search",
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    $(".order4").select2({
        placeholder: "User Name",
        searchInputPlaceholder: "Search",
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    $(".program").select2({
        placeholder: "Bant Name",
        searchInputPlaceholder: "Search",
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    $(".program1").select2({
        placeholder: "Product Origin",
        searchInputPlaceholder: "Search",
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
});
