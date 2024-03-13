$(function () {
  var ctx = document.getElementById("goals").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "line",
    data: {
      labels: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ],
      datasets: [
        {
          label: "Hedef",
          data: [1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0],
          borderWidth: 2,
          backgroundColor: ["transparent"],
          borderColor: "#6259ca",
          pointBackgroundColor: "#ffffff",
          pointRadius: 2,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        xAxes: [
          {
            ticks: {
              fontColor: "#77778e",
            },
            display: true,
            gridLines: {
              color: "rgba(119, 119, 142, 0.2)",
            },
            barPercentage: 1.8,
            categoryPercentage: 0.2,
          },
        ],
        yAxes: [
          {
            ticks: {
              fontColor: "#77778e",
              callback: function (value, index, values) {
                return value + "%"; // Yüzde olarak göstermek için "%" ekledik
              },
              stepSize: 40, // Yatay eksende adım büyüklüğü
              min: 0, // Minimum değer
              max: 160, // Maksimum değer
            },
            display: true,
            gridLines: {
              color: "rgba(119, 119, 142, 0.2)",
            },
            scaleLabel: {
              display: false,
              labelString: "Thousands",
              fontColor: "rgba(119, 119, 142, 0.2)",
            },
          },
        ],
      },
      legend: {
        labels: {
          fontColor: "#77778e",
        },
      },
    },
  });
  /*LIne-Chart */
     var ctx = document.getElementById("chartLine").getContext("2d");
     var myChart = new Chart(ctx, {
      type: "line",
       data: {
         labels: ["Sun", "Mon", "Tus", "Wed", "Thu", "Fri", "Sat"],
         datasets: [
           {
             label: "Profits",
            data: [20, 420, 210, 354, 580, 320, 480],
             borderWidth: 2,
            backgroundColor: "transparent",
             borderColor: "#6259ca",
             borderWidth: 3,
             pointBackgroundColor: "#ffffff",
             pointRadius: 2,
           },
         ],
       },
       options: {
         responsive: true,
         maintainAspectRatio: false,

         scales: {
           xAxes: [
             {
              ticks: {
                 fontColor: "#77778e",
               },
               display: true,
               gridLines: {
                 color: "rgba(119, 119, 142, 0.2)",
               },
             },
           ],
           yAxes: [
             {
               ticks: {
                 fontColor: "#77778e",
               },
               display: true,
               gridLines: {
                 color: "rgba(119, 119, 142, 0.2)",
               },
               scaleLabel: {
                 display: false,
               labelString: "Thousands",
                fontColor: "rgba(119, 119, 142, 0.2)",
               },
             },
           ],
        },
         legend: {
           labels: {
            fontColor: "#77778e",
         },
      },
    },
});

  /* Bar-Chart1 */
  //   var ctx = document.getElementById("chartBar1").getContext("2d");
  //   var myChart = new Chart(ctx, {
  //     type: "bar",
  //     data: {
  //       labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
  //       datasets: [
  //         {
  //           label: "Sales",
  //           data: [200, 450, 290, 367, 256, 543, 345],
  //           borderWidth: 2,
  //           backgroundColor: "#9877f9",
  //           borderColor: "#9877f9",
  //           borderWidth: 2.0,
  //           pointBackgroundColor: "#ffffff",
  //         },
  //       ],
  //     },
  //     options: {
  //       responsive: true,
  //       maintainAspectRatio: false,
  //       legend: {
  //         display: true,
  //       },
  //       scales: {
  //         yAxes: [
  //           {
  //             ticks: {
  //               beginAtZero: true,
  //               stepSize: 150,
  //               fontColor: "#77778e",
  //             },
  //             gridLines: {
  //               color: "rgba(119, 119, 142, 0.2)",
  //             },
  //           },
  //         ],
  //         xAxes: [
  //           {
  //             ticks: {
  //               display: true,
  //               fontColor: "#77778e",
  //             },
  //             gridLines: {
  //               display: false,
  //               color: "rgba(119, 119, 142, 0.2)",
  //             },
  //           },
  //         ],
  //       },
  //       legend: {
  //         labels: {
  //           fontColor: "#77778e",
  //         },
  //       },
  //     },
  //   });

  /* Bar-Chart2*/
  //   var ctx = document.getElementById("chartBar2");
  //   var myChart = new Chart(ctx, {
  //     type: "bar",
  //     data: {
  //       labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
  //       datasets: [
  //         {
  //           label: "Data1",
  //           data: [65, 59, 80, 81, 56, 55, 40],
  //           borderColor: "#6259ca",
  //           borderWidth: "0",
  //           backgroundColor: "#6259ca",
  //         },
  //         {
  //           label: "Data2",
  //           data: [28, 48, 40, 19, 86, 27, 90],
  //           borderColor: "#53caed",
  //           borderWidth: "0",
  //           backgroundColor: "#53caed",
  //         },
  //       ],
  //     },
  //     options: {
  //       responsive: true,
  //       maintainAspectRatio: false,
  //       scales: {
  //         xAxes: [
  //           {
  //             ticks: {
  //               fontColor: "#77778e",
  //             },
  //             gridLines: {
  //               color: "rgba(119, 119, 142, 0.2)",
  //             },
  //           },
  //         ],
  //         yAxes: [
  //           {
  //             ticks: {
  //               beginAtZero: true,
  //               fontColor: "#77778e",
  //             },
  //             gridLines: {
  //               color: "rgba(119, 119, 142, 0.2)",
  //             },
  //           },
  //         ],
  //       },
  //       legend: {
  //         labels: {
  //           fontColor: "#77778e",
  //         },
  //       },
  //     },
  //   });

  /* Area Chart*/
  //   var ctx = document.getElementById("chartArea");
  //   var myChart = new Chart(ctx, {
  //     type: "line",
  //     data: {
  //       labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
  //       datasets: [
  //         {
  //           label: "Data1",
  //           borderColor: "rgba(113, 76, 190, 0.9)",
  //           borderWidth: "1",
  //           backgroundColor: "rgba(113, 76, 190, 0.5)",
  //           data: [22, 44, 67, 43, 76, 45, 12],
  //         },
  //         {
  //           label: "Data2",
  //           borderColor: "rgba(235, 111, 51 ,0.9)",
  //           borderWidth: "1",
  //           backgroundColor: "rgba(	235, 111, 51, 0.7)",
  //           pointHighlightStroke: "rgba(235, 111, 51 ,1)",
  //           data: [16, 32, 18, 26, 42, 33, 44],
  //         },
  //       ],
  //     },
  //     options: {
  //       responsive: true,
  //       maintainAspectRatio: false,
  //       tooltips: {
  //         mode: "index",
  //         intersect: false,
  //       },
  //       hover: {
  //         mode: "nearest",
  //         intersect: true,
  //       },
  //       scales: {
  //         xAxes: [
  //           {
  //             ticks: {
  //               fontColor: "#77778e",
  //             },
  //             gridLines: {
  //               color: "rgba(119, 119, 142, 0.2)",
  //             },
  //           },
  //         ],
  //         yAxes: [
  //           {
  //             ticks: {
  //               beginAtZero: true,
  //               fontColor: "#77778e",
  //             },
  //             gridLines: {
  //               color: "rgba(119, 119, 142, 0.2)",
  //             },
  //           },
  //         ],
  //       },
  //       legend: {
  //         labels: {
  //           fontColor: "#77778e",
  //         },
  //       },
  //     },
  //   });

  var metrajDataPie = {
    labels: ["Kabul Edilen Metraj", "Red Edilen Metraj"],
    datasets: [
      {
        data: [20, 20],
        backgroundColor: ["#6259ca", "#53caed"],
      },
    ],
  };
  /* Pie Chart*/
  var sikayetDurumudatapie = {
    labels: [
      "İşlem Yapılmadı",
      "Rapor Hazırlanıyor",
      "Numune Sonucu Bekleniyor",
      "Müşteri Arandı",
      "Tamamlandı",
      "Rapor Onayı Bekliyor",
      "Yerinde İnceleme Yapıyor",
    ],
    datasets: [
      {
        data: [20, 20, 30, 5, 25, 15, 20],
        backgroundColor: [
          "#53caed",
          "#6259ca",
          "#01b8ff",
          "#535c68",
          "#29ccbb",
          "#f16d75",
          "#0e0e23",
        ],
      },
    ],
  };

  var kategoriDagilimDataPie = {
    labels: ["Şikayet/Tedarik", "Şikayet/Ürün"],
    datasets: [
      {
        data: [20, 20],
        backgroundColor: ["#6259ca", "#53caed"],
      },
    ],
  };

  var sikayetDagilimDataPie = {
    labels: [
      "40 Adet Ton Farkı",
      "53 Adet Paletten - Kutudan Kırık Ürün Çıkması",
      "5 Adet Paketleme ve Barkod Hataları",
      "2 Adet Ondülasyon Yüzey Dalgalanması",
      "19 Adet Lekelenme Kirlenme",
      "53 Adet Kesilmeme",
      "19 Adet Kalite Kaçakları",
      "1 Adet Kalınlık Farkı",
      "3 Adet Gönyesizlik",
      "53 Adet Ebat Farkı",
      "46 Adet Deformasyon Kamburluk",
      "38 Adet Çatlak Şikayeti",
      "13 Adet Diğer",
    ],
    datasets: [
      {
        data: [20, 20, 40, 50, 43, 23, 78, 80, 55, 20, 40, 50, 43],
        backgroundColor: [
          "#53caed",
          "#6259ca",
          "#01b8ff",
          "#535c68",
          "#29ccbb",
          "#f16d75",
          "#0e0e23",

          "#fa8231",
          "#f1c40f",
          "#be2edd",
          "#6B15B6",
          "#eb4d4b",
          "#3867d6",
        ],
      },
    ],
  };

  var optionpie = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false,
    },
    animation: {
      animateScale: true,
      animateRotate: true,
    },
  };

  /* Metraj Chart*/
  var ctx6 = document.getElementById("metrajPie");
  var myPieChart6 = new Chart(ctx6, {
    type: "doughnut",
    data: metrajDataPie,
    options: optionpie,
  });

  /* Şikayet Durum Chart*/
  var ctx6 = document.getElementById("sikayetDurumu");
  var myPieChart6 = new Chart(ctx6, {
    type: "doughnut",
    data: sikayetDurumudatapie,
    options: optionpie,
  });

  /* Kategori Dağılım Chart*/
  var ctx6 = document.getElementById("kategoriDagilim");
  var myPieChart6 = new Chart(ctx6, {
    type: "doughnut",
    data: kategoriDagilimDataPie,
    options: optionpie,
  });

  /* Şikayet Dağılım Chart*/
  var ctx6 = document.getElementById("sikayetDagilim");
  var myPieChart6 = new Chart(ctx6, {
    type: "doughnut",
    data: sikayetDagilimDataPie,
    options: optionpie,
  });

  /* Pie Chart*/
  var ctx7 = document.getElementById("chartDonut");
  var myPieChart7 = new Chart(ctx7, {
    type: "pie",
    data: datapie,
    options: optionpie,
  });

  /* Radar chart*/
  var ctx = document.getElementById("chartRadar");
  var myChart = new Chart(ctx, {
    type: "radar",
    data: {
      labels: [
        ["Eating", "Dinner"],
        ["Drinking", "Water"],
        "Sleeping",
        ["Designing", "Graphics"],
        "Coding",
        "Cycling",
        "Running",
      ],
      datasets: [
        {
          label: "Data1",
          data: [65, 59, 66, 45, 56, 55, 40],
          borderColor: "rgba(113, 76, 190, 0.9)",
          borderWidth: "1",
          backgroundColor: "rgba(113, 76, 190, 0.5)",
        },
        {
          label: "Data2",
          data: [28, 12, 40, 19, 63, 27, 87],
          borderColor: "rgba(235, 111, 51,0.8)",
          borderWidth: "1",
          backgroundColor: "rgba(235, 111, 51,0.4)",
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        display: false,
      },
      scale: {
        angleLines: { color: "#77778e" },
        gridLines: {
          color: "rgba(119, 119, 142, 0.2)",
        },
        ticks: {
          beginAtZero: true,
        },
        pointLabels: {
          fontColor: "#77778e",
        },
      },
    },
  });

  /* polar chart */
  var ctx = document.getElementById("chartPolar");
  var myChart = new Chart(ctx, {
    type: "polarArea",
    data: {
      datasets: [
        {
          data: [18, 15, 9, 6, 19],
          backgroundColor: [
            "#6259ca",
            "#53caed",
            "#01b8ff",
            "#f16d75",
            "#29ccbb",
          ],
          hoverBackgroundColor: [
            "#6259ca",
            "#53caed",
            "#01b8ff",
            "#f16d75",
            "#29ccbb",
          ],
          borderColor: "transparent",
        },
      ],
      labels: ["Data1", "Data2", "Data3", "Data4"],
    },
    options: {
      scale: {
        gridLines: {
          color: "rgba(119, 119, 142, 0.2)",
        },
      },
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        labels: {
          fontColor: "#77778e",
        },
      },
    },
  });
});
 /* Gainfulness */
     // var ctx = document.getElementById("Gainfulness").getContext("2d");
     // var myChart = new Chart(ctx, {
     //   type: "bar",
     //   data: {
     //     labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug","Sep","Oct","Nov","Dec"],
     //     datasets: [
     //       {
     //         label: "Gainfulness",
     //         data: [200, 450, 290, 367, 256, 543, 345, 290, 367, 256, 543, 345],
     //         borderWidth: 2,
     //         backgroundColor: "#9877f9",
     //         borderColor: "#9877f9",
     //         borderWidth: 2.0,
     //         pointBackgroundColor: "#ffffff",
     //       },
     //     ],
     //   },
     //   options: {
     //     responsive: true,
     //     maintainAspectRatio: false,
     //     legend: {
     //       display: true,
     //     },
     //     scales: {
     //       yAxes: [
     //         {
     //           ticks: {
     //             beginAtZero: true,
     //             stepSize: 150,
     //             fontColor: "#77778e",
     //           },
     //           gridLines: {
     //             color: "rgba(119, 119, 142, 0.2)",
     //           },
     //         },
     //       ],
     //       xAxes: [
     //         {
     //           ticks: {
     //             display: true,
     //             fontColor: "#77778e",
     //           },
     //           gridLines: {
     //             display: false,
     //             color: "rgba(119, 119, 142, 0.2)",
     //           },
     //         },
     //       ],
     //     },
     //     legend: {
     //       labels: {
     //         fontColor: "#77778e",
     //       },
     //     },
     //   },
     // });
