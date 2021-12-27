<table class="table table-striped">
    <thead class="thead-light">
        <tr class="bg_tr">
            <th scope="col">Id</th>
            <th scope="col">Mã tài khoản</th>
            <th scope="col">Tên người đặt</th>
            <th scope="col">SDT người đặt</th>
            <th width="150px" scope="col">Ngày đặt</th>
            <th scope="col">Số tiền thanh toán</th>
            <th scope="col">Trạng thái</th>
            <th width="150px" scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($putPitchs as $key => $putPitch)
        <tr>
            <td>{{ $key +1 }}</td>
            <td>{{ $putPitch->ma_tk }}</td>
            <td>{{ $putPitch->ten_nguoi_dat }}</td>
            <td>{{ $putPitch->sdt_nguoi_dat }}</td>
            <td>{{ $putPitch->ngay_dat }}</td>
            <td>{{ number_format($putPitch->so_tien_thanh_toan) }} VND</td>
            @foreach($statusPutPitchs as $statusPutPitch)
                @if($statusPutPitch['id'] == $putPitch->ma_trang_thai)
                    @if($statusPutPitch['id'] == 2)
                        <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm badge-success">{{ $statusPutPitch['ten_trang_thai'] }} </span>
                        </td>
                    @elseif($statusPutPitch['id'] == 1)
                        <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm badge-warning">{{ $statusPutPitch['ten_trang_thai'] }} </span>
                        </td>
                    @endif
                @endif
            @endforeach
            <td>
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.putPitch.edit', ['id'=> $putPitch->id]) }}" aria-expanded="false">
                  Sửa<i style="font-size: 25px; padding-right: 5px;" class="mdi mdi-account-edit"></i>
                </a>
                <a class="sidebar-link waves-effect waves-dark sidebar-link" style="color: red" href="{{ route('admin.putPitch.delete', ['id'=> $putPitch->id]) }}" aria-expanded="false"
                onclick="return confirm('Ban co muon xoa khong?')">
                Xóa<i style="font-size: 25px;" class="mdi mdi-delete"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="pagination justify-content-center">
    {!! $putPitchs->links() !!}
</div>