<h1>rekap absensi</h1>
<a href="/attendance/create">Absen</a>

<form id="filter-form" method="GET" action="/attendance">
    <label for="date">Tanggal Absensi</label>
    <input type="date" id="date" name="date" value="{{$date}}" onchange="document.getElementById('filter-form').submit();"/>
</form>

<table border='1'>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Shift</th>
        <th>Absen</th>
        <th>Bukti</th>
    </tr>
    @foreach($attendances as $attendance)
    <tr>
        <td>{{$attendance->user->nim}}</td>
        <td>{{$attendance->user->name}}</td>
        <td>{{$attendance->shift_time}}</td>
        <td style="color: {{$attendance->status = 'late' ? 'red' : 'black'}};">{{$attendance->absen_time}}</td>
        <td><img src="{{asset($attendance->photo_url)}}" style="padding: 10px; max-width: 200px; max-height: 200px;"/></td>
    </tr>
    @endforeach
</table>
