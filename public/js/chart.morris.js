$(function () {
  "use strict";

  /* Morris Chart1*/
  var morrisData = [
    {
      y: "5-10 Puan",
      a: 100,
    },
    {
      y: "10-15 Puan",
      a: 75,
    },
    {
      y: "15-20 Puan",
      a: 50,
    },
    {
      y: "20-25 Puan",
      a: 75,
    },
    {
      y: "25-30 Puan",
      a: 50,
    },
  ];

  var morrisData2 = [
    {
      y: "2006",
      a: 100,
      b: 90,
      c: 80,
    },
    {
      y: "2007",
      a: 75,
      b: 65,
      c: 75,
    },
    {
      y: "2008",
      a: 50,
      b: 40,
      c: 45,
    },
    {
      y: "2009",
      a: 75,
      b: 65,
      c: 85,
    },
    {
      y: "2010",
      a: 100,
      b: 90,
      c: 80,
    },
    {
      y: "2011",
      a: 75,
      b: 65,
      c: 75,
    },
    {
      y: "2012",
      a: 50,
      b: 40,
      c: 45,
    },
    {
      y: "2013",
      a: 75,
      b: 65,
      c: 85,
    },
  ];

  /* Morris Chart1*/
  /* Morris Chart3*/
  new Morris.Bar({
    element: "anketBazindaDagilim",
    data: morrisData,
    xkey: "y",
    ykeys: ["a"],
    labels: ["Durum "],
    barColors: ["#6b15b6"],
    stacked: true,
    gridTextSize: 11,
    hideHover: "auto",
    resize: true,
  });
  new Morris.Bar({
    element: "morrisBar1",
    data: morrisData,
    xkey: "y",
    ykeys: ["a", "b"],
    labels: ["Durum", ""],
    barColors: ["#6259ca", "#53caed"],
    gridTextSize: 11,
    hideHover: "auto",
    resize: true,
  });

  /* Morris Chart2*/
  new Morris.Bar({
    element: "morrisBar2",
    data: morrisData2,
    xkey: "y",
    ykeys: ["a", "b", "c"],
    labels: ["Series A", "Series B", "Series C"],
    barColors: ["#6259ca", "#53caed", "#01b8ff"],
    gridTextSize: 11,
    hideHover: "auto",
    resize: true,
  });

  new Morris.Bar({
    element: "morrisBar3",
    data: morrisData,
    xkey: "y",
    ykeys: ["a", "b"],
    labels: ["Series A", "Series B"],
    barColors: ["#6259ca", "#53caed"],
    stacked: true,
    gridTextSize: 11,
    hideHover: "auto",
    resize: true,
  });
  new Morris.Bar({
    element: "morrisBar4",
    data: morrisData2,
    xkey: "y",
    ykeys: ["a", "b", "c"],
    labels: ["Series A", "Series B", "Series C"],
    barColors: ["#6259ca", "#53caed", "#01b8ff"],
    stacked: true,
    gridTextSize: 11,
    hideHover: "auto",
    resize: true,
  });
  new Morris.Line({
    element: "morrisLine1",
    data: [
      {
        y: "2006",
        a: 20,
        b: 10,
      },
      {
        y: "2007",
        a: 30,
        b: 15,
      },
      {
        y: "2008",
        a: 60,
        b: 40,
      },
      {
        y: "2009",
        a: 40,
        b: 25,
      },
      {
        y: "2010",
        a: 30,
        b: 15,
      },
      {
        y: "2011",
        a: 45,
        b: 20,
      },
      {
        y: "2012",
        a: 60,
        b: 40,
      },
    ],
    xkey: "y",
    ykeys: ["a", "b"],
    labels: ["Series A", "Series B"],
    lineColors: ["#6259ca", "#53caed"],
    lineWidth: 1,
    ymax: "auto 100",
    gridTextSize: 11,
    hideHover: "auto",
    resize: true,
  });
  new Morris.Line({
    element: "morrisLine2",
    data: [
      {
        y: "2006",
        a: 20,
        b: 10,
        c: 40,
      },
      {
        y: "2007",
        a: 30,
        b: 15,
        c: 45,
      },
      {
        y: "2008",
        a: 50,
        b: 40,
        c: 65,
      },
      {
        y: "2009",
        a: 40,
        b: 25,
        c: 55,
      },
      {
        y: "2010",
        a: 30,
        b: 15,
        c: 45,
      },
      {
        y: "2011",
        a: 45,
        b: 20,
        c: 65,
      },
      {
        y: "2012",
        a: 60,
        b: 40,
        c: 70,
      },
    ],
    xkey: "y",
    ykeys: ["a", "b", "c"],
    labels: ["Series A", "Series B", "Series C"],
    lineColors: ["#6259ca", "#53caed", "#01b8ff"],
    lineWidth: 1,
    ymax: "auto 100",
    gridTextSize: 11,
    hideHover: "auto",
    resize: true,
  });
  new Morris.Area({
    element: "morrisArea1",
    data: [
      {
        y: "2006",
        a: 50,
        b: 40,
      },
      {
        y: "2007",
        a: 25,
        b: 15,
      },
      {
        y: "2008",
        a: 20,
        b: 40,
      },
      {
        y: "2009",
        a: 75,
        b: 65,
      },
      {
        y: "2010",
        a: 50,
        b: 40,
      },
      {
        y: "2011",
        a: 75,
        b: 65,
      },
      {
        y: "2012",
        a: 100,
        b: 90,
      },
    ],
    xkey: "y",
    ykeys: ["a", "b"],
    labels: ["Series A", "Series B"],
    lineColors: ["#6259ca", "#53caed"],
    lineWidth: 1,
    fillOpacity: 0.9,
    gridTextSize: 11,
    hideHover: "auto",
    resize: true,
  });
  new Morris.Area({
    element: "morrisArea2",
    data: [
      {
        y: "2006",
        a: 20,
        b: 10,
        c: 40,
      },
      {
        y: "2007",
        a: 30,
        b: 15,
        c: 45,
      },
      {
        y: "2008",
        a: 50,
        b: 40,
        c: 65,
      },
      {
        y: "2009",
        a: 40,
        b: 25,
        c: 55,
      },
      {
        y: "2010",
        a: 30,
        b: 15,
        c: 45,
      },
      {
        y: "2011",
        a: 45,
        b: 20,
        c: 65,
      },
      {
        y: "2012",
        a: 60,
        b: 40,
        c: 70,
      },
    ],
    xkey: "y",
    ykeys: ["a", "b", "c"],
    labels: ["Series A", "Series B", "Series C"],
    lineColors: ["#6259ca", "#53caed", "#01b8ff"],
    lineWidth: 1,
    fillOpacity: 0.9,
    gridTextSize: 11,
    hideHover: "auto",
    resize: true,
  });

  new Morris.Donut({
    element: "morrisDonut2",
    data: [
      {
        label: "Men",
        value: 12,
      },
      {
        label: "Women",
        value: 30,
      },
      {
        label: "Kids",
        value: 20,
      },
      {
        label: "Infant",
        value: 25,
      },
    ],
    labelColor: "#77778e",
    colors: ["#6259ca", "#53caed", "#01b8ff", "#f16d75"],
    resize: true,
  });
});

