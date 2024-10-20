function getJenisKamar(is_value = null) {
    var id = $("#Jenis_Kamar").val();
    if (id) {
        $.ajax({
            url: `/Room/display/{id}/getJenisKamar`,
            method: "get",
            dataType: "json",
            success: async function (response) {
                var html = `<option>--Silahkan Pilih Jenis Kamar--</option>`;
                response.data.forEach(role => {
                    selected = '';
                    if (is_value) {
                        if (jenis_kamar.Jenis_Kamar == is_value) {
                            selected = 'selected'
                        }
                    }
                    html += `<option ${selected} value="${jenis_kamar.id}">${jenis_kamar.Jenis_Kamar}</option>`;
                })
                $("#Jenis_Kamar").html(html)
            },
            error: function (err) {
                console.log(err);
            }
        });
    }
}

