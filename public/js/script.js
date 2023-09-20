$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#formModalLabel").html("Tambah data mahasiswa");
    $(".modal-footer button[type=submit").html("Tambah data");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#formModalLabel").html("Ubah data mahasiswa");
    $(".modal-footer button[type=submit").html("ubah data");
    $(".modal-body form").attr("action", "http://localhost/phpmvc/public/mahasiswa/ubah"
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
