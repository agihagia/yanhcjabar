<table id="listprovider" class="table table-striped dt-responsive " style="border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Provider</th>
            <th>Layanan</th>
            <th>Type</th>
            <th>Kota</th>
            <th>Alamat</th>
        </tr>
    </thead>


    <tbody>
        <?php $nomor = 0;
        foreach ($list as $data) :
            $nomor++; ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= esc($data['nama_provider']) ?></td>
                <td><?= esc($data['Layanan']) ?></td>
                <td><?= esc($data['provider_type']) ?></td>
                <td><?= esc($data['kota']) ?></td>
                <td><?= esc($data['alamat']) ?></td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('#listprovider').DataTable({
            "destroy": true,
            "iDisplayLength": 50,
            "lengthMenu": [
                [50, 100, -1],
                [50, 100, "All"]
            ],
            responsive: {
                details: true
            },
            dom: "<'row'<'col-sm-3'l><'col-sm-3 text-center'B><'col-sm-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-3'i><'col-sm-9'p>>",
            buttons: [{
                    extend: "copy"
                },
                {
                    extend: "excel"
                },
            ]
        });
    });
</script>