new Morris.Donut({
  element: "metrajBazindaDagilim",
  data: [
    { label: "Kabul Edilen Metraj", value: 35 },
    { label: "Red Edilen Metraj", value: 65 },
  ],
  colors: ["#f16d75", "#6259ca"],
  labelColor: "#77778e",
  resize: true,
});
// new Morris.Donut({
//   element: "sikayetDurumuBazindaDagilim",
//   data: [
//     { label: "Tamamlandı", value: 15 },
//     { label: "Rapor onayı bekliyor", value: 15 },
//     { label: "Yerinde inceleme bekliyor", value: 15 },
//     { label: "İşlem yapılmadı", value: 15 },
//     { label: "Rapor hazırlanıyor", value: 15 },
//     { label: "Numune sonucu bekleniyor", value: 15 },
//     { label: "Müşeri arandı", value: 15 },
//   ],
//   colors: ["#f16d75", "#6259ca"],
//   labelColor: "#77778e",
//   resize: true,
// });

new Morris.Donut({
  element: "kategoriBazindaDagilim",
  data: [
    { label: "Şikayet/Tedarik", value: 15 },
    { label: "Şikayet/Ürün", value: 15 },
  ],
  colors: ["#f16d75", "#6259ca"],
  labelColor: "#77778e",
  resize: true,
});

new Morris.Donut({
  element: "sikayetBazindaDagilim",
  data: [
    { label: "", value: 15 },
    { label: "Şikayet/Ürün", value: 15 },
  ],
  colors: ["#6b15b6", "#6259ca"],
  labelColor: "#77778e",
  resize: true,
});
