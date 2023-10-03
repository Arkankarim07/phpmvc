$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#formModalLabel").html("Tambah data mahasiswa");
    $(".modal-footer button[type=submit").html("Tambah data");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#formModalLabel").html("Ubah data mahasiswa");
    $(".modal-footer button[type=submit").html("ubah data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/phpmvc/public/mahasiswa/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/phpmvc/public/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#nis").val(data.nis);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});

$(function () {
  $(".tombolTambahDataGuru").on("click", function () {
    $("#formModalLabelGuru").html("Tambah Data guru");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#guru").val("");
  });

  $(".tampilModalUbahGuru").on("click", function () {
    $("#formModalLabelGuru").html("Ubah Data guru");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/phpmvc/public/guru/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/phpmvc/public/guru/getubah",
      data: {
        id: id,
      },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#guru").val(data.guru);
        $("#id").val(data.id);
      },
    });
  });
});

// JURUSAN
$(function () {
  $(".tombolTambahDataJurusan").on("click", function () {
    $("#formModalLabelJurusan").html("Tambah Data jurusan");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#jurusan").val("");
  });

  $(".tampilModalUbahJurusan").on("click", function () {
    $("#formModalLabelJurusan").html("Ubah Data jurusan");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/phpmvc/public/jurusan/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/phpmvc/public/jurusan/getubah",
      data: {
        id: id,
      },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
