<body>
    <div class="main-content-inner">
        <div class="row">
            <!-- Progress Table start -->
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card_title text-center">Data Seluruh Jurnal</h4>
                                <div class="single-table">
                                    <br>
                                <div class="table-responsive">
                                    <br>
                                    <table class="table text-center table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;" border="1px">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Siswa</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Status Jurnal</th>
                                            <th scope="col">Pesan Jika Ditolak</th>
                                            <th scope="col">Tanggal</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                        @foreach ($data as $row)
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>{{ $row->namasiswa->namasiswa }}</td>
                                            <td>
                                                <a class="image-popup" href="{{ asset('fotodudi/' . $row->foto) }}">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ asset('fotodudi/' . $row->foto) }}" alt=""
                                                    style="width: 40px">
                                                </a>
                                            </td>
                                            <td>{{ $row->judul }}</td>
                                            <td class="td-ellipsis">{!! $row->deskripsi !!}</td>
                                                @if ($row->statusjurnal == 'Telah Disetujui')
                                                <td>
                                                    <span class="badge badge-success badge-success ">Telah Disetujui</span>
                                                </td>
                                                @elseif ($row->statusjurnal == 'Menunggu Persetujuan')
                                                <td>
                                                    <span class="badge badge-success badge-warning ">Menunggu Persetujuan</span>
                                                </td>
                                                @elseif ($row->statusjurnal == 'Jurnal Ditolak')
                                                <td>
                                                    <span class="badge badge-success badge-danger ">Jurnal Ditolak</span>
                                                </td>
                                                @endif
                                                <td>{{ $row->pesanjurnal}}</td>
                                                <td>{{ $row->created_at}}</td>
                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->
                </div>
            </div>
            <script type="text/javascript">
                    window.print();
            </script>
        </body>

