<h1>Absen</h1>
<form action="/attendance" method="post" enctype="multipart/form-data">
    @csrf
    <label for="shift_time">Pilih shift:</label>
    <select id="shift_time" name="shift_time" onchange="checkShiftTime()">
        <option value="8:00">8:00-11:00</option>
        <option value="11:00">11:00-14:00</option>
        <option value="14:00">14:00-17:00</option>
    </select>
    <br/>

    <input type="hidden" id="user_id" name="user_id" value="{{auth()->user()->id}}"/>

    <label for="photo">Bukti Foto</label>
    <input type="file" name="photo" required/>
    <br/>

    <button type="submit" id="submit_button">Submit</button>
</form>