/*Goals */
     // var ctx = document.getElementById("Goals").getContext("2d");
     // var myChart = new Chart(ctx, {
     //   type: "line",
     //   data: {
     //     labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug","Sep","Oct","Nov","Dec"],
     //     datasets: [
     //       {
     //         label: "Goals",
     //         data: [300, 450, 290, 367, 256, 543, 345, 290, 367, 256, 543, 345],
     //         borderWidth: 2,
     //         backgroundColor: "transparent",
     //         borderColor: "#6259ca",
     //         borderWidth: 3,
     //         pointBackgroundColor: "#ffffff",
     //         pointRadius: 2,
     //       },
     //     ],
     //   },
     //   options: {
     //     responsive: true,
     //     maintainAspectRatio: false,
     //     scales: {
     //       xAxes: [
     //         {
     //           ticks: {
     //             fontColor: "#77778e",
     //           },
     //           display: true,
     //           gridLines: {
     //             color: "rgba(119, 119, 142, 0.2)",
     //           },
     //         },
     //       ],
     //       yAxes: [
     //         {
     //           ticks: {
     //             fontColor: "#77778e",
     //           },
     //           display: true,
     //           gridLines: {
     //             color: "rgba(119, 119, 142, 0.2)",
     //           },
     //           scaleLabel: {
     //             display: false,
     //             labelString: "Thousands",
     //             fontColor: "rgba(119, 119, 142, 0.2)",
     //           },
     //         },
     //       ],
     //     },
     //     legend: {
     //       labels: {
     //         fontColor: "#77778e",
     //       },
     //     },
     //   },
     // });