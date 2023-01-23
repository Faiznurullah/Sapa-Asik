<!DOCTYPE html>
<html>
<head>
    <title>Data Aspirasi</title>
    <link rel="stylesheet" type="text/css">
</head>
<style>

.tabel1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #f2f5f7;
    margin-top: 20px;
}
 
.tabel1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}
 
.tabel1, th, td {
    padding: 10px 20px;
    text-align: left;
}
 
.tabel1 tr:hover {
    background-color: #f5f5f5;
}
 
.tabel1 tr:nth-child(even) {
    background-color: #f2f2f2;
}

</style>
<body>

    <center><h1>Data Aspirasi</h1></center>

    <table class="tabel1">
          <tr>
            <th scope="col" width="20%">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Account-Id</th>
            <th scope="col">Tipe</th>
            <th scope="col">Status</th>
            <th scope="col">Tanggal</th>
          </tr>
         @php $i=1 @endphp
         @foreach($aspirasi as $row)
          <tr class="mt-2">
            <td width="20%">{{ $i++ }}</td>
            <td>{{ $row->name  }}</td>
            <td>{{ 'Id-'.$row->name_id  }}</td>
            <td>{{ $row->tipe  }}</td>
            <td>
                @if($row->view == '1')
                menunggu tanggapan 
                @elseif($row->view == '2')
                sudah ditanggapi 
                @endif  
            </td>
            {{-- <td>{{ date('D, d-m-Y, H:i', $row->created_at) }}</td> --}}
            <td>{{ $row->created_at }}</td>
          </tr>
          @endforeach
   
      </table>


</div>



</body>
</html>





 
